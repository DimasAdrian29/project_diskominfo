<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>SIMBANGDA Riau - Pengujian Aplikasi &amp; Evaluasi Kelaikan SPBE</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "on-secondary-container": "#003d79",
            "surface-container-highest": "#d8e3fb",
            "on-secondary-fixed": "#001b3c",
            "surface-bright": "#f9f9ff",
            "on-tertiary-container": "#7fc3ff",
            "surface": "#f9f9ff",
            "on-tertiary-fixed-variant": "#004a75",
            "error-container": "#ffdad6",
            "on-surface": "#111c2d",
            "on-error-container": "#93000a",
            "on-primary-container": "#a1bbff",
            "secondary": "#165eae",
            "on-primary": "#ffffff",
            "surface-container": "#e7eeff",
            "secondary-fixed": "#d5e3ff",
            "primary": "#003178",
            "surface-variant": "#d8e3fb",
            "surface-container-low": "#f0f3ff",
            "on-tertiary-fixed": "#001d32",
            "surface-container-lowest": "#ffffff",
            "surface-tint": "#2b5bb5",
            "error": "#ba1a1a",
            "primary-fixed-dim": "#b0c6ff",
            "outline": "#737783",
            "inverse-on-surface": "#ecf1ff",
            "surface-container-high": "#dee8ff",
            "primary-container": "#0d47a1",
            "on-primary-fixed": "#001945",
            "on-tertiary": "#ffffff",
            "tertiary-container": "#00507e",
            "primary-fixed": "#d9e2ff",
            "tertiary-fixed-dim": "#96ccff",
            "outline-variant": "#c3c6d4",
            "secondary-fixed-dim": "#a8c8ff",
            "secondary-container": "#71aaff",
            "tertiary": "#00385a",
            "inverse-primary": "#b0c6ff",
            "on-secondary-fixed-variant": "#00468a",
            "on-secondary": "#ffffff",
            "on-background": "#111c2d",
            "on-primary-fixed-variant": "#00429c",
            "surface-dim": "#cfdaf2",
            "background": "#f9f9ff",
            "on-surface-variant": "#434652",
            "tertiary-fixed": "#cee5ff",
            "on-error": "#ffffff",
            "inverse-surface": "#263143"
          },
          "borderRadius": {
            "DEFAULT": "0.125rem",
            "lg": "0.25rem",
            "xl": "0.5rem",
            "full": "0.75rem"
          },
          "spacing": {
            "gutter-mobile": "1rem",
            "space-3xl": "4rem",
            "space-md": "1rem",
            "gutter-desktop": "1.5rem",
            "space-xl": "2rem",
            "space-2xl": "3rem",
            "space-sm": "0.75rem",
            "space-xs": "0.5rem",
            "container-max": "1280px",
            "space-lg": "1.5rem",
            "space-2xs": "0.25rem"
          },
          "fontFamily": {
            "label-lg": ["Plus Jakarta Sans"],
            "display-hero": ["Plus Jakarta Sans"],
            "label-md": ["Plus Jakarta Sans"],
            "body-md": ["Plus Jakarta Sans"],
            "body-sm": ["Plus Jakarta Sans"],
            "headline-sm": ["Plus Jakarta Sans"],
            "headline-md": ["Plus Jakarta Sans"],
            "headline-lg": ["Plus Jakarta Sans"],
            "display-hero-mobile": ["Plus Jakarta Sans"],
            "title-lg": ["Plus Jakarta Sans"],
            "caption": ["Plus Jakarta Sans"],
            "body-lg": ["Plus Jakarta Sans"],
            "title-md": ["Plus Jakarta Sans"],
            "headline-lg-mobile": ["Plus Jakarta Sans"]
          },
          "fontSize": {
            "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" }],
            "display-hero": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.025em", "fontWeight": "800" }],
            "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" }],
            "body-md": ["16px", { "lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "400" }],
            "body-sm": ["14px", { "lineHeight": "20px", "letterSpacing": "0em", "fontWeight": "400" }],
            "headline-sm": ["20px", { "lineHeight": "28px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
            "headline-md": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.015em", "fontWeight": "700" }],
            "headline-lg": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "display-hero-mobile": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "800" }],
            "title-lg": ["18px", { "lineHeight": "26px", "letterSpacing": "-0.005em", "fontWeight": "600" }],
            "caption": ["12px", { "lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "400" }],
            "body-lg": ["18px", { "lineHeight": "28px", "letterSpacing": "0em", "fontWeight": "400" }],
            "title-md": ["16px", { "lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "600" }],
            "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.015em", "fontWeight": "700" }]
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
<div class="flex-1 flex flex-col ml-64 min-w-0 bg-background overflow-y-auto h-screen relative">
<!-- ==================== TOP NAV BAR COMPONENT ==================== -->
@include('admin.partials.navbar')

<!-- MAIN CONTENT CONTAINER -->
<main class="flex-1 max-w-7xl w-full mx-auto p-6 space-y-6">
<!-- Page Header & Action Cluster -->
<div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
<div>
<div class="flex items-center gap-2">
<span class="bg-primary/10 text-primary border border-primary/20 text-caption font-caption font-semibold px-2 py-0.5 rounded">
                Standardisasi Kelaikan SPBE
              </span>
<span class="text-caption font-caption text-outline">Siklus Anggaran TA 2025</span>
</div>
<h1 class="text-headline-md font-headline-md text-on-surface tracking-tight mt-1">Daftar Pengujian &amp; Evaluasi Kelaikan Sistem</h1>
<p class="text-body-sm font-body-sm text-on-surface-variant">
              Katalog aplikasi perangkat daerah (OPD) dalam proses User Acceptance Testing (UAT) untuk memastikan kesesuaian fitur dan kebutuhan.
            </p>
</div>
<div class="flex items-center gap-2.5 shrink-0">
<button class="flex items-center gap-2 bg-surface-container-lowest text-primary border border-outline-variant hover:bg-surface-container-low font-label-lg text-label-lg py-2.5 px-4 rounded-md shadow-sm transition-all duration-150">
<span class="material-symbols-outlined text-[18px]">file_download</span>
<span>Ekspor Berita Acara (BAST)</span>
</button>
<button class="flex items-center gap-2 bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg py-2.5 px-4 rounded-md shadow-sm transition-all duration-150">
<span class="material-symbols-outlined text-[18px]">add</span>
<span>Registrasi Uji Sistem Baru</span>
</button>
</div>
</div>
<!-- SEARCH, FILTERS & VIEW TOGGLE TOOLBAR -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-4 shadow-sm space-y-3">
<div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-3">
<!-- Interactive Search Input -->
<div class="relative flex-1">
<span class="material-symbols-outlined absolute left-3.5 top-3 text-[20px] text-outline">search</span>
<input class="w-full bg-surface-container-low border border-outline-variant rounded-md pl-10 pr-4 py-2 text-body-sm font-body-sm text-on-surface placeholder:text-outline focus:border-secondary focus:ring-2 focus:ring-surface-container focus:outline-none transition-all" id="search-input" placeholder="Cari aplikasi, kode PRJ, instansi OPD, atau nama PIC penguji..." type="text"/>
</div>
<!-- Filter Controls Cluster -->
<div class="flex flex-wrap sm:flex-nowrap items-center gap-2.5">
<!-- OPD Filter -->
<div class="relative w-full sm:w-auto">
<select class="w-full bg-surface-container-lowest border border-outline-variant rounded-md py-2 pl-3 pr-8 text-label-md font-label-md text-on-surface focus:border-secondary focus:outline-none cursor-pointer">
<option>Semua OPD / Instansi</option>
<option selected="">Bapenda Riau</option>
<option>Dinas Kesehatan (Dinkes)</option>
<option>RSUD Arifin Achmad</option>
<option>Dinas Pendidikan (Disdik)</option>
<option>DPMPTSP Riau</option>
</select>
</div>
<!-- Status Pengujian Filter -->
<div class="relative w-full sm:w-auto">
<select class="w-full bg-surface-container-lowest border border-outline-variant rounded-md py-2 pl-3 pr-8 text-label-md font-label-md text-on-surface focus:border-secondary focus:outline-none cursor-pointer">
<option>Semua Tahapan Status</option>
<option>Menunggu Pengujian</option>
<option>Dalam Pengujian Fungsional (UAT)</option>
<option>Selesai &amp; Diterbitkan</option>
</select>
</div>
<!-- Sort Filter -->
<div class="relative w-full sm:w-auto">
<select class="w-full bg-surface-container-lowest border border-outline-variant rounded-md py-2 pl-3 pr-8 text-label-md font-label-md text-on-surface focus:border-secondary focus:outline-none cursor-pointer">
<option>Urutan: Prioritas Rilis Terdekat</option>
<option>Urutan: Registrasi Terbaru</option>
<option>Urutan: Progres Kelulusan Tertinggi</option>
</select>
</div>
<!-- View Switcher -->
<div class="flex items-center border border-outline-variant rounded-md p-0.5 bg-surface-container-low shrink-0">
<button class="flex items-center gap-1 bg-surface-container-lowest text-primary px-2.5 py-1.5 rounded shadow-xs font-label-md text-label-md" title="Tampilan Tabel">
<span class="material-symbols-outlined text-[18px]">table_rows</span>
<span class="hidden sm:inline">Tabel</span>
</button>
<button class="flex items-center gap-1 text-on-surface-variant hover:text-on-surface px-2.5 py-1.5 rounded font-label-md text-label-md transition-colors" title="Tampilan Kartu">
<span class="material-symbols-outlined text-[18px]">grid_view</span>
<span class="hidden sm:inline">Kartu</span>
</button>
</div>
</div>
</div>
<!-- Active Filter Tags Ribbon -->
<div class="flex items-center gap-2 pt-2 border-t border-outline-variant/40 flex-wrap">
<span class="text-caption font-caption text-outline">Filter Aktif:</span>
<span class="inline-flex items-center gap-1 bg-surface-container px-2 py-0.5 rounded text-caption font-caption text-primary">
              Tahun Anggaran: 2025
              <button class="hover:text-error"><span class="material-symbols-outlined text-[14px]">close</span></button>
</span>
<span class="inline-flex items-center gap-1 bg-surface-container px-2 py-0.5 rounded text-caption font-caption text-primary">
              Status: Semua Tahapan Aktif
              <button class="hover:text-error"><span class="material-symbols-outlined text-[14px]">close</span></button>
</span>
<button class="text-caption font-caption text-secondary hover:underline ml-1">Reset Filter</button>
</div>
</div>
<!-- MAIN CIVIC DATA TABLE CARD -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse" id="testing-table">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant text-[11px] font-bold uppercase tracking-wider text-on-surface-variant">
<th class="py-3 px-4 w-12 text-center">No</th>
<th class="py-3 px-4">Nama Aplikasi &amp; Instansi (OPD)</th>
<th class="py-3 px-4">Uji Fungsional (UAT)</th>
<th class="py-3 px-4">Target Rilis &amp; Lingkungan</th>
<th class="py-3 px-4">PIC Penguji Diskominfo</th>
<th class="py-3 px-4 text-center">Aksi / Evaluasi</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/60 font-body-sm text-body-sm">
<!-- ROW 1: PRIMARY APPLICATION (SIPPD Pajak Daerah v2) -->
<tr class="hover:bg-surface-container/30 transition-colors bg-primary/5">
<td class="py-4 px-4 text-center font-label-md text-label-md text-outline">
                    01
                  </td>
<td class="py-4 px-4">
<div class="flex items-start gap-3">

<div>
<div class="flex items-center gap-2">
<a class="font-semibold text-primary hover:underline text-body-sm font-body-sm" href="#">
                            SIPPD Pajak Daerah v2
                          </a>
<span class="bg-amber-100 text-amber-900 border border-amber-300 px-2 py-0.5 rounded text-[11px] font-bold">
                            Tahap Pengujian Akhir
                          </span>
</div>
<div class="text-caption font-caption text-on-surface-variant flex items-center gap-2 mt-0.5">
<span class="text-on-surface">Bapenda Riau</span>
<span>&bull;</span>
<span class="font-mono text-outline">PRJ-2025-089</span>
<span>&bull;</span>
<span class="text-secondary">Arsitektur Microservices</span>
</div>
</div>
</div>
</td>
<td class="py-4 px-4">
<div>
<span class="inline-flex items-center gap-1 bg-emerald-50 text-emerald-800 border border-emerald-300 px-2.5 py-1 rounded text-label-md font-label-md">
<span class="material-symbols-outlined text-[16px] text-emerald-700">check_circle</span>
                        Lolos 100% (42/42)
                      </span>
<p class="text-caption font-caption text-on-surface-variant mt-1">42 Skenario Pengujian Valid</p>
</div>
</td>

<td class="py-4 px-4">
<div>
<p class="font-semibold text-on-surface">30 Nov 2025</p>
<span class="inline-flex items-center gap-1 text-caption font-caption text-secondary font-mono">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                        v2-sippd.riau.go.id
                      </span>
</div>
</td>
<td class="py-4 px-4">
<div class="flex items-center gap-2">
<div class="w-7 h-7 rounded-full bg-surface-container flex items-center justify-center font-bold text-caption text-primary border border-outline-variant">
                        HS
                      </div>
<div>
<p class="text-label-md font-label-md font-bold text-on-surface">Ir. Hendra Saputra</p>
<p class="text-caption font-caption text-outline">Lead Evaluator</p>
</div>
</div>
</td>
<td class="py-4 px-4 text-center">
<div class="flex items-center justify-center gap-1.5">
<!-- CTA to Testing Detail Form -->
<a class="inline-flex items-center gap-1.5 bg-primary hover:bg-primary-container text-on-primary text-label-md font-label-md px-3 py-1.5 rounded-md shadow-xs transition-all" href="/admin/pengujian-aplikasi/detail">
<span>Buka Detail Uji</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
<button class="p-1.5 text-outline hover:text-on-surface hover:bg-surface-container rounded" title="Menu Opsi">
<span class="material-symbols-outlined text-[18px]">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- ROW 2: e-Puskesmas Terpadu Riau v3 -->
<tr class="hover:bg-surface-container/30 transition-colors">
<td class="py-4 px-4 text-center font-label-md text-label-md text-outline">
                    02
                  </td>
<td class="py-4 px-4">
<div class="flex items-start gap-3">

<div>
<div class="flex items-center gap-2">
<a class="font-semibold text-on-surface hover:text-primary hover:underline text-body-sm font-body-sm" href="#">
                            e-Puskesmas Terpadu Riau v3
                          </a>
<span class="bg-blue-50 text-blue-900 border border-blue-200 px-2 py-0.5 rounded text-[11px] font-bold">
                            Uji UAT Berjalan
                          </span>
</div>
<div class="text-caption font-caption text-on-surface-variant flex items-center gap-2 mt-0.5">
<span class="text-on-surface">Dinas Kesehatan (Dinkes)</span>
<span>&bull;</span>
<span class="font-mono text-outline">PRJ-2025-072</span>
<span>&bull;</span>
<span>SatuSehat Ready</span>
</div>
</div>
</div>
</td>
<td class="py-4 px-4">
<div>
<span class="inline-flex items-center gap-1 bg-surface-container text-primary border border-surface-variant px-2.5 py-1 rounded text-label-md font-label-md">
<span class="material-symbols-outlined text-[16px]">hourglass_empty</span>
                        Dalam Pengujian (80%)
                      </span>
<p class="text-caption font-caption text-on-surface-variant mt-1">32/40 Skenario Teruji</p>
</div>
</td>

<td class="py-4 px-4">
<div>
<p class="font-semibold text-on-surface">15 Des 2025</p>
<span class="inline-flex items-center gap-1 text-caption font-caption text-outline font-mono">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                        epuskesmas-dev.riau.go.id
                      </span>
</div>
</td>
<td class="py-4 px-4">
<div class="flex items-center gap-2">
<div class="w-7 h-7 rounded-full bg-surface-container flex items-center justify-center font-bold text-caption text-primary border border-outline-variant">
                        SR
                      </div>
<div>
<p class="text-label-md font-label-md font-bold text-on-surface">Siti Rahmawati, S.T.</p>
<p class="text-caption font-caption text-outline">Analis Sistem Informasi</p>
</div>
</div>
</td>
<td class="py-4 px-4 text-center">
<div class="flex items-center justify-center gap-1.5">
<a class="inline-flex items-center gap-1.5 bg-surface-container hover:bg-surface-container-high text-primary text-label-md font-label-md px-3 py-1.5 rounded-md transition-all" href="/admin/pengujian-aplikasi/detail">
<span>Buka Detail Uji</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
<button class="p-1.5 text-outline hover:text-on-surface hover:bg-surface-container rounded" title="Menu Opsi">
<span class="material-symbols-outlined text-[18px]">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- ROW 3: SIMRS Integrasi BPJS & Rekam Medis -->
<tr class="hover:bg-surface-container/30 transition-colors">
<td class="py-4 px-4 text-center font-label-md text-label-md text-outline">
                    03
                  </td>
<td class="py-4 px-4">
<div class="flex items-start gap-3">

<div>
<div class="flex items-center gap-2">
<a class="font-semibold text-on-surface hover:text-primary hover:underline text-body-sm font-body-sm" href="#">
                            SIMRS Integrasi BPJS &amp; Rekam Medis
                          </a>
<span class="bg-emerald-100 text-emerald-900 border border-emerald-300 px-2 py-0.5 rounded text-[11px] font-bold">
                            Lolos UAT
                          </span>
</div>
<div class="text-caption font-caption text-on-surface-variant flex items-center gap-2 mt-0.5">
<span class="text-on-surface">RSUD Arifin Achmad</span>
<span>&bull;</span>
<span class="font-mono text-outline">PRJ-2025-061</span>
<span>•</span>
<span>Bridging VClaim v2.0</span>
</div>
</div>
</div>
</td>
<td class="py-4 px-4">
<div>
<span class="inline-flex items-center gap-1 bg-emerald-50 text-emerald-800 border border-emerald-300 px-2.5 py-1 rounded text-label-md font-label-md">
<span class="material-symbols-outlined text-[16px] text-emerald-700">verified</span>
                        Lolos 100% (56/56)
                      </span>
<p class="text-caption font-caption text-on-surface-variant mt-1">Uji Beban 250 Concurrent User Sukses</p>
</div>
</td>

<td class="py-4 px-4">
<div>
<p class="font-semibold text-on-surface">05 Des 2025</p>
<span class="inline-flex items-center gap-1 text-caption font-caption text-outline font-mono">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                        simrs-staging.rsudarifinachmad.id
                      </span>
</div>
</td>
<td class="py-4 px-4">
<div class="flex items-center gap-2">
<div class="w-7 h-7 rounded-full bg-surface-container flex items-center justify-center font-bold text-caption text-primary border border-outline-variant">
                        AP
                      </div>
<div>
<p class="text-label-md font-label-md font-bold text-on-surface">Ahmad Prasetyo, M.T.</p>
<p class="text-caption font-caption text-outline">Pranata Komputer Madya</p>
</div>
</div>
</td>
<td class="py-4 px-4 text-center">
<div class="flex items-center justify-center gap-1.5">
<a class="inline-flex items-center gap-1.5 bg-surface-container hover:bg-surface-container-high text-primary text-label-md font-label-md px-3 py-1.5 rounded-md transition-all" href="/admin/pengujian-aplikasi/detail">
<span>Buka Detail Uji</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
<button class="p-1.5 text-outline hover:text-on-surface hover:bg-surface-container rounded" title="Menu Opsi">
<span class="material-symbols-outlined text-[18px]">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- ROW 4: Si-Pelajar Cerdas Riau -->
<tr class="hover:bg-surface-container/30 transition-colors">
<td class="py-4 px-4 text-center font-label-md text-label-md text-outline">
                    04
                  </td>
<td class="py-4 px-4">
<div class="flex items-start gap-3">

<div>
<div class="flex items-center gap-2">
<a class="font-semibold text-on-surface hover:text-primary hover:underline text-body-sm font-body-sm" href="#">
                            Si-Pelajar Cerdas Riau
                          </a>
<span class="bg-surface-container text-primary border border-surface-variant px-2 py-0.5 rounded text-[11px] font-bold">
                            Uji Beban &amp; Skalabilitas
                          </span>
</div>
<div class="text-caption font-caption text-on-surface-variant flex items-center gap-2 mt-0.5">
<span class="text-on-surface">Dinas Pendidikan (Disdik)</span>
<span>&bull;</span>
<span class="font-mono text-outline">PRJ-2025-104</span>
<span>•</span>
<span>Modul Ujian Online Siswa</span>
</div>
</div>
</div>
</td>
<td class="py-4 px-4">
<div>
<span class="inline-flex items-center gap-1 bg-surface-container text-primary border border-surface-variant px-2.5 py-1 rounded text-label-md font-label-md">
<span class="material-symbols-outlined text-[16px]">speed</span>
                        Dalam Pengujian (65%)
                      </span>
<p class="text-caption font-caption text-on-surface-variant mt-1">26/40 Skenario Teruji</p>
</div>
</td>

<td class="py-4 px-4">
<div>
<p class="font-semibold text-on-surface">22 Des 2025</p>
<span class="inline-flex items-center gap-1 text-caption font-caption text-outline font-mono">
<span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                        belajar-lab.riau.go.id
                      </span>
</div>
</td>
<td class="py-4 px-4">
<div class="flex items-center gap-2">
<div class="w-7 h-7 rounded-full bg-surface-container flex items-center justify-center font-bold text-caption text-primary border border-outline-variant">
                        DZ
                      </div>
<div>
<p class="text-label-md font-label-md font-bold text-on-surface">Dedi Zulkarnain, S.Kom</p>
<p class="text-caption font-caption text-outline">Keamanan Jaringan &amp; Siber</p>
</div>
</div>
</td>
<td class="py-4 px-4 text-center">
<div class="flex items-center justify-center gap-1.5">
<a class="inline-flex items-center gap-1.5 bg-surface-container hover:bg-surface-container-high text-primary text-label-md font-label-md px-3 py-1.5 rounded-md transition-all" href="/admin/pengujian-aplikasi/detail">
<span>Buka Detail Uji</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
<button class="p-1.5 text-outline hover:text-on-surface hover:bg-surface-container rounded" title="Menu Opsi">
<span class="material-symbols-outlined text-[18px]">more_vert</span>
</button>
</div>
</td>
</tr>
<!-- ROW 5: Sistem Informasi Perizinan Terpadu Riau -->
<tr class="hover:bg-surface-container/30 transition-colors">
<td class="py-4 px-4 text-center font-label-md text-label-md text-outline">
                    05
                  </td>
<td class="py-4 px-4">
<div class="flex items-start gap-3">

<div>
<div class="flex items-center gap-2">
<a class="font-semibold text-on-surface hover:text-primary hover:underline text-body-sm font-body-sm" href="#">
                            Sistem Informasi Perizinan Terpadu Riau
                          </a>
<span class="bg-surface-container-high text-on-surface-variant border border-outline-variant px-2 py-0.5 rounded text-[11px] font-bold">
                            Tahap Awal
                          </span>
</div>
<div class="text-caption font-caption text-on-surface-variant flex items-center gap-2 mt-0.5">
<span class="text-on-surface">DPMPTSP Riau</span>
<span>&bull;</span>
<span class="font-mono text-outline">PRJ-2025-118</span>
<span>&bull;</span>
<span>Integrasi OSS RBA Kemenves</span>
</div>
</div>
</div>
</td>
<td class="py-4 px-4">
<div>
<span class="inline-flex items-center gap-1 bg-surface-container text-on-surface-variant border border-outline-variant px-2.5 py-1 rounded text-label-md font-label-md">
<span class="material-symbols-outlined text-[16px]">pending</span>
                        Belum Mulai (0%)
                      </span>
<p class="text-caption font-caption text-on-surface-variant mt-1">Jadwal Kickoff UAT: 28 Nov 2025</p>
</div>
</td>

<td class="py-4 px-4">
<div>
<p class="font-semibold text-on-surface">15 Jan 2026</p>
<span class="inline-flex items-center gap-1 text-caption font-caption text-outline font-mono">
<span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                        dpmptsp-dev.riau.go.id
                      </span>
</div>
</td>
<td class="py-4 px-4">
<div class="flex items-center gap-2">
<div class="w-7 h-7 rounded-full bg-surface-container flex items-center justify-center font-bold text-caption text-primary border border-outline-variant">
                        HS
                      </div>
<div>
<p class="text-label-md font-label-md font-bold text-on-surface">Ir. Hendra Saputra</p>
<p class="text-caption font-caption text-outline">Lead Evaluator</p>
</div>
</div>
</td>
<td class="py-4 px-4 text-center">
<div class="flex items-center justify-center gap-1.5">
<a class="inline-flex items-center gap-1.5 bg-surface-container hover:bg-surface-container-high text-primary text-label-md font-label-md px-3 py-1.5 rounded-md transition-all" href="/admin/pengujian-aplikasi/detail">
<span>Buka Detail Uji</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
<button class="p-1.5 text-outline hover:text-on-surface hover:bg-surface-container rounded" title="Menu Opsi">
<span class="material-symbols-outlined text-[18px]">more_vert</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- TABLE PAGINATION FOOTER -->
<div class="bg-surface-container-lowest px-4 py-3 border-t border-outline-variant flex flex-col sm:flex-row items-center justify-between gap-3 text-caption font-caption text-on-surface-variant">
<div class="flex items-center gap-2">
<span>Menampilkan <strong class="text-on-surface">1 - 5</strong> dari <strong class="text-on-surface">7</strong> aplikasi antrean pengujian</span>
<span class="text-outline">|</span>
<span class="flex items-center gap-1">
                Tampilkan
                <select class="bg-surface-container border border-outline-variant rounded px-1.5 py-0.5 text-caption font-caption text-on-surface focus:outline-none">
<option>5 baris</option>
<option>10 baris</option>
<option>25 baris</option>
</select>
</span>
</div>
<!-- Page Number Controls -->
<div class="flex items-center gap-1">
<button class="p-1 rounded text-outline hover:bg-surface-container disabled:opacity-40" disabled="" title="Halaman Sebelumnya">
<span class="material-symbols-outlined text-[18px]">chevron_left</span>
</button>
<button class="w-7 h-7 rounded bg-primary text-on-primary font-bold text-caption font-caption">1</button>
<button class="w-7 h-7 rounded hover:bg-surface-container text-on-surface text-caption font-caption">2</button>
<button class="p-1 rounded text-on-surface hover:bg-surface-container" title="Halaman Berikutnya">
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- TWO-COLUMN CIVIC INFORMATION TILES (Workflow & Regulation Guidance) -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
<!-- Tile 1: Alur Standar Pengujian SPBE Riau -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-5 shadow-sm">
<div class="flex items-center gap-2 mb-3">
<span class="material-symbols-outlined text-secondary text-[22px]">account_tree</span>
<h3 class="text-title-md font-title-md font-bold text-primary">Tahapan Pengujian Standar SPBE Riau</h3>
</div>
<div class="space-y-3">
<div class="flex items-start gap-3">
<div class="w-6 h-6 rounded-full bg-surface-container text-primary flex items-center justify-center font-bold text-caption shrink-0">1</div>
<div>
<p class="text-label-md font-label-md text-on-surface">Pengujian UAT Fungsional</p>
<p class="text-caption font-caption text-on-surface-variant">Memastikan seluruh kebutuhan bisnis OPD dan skenario use case terpenuhi tanpa kendala logika fungsional.</p>
</div>
</div>


</div>
</div>
<!-- Tile 2: Kontak Tim Helpdesk Evaluasi SPBE -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-5 shadow-sm flex flex-col justify-between">
<div>
<div class="flex items-center gap-2 mb-2">
<span class="material-symbols-outlined text-secondary text-[22px]">contact_support</span>
<h3 class="text-title-md font-title-md font-bold text-primary">Klinik Konsultasi Tata Kelola &amp; Uji Kelaikan</h3>
</div>
<p class="text-body-sm font-body-sm text-on-surface-variant">
                OPD yang membutuhkan pendampingan penyusunan dokumen skenario uji atau penjadwalan audit pentest kilat dapat menghubungi Tim Tata Kelola SPBE &amp; CSIRT Diskominfotik Riau.
              </p>
<div class="grid grid-cols-2 gap-3 mt-4">
<div class="p-2.5 bg-surface-container-low rounded border border-outline-variant/60">
<p class="text-caption font-caption text-outline">Hotline CSIRT Riau</p>
<p class="text-label-md font-label-md text-primary font-bold">csirt@riau.go.id</p>
</div>
<div class="p-2.5 bg-surface-container-low rounded border border-outline-variant/60">
<p class="text-caption font-caption text-outline">Bidang Layanan SPBE</p>
<p class="text-label-md font-label-md text-primary font-bold">(0761) 31548 / Ext 204</p>
</div>
</div>
</div>
<div class="pt-4 mt-2 border-t border-outline-variant/40 flex items-center justify-between">
<span class="text-caption font-caption text-outline">Gedung Menara Lancang Kuning Lt. 3, Pekanbaru</span>
<a class="text-secondary hover:text-primary font-label-md text-label-md flex items-center gap-1" href="#">
<span>Unduh Template BAST</span>
<span class="material-symbols-outlined text-[16px]">download</span>
</a>
</div>
</div>
</div>
</main>
<!-- INSTITUTIONAL CIVIC FOOTER -->
<footer class="bg-surface-container-lowest border-t border-outline-variant py-5 px-6">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded bg-surface-container flex items-center justify-center p-1 border border-outline-variant">
<img class="w-full h-full object-contain" src="{{ asset('images/kominfo-seeklogo.png') }}"/>
</div>
<div>
<p class="text-label-md font-label-md font-bold text-on-surface">Dinas Komunikasi, Informatika dan Statistik Provinsi Riau</p>
<p class="text-caption font-caption text-on-surface-variant">Sistem Informasi Manajemen Pembangunan Daerah (SIMBANGDA) • Modul Kelaikan SPBE</p>
</div>
</div>
<div class="flex items-center gap-6 text-caption font-caption text-on-surface-variant">
<a class="hover:text-primary transition-colors" href="#">Panduan Pengujian</a>
<a class="hover:text-primary transition-colors" href="#">Pergub No. 48/2023</a>
<a class="hover:text-primary transition-colors" href="#">Sertifikasi CSIRT</a>
<a class="hover:text-primary transition-colors" href="#">Privasi &amp; Keamanan</a>
<span class="text-outline">Hak Cipta © 2025 Pemerintah Provinsi Riau</span>
</div>
</div>
</footer>
</div>

<!-- Vanilla Interaction Script for Table Filter Simulation -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
      const searchInput = document.getElementById('search-input');
      const tableRows = document.querySelectorAll('#testing-table tbody tr');

      if (searchInput) {
        searchInput.addEventListener('input', (e) => {
          const keyword = e.target.value.toLowerCase().trim();
          tableRows.forEach(row => {
            const textContent = row.innerText.toLowerCase();
            if (textContent.includes(keyword)) {
              row.style.display = '';
            } else {
              row.style.display = 'none';
            }
          });
        });
      }
    });
</script>
</body>
</html>
