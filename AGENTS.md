# AGENTS.md — Panduan Lengkap Project SIMBANGDA Riau

> Dokumen ini ditujukan untuk AI agent / model lain agar memahami konteks, struktur,
> konvensi, dan aturan kerja project ini sebelum melakukan perubahan apapun.

---

## 1. Ringkasan Proyek

**SIMBANGDA Riau** (Sistem Manajemen Pengembangan Aplikasi Riau) adalah aplikasi web internal
milik **Dinas Komunikasi, Informatika, dan Statistik (Diskominfo) Provinsi Riau**. Aplikasi ini
digunakan untuk mengelola seluruh proses pengembangan aplikasi OPD (Organisasi Perangkat Daerah)
di lingkungan Pemerintah Provinsi Riau, mulai dari penerimaan proposal hingga pengujian keamanan.

**Versi aplikasi:** v3.4.0

---

## 2. Stack Teknologi

| Layer | Teknologi |
|-------|-----------|
| **Backend** | Laravel 13 (PHP ^8.3) |
| **Database** | SQLite (default development) |
| **Frontend CSS** | Tailwind CSS via CDN (`https://cdn.tailwindcss.com?plugins=forms,container-queries`) |
| **Frontend Build** | Vite + `@tailwindcss/vite` + `laravel-vite-plugin` |
| **Font** | Plus Jakarta Sans (Google Fonts) |
| **Ikon** | Material Symbols Outlined (Google Fonts) |
| **Template Engine** | Laravel Blade (`.blade.php`) |
| **Session** | Database-driven |
| **Cache** | Database |

> **PENTING:** Semua halaman saat ini menggunakan **Tailwind CSS via CDN** langsung di dalam
> tag `<head>` setiap file Blade. Ini berbeda dari pendekatan compile Vite. Jangan memindahkan
> ke compile Vite kecuali diminta secara eksplisit.

---

## 3. Setup & Menjalankan Project

### Prasyarat
```bash
php -v        # PHP ^8.3 diperlukan
composer -V   # Composer harus tersedia
node -v       # Node.js untuk build assets
```

### Instalasi Cepat
```bash
composer run setup
# Setara dengan:
# composer install
# php artisan key:generate
# php artisan migrate --force
# npm install --ignore-scripts
# npm run build
```

### Menjalankan Dev Server
```bash
composer run dev
# atau
php artisan serve
```

### Konfigurasi `.env`
File `.env` sudah ada. Konfigurasi default yang kritis:
```env
APP_URL=http://localhost:8000
DB_CONNECTION=sqlite        # Menggunakan database/database.sqlite
SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database
```

---

## 4. Struktur Direktori Utama

```
sistem-manajemen-pengembangan-aplikasi/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── Controller.php          # Base controller (kosong, belum ada controller spesifik)
│   ├── Models/
│   │   └── User.php                    # Model user standar Laravel
│   └── Providers/
├── database/
│   ├── database.sqlite                 # File database SQLite
│   └── migrations/
│       ├── 0001_01_01_000000_create_users_table.php
│       ├── 0001_01_01_000001_create_cache_table.php
│       └── 0001_01_01_000002_create_jobs_table.php
├── resources/
│   └── views/
│       ├── auth/
│       │   └── login.blade.php         # Halaman login
│       ├── opd/                        # Views untuk pengguna OPD (publik)
│       │   ├── landing.blade.php       # Halaman utama OPD
│       │   ├── registrasi_aplikasi/
│       │   │   └── formulir.blade.php
│       │   ├── penundaan_aplikasi/
│       │   │   └── formulir.blade.php
│       │   └── penonaktifan_aplikasi/
│       │       └── formulir.blade.php
│       ├── admin/
│       │   ├── partials/               # Shared admin components
│       │   │   ├── navbar.blade.php    # Navbar atas (shared semua role admin)
│       │   │   └── sidebar.blade.php   # Sidebar generic (legacy, tidak aktif dipakai)
│       │   ├── aptika/                 # Role: Admin APTIKA
│       │   │   ├── partials/
│       │   │   │   └── sidebar.blade.php
│       │   │   ├── dashboard/
│       │   │   │   └── index.blade.php
│       │   │   ├── penilaian_proposal/
│       │   │   │   └── index.blade.php
│       │   │   ├── manajemen_data_master/
│       │   │   │   └── index.blade.php
│       │   │   ├── pengerjaan_proyek/
│       │   │   │   ├── index.blade.php
│       │   │   │   └── detail.blade.php
│       │   │   └── penundaan_aplikasi/
│       │   │       └── index.blade.php
│       │   ├── tik/                    # Role: Admin TIK
│       │   │   ├── partials/
│       │   │   │   └── sidebar.blade.php
│       │   │   ├── dashboard/
│       │   │   │   └── index.blade.php
│       │   │   ├── pengujian_keamanan/
│       │   │   │   └── index.blade.php
│       │   │   └── rekomendasi_infrastruktur/
│       │   │       └── index.blade.php
│       │   ├── persandian/             # Role: Admin Persandian
│       │   │   ├── partials/
│       │   │   │   └── sidebar.blade.php
│       │   │   ├── dashboard/
│       │   │   │   └── index.blade.php
│       │   │   └── pengujian_aplikasi/
│       │   │       ├── index.blade.php
│       │   │       └── detail.blade.php
│       │   └── kadin/                  # Role: Kepala Dinas
│       │       ├── partials/
│       │       │   └── sidebar.blade.php
│       │       └── dashboard/
│       │           └── index.blade.php
│       └── partials/
├── routes/
│   └── web.php                         # Semua route aplikasi
└── public/
    └── images/
        └── kominfo-seeklogo.png        # Logo Kominfo di sidebar
```

