
# Web Klinik
Project untuk memenuhi nilai tugas mata kuliah proyek pemrograman

# Deskripsi Project
Proyek pemrograman yang kami buat yaitu web klinik berbasis web untuk
membantu pengelolaan dan penyelenggaraan klinik berkaitan dengan pengelolaan
pemeriksaan dan pasien. Proyek web klinik akan dikembangkan dengan menggunakan
bahasa PHP framework Laravel menggunakan database mysql.
Semua pengelolaan terkait akun petugas serta Variabel rumah sakit ditangani oleh
roles Super Admin. Untuk user petugas terdapat 3 roles yang setiap roles memiliki fungsi
yang berbeda-beda yaitu Administrasi, Laborat, Poli.

User petugas yang memiliki role Administrasi memiliki beberapa fitur berupa :

● Membuat, mengedit, melihat, menghapus data pasien

● Mencetak kartu pasien

● Mencetak kartu hasil pemeriksaan

● Mencetak nota

User petugas yang memiliki role Laborat memiliki beberapa fitur berupa :

● Mengedit, memelihara data pemeriksaan

User petugas yang memiliki role Poli memiliki beberapa fitur berupa :

● Melihat, menghapus, mengedit, membuat data pemeriksaan

# Logo Project

![Logo](https://i.imgur.com/1o9Sfrk.jpg)
## Installation

Install <>
```bash
1. jalankan `composer install` sebelum menggunakan aplikasi untuk menginstall vendor.
2. jalankan `mysql server` dan ubah username, password, dan nama database pada file `.env`
3. jalankan `php artisan migrate` untuk menginisialisasi database, opsi alternatif bila ingin menambahkan seeder ke dalam database tambahkan opsi `--seed`.
4. jalankan `php artisan serve` untuk menjalankan server api
```
    
## Tech
● Laravel

