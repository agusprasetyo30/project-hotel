# Project Hotel

# How to install
   * `$ git clone https://github.com/agusprasetyo30/project_hotel.git`
   * `$ cd project_hotel` 
   * `$ composer install`, kalau tidak bisa cona `$ composer update`
   * copy `env.example` dan rubah menjadi `.env`, setelah itu konfigurasi database
   * `$ php artisan key:generate`
   * `$ php artisan migrate` untuk membuat **tabel**
   * `$ php artisan storage:link` untuk membuat link untuk upload gambar
   * `$ php artisan serve` jalankan program

# Routing
- ...
# Progress
   ### Minggu 1
   
   1. v0.0.1
      - Memasukan template ke file laravel
      - Konfigurasi dan desan tampilan login, Register, dan logout
      - Menambahkan controller `UserController`, `DashboardController`, `AdminController`, `CustomerController`
      - menghapus `Auth::routes()` dan membuat *custom route authentification* yang nantinya digunakan untuk mengatur manual route authentification/login
      - Menambahkan Library : 
        - `intervention/image` => untuk upload gambar/custom penyimpanan
        - `spatie/laravel-permission` => mengatur role/hak akses user
   
   ### Minggu 2
   2. v0.0.2
      - Menambahkan breadcrumb
      - Menambahkan menu <active>
      - Merubah isi dari template
   3. v0.0.3
      - Menyelesaikan Create, Update pada Pengguna View dan Controller
      - Menambahkan role `ADMIN` dan `CUSTOMER`
      - Menambahkan role di setiap role user untuk seeder
      - Menambahkan `Helpers/Helper.php` untuk helper data
         Catatan
        - Menghapus `AdminController` & `CustomerController`
        - Nantinya untuk controller di sesuaikan sesuai fungsinya
        - Route untuk admin adalah `localhost:8000/admin/.....`
   4. v0.0.4
      - Menambahkan migration untuk `facility` 
      -  Menyelesaikan Create, Update, Delete pada facility View dan Controller
   6. v0.0.5
      - Menambahkan helper `Helpers/Helper.php`
      - Menambahkan model & controller gallery
      - Menambahkan upload gambar dan CRUD untuk gallery
      - Update route untuk gallery
   7. v0.0.6
      - Menambahkan helper untuk menampilkan format rupiah
      - Menambahkan Migration, Model, Controller dan View untuk tampilan `Room`
      - Update router untuk room
      - Menambahkan relasi untuk menambahkan fasilitas ruangan dari `room` dan `facility`
      - Menambahkan view untuk menambahkan facilitas kamar/room
      - Update route untuk menambahkan fasilitas kamar/room
   8. v0.0.7
      - Membuat model, controller `transaction` untuk booking
      - Konfigurasi transaksi `booking` kamar dan `detail booked` kamar yang dipilih
      - Setelah melakukan booking, maka akan diarahkan ke halaman status pemesanan/book
   
   ### Minggu 3
   9. v0.0.8
      - Menambahkan status pemesanan
      - Install library `barryvdh/laravel-dompdf`
      - Menmabahkan print pada saat transaksi selesai pada customer