---

## 5. Routes (routes/web.php)

### Halaman Publik (OPD)
| Method | URL | View | Keterangan |
|--------|-----|------|------------|
| GET | `/` | `opd.landing` | Halaman utama |
| GET | `/opd` | `opd.landing` | Alias halaman utama |
| GET | `/registrasi-aplikasi` | `opd.registrasi_aplikasi.formulir` | Form registrasi aplikasi baru |
| GET | `/penundaan-aplikasi` | `opd.penundaan_aplikasi.formulir` | Form pengajuan penundaan |
| GET | `/penonaktifan-aplikasi` | `opd.penonaktifan_aplikasi.formulir` | Form pengajuan penonaktifan |
| GET | `/login` | `auth.login` | Halaman login (named: `login`) |

### Admin APTIKA — prefix: `admin/aptika`, name prefix: `admin.aptika.`
| URL | Route Name | View | Keterangan |
|-----|------------|------|------------|
| `admin/aptika/` | `admin.aptika.dashboard` | `admin.aptika.dashboard.index` | Dashboard analitik |
| `admin/aptika/penilaian-proposal` | `admin.aptika.penilaian-proposal` | `admin.aptika.penilaian_proposal.index` | Evaluasi proposal OPD |
| `admin/aptika/manajemen-data-master` | `admin.aptika.manajemen-data-master` | `admin.aptika.manajemen_data_master.index` | Data instansi, tim, penugasan |
| `admin/aptika/pengerjaan-proyek` | `admin.aptika.pengerjaan-proyek` | `admin.aptika.pengerjaan_proyek.index` | Daftar proyek berjalan |
| `admin/aptika/pengerjaan-proyek/detail` | `admin.aptika.pengerjaan-proyek.detail` | `admin.aptika.pengerjaan_proyek.detail` | Detail proyek |
| `admin/aptika/penundaan-aplikasi` | `admin.aptika.penundaan-aplikasi` | `admin.aptika.penundaan_aplikasi.index` | Daftar penundaan aplikasi |

### Admin TIK — prefix: `admin/tik`, name prefix: `admin.tik.`
| URL | Route Name | View | Keterangan |
|-----|------------|------|------------|
| `admin/tik/` | `admin.tik.dashboard` | `admin.tik.dashboard.index` | Dashboard TIK |
| `admin/tik/pengujian-keamanan` | `admin.tik.pengujian-keamanan` | `admin.tik.pengujian_keamanan.index` | Review pengujian keamanan |
| `admin/tik/rekomendasi-infrastruktur` | `admin.tik.rekomendasi-infrastruktur` | `admin.tik.rekomendasi_infrastruktur.index` | Persetujuan domain & hosting |

