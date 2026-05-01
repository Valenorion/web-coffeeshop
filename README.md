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
