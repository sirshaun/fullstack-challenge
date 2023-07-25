<?php

namespace Tests\Stubs\HttpResponses;

class OpenWeatherApi
{
    public static function current(): array
    {
        return [
            'coord' => [
                'lon' => -22.1109,
                'lat' => 45.1932,
            ],
            'weather' => [
                0 => [
                    'id' => 804,
                    'main' => 'Clouds',
                    'description' => 'overcast clouds',
                    'icon' => '04n',
                ],
            ],
            'base' => 'stations',
            'main' => [
                'temp' => 290.57,
                'feels_like' => 290.51,
                'temp_min' => 290.57,
                'temp_max' => 290.57,
                'pressure' => 1024,
                'humidity' => 82,
                'sea_level' => 1024,
                'grnd_level' => 1024,
            ],
            'visibility' => 10000,
            'wind' => [
                'speed' => 6.26,
                'deg' => 347,
                'gust' => 6.94,
            ],
            'clouds' => [
                'all' => 100,
            ],
            'dt' => 1690173016,
            'sys' => [
                'sunrise' => 1690178627,
                'sunset' => 1690232746,
            ],
            'timezone' => -3600,
            'id' => 0,
            'name' => '',
            'cod' => 200,
        ];
    }

    public static function forecast(): array
    {
        return [
            'cod' => '200',
            'message' => 0,
            'cnt' => 40,
            'list' => [
                0 => [
                    'dt' => 1690178400,
                    'main' => [
                        'temp' => 290.54,
                        'feels_like' => 290.45,
                        'temp_min' => 290.54,
                        'temp_max' => 290.62,
                        'pressure' => 1023,
                        'sea_level' => 1023,
                        'grnd_level' => 1024,
                        'humidity' => 81,
                        'temp_kf' => -0.08,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 500,
                            'main' => 'Rain',
                            'description' => 'light rain',
                            'icon' => '10n',
                        ],
                    ],
                    'clouds' => [
                        'all' => 100,
                    ],
                    'wind' => [
                        'speed' => 6.26,
                        'deg' => 348,
                        'gust' => 7,
                    ],
                    'visibility' => 10000,
                    'pop' => 0.32,
                    'rain' => [
                        '3h' => 0.26,
                    ],
                    'sys' => [
                        'pod' => 'n',
                    ],
                    'dt_txt' => '2023-07-24 06:00:00',
                ],
                1 => [
                    'dt' => 1690189200,
                    'main' => [
                        'temp' => 290.85,
                        'feels_like' => 290.76,
                        'temp_min' => 290.85,
                        'temp_max' => 291.02,
                        'pressure' => 1024,
                        'sea_level' => 1024,
                        'grnd_level' => 1025,
                        'humidity' => 80,
                        'temp_kf' => -0.17,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 500,
                            'main' => 'Rain',
                            'description' => 'light rain',
                            'icon' => '10d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 100,
                    ],
                    'wind' => [
                        'speed' => 6.13,
                        'deg' => 350,
                        'gust' => 6.94,
                    ],
                    'visibility' => 10000,
                    'pop' => 0.34,
                    'rain' => [
                        '3h' => 0.28,
                    ],
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-24 09:00:00',
                ],
                2 => [
                    'dt' => 1690200000,
                    'main' => [
                        'temp' => 291.17,
                        'feels_like' => 291.04,
                        'temp_min' => 291.17,
                        'temp_max' => 291.17,
                        'pressure' => 1026,
                        'sea_level' => 1026,
                        'grnd_level' => 1026,
                        'humidity' => 77,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 500,
                            'main' => 'Rain',
                            'description' => 'light rain',
                            'icon' => '10d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 100,
                    ],
                    'wind' => [
                        'speed' => 5.67,
                        'deg' => 351,
                        'gust' => 6.21,
                    ],
                    'visibility' => 10000,
                    'pop' => 0.2,
                    'rain' => [
                        '3h' => 0.13,
                    ],
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-24 12:00:00',
                ],
                3 => [
                    'dt' => 1690210800,
                    'main' => [
                        'temp' => 291.3,
                        'feels_like' => 291.18,
                        'temp_min' => 291.3,
                        'temp_max' => 291.3,
                        'pressure' => 1026,
                        'sea_level' => 1026,
                        'grnd_level' => 1026,
                        'humidity' => 77,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 803,
                            'main' => 'Clouds',
                            'description' => 'broken clouds',
                            'icon' => '04d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 84,
                    ],
                    'wind' => [
                        'speed' => 4.91,
                        'deg' => 351,
                        'gust' => 5.26,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-24 15:00:00',
                ],
                4 => [
                    'dt' => 1690221600,
                    'main' => [
                        'temp' => 291.15,
                        'feels_like' => 291.07,
                        'temp_min' => 291.15,
                        'temp_max' => 291.15,
                        'pressure' => 1026,
                        'sea_level' => 1026,
                        'grnd_level' => 1026,
                        'humidity' => 79,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 803,
                            'main' => 'Clouds',
                            'description' => 'broken clouds',
                            'icon' => '04d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 58,
                    ],
                    'wind' => [
                        'speed' => 4.76,
                        'deg' => 355,
                        'gust' => 4.84,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-24 18:00:00',
                ],
                5 => [
                    'dt' => 1690232400,
                    'main' => [
                        'temp' => 290.93,
                        'feels_like' => 290.83,
                        'temp_min' => 290.93,
                        'temp_max' => 290.93,
                        'pressure' => 1026,
                        'sea_level' => 1026,
                        'grnd_level' => 1026,
                        'humidity' => 79,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 800,
                            'main' => 'Clear',
                            'description' => 'clear sky',
                            'icon' => '01d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 0,
                    ],
                    'wind' => [
                        'speed' => 3.81,
                        'deg' => 334,
                        'gust' => 4.2,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-24 21:00:00',
                ],
                6 => [
                    'dt' => 1690243200,
                    'main' => [
                        'temp' => 290.78,
                        'feels_like' => 290.71,
                        'temp_min' => 290.78,
                        'temp_max' => 290.78,
                        'pressure' => 1026,
                        'sea_level' => 1026,
                        'grnd_level' => 1026,
                        'humidity' => 81,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 800,
                            'main' => 'Clear',
                            'description' => 'clear sky',
                            'icon' => '01n',
                        ],
                    ],
                    'clouds' => [
                        'all' => 0,
                    ],
                    'wind' => [
                        'speed' => 3.81,
                        'deg' => 320,
                        'gust' => 4.23,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'n',
                    ],
                    'dt_txt' => '2023-07-25 00:00:00',
                ],
                7 => [
                    'dt' => 1690254000,
                    'main' => [
                        'temp' => 290.52,
                        'feels_like' => 290.48,
                        'temp_min' => 290.52,
                        'temp_max' => 290.52,
                        'pressure' => 1025,
                        'sea_level' => 1025,
                        'grnd_level' => 1025,
                        'humidity' => 83,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 800,
                            'main' => 'Clear',
                            'description' => 'clear sky',
                            'icon' => '01n',
                        ],
                    ],
                    'clouds' => [
                        'all' => 0,
                    ],
                    'wind' => [
                        'speed' => 4.28,
                        'deg' => 298,
                        'gust' => 4.72,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'n',
                    ],
                    'dt_txt' => '2023-07-25 03:00:00',
                ],
                8 => [
                    'dt' => 1690264800,
                    'main' => [
                        'temp' => 290.52,
                        'feels_like' => 290.45,
                        'temp_min' => 290.52,
                        'temp_max' => 290.52,
                        'pressure' => 1025,
                        'sea_level' => 1025,
                        'grnd_level' => 1025,
                        'humidity' => 82,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 800,
                            'main' => 'Clear',
                            'description' => 'clear sky',
                            'icon' => '01n',
                        ],
                    ],
                    'clouds' => [
                        'all' => 0,
                    ],
                    'wind' => [
                        'speed' => 4.33,
                        'deg' => 293,
                        'gust' => 4.83,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'n',
                    ],
                    'dt_txt' => '2023-07-25 06:00:00',
                ],
                9 => [
                    'dt' => 1690275600,
                    'main' => [
                        'temp' => 290.76,
                        'feels_like' => 290.69,
                        'temp_min' => 290.76,
                        'temp_max' => 290.76,
                        'pressure' => 1025,
                        'sea_level' => 1025,
                        'grnd_level' => 1025,
                        'humidity' => 81,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 800,
                            'main' => 'Clear',
                            'description' => 'clear sky',
                            'icon' => '01d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 1,
                    ],
                    'wind' => [
                        'speed' => 4.6,
                        'deg' => 272,
                        'gust' => 5.16,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-25 09:00:00',
                ],
                10 => [
                    'dt' => 1690286400,
                    'main' => [
                        'temp' => 291.03,
                        'feels_like' => 290.99,
                        'temp_min' => 291.03,
                        'temp_max' => 291.03,
                        'pressure' => 1025,
                        'sea_level' => 1025,
                        'grnd_level' => 1025,
                        'humidity' => 81,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 800,
                            'main' => 'Clear',
                            'description' => 'clear sky',
                            'icon' => '01d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 1,
                    ],
                    'wind' => [
                        'speed' => 5.56,
                        'deg' => 251,
                        'gust' => 6.29,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-25 12:00:00',
                ],
                11 => [
                    'dt' => 1690297200,
                    'main' => [
                        'temp' => 291.39,
                        'feels_like' => 291.38,
                        'temp_min' => 291.39,
                        'temp_max' => 291.39,
                        'pressure' => 1023,
                        'sea_level' => 1023,
                        'grnd_level' => 1023,
                        'humidity' => 81,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 800,
                            'main' => 'Clear',
                            'description' => 'clear sky',
                            'icon' => '01d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 1,
                    ],
                    'wind' => [
                        'speed' => 6.59,
                        'deg' => 246,
                        'gust' => 7.46,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-25 15:00:00',
                ],
                12 => [
                    'dt' => 1690308000,
                    'main' => [
                        'temp' => 291.7,
                        'feels_like' => 291.78,
                        'temp_min' => 291.7,
                        'temp_max' => 291.7,
                        'pressure' => 1022,
                        'sea_level' => 1022,
                        'grnd_level' => 1022,
                        'humidity' => 83,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 800,
                            'main' => 'Clear',
                            'description' => 'clear sky',
                            'icon' => '01d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 6,
                    ],
                    'wind' => [
                        'speed' => 7.46,
                        'deg' => 241,
                        'gust' => 8.98,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-25 18:00:00',
                ],
                13 => [
                    'dt' => 1690318800,
                    'main' => [
                        'temp' => 291.56,
                        'feels_like' => 291.7,
                        'temp_min' => 291.56,
                        'temp_max' => 291.56,
                        'pressure' => 1022,
                        'sea_level' => 1022,
                        'grnd_level' => 1022,
                        'humidity' => 86,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 800,
                            'main' => 'Clear',
                            'description' => 'clear sky',
                            'icon' => '01d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 1,
                    ],
                    'wind' => [
                        'speed' => 8.58,
                        'deg' => 236,
                        'gust' => 11.15,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-25 21:00:00',
                ],
                14 => [
                    'dt' => 1690329600,
                    'main' => [
                        'temp' => 291.47,
                        'feels_like' => 291.66,
                        'temp_min' => 291.47,
                        'temp_max' => 291.47,
                        'pressure' => 1021,
                        'sea_level' => 1021,
                        'grnd_level' => 1021,
                        'humidity' => 88,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 800,
                            'main' => 'Clear',
                            'description' => 'clear sky',
                            'icon' => '01n',
                        ],
                    ],
                    'clouds' => [
                        'all' => 1,
                    ],
                    'wind' => [
                        'speed' => 9.95,
                        'deg' => 229,
                        'gust' => 12.56,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'n',
                    ],
                    'dt_txt' => '2023-07-26 00:00:00',
                ],
                15 => [
                    'dt' => 1690340400,
                    'main' => [
                        'temp' => 291.66,
                        'feels_like' => 291.92,
                        'temp_min' => 291.66,
                        'temp_max' => 291.66,
                        'pressure' => 1018,
                        'sea_level' => 1018,
                        'grnd_level' => 1018,
                        'humidity' => 90,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 801,
                            'main' => 'Clouds',
                            'description' => 'few clouds',
                            'icon' => '02n',
                        ],
                    ],
                    'clouds' => [
                        'all' => 12,
                    ],
                    'wind' => [
                        'speed' => 10.44,
                        'deg' => 228,
                        'gust' => 13.97,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'n',
                    ],
                    'dt_txt' => '2023-07-26 03:00:00',
                ],
                16 => [
                    'dt' => 1690351200,
                    'main' => [
                        'temp' => 291.88,
                        'feels_like' => 292.24,
                        'temp_min' => 291.88,
                        'temp_max' => 291.88,
                        'pressure' => 1017,
                        'sea_level' => 1017,
                        'grnd_level' => 1017,
                        'humidity' => 93,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 500,
                            'main' => 'Rain',
                            'description' => 'light rain',
                            'icon' => '10n',
                        ],
                    ],
                    'clouds' => [
                        'all' => 52,
                    ],
                    'wind' => [
                        'speed' => 11.02,
                        'deg' => 226,
                        'gust' => 15.28,
                    ],
                    'visibility' => 10000,
                    'pop' => 0.2,
                    'rain' => [
                        '3h' => 0.11,
                    ],
                    'sys' => [
                        'pod' => 'n',
                    ],
                    'dt_txt' => '2023-07-26 06:00:00',
                ],
                17 => [
                    'dt' => 1690362000,
                    'main' => [
                        'temp' => 292.21,
                        'feels_like' => 292.65,
                        'temp_min' => 292.21,
                        'temp_max' => 292.21,
                        'pressure' => 1016,
                        'sea_level' => 1016,
                        'grnd_level' => 1016,
                        'humidity' => 95,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 804,
                            'main' => 'Clouds',
                            'description' => 'overcast clouds',
                            'icon' => '04d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 100,
                    ],
                    'wind' => [
                        'speed' => 11.53,
                        'deg' => 225,
                        'gust' => 16.28,
                    ],
                    'visibility' => 10000,
                    'pop' => 0.14,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-26 09:00:00',
                ],
                18 => [
                    'dt' => 1690372800,
                    'main' => [
                        'temp' => 292.56,
                        'feels_like' => 293.09,
                        'temp_min' => 292.56,
                        'temp_max' => 292.56,
                        'pressure' => 1015,
                        'sea_level' => 1015,
                        'grnd_level' => 1015,
                        'humidity' => 97,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 804,
                            'main' => 'Clouds',
                            'description' => 'overcast clouds',
                            'icon' => '04d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 100,
                    ],
                    'wind' => [
                        'speed' => 11.94,
                        'deg' => 230,
                        'gust' => 17.17,
                    ],
                    'visibility' => 10000,
                    'pop' => 0.17,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-26 12:00:00',
                ],
                19 => [
                    'dt' => 1690383600,
                    'main' => [
                        'temp' => 292.8,
                        'feels_like' => 293.33,
                        'temp_min' => 292.8,
                        'temp_max' => 292.8,
                        'pressure' => 1014,
                        'sea_level' => 1014,
                        'grnd_level' => 1014,
                        'humidity' => 96,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 500,
                            'main' => 'Rain',
                            'description' => 'light rain',
                            'icon' => '10d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 100,
                    ],
                    'wind' => [
                        'speed' => 11.76,
                        'deg' => 233,
                        'gust' => 17.13,
                    ],
                    'visibility' => 10000,
                    'pop' => 0.61,
                    'rain' => [
                        '3h' => 1.32,
                    ],
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-26 15:00:00',
                ],
                20 => [
                    'dt' => 1690394400,
                    'main' => [
                        'temp' => 292.54,
                        'feels_like' => 293.09,
                        'temp_min' => 292.54,
                        'temp_max' => 292.54,
                        'pressure' => 1012,
                        'sea_level' => 1012,
                        'grnd_level' => 1012,
                        'humidity' => 98,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 501,
                            'main' => 'Rain',
                            'description' => 'moderate rain',
                            'icon' => '10d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 100,
                    ],
                    'wind' => [
                        'speed' => 9.46,
                        'deg' => 254,
                        'gust' => 14.76,
                    ],
                    'visibility' => 1344,
                    'pop' => 0.97,
                    'rain' => [
                        '3h' => 4.78,
                    ],
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-26 18:00:00',
                ],
                21 => [
                    'dt' => 1690405200,
                    'main' => [
                        'temp' => 292.3,
                        'feels_like' => 292.8,
                        'temp_min' => 292.3,
                        'temp_max' => 292.3,
                        'pressure' => 1013,
                        'sea_level' => 1013,
                        'grnd_level' => 1013,
                        'humidity' => 97,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 500,
                            'main' => 'Rain',
                            'description' => 'light rain',
                            'icon' => '10d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 100,
                    ],
                    'wind' => [
                        'speed' => 6.81,
                        'deg' => 276,
                        'gust' => 10.65,
                    ],
                    'visibility' => 10000,
                    'pop' => 0.53,
                    'rain' => [
                        '3h' => 0.66,
                    ],
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-26 21:00:00',
                ],
                22 => [
                    'dt' => 1690416000,
                    'main' => [
                        'temp' => 292,
                        'feels_like' => 292.21,
                        'temp_min' => 292,
                        'temp_max' => 292,
                        'pressure' => 1013,
                        'sea_level' => 1013,
                        'grnd_level' => 1013,
                        'humidity' => 87,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 804,
                            'main' => 'Clouds',
                            'description' => 'overcast clouds',
                            'icon' => '04n',
                        ],
                    ],
                    'clouds' => [
                        'all' => 100,
                    ],
                    'wind' => [
                        'speed' => 7.78,
                        'deg' => 303,
                        'gust' => 10.06,
                    ],
                    'visibility' => 10000,
                    'pop' => 0.49,
                    'sys' => [
                        'pod' => 'n',
                    ],
                    'dt_txt' => '2023-07-27 00:00:00',
                ],
                23 => [
                    'dt' => 1690426800,
                    'main' => [
                        'temp' => 291.94,
                        'feels_like' => 292.02,
                        'temp_min' => 291.94,
                        'temp_max' => 291.94,
                        'pressure' => 1013,
                        'sea_level' => 1013,
                        'grnd_level' => 1013,
                        'humidity' => 82,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 804,
                            'main' => 'Clouds',
                            'description' => 'overcast clouds',
                            'icon' => '04n',
                        ],
                    ],
                    'clouds' => [
                        'all' => 100,
                    ],
                    'wind' => [
                        'speed' => 7.48,
                        'deg' => 291,
                        'gust' => 9.92,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'n',
                    ],
                    'dt_txt' => '2023-07-27 03:00:00',
                ],
                24 => [
                    'dt' => 1690437600,
                    'main' => [
                        'temp' => 290.81,
                        'feels_like' => 290.82,
                        'temp_min' => 290.81,
                        'temp_max' => 290.81,
                        'pressure' => 1014,
                        'sea_level' => 1014,
                        'grnd_level' => 1014,
                        'humidity' => 84,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 804,
                            'main' => 'Clouds',
                            'description' => 'overcast clouds',
                            'icon' => '04n',
                        ],
                    ],
                    'clouds' => [
                        'all' => 86,
                    ],
                    'wind' => [
                        'speed' => 8.8,
                        'deg' => 318,
                        'gust' => 9.64,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'n',
                    ],
                    'dt_txt' => '2023-07-27 06:00:00',
                ],
                25 => [
                    'dt' => 1690448400,
                    'main' => [
                        'temp' => 290.53,
                        'feels_like' => 290.33,
                        'temp_min' => 290.53,
                        'temp_max' => 290.53,
                        'pressure' => 1015,
                        'sea_level' => 1015,
                        'grnd_level' => 1015,
                        'humidity' => 77,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 803,
                            'main' => 'Clouds',
                            'description' => 'broken clouds',
                            'icon' => '04d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 53,
                    ],
                    'wind' => [
                        'speed' => 8.2,
                        'deg' => 313,
                        'gust' => 8.63,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-27 09:00:00',
                ],
                26 => [
                    'dt' => 1690459200,
                    'main' => [
                        'temp' => 290.38,
                        'feels_like' => 290.14,
                        'temp_min' => 290.38,
                        'temp_max' => 290.38,
                        'pressure' => 1016,
                        'sea_level' => 1016,
                        'grnd_level' => 1016,
                        'humidity' => 76,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 803,
                            'main' => 'Clouds',
                            'description' => 'broken clouds',
                            'icon' => '04d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 75,
                    ],
                    'wind' => [
                        'speed' => 6.57,
                        'deg' => 311,
                        'gust' => 6.97,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-27 12:00:00',
                ],
                27 => [
                    'dt' => 1690470000,
                    'main' => [
                        'temp' => 290.62,
                        'feels_like' => 290.38,
                        'temp_min' => 290.62,
                        'temp_max' => 290.62,
                        'pressure' => 1016,
                        'sea_level' => 1016,
                        'grnd_level' => 1016,
                        'humidity' => 75,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 804,
                            'main' => 'Clouds',
                            'description' => 'overcast clouds',
                            'icon' => '04d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 99,
                    ],
                    'wind' => [
                        'speed' => 6.92,
                        'deg' => 301,
                        'gust' => 7.26,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-27 15:00:00',
                ],
                28 => [
                    'dt' => 1690480800,
                    'main' => [
                        'temp' => 290.66,
                        'feels_like' => 290.42,
                        'temp_min' => 290.66,
                        'temp_max' => 290.66,
                        'pressure' => 1016,
                        'sea_level' => 1016,
                        'grnd_level' => 1016,
                        'humidity' => 75,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 804,
                            'main' => 'Clouds',
                            'description' => 'overcast clouds',
                            'icon' => '04d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 99,
                    ],
                    'wind' => [
                        'speed' => 7,
                        'deg' => 296,
                        'gust' => 7.36,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-27 18:00:00',
                ],
                29 => [
                    'dt' => 1690491600,
                    'main' => [
                        'temp' => 290.63,
                        'feels_like' => 290.39,
                        'temp_min' => 290.63,
                        'temp_max' => 290.63,
                        'pressure' => 1017,
                        'sea_level' => 1017,
                        'grnd_level' => 1017,
                        'humidity' => 75,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 500,
                            'main' => 'Rain',
                            'description' => 'light rain',
                            'icon' => '10d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 100,
                    ],
                    'wind' => [
                        'speed' => 7.4,
                        'deg' => 293,
                        'gust' => 7.92,
                    ],
                    'visibility' => 10000,
                    'pop' => 0.2,
                    'rain' => [
                        '3h' => 0.11,
                    ],
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-27 21:00:00',
                ],
                30 => [
                    'dt' => 1690502400,
                    'main' => [
                        'temp' => 290.67,
                        'feels_like' => 290.51,
                        'temp_min' => 290.67,
                        'temp_max' => 290.67,
                        'pressure' => 1017,
                        'sea_level' => 1017,
                        'grnd_level' => 1017,
                        'humidity' => 78,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 804,
                            'main' => 'Clouds',
                            'description' => 'overcast clouds',
                            'icon' => '04n',
                        ],
                    ],
                    'clouds' => [
                        'all' => 100,
                    ],
                    'wind' => [
                        'speed' => 6.94,
                        'deg' => 292,
                        'gust' => 8.14,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'n',
                    ],
                    'dt_txt' => '2023-07-28 00:00:00',
                ],
                31 => [
                    'dt' => 1690513200,
                    'main' => [
                        'temp' => 290.79,
                        'feels_like' => 290.7,
                        'temp_min' => 290.79,
                        'temp_max' => 290.79,
                        'pressure' => 1016,
                        'sea_level' => 1016,
                        'grnd_level' => 1016,
                        'humidity' => 80,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 500,
                            'main' => 'Rain',
                            'description' => 'light rain',
                            'icon' => '10n',
                        ],
                    ],
                    'clouds' => [
                        'all' => 100,
                    ],
                    'wind' => [
                        'speed' => 6.78,
                        'deg' => 290,
                        'gust' => 8.47,
                    ],
                    'visibility' => 10000,
                    'pop' => 0.2,
                    'rain' => [
                        '3h' => 0.13,
                    ],
                    'sys' => [
                        'pod' => 'n',
                    ],
                    'dt_txt' => '2023-07-28 03:00:00',
                ],
                32 => [
                    'dt' => 1690524000,
                    'main' => [
                        'temp' => 290.92,
                        'feels_like' => 290.84,
                        'temp_min' => 290.92,
                        'temp_max' => 290.92,
                        'pressure' => 1015,
                        'sea_level' => 1015,
                        'grnd_level' => 1015,
                        'humidity' => 80,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 804,
                            'main' => 'Clouds',
                            'description' => 'overcast clouds',
                            'icon' => '04n',
                        ],
                    ],
                    'clouds' => [
                        'all' => 100,
                    ],
                    'wind' => [
                        'speed' => 7.38,
                        'deg' => 293,
                        'gust' => 8.85,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'n',
                    ],
                    'dt_txt' => '2023-07-28 06:00:00',
                ],
                33 => [
                    'dt' => 1690534800,
                    'main' => [
                        'temp' => 290.86,
                        'feels_like' => 290.8,
                        'temp_min' => 290.86,
                        'temp_max' => 290.86,
                        'pressure' => 1016,
                        'sea_level' => 1016,
                        'grnd_level' => 1016,
                        'humidity' => 81,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 500,
                            'main' => 'Rain',
                            'description' => 'light rain',
                            'icon' => '10d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 98,
                    ],
                    'wind' => [
                        'speed' => 6.91,
                        'deg' => 300,
                        'gust' => 9.2,
                    ],
                    'visibility' => 10000,
                    'pop' => 0.2,
                    'rain' => [
                        '3h' => 0.15,
                    ],
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-28 09:00:00',
                ],
                34 => [
                    'dt' => 1690545600,
                    'main' => [
                        'temp' => 291.3,
                        'feels_like' => 291.26,
                        'temp_min' => 291.3,
                        'temp_max' => 291.3,
                        'pressure' => 1017,
                        'sea_level' => 1017,
                        'grnd_level' => 1017,
                        'humidity' => 80,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 803,
                            'main' => 'Clouds',
                            'description' => 'broken clouds',
                            'icon' => '04d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 79,
                    ],
                    'wind' => [
                        'speed' => 5.65,
                        'deg' => 286,
                        'gust' => 7.75,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-28 12:00:00',
                ],
                35 => [
                    'dt' => 1690556400,
                    'main' => [
                        'temp' => 291.72,
                        'feels_like' => 291.8,
                        'temp_min' => 291.72,
                        'temp_max' => 291.72,
                        'pressure' => 1017,
                        'sea_level' => 1017,
                        'grnd_level' => 1017,
                        'humidity' => 83,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 802,
                            'main' => 'Clouds',
                            'description' => 'scattered clouds',
                            'icon' => '03d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 27,
                    ],
                    'wind' => [
                        'speed' => 5.76,
                        'deg' => 278,
                        'gust' => 7.75,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-28 15:00:00',
                ],
                36 => [
                    'dt' => 1690567200,
                    'main' => [
                        'temp' => 291.89,
                        'feels_like' => 292.04,
                        'temp_min' => 291.89,
                        'temp_max' => 291.89,
                        'pressure' => 1017,
                        'sea_level' => 1017,
                        'grnd_level' => 1017,
                        'humidity' => 85,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 801,
                            'main' => 'Clouds',
                            'description' => 'few clouds',
                            'icon' => '02d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 17,
                    ],
                    'wind' => [
                        'speed' => 5.21,
                        'deg' => 299,
                        'gust' => 7.36,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-28 18:00:00',
                ],
                37 => [
                    'dt' => 1690578000,
                    'main' => [
                        'temp' => 291.42,
                        'feels_like' => 291.63,
                        'temp_min' => 291.42,
                        'temp_max' => 291.42,
                        'pressure' => 1019,
                        'sea_level' => 1019,
                        'grnd_level' => 1019,
                        'humidity' => 89,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 500,
                            'main' => 'Rain',
                            'description' => 'light rain',
                            'icon' => '10d',
                        ],
                    ],
                    'clouds' => [
                        'all' => 2,
                    ],
                    'wind' => [
                        'speed' => 6.15,
                        'deg' => 319,
                        'gust' => 8.08,
                    ],
                    'visibility' => 10000,
                    'pop' => 0.2,
                    'rain' => [
                        '3h' => 0.11,
                    ],
                    'sys' => [
                        'pod' => 'd',
                    ],
                    'dt_txt' => '2023-07-28 21:00:00',
                ],
                38 => [
                    'dt' => 1690588800,
                    'main' => [
                        'temp' => 291.05,
                        'feels_like' => 291.14,
                        'temp_min' => 291.05,
                        'temp_max' => 291.05,
                        'pressure' => 1019,
                        'sea_level' => 1019,
                        'grnd_level' => 1019,
                        'humidity' => 86,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 800,
                            'main' => 'Clear',
                            'description' => 'clear sky',
                            'icon' => '01n',
                        ],
                    ],
                    'clouds' => [
                        'all' => 7,
                    ],
                    'wind' => [
                        'speed' => 4.79,
                        'deg' => 333,
                        'gust' => 6.01,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'n',
                    ],
                    'dt_txt' => '2023-07-29 00:00:00',
                ],
                39 => [
                    'dt' => 1690599600,
                    'main' => [
                        'temp' => 291.01,
                        'feels_like' => 290.99,
                        'temp_min' => 291.01,
                        'temp_max' => 291.01,
                        'pressure' => 1020,
                        'sea_level' => 1020,
                        'grnd_level' => 1020,
                        'humidity' => 82,
                        'temp_kf' => 0,
                    ],
                    'weather' => [
                        0 => [
                            'id' => 804,
                            'main' => 'Clouds',
                            'description' => 'overcast clouds',
                            'icon' => '04n',
                        ],
                    ],
                    'clouds' => [
                        'all' => 100,
                    ],
                    'wind' => [
                        'speed' => 5.55,
                        'deg' => 316,
                        'gust' => 7.07,
                    ],
                    'visibility' => 10000,
                    'pop' => 0,
                    'sys' => [
                        'pod' => 'n',
                    ],
                    'dt_txt' => '2023-07-29 03:00:00',
                ],
            ],
            'city' => [
                'id' => 0,
                'name' => '',
                'coord' => [
                    'lat' => 45.1932,
                    'lon' => -22.1109,
                ],
                'country' => '',
                'population' => 0,
                'timezone' => -3600,
                'sunrise' => 1690178627,
                'sunset' => 1690232746,
            ],
        ];
    }
}
