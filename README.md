# TugasPertemuan9 - Setup Laravel

Repository Tugas Rutin Pertemuan 9.

## 🛠️ Cara Menjalankan
1. Clone repo ini.
2. Jalankan `composer install` di terminal.
3. Copy `.env.example` ke `.env`, lalu isi data Database VPS Anda di bagian `DB_HOST`, `DB_DATABASE`, dll.
4. Jalankan `php artisan serve`.
5. Buka http://127.0.0.1:8000

## 📁 Struktur Folder
- `app/Http/Controllers/PageController.php`: Logika pengiriman data array ke view.
- `app/Models/Article.php`: Model dummy sesuai requirement.
- `resources/views/`: File tampilan Blade (home, about, contact, hello).
- `routes/web.php`: Pengaturan rute URL.