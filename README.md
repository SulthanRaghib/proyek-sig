## Sistem Informasi Geografis

This practicum uses Laravel 11 and Filament

## Step by step

1. install laravel `composer create-project laravel/laravel app-example`
2. edit `php.ini` enable `;extension=zip` delete `;` and it becomes like `extension=zip`
3. install filament `composer require filament/filament`
4. setup `.env` sesuaikan dengan db yang anda gunakan
5. buat `model,` `migration` dan `seeder` Provinsi dengan perintah `php artisan make:model Provinsi -ms`
6. edit `model Provinsi` tambahkan `use HasFactory; dan protected $table = 'provinsis';`
7. generate filament CRUD dengan perintah `php artisan make:filament-resource Provinsi --generate`
