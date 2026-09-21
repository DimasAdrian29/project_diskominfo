<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>SIMBANGDA Diskominfo Riau - Manajemen Data Master</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "on-secondary": "#ffffff",
            "surface-container-low": "#f0f3ff",
            "primary": "#003178",
            "tertiary-fixed": "#cee5ff",
            "outline-variant": "#c3c6d4",
            "on-error-container": "#93000a",
            "secondary-fixed-dim": "#a8c8ff",
            "inverse-on-surface": "#ecf1ff",
            "tertiary-container": "#00507e",
            "error-container": "#ffdad6",
            "on-tertiary-container": "#7fc3ff",
            "on-primary-container": "#a1bbff",
            "surface-tint": "#2b5bb5",
            "surface-variant": "#d8e3fb",
            "inverse-surface": "#263143",
            "on-primary": "#ffffff",
            "surface-container-highest": "#d8e3fb",
            "on-secondary-container": "#003d79",
            "on-primary-fixed": "#001945",
            "inverse-primary": "#b0c6ff",
            "on-secondary-fixed": "#001b3c",
            "surface-bright": "#f9f9ff",
            "on-error": "#ffffff",
            "secondary-container": "#71aaff",
            "surface-container-high": "#dee8ff",
            "on-surface": "#111c2d",
            "primary-fixed": "#d9e2ff",
            "background": "#f9f9ff",
            "on-tertiary-fixed": "#001d32",
            "surface": "#f9f9ff",
            "primary-container": "#0d47a1",
            "on-secondary-fixed-variant": "#00468a",
            "surface-container": "#e7eeff",
            "on-tertiary": "#ffffff",
            "secondary": "#165eae",
            "tertiary-fixed-dim": "#96ccff",
            "primary-fixed-dim": "#b0c6ff",
            "outline": "#737783",
            "error": "#ba1a1a",
            "on-surface-variant": "#434652",
            "surface-dim": "#cfdaf2",
            "tertiary": "#00385a",
            "on-background": "#111c2d",
            "on-tertiary-fixed-variant": "#004a75",
            "secondary-fixed": "#d5e3ff",
            "surface-container-lowest": "#ffffff",
            "on-primary-fixed-variant": "#00429c"
          },
          "borderRadius": {
            "DEFAULT": "0.125rem",
            "lg": "0.25rem",
            "xl": "0.5rem",
            "full": "0.75rem"
          },
          "spacing": {
            "container-max": "1280px",
            "space-xl": "2rem",
            "gutter-desktop": "1.5rem",
            "space-md": "1rem",
            "gutter-mobile": "1rem",
            "space-lg": "1.5rem",
            "space-2xl": "3rem",
            "space-sm": "0.75rem",
            "space-2xs": "0.25rem",
            "space-3xl": "4rem",
            "space-xs": "0.5rem"
          },
          "fontFamily": {
            "title-lg": ["Plus Jakarta Sans"],
            "headline-md": ["Plus Jakarta Sans"],
            "caption": ["Plus Jakarta Sans"],
            "body-lg": ["Plus Jakarta Sans"],
            "label-md": ["Plus Jakarta Sans"],
            "label-lg": ["Plus Jakarta Sans"],
            "headline-sm": ["Plus Jakarta Sans"],
            "title-md": ["Plus Jakarta Sans"],
            "display-hero-mobile": ["Plus Jakarta Sans"],
            "body-sm": ["Plus Jakarta Sans"],
            "headline-lg": ["Plus Jakarta Sans"],
            "body-md": ["Plus Jakarta Sans"],
            "headline-lg-mobile": ["Plus Jakarta Sans"],
            "display-hero": ["Plus Jakarta Sans"]
          },
          "fontSize": {
            "title-lg": ["18px", {"lineHeight": "26px", "letterSpacing": "-0.005em", "fontWeight": "600"}],
            "headline-md": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.015em", "fontWeight": "700"}],
            "caption": ["12px", {"lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "400"}],
            "body-lg": ["18px", {"lineHeight": "28px", "letterSpacing": "0em", "fontWeight": "400"}],
            "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
            "label-lg": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600"}],
            "headline-sm": ["20px", {"lineHeight": "28px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
            "title-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "600"}],
            "display-hero-mobile": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "800"}],
            "body-sm": ["14px", {"lineHeight": "20px", "letterSpacing": "0em", "fontWeight": "400"}],
            "headline-lg": ["36px", {"lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
            "body-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "400"}],
            "headline-lg-mobile": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.015em", "fontWeight": "700"}],
            "display-hero": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.025em", "fontWeight": "800"}]
          }
        },
      },
    }
</script>
<style>
    html {
      scroll-behavior: smooth;
      overscroll-behavior: none;
    }

    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      display: inline-block;
      vertical-align: middle;
      line-height: 1;
    }
</style>
</head>
<body class="bg-background text-on-surface font-body-md text-body-md antialiased min-h-screen flex">
<!-- ==================== SIDEBAR COMPONENT ==================== -->
@include('admin.partials.sidebar')

