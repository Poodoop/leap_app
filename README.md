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