### Admin Persandian — prefix: `admin/persandian`, name prefix: `admin.persandian.`
| URL | Route Name | View | Keterangan |
|-----|------------|------|------------|
| `admin/persandian/` | `admin.persandian.dashboard` | `admin.persandian.dashboard.index` | Dashboard Persandian |
| `admin/persandian/pengujian-aplikasi` | `admin.persandian.pengujian-aplikasi` | `admin.persandian.pengujian_aplikasi.index` | List pengujian aplikasi |
| `admin/persandian/pengujian-aplikasi/detail` | `admin.persandian.pengujian-aplikasi.detail` | `admin.persandian.pengujian_aplikasi.detail` | Detail pengujian |

### Kepala Dinas (Kadin) — prefix: `admin/kadin`, name prefix: `admin.kadin.`
| URL | Route Name | View | Keterangan |
|-----|------------|------|------------|
| `admin/kadin/` | `admin.kadin.dashboard` | `admin.kadin.dashboard.index` | Dashboard Kepala Dinas |

---

## 6. Peran (Role) Pengguna

Aplikasi ini memiliki **4 role** dengan URL prefix dan tampilan terpisah:

### 1. Admin APTIKA (`admin/aptika/`)
Mengelola **alur pengembangan aplikasi** dari hulu ke hilir:
- Menerima & menilai proposal pengembangan aplikasi dari OPD
- Mengelola data master (instansi, tim teknis, penugasan proyek)
- Memantau pengerjaan proyek (progress per proyek)
- Mengelola pengajuan penundaan aplikasi

### 2. Admin TIK (`admin/tik/`)
Mengelola **aspek teknis infrastruktur**:
- Dashboard dengan antrean persetujuan domain & hosting (kewenangan Eselon III)
- Melakukan pengujian keamanan aplikasi
- Memberikan rekomendasi infrastruktur (domain `riau.go.id`, hosting PDN)

### 3. Admin Persandian (`admin/persandian/`)
Mengelola **pengujian keamanan & keandalan aplikasi**:
- Melakukan pengujian aplikasi sebelum go-live
- Melihat detail laporan pengujian per aplikasi

### 4. Kepala Dinas / Kadin (`admin/kadin/`)
Peran **eksekutif / approval**:
- Dashboard ringkasan status seluruh proyek
- (Fitur lanjutan belum diimplementasikan)

---

## 7. Konvensi Blade & Layout

### Struktur Layout Per Halaman
Setiap halaman admin **tidak menggunakan Blade `@extends` / layout master**.
Setiap halaman adalah file HTML lengkap yang melakukan `@include` untuk komponen:

```blade
<!DOCTYPE html>
<html lang="id">
<head>
  {{-- Tailwind CDN + konfigurasi warna inline --}}
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <script id="tailwind-config">
    tailwind.config = { theme: { extend: { colors: { ... } } } }
  </script>
</head>
<body class="bg-background text-on-surface font-body-md antialiased min-h-screen flex">

  @include('admin.{role}.partials.sidebar')   {{-- Sidebar role-spesifik --}}

  <div class="flex-1 flex flex-col ml-64">
    @include('admin.partials.navbar')         {{-- Navbar shared semua role --}}
    <main class="flex-1 p-8">
      {{-- Konten halaman --}}
    </main>
  </div>

</body>
</html>
```

### Sidebar
Setiap role memiliki sidebar **sendiri** yang terpisah:

| Role | Path Sidebar |
|------|-------------|
| Admin APTIKA | `resources/views/admin/aptika/partials/sidebar.blade.php` |
| Admin TIK | `resources/views/admin/tik/partials/sidebar.blade.php` |
| Admin Persandian | `resources/views/admin/persandian/partials/sidebar.blade.php` |
| Kepala Dinas | `resources/views/admin/kadin/partials/sidebar.blade.php` |

**Shared** (semua role): `resources/views/admin/partials/navbar.blade.php`

### Active State Sidebar
Sidebar mendeteksi halaman aktif menggunakan `request()->is('path*')`:
```blade
{{ request()->is('admin/aptika/penilaian-proposal*')
    ? 'bg-surface-container text-primary font-semibold shadow-xs'
    : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }}
```

### Submenu
Submenu menggunakan **toggle JavaScript vanilla** (tanpa Alpine.js):
```blade
onclick="document.getElementById('submenu-data-master').classList.toggle('hidden');
         document.getElementById('icon-data-master').classList.toggle('rotate-180')"
```
Submenu otomatis terbuka saat path aktif menggunakan `hidden` atau tidak di kelas awal.

---

## 8. Design System & Warna