<!-- ==================== MAIN CONTENT WRAPPER ==================== -->
<div class="flex-1 flex flex-col ml-64 min-w-0 bg-background">
<!-- ==================== TOP NAV BAR COMPONENT ==================== -->
@include('admin.partials.navbar')

<!-- CONTENT CANVAS -->
<main class="flex-1 p-8 space-y-6 max-w-7xl mx-auto w-full">
<!-- SECTION 1: BREADCRUMBS & PAGE HEADER -->
<div class="space-y-2">
<!-- Breadcrumb -->
<div class="flex items-center gap-2 text-caption font-caption text-outline">
<a class="hover:text-primary transition-colors" href="#">SIMBANGDA</a>
<span class="material-symbols-outlined text-sm">chevron_right</span>
<span class="text-primary font-semibold">Manajemen Data Master</span>
</div>
<!-- Title & Context -->
<div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 pt-1">
<div>
<h2 class="text-headline-md font-headline-md text-primary tracking-tight">Manajemen Data Master</h2>
<p class="text-body-sm font-body-sm text-on-surface-variant max-w-3xl mt-1">
                Kelola data referensi master organisasi perangkat daerah, hak akses personil tim pengembang &amp; verifikator, serta alokasi penugasan proyek aplikasi.
              </p>
</div>
<!-- Quick Export / Global Action -->
<div class="flex items-center gap-2">
<button class="inline-flex items-center gap-2 px-3.5 py-2 rounded-md bg-white border border-outline-variant text-on-surface text-label-lg font-label-lg hover:bg-surface-container transition-colors shadow-sm">
<span class="material-symbols-outlined text-lg">download</span>
<span>Unduh Rekap Master</span>
</button>
</div>
</div>
</div>
<!-- SECTION 2: MODERN HORIZONTAL TABS MENU -->
<div class="border-b border-outline-variant/40 flex items-center gap-8">
<!-- Tab 1: Data Instansi (ACTIVE) -->
<button class="group relative pb-3.5 pt-1 flex items-center gap-2.5 text-label-lg font-label-lg font-bold text-primary border-b-2 border-primary transition-all" id="tab-btn-instansi" onclick="switchTab('instansi')">
<span class="material-symbols-outlined text-xl text-primary">account_balance</span>
<span>Data Instansi</span>
<span class="px-2 py-0.5 rounded-full text-caption bg-surface-container text-primary font-bold">48 OPD</span>
</button>
<!-- Tab 2: Pengguna & Tim -->
<button class="group relative pb-3.5 pt-1 flex items-center gap-2.5 text-label-lg font-label-lg font-medium text-on-surface-variant hover:text-primary border-b-2 border-transparent hover:border-outline-variant transition-all" id="tab-btn-pengguna" onclick="switchTab('pengguna')">
<span class="material-symbols-outlined text-xl text-outline group-hover:text-primary transition-colors">group</span>
<span>Pengguna &amp; Tim</span>
<span class="px-2 py-0.5 rounded-full text-caption bg-surface-container-low text-on-surface-variant font-semibold">112 Akun</span>
</button>
<!-- Tab 3: Penugasan Proyek -->
<button class="group relative pb-3.5 pt-1 flex items-center gap-2.5 text-label-lg font-label-lg font-medium text-on-surface-variant hover:text-primary border-b-2 border-transparent hover:border-outline-variant transition-all" id="tab-btn-penugasan" onclick="switchTab('penugasan')">
<span class="material-symbols-outlined text-xl text-outline group-hover:text-primary transition-colors">assignment_ind</span>
<span>Penugasan Proyek</span>
<span class="px-2 py-0.5 rounded-full text-caption bg-surface-container-low text-on-surface-variant font-semibold">28 Proyek</span>
</button>
</div>
<!-- SECTION 3: TAB CONTENT CONTAINER WRAPPER -->
<!-- ================= PANEL 1: DATA INSTANSI ================= -->
<div class="space-y-6" id="panel-instansi">
<!-- Mini Metrics Summary Bento Strip -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div class="bg-surface-container-lowest border border-outline-variant/40 rounded-xl p-4 shadow-sm flex items-center justify-between">
<div>
<p class="text-caption font-caption text-on-surface-variant uppercase tracking-wider font-semibold">Total OPD Terdaftar</p>
<h3 class="text-headline-md font-headline-md text-primary mt-1">48 <span class="text-title-md font-normal text-on-surface-variant">Instansi</span></h3>
<p class="text-caption text-emerald-700 mt-1 flex items-center gap-1 font-medium">
<span class="material-symbols-outlined text-sm">check_circle</span> 100% Terverifikasi Diskominfo
                </p>
