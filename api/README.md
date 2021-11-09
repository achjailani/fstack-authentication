# Backend (Restful API)

Projek ini menggunakan framework Lumen ( Versi Lightweight) dari Laravel Framework

## Instalasi

Untuk instalasinya sebagai berikut

-   Clone projek `git clone git@github.com:achjailani/fstack-authentication.git`
-   Masuk directory `cd fstack-authentication\api`
-   Instal required packages `composer install`
-   Copy paste file `.env.example` lalu rename menjadi `.env`
-   Konfigurasi database pada file `.env`, disini saya menggunakan MySQL
-   Migrate table `php artisan migrate` dan generate secret key `php artisan jwt:secret`
-   Untuk menjalankan `php -S localhost:8000 -t public`

### API Dokumentasi

Dokumentasi API menggunakan Insomnia [disini](https://github.com/achjailani/deliv-test/blob/develop/Insomnia_deliv_api_test.yaml)