Aplikasi menggunakan **Material Design 3 color tokens** yang dikustomisasi via Tailwind config inline.
Semua halaman menggunakan warna-warna ini:

| Token | Nilai Hex | Penggunaan |
|-------|-----------|------------|
| `primary` | `#003178` | Warna utama (link aktif, heading, accent) |
| `secondary` | `#165eae` | Warna sekunder |
| `surface` | `#f9f9ff` | Background halaman |
| `surface-container` | `#e7eeff` | Container cards, active state sidebar |
| `surface-container-lowest` | `#ffffff` | Card putih, sidebar background |
| `surface-container-low` | `#f0f3ff` | Hover state |
| `on-surface` | `#111c2d` | Teks utama |
| `on-surface-variant` | `#434652` | Teks sekunder |
| `outline-variant` | `#c3c6d4` | Border |
| `error` | `#ba1a1a` | State error |

**Font:** `Plus Jakarta Sans` dari Google Fonts.
**Ikon:** `Material Symbols Outlined` — ikon diaktifkan/dinonaktifkan dengan:
```css
font-variation-settings: 'FILL' 1;  /* ikon filled (aktif) */
font-variation-settings: 'FILL' 0;  /* ikon outline (nonaktif) */
```

---

## 9. Database & Model

### Tabel yang Ada (via Migration)
| Tabel | Keterangan |
|-------|------------|
| `users` | id, name, email, password, remember_token, timestamps |
| `password_reset_tokens` | email, token, created_at |
| `sessions` | id, user_id, ip_address, user_agent, payload, last_activity |
| `cache` | Tabel cache Laravel standar |
| `jobs` | Tabel queue jobs standar |

### Model
- `App\Models\User` — model User standar Laravel dengan `#[Fillable]` dan `#[Hidden]` PHP 8 attributes.

> **Catatan:** Saat ini **belum ada model untuk entitas bisnis** (Proposal, Proyek, dll).
> Semua halaman admin masih menggunakan data dummy/statis di dalam view.

---

## 10. Status Implementasi Fitur

### ✅ Sudah Ada (UI/Frontend)
- Halaman landing OPD + 3 formulir publik (registrasi, penundaan, penonaktifan)
- Halaman login
- Dashboard Admin APTIKA (KPI cards, chart analitik)
- Halaman Penilaian Proposal APTIKA (tabel proposal + KPI)
- Halaman Manajemen Data Master APTIKA (tab: Instansi, Tim, Penugasan)
- Halaman Pengerjaan Proyek APTIKA (index + detail)
- Halaman Penundaan Aplikasi APTIKA
- Dashboard Admin TIK (antrean rekomendasi domain/hosting)
- Halaman Pengujian Keamanan TIK
- Halaman Rekomendasi Infrastruktur TIK
- Dashboard Admin Persandian
- Halaman Pengujian Aplikasi Persandian (index + detail)
- Dashboard Kepala Dinas

### ❌ Belum Diimplementasikan
- Autentikasi (login/logout fungsional — saat ini route login hanya return view statis)
- Role-based access control (middleware)
- CRUD nyata untuk semua entitas (masih dummy data)
- Model Eloquent untuk entitas bisnis
- API endpoints
- Form submission yang fungsional
- Notifikasi / email

---

## 11. Konvensi Penamaan

| Konteks | Konvensi | Contoh |
|---------|----------|--------|
| **Route prefix** | `kebab-case` | `admin/aptika`, `penilaian-proposal` |
| **Route name** | `snake.kebab` dengan dot separator | `admin.aptika.penilaian-proposal` |
| **Blade view path** | `snake_case` untuk folder | `penilaian_proposal/index` |
| **URL parameter** | `kebab-case` | `/pengerjaan-proyek/detail` |
| **Blade component** | `@include()` berbasis path | `admin.aptika.partials.sidebar` |

### Aturan Route Name penting:
- Route group APTIKA: `admin.aptika.*`
- Route group TIK: `admin.tik.*`
- Route group Persandian: `admin.persandian.*`
- Route group Kadin: `admin.kadin.*`

---

## 12. Aturan Kerja untuk AI Agent

### Yang HARUS Dilakukan
1. **Selalu gunakan `route()` helper** saat menambah link di sidebar atau halaman.
   ```blade
   href="{{ route('admin.aptika.penilaian-proposal') }}"
   ```