</div>
<div class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-2xl">domain</span>
</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant/40 rounded-xl p-4 shadow-sm flex items-center justify-between">
<div>
<p class="text-caption font-caption text-on-surface-variant uppercase tracking-wider font-semibold">Terhubung Satu Data Riau</p>
<h3 class="text-headline-md font-headline-md text-secondary mt-1">42 <span class="text-title-md font-normal text-on-surface-variant">OPD</span></h3>
<p class="text-caption text-secondary mt-1 flex items-center gap-1 font-medium">
<span class="material-symbols-outlined text-sm">hub</span> Portal SDI Terintegrasi
                </p>
</div>
<div class="w-12 h-12 rounded-lg bg-secondary-fixed flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-2xl">dataset</span>
</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant/40 rounded-xl p-4 shadow-sm flex items-center justify-between">
<div>
<p class="text-caption font-caption text-on-surface-variant uppercase tracking-wider font-semibold">Integrasi SSO Aktif</p>
<h3 class="text-headline-md font-headline-md text-primary mt-1">39 <span class="text-title-md font-normal text-on-surface-variant">Sistem Utama</span></h3>
<p class="text-caption text-on-surface-variant mt-1 flex items-center gap-1 font-medium">
<span class="material-symbols-outlined text-sm">key</span> Autentikasi Tunggal ASN
                </p>
</div>
<div class="w-12 h-12 rounded-lg bg-primary-fixed flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-2xl">lock_person</span>
</div>
</div>
</div>
<!-- Main Table Card Wrapper -->
<div class="bg-surface-container-lowest shadow-sm rounded-xl p-6 border border-outline-variant/30 space-y-5">
<!-- Table Action Toolbar -->
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
<!-- Search & Filter Cluster -->
<div class="flex flex-wrap items-center gap-3 flex-1">
<div class="relative min-w-[320px] flex-1 max-w-md">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-lg">search</span>
<input class="w-full pl-9 pr-4 py-2 text-body-sm bg-surface-container-lowest border border-outline-variant rounded-md focus:border-primary focus:ring-2 focus:ring-surface-container focus:outline-none" placeholder="Cari OPD, kode instansi, atau penanggung jawab..." type="text"/>
</div>
<!-- Sektor Filter -->
<select class="px-3 py-2 text-body-sm bg-surface-container-lowest border border-outline-variant rounded-md focus:border-primary focus:outline-none text-on-surface font-medium">
<option value="">Semua Sektor / Kluster</option>
<option value="keuangan">Keuangan &amp; Pendapatan</option>
<option value="kesehatan">Kesehatan &amp; Sosial</option>
<option value="pendidikan">Pendidikan &amp; Kebudayaan</option>
<option value="infrastruktur">Infrastruktur &amp; Tata Ruang</option>
</select>
<!-- Status Filter -->
<select class="px-3 py-2 text-body-sm bg-surface-container-lowest border border-outline-variant rounded-md focus:border-primary focus:outline-none text-on-surface font-medium">
<option value="">Status Integrasi</option>
<option value="terhubung">Terhubung SSO &amp; Satu Data</option>
<option value="tertunda">Sinkronisasi Tertunda</option>
</select>
</div>
<!-- Primary Action -->
<button class="inline-flex items-center justify-center gap-2 px-4 py-2 bg-primary text-on-primary rounded-md text-label-lg font-label-lg hover:bg-secondary active:scale-[0.98] transition-all shadow-sm">
<span class="material-symbols-outlined text-lg">add</span>
<span>Tambah Instansi</span>
</button>
</div>
<!-- Table Container -->
<div class="overflow-x-auto border border-outline-variant/40 rounded-lg">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant/40 text-on-surface text-caption font-semibold tracking-wider">
<th class="py-3.5 px-4 font-bold">KODE OPD</th>
<th class="py-3.5 px-4 font-bold">NAMA INSTANSI / PERANGKAT DAERAH</th>
<th class="py-3.5 px-4 font-bold">KEPALA / PIC OPD</th>
<th class="py-3.5 px-4 font-bold">KONTAK &amp; EMAIL</th>
<th class="py-3.5 px-4 font-bold text-center">SISTEM TERDAFTAR</th>
<th class="py-3.5 px-4 font-bold">STATUS INTEGRASI</th>
<th class="py-3.5 px-4 font-bold text-center">AKSI</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/30 text-body-sm">
<!-- ROW 1 -->
<tr class="hover:bg-surface-container-lowest/80 transition-colors">
<td class="py-3.5 px-4 font-mono font-bold text-primary whitespace-nowrap">BAPENDA-01</td>
<td class="py-3.5 px-4 font-semibold text-on-surface">
                      Badan Pendapatan Daerah Provinsi Riau
                      <div class="text-caption font-caption text-outline font-normal">Kluster Keuangan Daerah</div>
</td>
<td class="py-3.5 px-4 text-on-surface">Dra. Hj. Syahrial, M.Si</td>
<td class="py-3.5 px-4 text-on-surface-variant font-mono text-caption">bapd@riau.go.id</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-flex items-center justify-center px-2.5 py-0.5 rounded-full text-caption font-semibold bg-surface-container text-primary">
                        8 Aplikasi
                      </span>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-caption font-semibold bg-emerald-50 text-emerald-800 border border-emerald-200">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                        Terhubung SSO &amp; Satu Data
                      </span>
