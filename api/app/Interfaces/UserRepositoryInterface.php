<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface UserRepositoryInterface
{
    public function users(?string $query): Collection;

    public function paginate(?string $query): LengthAwarePaginator;
}
