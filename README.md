# TugasWeb-P9-LaravelSetup

Tugas Rutin Pertemuan 9 — Setup Laravel dengan Database MySQL dan Blade Views.
Nama   : Farel Al Rasya
NIM    : 4253550041
Kelas  : PSIK 25C

## 🛠️ Langkah Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/necromancerbot1/TugasPertemuan9.git
cd TugasPertemuan9
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Konfigurasi Environment
```bash
cp .env.example .env
php artisan key:generate
```

Buka file `.env`, sesuaikan konfigurasi database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tugaspertemuan9
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Buat Database
Buat database baru bernama `tugaspertemuan9` di phpMyAdmin atau HeidiSQL.

### 5. Jalankan Migration
```bash
php artisan migrate
```

### 6. Jalankan Server
```bash
php artisan serve
```

Buka browser → **http://127.0.0.1:8000**

---

## 📁 Struktur Folder

```
TugasPertemuan9/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── PageController.php   ← Controller utama, kirim data array ke view
│   └── Models/
│       └── Article.php              ← Model dummy sesuai requirement
├── routes/
│   └── web.php                      ← 3 route custom + 1 bonus route parameter
├── resources/
│   └── views/
│       ├── home.blade.php           ← Halaman utama
│       ├── about.blade.php          ← Menampilkan data array tech stack
│       ├── contact.blade.php        ← Menampilkan data email & github
│       └── hello.blade.php          ← Bonus: route parameter /hello/{nama}
└── .env.example                     ← Contoh konfigurasi environment
```

---

## 🌐 Routes

| Method | URL | Controller | Keterangan |
|--------|-----|------------|------------|
| GET | `/` | PageController@home | Halaman utama |
| GET | `/about` | PageController@about | Halaman about, data array tech stack |
| GET | `/contact` | PageController@contact | Halaman kontak |
| GET | `/hello/{nama}` | Closure | Bonus route parameter |

---

## ✅ Checklist Requirement

- [x] Install Composer & buat project Laravel
- [x] Konfigurasi `.env` dengan database MySQL
- [x] `artisan serve` berjalan
- [x] 3 route custom return Blade view
- [x] View menampilkan data dinamis (array dari controller)
- [x] `make:controller` (PageController) & `make:model` (Article)
- [x] README lengkap
- [x] Bonus: route parameter `/hello/{nama}`