</td>
<td class="py-3.5 px-4 text-center">
<div class="inline-flex items-center gap-1">
<button class="p-1.5 text-secondary hover:bg-surface-container rounded transition-colors" title="Edit Instansi">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-1.5 text-on-surface-variant hover:bg-surface-container rounded transition-colors" title="Detail Profil">
<span class="material-symbols-outlined text-lg">visibility</span>
</button>
</div>
</td>
</tr>
<!-- ROW 2 -->
<tr class="hover:bg-surface-container-lowest/80 transition-colors">
<td class="py-3.5 px-4 font-mono font-bold text-primary whitespace-nowrap">DINKES-02</td>
<td class="py-3.5 px-4 font-semibold text-on-surface">
                      Dinas Kesehatan Provinsi Riau
                      <div class="text-caption font-caption text-outline font-normal">Kluster Pelayanan Kesehatan</div>
</td>
<td class="py-3.5 px-4 text-on-surface">drg. Wan Fajriatul, M.KM</td>
<td class="py-3.5 px-4 text-on-surface-variant font-mono text-caption">dinkes@riau.go.id</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-flex items-center justify-center px-2.5 py-0.5 rounded-full text-caption font-semibold bg-surface-container text-primary">
                        14 Aplikasi
                      </span>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-caption font-semibold bg-emerald-50 text-emerald-800 border border-emerald-200">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                        Terhubung SSO &amp; Satu Data
                      </span>
</td>
<td class="py-3.5 px-4 text-center">
<div class="inline-flex items-center gap-1">
<button class="p-1.5 text-secondary hover:bg-surface-container rounded transition-colors" title="Edit Instansi">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-1.5 text-on-surface-variant hover:bg-surface-container rounded transition-colors" title="Detail Profil">
<span class="material-symbols-outlined text-lg">visibility</span>
</button>
</div>
</td>
</tr>
<!-- ROW 3 -->
<tr class="hover:bg-surface-container-lowest/80 transition-colors">
<td class="py-3.5 px-4 font-mono font-bold text-primary whitespace-nowrap">DISDIK-03</td>
<td class="py-3.5 px-4 font-semibold text-on-surface">
                      Dinas Pendidikan Provinsi Riau
                      <div class="text-caption font-caption text-outline font-normal">Kluster Pendidikan &amp; Kebudayaan</div>
</td>
<td class="py-3.5 px-4 text-on-surface">Dr. H. Roni Rakhmat, S.STP</td>
<td class="py-3.5 px-4 text-on-surface-variant font-mono text-caption">disdik@riau.go.id</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-flex items-center justify-center px-2.5 py-0.5 rounded-full text-caption font-semibold bg-surface-container text-primary">
                        6 Aplikasi
                      </span>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-caption font-semibold bg-amber-50 text-amber-900 border border-amber-200">
<span class="w-1.5 h-1.5 rounded-full bg-amber-600"></span>
                        Sinkronisasi Tertunda
                      </span>
</td>
<td class="py-3.5 px-4 text-center">
<div class="inline-flex items-center gap-1">
<button class="p-1.5 text-secondary hover:bg-surface-container rounded transition-colors" title="Edit Instansi">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-1.5 text-on-surface-variant hover:bg-surface-container rounded transition-colors" title="Detail Profil">
<span class="material-symbols-outlined text-lg">visibility</span>
</button>
</div>
</td>
</tr>
<!-- ROW 4 -->
<tr class="hover:bg-surface-container-lowest/80 transition-colors">
<td class="py-3.5 px-4 font-mono font-bold text-primary whitespace-nowrap">RSUD-04</td>
<td class="py-3.5 px-4 font-semibold text-on-surface">
                      RSUD Arifin Achmad Provinsi Riau
                      <div class="text-caption font-caption text-outline font-normal">Unit Pelaksana Teknis Khusus</div>
</td>
<td class="py-3.5 px-4 text-on-surface">drg. Yusi Prastiningsih, MM</td>
<td class="py-3.5 px-4 text-on-surface-variant font-mono text-caption">it.rsud@riau.go.id</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-flex items-center justify-center px-2.5 py-0.5 rounded-full text-caption font-semibold bg-surface-container text-primary">
                        11 Aplikasi
                      </span>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-caption font-semibold bg-emerald-50 text-emerald-800 border border-emerald-200">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                        Terhubung SSO &amp; Satu Data
                      </span>
