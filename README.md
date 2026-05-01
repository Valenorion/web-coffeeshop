# ☕ Vermata Coffee Shop - UTS Pemrograman Web Lanjut

![CodeIgniter](https://img.shields.io/badge/CodeIgniter-4.x-red?logo=codeigniter)
![PHP](https://img.shields.io/badge/PHP-8.2+-blue?logo=php)
![Bootstrap](https://img.shields.io/badge/Bootstrap-4-purple?logo=bootstrap)
![Status](https://img.shields.io/badge/Status-Selesai-green)

## 📋 Tentang Proyek

**Vermata Coffee Shop** adalah website yang dibangun sebagai tugas **Ujian Tengah Semester (UTS)** mata kuliah **Pemrograman Web Lanjut** semester 4. Proyek ini mengimplementasikan konsep MVC (Model-View-Controller) menggunakan framework **CodeIgniter 4**.

Website ini juga berfungsi sebagai **portofolio** yang menunjukkan kemampuan dalam pengembangan web modern dengan PHP framework.

### 🎯 Fitur Utama

| Fitur | Deskripsi |
|-------|-----------|
| 🔐 **Authentication System** | Login dengan data statis (admin), session management, logout |
| 🛡️ **Filter Protection** | Route filtering untuk halaman yang memerlukan autentikasi |
| 📄 **Multi Page** | Home, Menu, About, Dashboard Admin |
| 👑 **Admin Dashboard** | Halaman khusus admin dengan statistik website |
| 🎨 **Responsive Design** | Template coffee shop yang modern dan mobile-friendly |
| 📊 **Data Visualization** | Grafik statistik pengunjung dengan Chart.js |

### 🧠 Implementasi Konsep

| Konsep | Implementasi |
|--------|--------------|
| **Routes** | Definisi URL mapping ke controller di `app/Config/Routes.php` |
| **Layout** | Template dengan `layout.php` dan `layout_coffee.php` |
| **Session** | Penyimpanan data login user |
| **Filter** | `Auth.php` dan `AdminFilter.php` untuk proteksi akses |

---

## 🚀 Halaman Website

| Halaman | URL | Hak Akses |
|---------|-----|-----------|
| Home | `/` | User login |
| Menu | `/menu` | User login |
| About | `/about` | User login |
| Login | `/login` | Guest (belum login) |
| Admin Dashboard | `/admin/dashboard` | **Hanya Admin** |

### 🔑 Demo Credential

| Username | Password | Role |
|----------|----------|------|
| `valen` | `123` | Admin |

---

## 🛠️ Teknologi yang Digunakan

| Teknologi | Keterangan |
|-----------|------------|
| **CodeIgniter 4** | PHP Framework |
| **PHP 8.2+** | Bahasa pemrograman backend |
| **Bootstrap 4** | CSS Framework |
| **Coffee Template** | Template frontend (Free Bootstrap 4 Template by Colorlib) |
| **Chart.js** | Library untuk grafik statistik |
| **jQuery** | JavaScript library |

---

## 📁 Struktur Proyek
uts_15676/
├── app/
│ ├── Config/
│ │ ├── Filters.php # Konfigurasi filter auth & admin
│ │ └── Routes.php # Routing URL
│ ├── Controllers/
│ │ ├── AuthController.php # Login/logout
│ │ ├── HomeController.php # Halaman home
│ │ ├── MenuController.php # Halaman menu
│ │ ├── AboutController.php # Halaman about
│ │ └── AdminController.php # Dashboard admin
│ ├── Filters/
│ │ ├── Auth.php # Filter cek login
│ │ └── AdminFilter.php # Filter cek role admin
│ └── Views/
│ ├── components_coffee/ # Header, footer template
│ ├── layout_coffee.php # Layout utama
│ └── v_*.php # File view
├── public/
│ ├── coffee1-1.0.0/ # Template CSS/JS
│ └── Vermata/assets/ # Aset custom (favicon, dll)
└── writable/ # Log & cache (tidak dipush ke git)

---

## 💻 Instalasi & Setup

### Prasyarat

- PHP 8.2 atau lebih tinggi
- Composer
- Web Server (XAMPP / Laragon / Native)

### Langkah Instalasi

1. **Clone repository**
```bash
git clone https://github.com/username-anda/web-coffeeshop.git
cd uts_15676
composer install
cp env .env
# Edit .env sesuai kebutuhan (atur baseURL)
php spark serve
http://localhost:8080

---

🔐 Login ke Website
Buka http://localhost:8080/login

Masukkan credential:

Username: valen

Password: 123

Klik Login

📊 Screenshot
Halaman Home
https://via.placeholder.com/800x400?text=Home+Page

Halaman Menu
https://via.placeholder.com/800x400?text=Menu+Page

Admin Dashboard
https://via.placeholder.com/800x400?text=Admin+Dashboard

Screenshot dapat ditambahkan sesuai dokumentasi proyek

📚 Yang Dipelajari dari Proyek Ini
✅ Instalasi dan konfigurasi CodeIgniter 4

✅ Konsep MVC (Model-View-Controller)

✅ Routing dan URL management

✅ Layout system dengan template

✅ Session management untuk autentikasi

✅ Filter untuk proteksi route

✅ Integrasi template frontend ke CI4

✅ Deployment ke GitHub

📄 Lisensi
Proyek ini dibuat untuk tugas UTS Pemrograman Web Lanjut dan dapat digunakan sebagai referensi pembelajaran.

Template asli: Coffee - Free Bootstrap 4 Template by Colorlib

👨‍💻 Tentang Developer
Nama	Program Studi	Semester
[Nama Anda]	[Prodi Anda]	4
📞 Kontak
Untuk pertanyaan lebih lanjut terkait proyek ini, silakan hubungi:

Email: [email Anda]

GitHub: [username GitHub Anda]

🙏 Acknowledgments
Dosen Pengampu - Mata Kuliah Pemrograman Web Lanjut

Colorlib - Template Coffee yang digunakan

CodeIgniter Team - Framework yang luar biasa

*Dibangun dengan ☕ dan semangat belajar | UTS Pemrograman Web Lanjut - Semester 4*
