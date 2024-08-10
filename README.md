## TEST CRUD LARAVEL

Pertama, akan dibuat database untuk menampung data yang akan dipakai oleh aplikasi.

![image](https://github.com/user-attachments/assets/16eb824f-733b-4f18-90f8-b99fdbea3183)

Kemudian, dibuat model-model untuk dapat mengakses database tersebut.

![image](https://github.com/user-attachments/assets/8ff30959-4a8f-40d5-ae78-3cafbe22fdb5)

![image](https://github.com/user-attachments/assets/52938b5e-6df8-4e23-b66a-f6f778433537)

![image](https://github.com/user-attachments/assets/9aaebe87-5d3f-456b-a9bf-447e3ba0fbbc)

Untuk menambahkan, menampilkan, atau memanipulasi data (CRUD), bisa menggunakan controller. Setiap role pengguna (Student atau Admin) memiliki controller yang berbeda.

Pada role Student, terdapat controller untuk kelas, yang menampilkan data kelas, dan controller pembelian yang digunakan untuk melakukan pembelian kelas. pada KelasController juga ditambahkan fitur untuk searching sesuai jadwal dari kelas yang ada.

![image](https://github.com/user-attachments/assets/9d2d6c41-0db0-464c-9d26-d140f46c21d0)

![image](https://github.com/user-attachments/assets/123f9028-b339-48a7-9457-2c53ea77ae80)

Pada role Admin, terdapat controller untuk user (pengguna), kelas, dan pembelian, masing-masing memiliki CRUD, kecuali pembelian yang memiliki Read dan Delete.

![image](https://github.com/user-attachments/assets/56f90538-caf6-40e4-bcb5-515931dc1956)

![image](https://github.com/user-attachments/assets/bd10d13e-52d6-4674-886e-f6e1ecfc56bd)

![image](https://github.com/user-attachments/assets/ffd26ccc-2b9f-4e43-971f-f36f3bafbf2c)


Di setiap controller ditambahkan route-route untuk dapat dipakai di tampilan depan aplikasi

![image](https://github.com/user-attachments/assets/397cdb1d-63c9-4221-8684-0a7d0f7ae2fb)






Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