</td>
<td class="py-3.5 px-4 text-center">
<div class="inline-flex items-center gap-1">
<button class="p-1.5 text-secondary hover:bg-surface-container rounded transition-colors" title="Edit Instansi">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-1.5 text-on-surface-variant hover:bg-surface-container rounded transition-colors" title="Detail Profil">
<span class="material-symbols-outlined text-lg">visibility</span>
</button>
</div>
</td>
</tr>
<!-- ROW 5 -->
<tr class="hover:bg-surface-container-lowest/80 transition-colors">
<td class="py-3.5 px-4 font-mono font-bold text-primary whitespace-nowrap">PUPR-05</td>
<td class="py-3.5 px-4 font-semibold text-on-surface">
                      Dinas PUPRPKPP Provinsi Riau
                      <div class="text-caption font-caption text-outline font-normal">Kluster Infrastruktur &amp; Kawasan</div>
</td>
<td class="py-3.5 px-4 text-on-surface">M. Arief Setiawan, MT</td>
<td class="py-3.5 px-4 text-on-surface-variant font-mono text-caption">pupr@riau.go.id</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-flex items-center justify-center px-2.5 py-0.5 rounded-full text-caption font-semibold bg-surface-container text-primary">
                        5 Aplikasi
                      </span>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-caption font-semibold bg-emerald-50 text-emerald-800 border border-emerald-200">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                        Terhubung SSO &amp; Satu Data
                      </span>
</td>
<td class="py-3.5 px-4 text-center">
<div class="inline-flex items-center gap-1">
<button class="p-1.5 text-secondary hover:bg-surface-container rounded transition-colors" title="Edit Instansi">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-1.5 text-on-surface-variant hover:bg-surface-container rounded transition-colors" title="Detail Profil">
<span class="material-symbols-outlined text-lg">visibility</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Clean Table Pagination -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-2">
<span class="text-caption font-caption text-on-surface-variant">
                Menampilkan <strong class="text-on-surface">1 - 5</strong> dari <strong class="text-on-surface">48</strong> Organisasi Perangkat Daerah
              </span>
<div class="flex items-center gap-1">
<button class="p-1.5 rounded border border-outline-variant/60 text-outline hover:bg-surface-container disabled:opacity-40" disabled="">
<span class="material-symbols-outlined text-lg">first_page</span>
</button>
<button class="p-1.5 rounded border border-outline-variant/60 text-outline hover:bg-surface-container disabled:opacity-40" disabled="">
<span class="material-symbols-outlined text-lg">chevron_left</span>
</button>
<span class="px-3 py-1 bg-primary text-on-primary rounded text-caption font-semibold">1</span>
<button class="px-3 py-1 border border-outline-variant/60 text-on-surface rounded text-caption hover:bg-surface-container font-medium">2</button>
<button class="px-3 py-1 border border-outline-variant/60 text-on-surface rounded text-caption hover:bg-surface-container font-medium">3</button>
<span class="px-2 text-outline">...</span>
<button class="px-3 py-1 border border-outline-variant/60 text-on-surface rounded text-caption hover:bg-surface-container font-medium">10</button>
<button class="p-1.5 rounded border border-outline-variant/60 text-on-surface hover:bg-surface-container">
<span class="material-symbols-outlined text-lg">chevron_right</span>
</button>
<button class="p-1.5 rounded border border-outline-variant/60 text-on-surface hover:bg-surface-container">
<span class="material-symbols-outlined text-lg">last_page</span>
</button>
</div>
</div>
</div>
</div>
<!-- ================= PANEL 2: PENGGUNA & TIM (Interactive / Preview View) ================= -->
<div class="space-y-6 hidden" id="panel-pengguna">
<div class="bg-surface-container-lowest shadow-sm rounded-xl p-6 border border-outline-variant/30 space-y-5">
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
<div>
<h3 class="text-title-lg font-title-lg text-primary">Daftar Akun Pengguna &amp; Tim Kerja</h3>
<p class="text-caption font-caption text-on-surface-variant">Manajemen otoritas peran, akses sertifikat CSIRT, dan hak modifikasi aplikasi.</p>
</div>
<div class="flex items-center gap-3">
<div class="relative w-64">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-lg">search</span>
<input class="w-full pl-9 pr-3 py-1.5 text-body-sm bg-surface-container-lowest border border-outline-variant rounded-md focus:border-primary focus:outline-none" placeholder="Cari NIP atau nama pegawai..." type="text"/>
</div>
<button class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-primary text-on-primary rounded-md text-label-lg font-label-lg hover:bg-secondary">
<span class="material-symbols-outlined text-lg">person_add</span>
<span>Tambah Akun Personil</span>
</button>
</div>
</div>
<div class="overflow-x-auto border border-outline-variant/40 rounded-lg">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant/40 text-on-surface text-caption font-semibold">
<th class="py-3.5 px-4 font-bold">NAMA LENGKAP &amp; NIP</th>
<th class="py-3.5 px-4 font-bold">PERAN / JABATAN</th>
<th class="py-3.5 px-4 font-bold">ASAL UNIT / OPD</th>
<th class="py-3.5 px-4 font-bold text-center">STATUS AKUN</th>
<th class="py-3.5 px-4 font-bold">TERAKHIR MASUK</th>
<th class="py-3.5 px-4 font-bold text-center">AKSI</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/30 text-body-sm">
<tr class="hover:bg-surface-container-lowest/80">
<td class="py-3.5 px-4">
<div class="font-semibold text-on-surface">Rahmat Hidayat, S.Kom</div>
<div class="text-caption font-mono text-outline">NIP. 19880412 201201 1 004</div>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded text-caption font-semibold bg-blue-50 text-blue-800 border border-blue-200">
                        Tim Teknis Diskominfo
                      </span>