2. **Pertahankan active state logic sidebar** saat menambah menu baru:
   ```blade
   {{ request()->is('admin/aptika/nama-halaman*') ? 'bg-surface-container ...' : 'text-on-surface-variant ...' }}
   ```

3. **Tambah route baru di `routes/web.php`** mengikuti pola prefix + group yang sudah ada.

4. **Buat view di folder role yang tepat**, misal fitur baru untuk TIK:
   `resources/views/admin/tik/nama_fitur/index.blade.php`

5. **Setiap view Blade admin HARUS menyertakan**:
   - `@include('admin.{role}.partials.sidebar')` — sidebar role-spesifik
   - `@include('admin.partials.navbar')` — navbar shared

6. **Ikuti token warna Material Design 3** yang sudah ditetapkan. Jangan membuat warna baru.

7. **Gunakan Material Symbols Outlined** untuk ikon, bukan Font Awesome atau ikon lain.

### Yang TIDAK Boleh Dilakukan
1. **Jangan membuat file `.py`** atau script temporary di root project.
2. **Jangan mengubah struktur warna Tailwind** tanpa alasan yang jelas.
3. **Jangan menghapus `data-icon` attribute** pada elemen `<span class="material-symbols-outlined">`.
4. **Jangan menggunakan `Alpine.js` atau `jQuery`** — interaktivitas menggunakan vanilla JS.
5. **Jangan menggunakan Blade `@extends` / `@section`** — struktur layout saat ini adalah self-contained per file.
6. **Jangan commit file `.py`, `__pycache__/`** — sudah di-gitignore.

---

## 13. Panduan Menambah Fitur Baru

### Menambah Halaman Baru (contoh: fitur "Laporan" untuk Admin APTIKA)

**Langkah 1** — Tambah route di `routes/web.php`:
```php
// Di dalam group admin/aptika
Route::get('/laporan', function () {
    return view('admin.aptika.laporan.index');
})->name('laporan');
```

**Langkah 2** — Buat view:
```
resources/views/admin/aptika/laporan/index.blade.php
```

**Langkah 3** — Tambah menu di sidebar (`resources/views/admin/aptika/partials/sidebar.blade.php`):
```blade
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg
   {{ request()->is('admin/aptika/laporan*')
       ? 'bg-surface-container text-primary font-semibold shadow-xs'
       : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }}
   transition-colors"
   href="{{ route('admin.aptika.laporan') }}">
    <span class="material-symbols-outlined text-[20px]
         {{ request()->is('admin/aptika/laporan*') ? 'text-primary' : 'text-outline' }}"
         data-icon="bar_chart"
         style="{{ request()->is('admin/aptika/laporan*') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">
        bar_chart
    </span>
    <span class="text-label-lg font-label-lg">Laporan</span>
</a>
```

**Langkah 4** — Template view baru mengikuti struktur:
```blade
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Laporan - SIMBANGDA Diskominfo Riau</title>
{{-- Copy Tailwind CDN + tailwind.config dari halaman lain yang sejenis --}}
</head>
<body class="bg-background text-on-surface font-body-md text-body-md antialiased min-h-screen flex">
@include('admin.aptika.partials.sidebar')
<div class="flex-1 flex flex-col ml-64 min-w-0 bg-background">
@include('admin.partials.navbar')
<main class="flex-1 p-8 space-y-6 max-w-7xl mx-auto w-full">
    {{-- Konten halaman --}}
</main>
</div>
</body>
</html>
```

---

## 14. Catatan Penting Lainnya

- **Tidak ada middleware auth** yang aktif saat ini — semua route dapat diakses langsung.
- **Logo** disimpan di `public/images/kominfo-seeklogo.png`, diakses via `{{ asset('images/kominfo-seeklogo.png') }}`.
- **Tailwind config** di setiap halaman bisa sedikit berbeda (beberapa token mungkin hilang/berbeda di halaman yang lebih tua). Saat membuat halaman baru, gunakan token lengkap dari halaman dashboard sebagai referensi.
- **Database SQLite** (`database/database.sqlite`) digunakan untuk development.
- **Dev tools:** `laravel/pail` (log viewer), `laravel/pint` (code formatter), `laravel/pao`.

---

*Dokumen ini dibuat otomatis berdasarkan analisis codebase pada 2026-09-24.*
*Selalu baca dokumen ini sebelum melakukan perubahan pada project.*
