<?php

namespace App\Models;

use App\Data\FetchForecastData;
use App\Jobs\FetchUserWeatherForecast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'weather'           => 'array',
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    public static function booted()
    {
        static::created(fn ($user) => FetchUserWeatherForecast::dispatchSync($user));
    }

    public function scopeFilterBy($query, ?string $term)
    {
        return $query->when(!is_null($term), function ($conditionalQuery) use ($term) {
            return $conditionalQuery->where(function ($nestedQuery) use ($term) {
                return $nestedQuery->where('name', 'like', "%{$term}%")
                    ->orWhere('email', 'like', "%{$term}%");
            });
        });
    }

    public function scopeLocations($query)
    {
        if (DB::getDriverName() === 'sqlite') {
            $raw = "latitude || ':' || longitude as location";
        } else {
            $raw = "concat(latitude, ':', longitude) as location";
        }

        return $query->selectRaw($raw);
    }

    public function forecastData(): FetchForecastData
    {
        return new FetchForecastData(
            latitude: $this->latitude,
            longitude: $this->longitude,
        );
    }


    public static function coordinates(): array
    {
        // NOTE: used to seed unique data
        $coordinates = fake()->localCoordinates();
        $locationIsTaken = self::where('latitude', $coordinates['latitude'])
            ->where('longitude', $coordinates['longitude'])
            ->exists();
        if (!$locationIsTaken) {
            return $coordinates;
        }

        return static::coordinates();
    }
}