</td>
<td class="py-3.5 px-4 text-on-surface-variant">Bidang Aplikasi &amp; Informatika Riau</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-block w-2 h-2 rounded-full bg-emerald-500 mr-1.5"></span>
<span class="text-caption font-semibold text-emerald-800">Aktif</span>
</td>
<td class="py-3.5 px-4 text-caption text-on-surface-variant">Hari ini, 08:42 WIB</td>
<td class="py-3.5 px-4 text-center">
<button class="px-3 py-1 rounded bg-surface-container text-primary hover:bg-surface-container-high text-caption font-semibold transition-colors">Kelola Akses</button>
</td>
</tr>
<tr class="hover:bg-surface-container-lowest/80">
<td class="py-3.5 px-4">
<div class="font-semibold text-on-surface">Fauziah Zahra, M.Sc</div>
<div class="text-caption font-mono text-outline">NIP. 19910903 201503 2 002</div>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded text-caption font-semibold bg-purple-50 text-purple-800 border border-purple-200">
                        Verifikator Keamanan CSIRT
                      </span>
</td>
<td class="py-3.5 px-4 text-on-surface-variant">Sub-Audit Siber Diskominfo Riau</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-block w-2 h-2 rounded-full bg-emerald-500 mr-1.5"></span>
<span class="text-caption font-semibold text-emerald-800">Aktif</span>
</td>
<td class="py-3.5 px-4 text-caption text-on-surface-variant">Kemarin, 16:15 WIB</td>
<td class="py-3.5 px-4 text-center">
<button class="px-3 py-1 rounded bg-surface-container text-primary hover:bg-surface-container-high text-caption font-semibold transition-colors">Kelola Akses</button>
</td>
</tr>
<tr class="hover:bg-surface-container-lowest/80">
<td class="py-3.5 px-4">
<div class="font-semibold text-on-surface">Ilham Pratama, S.STP</div>
<div class="text-caption font-mono text-outline">NIP. 19930218 201704 1 001</div>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded text-caption font-semibold bg-slate-100 text-slate-800 border border-slate-300">
                        Admin OPD Bapenda
                      </span>
</td>
<td class="py-3.5 px-4 text-on-surface-variant">Badan Pendapatan Daerah Prov. Riau</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-block w-2 h-2 rounded-full bg-emerald-500 mr-1.5"></span>
<span class="text-caption font-semibold text-emerald-800">Aktif</span>
</td>
<td class="py-3.5 px-4 text-caption text-on-surface-variant">14 Okt 2024, 11:20 WIB</td>
<td class="py-3.5 px-4 text-center">
<button class="px-3 py-1 rounded bg-surface-container text-primary hover:bg-surface-container-high text-caption font-semibold transition-colors">Kelola Akses</button>
</td>
</tr>
<tr class="hover:bg-surface-container-lowest/80">
<td class="py-3.5 px-4">
<div class="font-semibold text-on-surface">Bambang Trianto, S.T</div>
<div class="text-caption font-mono text-outline">NIP. 19851120 201001 1 008</div>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded text-caption font-semibold bg-cyan-50 text-cyan-800 border border-cyan-200">
                        Frontend Engineer
                      </span>
