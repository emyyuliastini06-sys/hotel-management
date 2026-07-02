###################
Sistem Manajemen Hotel
###################

Aplikasi web untuk mengelola operasional hotel sehari-hari — mulai dari pemesanan kamar, data tamu, pembayaran, hingga laporan dalam satu sistem yang mudah digunakan

*******************
Tentang Aplikasi WEB
*******************

Sistem Manajemen Hotel ini dibuat untuk membantu pihak hotel (admin & resepsionis) mengelola kegiatan operasional secara digital, menggantikan pencatatan manual. Dengan aplikasi ini, proses check-in, pemesanan kamar, hingga pembuatan laporan menjadi lebih cepat, rapi, dan minim kesalahan.

Cocok untuk: hotel, penginapan, guest house, atau homestay skala kecil-menengah yang ingin beralih dari pencatatan manual ke sistem digital.

**************************
Fitur Utama
**************************

Login Multi-Role — akses berbeda untuk Admin, Resepsionis, dan Tamu
Dashboard — ringkasan informasi hotel secara cepat
Manajemen Kamar — kelola data kamar yang tersedia
Tipe Kamar — atur kategori dan harga kamar (Standard, Deluxe, Suite, dll.)
Pemesanan (Booking) — proses reservasi kamar oleh tamu
Data Tamu — pengelolaan informasi tamu yang menginap
Pembayaran — pencatatan transaksi pembayaran tamu
Laporan — rekap data untuk kebutuhan administrasi hotel

*******************
Teknologi yang Digunakan
*******************

Framework: CodeIgniter 3 (PHP)
Database: MySQL
Bahasa: PHP, JavaScript, HTML, CSS

************
Yang Perlu Disiapkan
************

Sebelum menjalankan aplikasi ini, pastikan perangkat sudah memiliki:

XAMPP  versi 3.0.30 / Laragon (atau web server + PHP + MySQL sejenis)
PHP versi 5.6 atau lebih baru
Composer (opsional, jika ingin mengelola dependency)

*******
Cara Menjalankan
*******

1. Clone repository ini

		git clone https://github.com/emyyuliastini06-sys/hotel-management.git

2. Pindahkan folder project ke direktori web server, contoh:

		htdocs/hotel-management   (untuk XAMPP)
		www/hotel-management      (untuk Laragon)

3. Buat database baru di phpMyAdmin dengan nama hotel_management
4. Import file database yang tersedia di:

		database/hotel_management.sql

5. Sesuaikan konfigurasi database di file application/config/database.php:

		'hostname' => 'localhost',
   'username' => 'root',
   'password' => '',
   'database' => 'hotel_management',

6.Jalankan aplikasi melalui browser:

	http://localhost/hotel-management

*********
Login Default
*********

Setelah instalasi, gunakan akun berikut untuk masuk sebagai admin:
Username : admin
Password : admin123

⚠️ Password admin tersimpan dalam bentuk terenkripsi di database (tabel users). Disarankan untuk mengganti password default setelah berhasil login demi keamanan.

***************
FAQ
***************

Apakah aplikasi ini gratis digunakan?
Ya, proyek ini open source dan bebas digunakan/dimodifikasi.

Apakah bisa dijalankan tanpa internet?
Bisa, karena aplikasi berjalan secara lokal menggunakan XAMPP/Laragon.

Bagaimana jika lupa password admin?
Password dapat direset langsung melalui database (tabel users) oleh pihak yang memiliki akses ke phpMyAdmin.

***************
Lisenssi
***************

Proyek ini menggunakan lisensi MIT.