</td>
<td class="py-3.5 px-4 text-on-surface-variant">Diskominfo Riau / Vendor Mitra</td>
<td class="py-3.5 px-4 text-center">
<span class="inline-block w-2 h-2 rounded-full bg-slate-400 mr-1.5"></span>
<span class="text-caption font-semibold text-slate-600">Nonaktif</span>
</td>
<td class="py-3.5 px-4 text-caption text-on-surface-variant">28 Sep 2024, 09:12 WIB</td>
<td class="py-3.5 px-4 text-center">
<button class="px-3 py-1 rounded bg-surface-container text-primary hover:bg-surface-container-high text-caption font-semibold transition-colors">Kelola Akses</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<!-- ================= PANEL 3: PENUGASAN PROYEK (Interactive / Preview View) ================= -->
<div class="space-y-6 hidden" id="panel-penugasan">
<div class="bg-surface-container-lowest shadow-sm rounded-xl p-6 border border-outline-variant/30 space-y-5">
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
<div>
<h3 class="text-title-lg font-title-lg text-primary">Alokasi &amp; Penetapan Assignee Proyek</h3>
<p class="text-caption font-caption text-on-surface-variant">Daftar penugasan analis sistem, lead developer, dan tim verifikator untuk aplikasi SIMBANGDA.</p>
</div>
<div class="flex items-center gap-3">
<button class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-primary text-on-primary rounded-md text-label-lg font-label-lg hover:bg-secondary">
<span class="material-symbols-outlined text-lg">assignment_add</span>
<span>Tetapkan Proyek Baru</span>
</button>
</div>
</div>
<div class="overflow-x-auto border border-outline-variant/40 rounded-lg">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant/40 text-on-surface text-caption font-semibold">
<th class="py-3.5 px-4 font-bold">KODE PROYEK</th>
<th class="py-3.5 px-4 font-bold">NAMA APLIKASI &amp; OPD</th>
<th class="py-3.5 px-4 font-bold">KETUA TIM TEKNIS (PIC)</th>
<th class="py-3.5 px-4 font-bold">ANGGOTA ASSIGNEE</th>
<th class="py-3.5 px-4 font-bold">FASE PROYEK</th>
<th class="py-3.5 px-4 font-bold">TENGGAT WAKTU</th>
<th class="py-3.5 px-4 font-bold">STATUS PENUGASAN</th>
<th class="py-3.5 px-4 font-bold text-center">AKSI</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/30 text-body-sm">
<tr class="hover:bg-surface-container-lowest/80">
<td class="py-3.5 px-4 font-mono font-bold text-primary">PRJ-2024-001</td>
<td class="py-3.5 px-4">
<div class="font-semibold text-on-surface">E-SAMSAT Riau v3</div>
<div class="text-caption text-outline">Bapenda Prov. Riau</div>
</td>
<td class="py-3.5 px-4 font-medium text-on-surface">Rahmat Hidayat, S.Kom</td>
<td class="py-3.5 px-4">
<!-- Avatar stack -->
<div class="flex items-center -space-x-2">
<div class="w-7 h-7 rounded-full bg-primary-container text-white flex items-center justify-center text-xs font-bold ring-2 ring-white">AR</div>
<div class="w-7 h-7 rounded-full bg-secondary text-white flex items-center justify-center text-xs font-bold ring-2 ring-white">DK</div>
<div class="w-7 h-7 rounded-full bg-tertiary-container text-white flex items-center justify-center text-xs font-bold ring-2 ring-white">FS</div>
<div class="w-7 h-7 rounded-full bg-surface-container-high text-primary flex items-center justify-center text-xs font-bold ring-2 ring-white">+2</div>
</div>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded text-caption font-semibold bg-blue-50 text-blue-800">
                        Pengujian VAPT
                      </span>
</td>
<td class="py-3.5 px-4 text-caption font-mono">15 Nov 2024</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 text-caption font-semibold text-emerald-800">
<span class="w-2 h-2 rounded-full bg-emerald-500"></span> Berjalan Normal
                      </span>
</td>
<td class="py-3.5 px-4 text-center">
<button class="px-2.5 py-1 text-caption bg-surface-container text-primary rounded hover:bg-surface-container-high font-semibold">Atur Tim</button>
</td>
</tr>
<tr class="hover:bg-surface-container-lowest/80">
<td class="py-3.5 px-4 font-mono font-bold text-primary">PRJ-2024-004</td>
<td class="py-3.5 px-4">
<div class="font-semibold text-on-surface">SIMRS Terintegrasi SatuSehat</div>
<div class="text-caption text-outline">RSUD Arifin Achmad</div>
</td>
<td class="py-3.5 px-4 font-medium text-on-surface">Hendri Kusuma, M.Kom</td>
<td class="py-3.5 px-4">
<div class="flex items-center -space-x-2">
<div class="w-7 h-7 rounded-full bg-tertiary text-white flex items-center justify-center text-xs font-bold ring-2 ring-white">TN</div>
<div class="w-7 h-7 rounded-full bg-secondary-container text-primary flex items-center justify-center text-xs font-bold ring-2 ring-white">BP</div>
</div>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded text-caption font-semibold bg-amber-50 text-amber-800">
                        Tahap Deploy
                      </span>
</td>
<td class="py-3.5 px-4 text-caption font-mono">30 Okt 2024</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 text-caption font-semibold text-emerald-800">
<span class="w-2 h-2 rounded-full bg-emerald-500"></span> Finalisasi Rilis
                      </span>
</td>
<td class="py-3.5 px-4 text-center">
<button class="px-2.5 py-1 text-caption bg-surface-container text-primary rounded hover:bg-surface-container-high font-semibold">Atur Tim</button>
</td>
</tr>
<tr class="hover:bg-surface-container-lowest/80">
<td class="py-3.5 px-4 font-mono font-bold text-primary">PRJ-2024-009</td>
<td class="py-3.5 px-4">
<div class="font-semibold text-on-surface">SI-PPDB Online SMA/SMK</div>
<div class="text-caption text-outline">Dinas Pendidikan Riau</div>
</td>
<td class="py-3.5 px-4 font-medium text-on-surface">Siti Nurhaliza, ST</td>
<td class="py-3.5 px-4">
<div class="flex items-center -space-x-2">
<div class="w-7 h-7 rounded-full bg-primary text-white flex items-center justify-center text-xs font-bold ring-2 ring-white">SN</div>
<div class="w-7 h-7 rounded-full bg-secondary text-white flex items-center justify-center text-xs font-bold ring-2 ring-white">MR</div>
<div class="w-7 h-7 rounded-full bg-surface-container-high text-primary flex items-center justify-center text-xs font-bold ring-2 ring-white">+4</div>
</div>
</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded text-caption font-semibold bg-indigo-50 text-indigo-800">
                        Analisis Kebutuhan
                      </span>
</td>
<td class="py-3.5 px-4 text-caption font-mono">20 Des 2024</td>
<td class="py-3.5 px-4">
<span class="inline-flex items-center gap-1.5 text-caption font-semibold text-secondary">
<span class="w-2 h-2 rounded-full bg-secondary"></span> Review Arsitektur
                      </span>
</td>
<td class="py-3.5 px-4 text-center">
<button class="px-2.5 py-1 text-caption bg-surface-container text-primary rounded hover:bg-surface-container-high font-semibold">Atur Tim</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<!-- SECTION 4: CITIZEN / SYSTEM OFFICIAL NOTICE CARD -->
<div class="bg-surface-container-lowest rounded-lg border border-outline-variant/30 border-l-4 border-l-primary p-4 shadow-sm flex items-start gap-4">
<span class="material-symbols-outlined text-primary text-2xl shrink-0 mt-0.5">verified</span>
<div class="space-y-1">
<h4 class="text-title-md font-title-md text-primary font-bold">Standardisasi Data Terbuka &amp; Integrasi API SPLP Pemprov Riau</h4>
<p class="text-body-sm text-on-surface-variant leading-relaxed">
              Seluruh penambahan instansi OPD dan penetapan tim teknis pada sistem SIMBANGDA tunduk pada Peraturan Gubernur Riau tentang Tata Kelola Sistem Pemerintahan Berbasis Elektronik (SPBE). Pastikan kunci integrasi Satu Data Riau selalu diverifikasi melalui Tim CSIRT Diskominfo sebelum rilis ke server produksi.
            </p>
</div>
</div>
</main>

<!-- INSTITUTIONAL FOOTER -->
<footer class="mt-auto px-8 py-4 bg-surface-container-lowest border-t border-outline-variant/30 flex flex-col md:flex-row items-center justify-between text-caption text-outline">
<div class="flex items-center gap-2">
<span>© 2024 Dinas Komunikasi, Informatika dan Statistik Provinsi Riau.</span>
<span class="hidden md:inline">• Hak Cipta Dilindungi Undang-Undang.</span>
</div>
<div class="flex items-center gap-4 mt-2 md:mt-0 font-medium">
<a class="hover:text-primary transition-colors" href="#">Kebijakan Privasi SPBE</a>
<a class="hover:text-primary transition-colors" href="#">Dokumentasi API SPLP</a>
<a class="hover:text-primary transition-colors" href="#">Portal CSIRT Riau</a>
</div>
</footer>
</div>

<!-- INTERACTIVE TAB SWITCH SCRIPT -->
<script>
    function switchTab(tabKey) {
      // Panels
      const panels = {
        'instansi': document.getElementById('panel-instansi'),
        'pengguna': document.getElementById('panel-pengguna'),
        'penugasan': document.getElementById('panel-penugasan')
      };

      // Buttons
      const buttons = {
        'instansi': document.getElementById('tab-btn-instansi'),
        'pengguna': document.getElementById('tab-btn-pengguna'),
        'penugasan': document.getElementById('tab-btn-penugasan')
      };

      // Active state classes
      const activeBtnClasses = ['text-primary', 'border-primary', 'font-bold'];
      const inactiveBtnClasses = ['text-on-surface-variant', 'border-transparent', 'font-medium'];

      for (const [key, panel] of Object.entries(panels)) {
        if (key === tabKey) {
          panel.classList.remove('hidden');
          
          // Style active button
          buttons[key].classList.add(...activeBtnClasses);
          buttons[key].classList.remove(...inactiveBtnClasses);
          
          const icon = buttons[key].querySelector('.material-symbols-outlined');
          if (icon) {
            icon.classList.remove('text-outline');
            icon.classList.add('text-primary');
          }
        } else {
          panel.classList.add('hidden');
          
          // Style inactive button
          buttons[key].classList.remove(...activeBtnClasses);
          buttons[key].classList.add(...inactiveBtnClasses);
          
          const icon = buttons[key].querySelector('.material-symbols-outlined');
          if (icon) {
            icon.classList.remove('text-primary');
            icon.classList.add('text-outline');
          }
        }
      }
    }
</script>
</body>
</html>
