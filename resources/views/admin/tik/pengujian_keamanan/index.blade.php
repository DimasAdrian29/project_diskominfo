<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>SIMBANGDA RIAU - Pengujian Keamanan TIK &amp; Infrastruktur</title>
<link href="https://fonts.googleapis.com" rel="preconnect">
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "on-background": "#111c2d",
            "on-secondary": "#ffffff",
            "on-secondary-container": "#003d79",
            "on-surface": "#111c2d",
            "primary-fixed": "#d9e2ff",
            "primary": "#003178",
            "on-error": "#ffffff",
            "on-error-container": "#93000a",
            "on-secondary-fixed": "#001b3c",
            "surface-dim": "#cfdaf2",
            "on-surface-variant": "#434652",
            "outline-variant": "#c3c6d4",
            "tertiary-fixed-dim": "#96ccff",
            "on-tertiary": "#ffffff",
            "on-tertiary-fixed-variant": "#004a75",
            "surface-container": "#e7eeff",
            "inverse-on-surface": "#ecf1ff",
            "inverse-primary": "#b0c6ff",
            "tertiary-fixed": "#cee5ff",
            "background": "#f9f9ff",
            "surface-container-lowest": "#ffffff",
            "tertiary": "#00385a",
            "surface": "#f9f9ff",
            "surface-variant": "#d8e3fb",
            "on-primary-container": "#a1bbff",
            "on-tertiary-container": "#7fc3ff",
            "error-container": "#ffdad6",
            "secondary": "#165eae",
            "surface-container-low": "#f0f3ff",
            "on-primary-fixed-variant": "#00429c",
            "surface-container-highest": "#d8e3fb",
            "secondary-fixed-dim": "#a8c8ff",
            "tertiary-container": "#00507e",
            "error": "#ba1a1a",
            "on-primary-fixed": "#001945",
            "primary-container": "#0d47a1",
            "primary-fixed-dim": "#b0c6ff",
            "secondary-fixed": "#d5e3ff",
            "on-tertiary-fixed": "#001d32",
            "on-secondary-fixed-variant": "#00468a",
            "surface-tint": "#2b5bb5",
            "secondary-container": "#71aaff",
            "on-primary": "#ffffff",
            "outline": "#737783",
            "surface-container-high": "#dee8ff",
            "inverse-surface": "#263143",
            "surface-bright": "#f9f9ff"
          },
          "borderRadius": {
            "DEFAULT": "0.125rem",
            "lg": "0.25rem",
            "xl": "0.5rem",
            "full": "0.75rem"
          },
          "spacing": {
            "space-lg": "1.5rem",
            "space-2xl": "3rem",
            "space-2xs": "0.25rem",
            "gutter-desktop": "1.5rem",
            "space-xs": "0.5rem",
            "space-sm": "0.75rem",
            "space-xl": "2rem",
            "container-max": "1280px",
            "space-3xl": "4rem",
            "gutter-mobile": "1rem",
            "space-md": "1rem"
          },
          "fontFamily": {
            "headline-sm": ["Plus Jakarta Sans"],
            "label-lg": ["Plus Jakarta Sans"],
            "body-lg": ["Plus Jakarta Sans"],
            "headline-lg-mobile": ["Plus Jakarta Sans"],
            "body-sm": ["Plus Jakarta Sans"],
            "title-lg": ["Plus Jakarta Sans"],
            "display-hero-mobile": ["Plus Jakarta Sans"],
            "label-md": ["Plus Jakarta Sans"],
            "headline-md": ["Plus Jakarta Sans"],
            "body-md": ["Plus Jakarta Sans"],
            "display-hero": ["Plus Jakarta Sans"],
            "title-md": ["Plus Jakarta Sans"],
            "headline-lg": ["Plus Jakarta Sans"],
            "caption": ["Plus Jakarta Sans"]
          },
          "fontSize": {
            "headline-sm": ["20px", { "lineHeight": "28px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
            "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" }],
            "body-lg": ["18px", { "lineHeight": "28px", "letterSpacing": "0em", "fontWeight": "400" }],
            "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.015em", "fontWeight": "700" }],
            "body-sm": ["14px", { "lineHeight": "20px", "letterSpacing": "0em", "fontWeight": "400" }],
            "title-lg": ["18px", { "lineHeight": "26px", "letterSpacing": "-0.005em", "fontWeight": "600" }],
            "display-hero-mobile": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "800" }],
            "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" }],
            "headline-md": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.015em", "fontWeight": "700" }],
            "body-md": ["16px", { "lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "400" }],
            "display-hero": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.025em", "fontWeight": "800" }],
            "title-md": ["16px", { "lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "600" }],
            "headline-lg": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "caption": ["12px", { "lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "400" }]
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
<body class="bg-background text-on-surface font-body-md text-body-md antialiased min-h-screen flex overflow-x-hidden">

<!-- ==================== SIDEBAR COMPONENT ==================== -->
@include('admin.tik.partials.sidebar')

<!-- ==================== MAIN CONTENT WRAPPER ==================== -->
<div class="flex-1 flex flex-col ml-64 min-w-0 bg-background overflow-x-hidden">

<!-- ==================== TOP NAV BAR COMPONENT ==================== -->
@include('admin.partials.navbar')

<!-- ==================== MAIN PAGE BODY ==================== -->
<main class="flex-1 p-4 lg:p-6 w-full min-w-0">

<!-- Breadcrumb Navigation & Header Section -->

<section class="mb-6">

<div class="flex items-center gap-2 text-caption font-caption text-outline mb-2">

<span class="">SIMBANGDA</span>

<span class="material-symbols-outlined text-xs">chevron_right</span>

<span class="">Infrastruktur Jaringan &amp; Server</span>

<span class="material-symbols-outlined text-xs">chevron_right</span>

<span class="text-primary font-semibold">Pengujian Keamanan TIK &amp; Infrastruktur</span>

</div>

<div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 pb-4 border-b border-outline-variant">

<div>

<div class="flex items-center gap-3">

<h1 class="text-headline-sm font-headline-sm text-on-surface font-bold tracking-tight">

                Pengujian Kelaikan Infrastruktur Jaringan &amp; Server OPD

              </h1>



</div>

<p class="text-body-sm font-body-sm text-on-surface-variant mt-1">

              Validasi kepatuhan teknis level infrastruktur: Konfigurasi SSL/TLS, Port Firewall JITN/PDN, dan Kesiapan Deployment Server Aplikasi Pemerintah Daerah.

            </p>

</div>

<div class="flex items-center gap-3 flex-wrap">





</div>

</div>

</section>

<!-- 4 Quick Metrik KPI Cards -->
<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
<!-- KPI 1 -->
<div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/40 shadow-sm flex flex-col justify-between hover:border-primary/50 transition-all">
<div class="flex items-start justify-between">
<div>
<span class="text-label-md font-label-md text-on-surface-variant font-medium block">Total Server/Domain Diuji</span>
<h4 class="text-display-hero-mobile font-display-hero-mobile font-bold text-on-surface mt-1">42</h4>
</div>
<div class="w-11 h-11 rounded-lg bg-surface-container text-primary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[24px]">storage</span>
</div>
</div>
<div class="flex items-center gap-1.5 mt-4 pt-3 border-t border-outline-variant/20 text-xs text-outline">
<span class="material-symbols-outlined text-sm text-primary">lan</span>
<span>28 OPD Terakreditasi JITN</span>
</div>
</div>
<!-- KPI 2 -->
<div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/40 shadow-sm flex flex-col justify-between hover:border-primary/50 transition-all">
<div class="flex items-start justify-between">
<div>
<span class="text-label-md font-label-md text-on-surface-variant font-medium block">Lolos Kelaikan Jaringan &amp; SSL</span>
<h4 class="text-display-hero-mobile font-display-hero-mobile font-bold text-emerald-700 mt-1">35 </h4>
</div>
<div class="w-11 h-11 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[24px]">lock_open_right</span>
</div>
</div>
<div class="flex items-center gap-1.5 mt-4 pt-3 border-t border-outline-variant/20 text-xs text-emerald-700">
<span class="material-symbols-outlined text-sm">check_circle</span>
<span>83.3% Sesuai Standar TIK</span>
</div>
</div>
<!-- KPI 3 -->
<div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/40 shadow-sm flex flex-col justify-between hover:border-primary/50 transition-all">
<div class="flex items-start justify-between">
<div>
<span class="text-label-md font-label-md text-on-surface-variant font-medium block">Port Berbahaya Terdeteksi</span>
<h4 class="text-display-hero-mobile font-display-hero-mobile font-bold text-error mt-1">7</h4>
</div>
<div class="w-11 h-11 rounded-lg bg-red-50 text-error flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[24px]">fence</span>
</div>
</div>
<div class="flex items-center gap-1.5 mt-4 pt-3 border-t border-outline-variant/20 text-xs text-error">
<span class="material-symbols-outlined text-sm">warning</span>
<span>SSH (22) &amp; DB (3306) Terbuka</span>
</div>
</div>

s<!-- KPI 4 -->
<div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/40 shadow-sm flex flex-col justify-between hover:border-primary/50 transition-all">
<div class="flex items-start justify-between">
<div>
<span class="text-label-md font-label-md text-on-surface-variant font-medium block">Kesiapan Integrasi PDN</span>
<h4 class="text-display-hero-mobile font-display-hero-mobile font-bold text-primary mt-1">91</h4>
</div>
<div class="w-11 h-11 rounded-lg bg-surface-container text-primary flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-[24px]">cloud_sync</span>
</div>
</div>
<div class="flex items-center gap-1.5 mt-4 pt-3 border-t border-outline-variant/20 text-xs text-primary">
<span class="material-symbols-outlined text-sm">cloud_done</span>
<span>Pusat Data Nasional Kominfo</span>
</div>
</div>
</section>

<!-- Main Operational Section: Form Cepat & Checklist Verifikasi -->

<section class="grid grid-cols-1 lg:grid-cols-12 gap-6 mb-8">

<!-- Left: Form Uji Cepat Server OPD (5 Cols) -->



<!-- Right: Checklist Kelaikan Dasar Infrastruktur TIK (7 Cols) -->



</section>

<!-- Section Tabel Pemeriksaan Keamanan Server OPD -->

<section class="bg-surface-container-lowest border border-outline-variant/40 rounded-xl p-5 shadow-sm overflow-hidden">

<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 pb-4 mb-4 border-b border-outline-variant">

<div>

<h3 class="text-title-lg font-title-lg text-on-surface font-bold">Daftar Hasil Pemeriksaan Keamanan Server &amp; Infrastruktur OPD</h3>

<p class="text-body-sm font-body-sm text-on-surface-variant">Log status kelaikan operasional server di lingkungan Jaringan Intra Pemerintah Daerah (JITN) Riau</p>

</div>

<div class="flex items-center gap-2">

<div class="relative">

<span class="material-symbols-outlined absolute left-2.5 top-2 text-outline text-lg">search</span>

<input class="pl-8 pr-3 py-1.5 text-body-sm font-body-sm border border-outline-variant rounded focus:border-secondary focus:ring-1 focus:ring-secondary w-56" placeholder="Cari aplikasi atau OPD..." type="text">

</div>

<button class="p-1.5 border border-outline-variant rounded hover:bg-surface text-on-surface-variant" title="Filter Status">

<span class="material-symbols-outlined text-lg">filter_list</span>

</button>

</div>

</div>

<!-- Table Container -->

<div class="overflow-x-auto">

<table class="w-full text-left border-collapse">

<thead>

<tr class="bg-surface border-b border-outline-variant text-caption font-caption text-on-surface-variant uppercase tracking-wider">

<th class="py-2.5 px-3 font-semibold">Nama Aplikasi &amp; OPD</th>

<th class="py-2.5 px-3 font-semibold">Domain / Alamat IP Server</th>

<th class="py-2.5 px-3 font-semibold">Status SSL/TLS</th>

<th class="py-2.5 px-3 font-semibold">Status Port Jaringan</th>

<th class="py-2.5 px-3 font-semibold">Kelaikan Infrastruktur</th>

<th class="py-2.5 px-3 font-semibold text-right">Aksi Tindakan</th>

</tr>

</thead>

<tbody class="divide-y divide-outline-variant text-body-sm font-body-sm">

<!-- Row 1: SIPPD Pajak (Lolos) -->

<tr class="hover:bg-surface-container-low transition-colors">

<td class="py-3 px-3">

<div class="font-title-md font-semibold text-on-surface">SIPPD Pajak Daerah</div>

<div class="text-caption font-caption text-on-surface-variant">Badan Pendapatan Daerah (Bapenda)</div>

</td>

<td class="py-3 px-3 font-mono text-xs">

<div class="text-primary font-semibold">sippd.riau.go.id</div>

<div class="text-outline">IP: 103.111.201.45 (VM-JITN-01)</div>

</td>

<td class="py-3 px-3">

<span class="inline-flex items-center gap-1 text-xs font-medium px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 border border-emerald-200">

<span class="material-symbols-outlined text-xs">lock</span>

                    Valid (A+) • Exp: Nov 2025

                  </span>

</td>

<td class="py-3 px-3">

<span class="inline-flex items-center gap-1 text-xs font-medium px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 border border-emerald-200">

<span class="material-symbols-outlined text-xs">shield</span>

                    Port Aman (Hanya 80, 443)

                  </span>

</td>

<td class="py-3 px-3">

<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-label-md font-label-md font-semibold bg-emerald-100 text-emerald-900 border border-emerald-300">

<span class="w-2 h-2 rounded-full bg-emerald-600"></span>

                    Lolos Kelaikan

                  </span>

</td>

<td class="py-3 px-3 text-right">

<div class="inline-flex items-center gap-1">

<button class="px-2.5 py-1 text-xs font-medium text-primary bg-surface-container hover:bg-surface-container-high rounded transition-colors flex items-center gap-1" title="Cetak Berita Acara">

<span class="material-symbols-outlined text-xs">description</span>

                      Berita Acara

                    </button>

<button class="p-1 text-on-surface-variant hover:text-primary rounded">

<span class="material-symbols-outlined text-base">more_vert</span>

</button>

</div>

</td>

</tr>

<!-- Row 2: e-Puskesmas (Perlu Tindakan) -->

<tr class="hover:bg-surface-container-low transition-colors bg-red-50/30">

<td class="py-3 px-3">

<div class="font-title-md font-semibold text-on-surface">e-Puskesmas Riau</div>

<div class="text-caption font-caption text-on-surface-variant">Dinas Kesehatan (Dinkes)</div>

</td>

<td class="py-3 px-3 font-mono text-xs">

<div class="text-primary font-semibold">epuskesmas.riau.go.id</div>

<div class="text-outline">IP: 10.14.22.10 (On-Premises Dinkes)</div>

</td>

<td class="py-3 px-3">

<span class="inline-flex items-center gap-1 text-xs font-medium px-2 py-0.5 rounded bg-amber-50 text-amber-800 border border-amber-200">

<span class="material-symbols-outlined text-xs">warning</span>

                    Sertifikat Expired 12 Hari

                  </span>

</td>

<td class="py-3 px-3">

<span class="inline-flex items-center gap-1 text-xs font-medium px-2 py-0.5 rounded bg-red-100 text-red-800 border border-red-200 font-semibold">

<span class="material-symbols-outlined text-xs">gpp_bad</span>

                    Port 22 (SSH) Terbuka Publik

                  </span>

</td>

<td class="py-3 px-3">

<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-label-md font-label-md font-semibold bg-red-100 text-red-900 border border-red-300">

<span class="w-2 h-2 rounded-full bg-red-600 animate-pulse"></span>

                    Perlu Tindakan

                  </span>

</td>

<td class="py-3 px-3 text-right">

<div class="inline-flex items-center gap-1">

<button class="px-2.5 py-1 text-xs font-medium text-white bg-error hover:bg-red-800 rounded transition-colors flex items-center gap-1 shadow-sm">

<span class="material-symbols-outlined text-xs">security_update_warning</span>

                      Kirim Tiket Solusi

                    </button>

<button class="p-1 text-on-surface-variant hover:text-primary rounded">

<span class="material-symbols-outlined text-base">more_vert</span>

</button>

</div>

</td>

</tr>

<!-- Row 3: SIMRS Arifin Achmad (Lolos) -->

<tr class="hover:bg-surface-container-low transition-colors">

<td class="py-3 px-3">

<div class="font-title-md font-semibold text-on-surface">SIMRS Terintegrasi BPJS</div>

<div class="text-caption font-caption text-on-surface-variant">RSUD Arifin Achmad Provinsi Riau</div>

</td>

<td class="py-3 px-3 font-mono text-xs">

<div class="text-primary font-semibold">simrs.rsudarifinachmad.riau.go.id</div>

<div class="text-outline">IP: 103.111.201.88 (Pusat Data Lancang Kuning)</div>

</td>

<td class="py-3 px-3">

<span class="inline-flex items-center gap-1 text-xs font-medium px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 border border-emerald-200">

<span class="material-symbols-outlined text-xs">lock</span>

                    Valid (A) TLS 1.3

                  </span>

</td>

<td class="py-3 px-3">

<span class="inline-flex items-center gap-1 text-xs font-medium px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 border border-emerald-200">

<span class="material-symbols-outlined text-xs">shield</span>

                    Port Aman (WAF Aktif)

                  </span>

</td>

<td class="py-3 px-3">

<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-label-md font-label-md font-semibold bg-emerald-100 text-emerald-900 border border-emerald-300">

<span class="w-2 h-2 rounded-full bg-emerald-600"></span>

                    Lolos Kelaikan

                  </span>

</td>

<td class="py-3 px-3 text-right">

<div class="inline-flex items-center gap-1">

<button class="px-2.5 py-1 text-xs font-medium text-primary bg-surface-container hover:bg-surface-container-high rounded transition-colors flex items-center gap-1">

<span class="material-symbols-outlined text-xs">description</span>

                      Berita Acara

                    </button>

<button class="p-1 text-on-surface-variant hover:text-primary rounded">

<span class="material-symbols-outlined text-base">more_vert</span>

</button>

</div>

</td>

</tr>

<!-- Row 4: SIMPEG ASN BKD (Lolos Kelaikan) -->

<tr class="hover:bg-surface-container-low transition-colors">

<td class="py-3 px-3">

<div class="font-title-md font-semibold text-on-surface">SIMPEG Kepegawaian ASN</div>

<div class="text-caption font-caption text-on-surface-variant">Badan Kepegawaian Daerah (BKD)</div>

</td>

<td class="py-3 px-3 font-mono text-xs">

<div class="text-primary font-semibold">simpeg.riau.go.id</div>

<div class="text-outline">IP: 103.111.201.12 (Pusat Data Diskominfo)</div>

</td>

<td class="py-3 px-3">

<span class="inline-flex items-center gap-1 text-xs font-medium px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 border border-emerald-200">

<span class="material-symbols-outlined text-xs">lock</span>

                    Valid (A+) TLS 1.3

                  </span>

</td>

<td class="py-3 px-3">

<span class="inline-flex items-center gap-1 text-xs font-medium px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 border border-emerald-200">

<span class="material-symbols-outlined text-xs">shield</span>

                    Port Aman • VPN Auth

                  </span>

</td>

<td class="py-3 px-3">

<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-label-md font-label-md font-semibold bg-emerald-100 text-emerald-900 border border-emerald-300">

<span class="w-2 h-2 rounded-full bg-emerald-600"></span>

                    Lolos Kelaikan

                  </span>

</td>

<td class="py-3 px-3 text-right">

<div class="inline-flex items-center gap-1">

<button class="px-2.5 py-1 text-xs font-medium text-primary bg-surface-container hover:bg-surface-container-high rounded transition-colors flex items-center gap-1">

<span class="material-symbols-outlined text-xs">description</span>

                      Berita Acara

                    </button>

<button class="p-1 text-on-surface-variant hover:text-primary rounded">

<span class="material-symbols-outlined text-base">more_vert</span>

</button>

</div>

</td>

</tr>

<!-- Row 5: Portal SPMB Disdik (Perlu Tindakan) -->

<tr class="hover:bg-surface-container-low transition-colors bg-amber-50/20">

<td class="py-3 px-3">

<div class="font-title-md font-semibold text-on-surface">PPDB / SPMB Online SMA/SMK</div>

<div class="text-caption font-caption text-on-surface-variant">Dinas Pendidikan (Disdik)</div>

</td>

<td class="py-3 px-3 font-mono text-xs">

<div class="text-primary font-semibold">ppdb.riau.go.id</div>

<div class="text-outline">IP: 103.144.170.99 (Cloud AWS Secondary)</div>

</td>

<td class="py-3 px-3">

<span class="inline-flex items-center gap-1 text-xs font-medium px-2 py-0.5 rounded bg-emerald-50 text-emerald-800 border border-emerald-200">

<span class="material-symbols-outlined text-xs">lock</span>

                    Valid (A) TLS 1.3

                  </span>

</td>

<td class="py-3 px-3">

<span class="inline-flex items-center gap-1 text-xs font-medium px-2 py-0.5 rounded bg-amber-100 text-amber-900 border border-amber-200">

<span class="material-symbols-outlined text-xs">warning</span>

                    Port 8080 (Dev) Terbuka

                  </span>

</td>

<td class="py-3 px-3">

<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded text-label-md font-label-md font-semibold bg-amber-100 text-amber-900 border border-amber-300">

<span class="w-2 h-2 rounded-full bg-amber-600"></span>

                    Perlu Tindakan

                  </span>

</td>

<td class="py-3 px-3 text-right">

<div class="inline-flex items-center gap-1">

<button class="px-2.5 py-1 text-xs font-medium text-amber-900 bg-amber-100 hover:bg-amber-200 rounded transition-colors flex items-center gap-1">

<span class="material-symbols-outlined text-xs">rule</span>

                      Tutup Port 8080

                    </button>

<button class="p-1 text-on-surface-variant hover:text-primary rounded">

<span class="material-symbols-outlined text-base">more_vert</span>

</button>

</div>

</td>

</tr>

</tbody>

</table>

</div>

<!-- Table Footer / Pagination Simple -->

<div class="flex flex-col sm:flex-row items-center justify-between gap-3 pt-4 mt-2 border-t border-outline-variant text-caption font-caption text-on-surface-variant">

<div class="">

            Menampilkan <span class="font-semibold text-on-surface">5</span> dari <span class="font-semibold text-on-surface">42</span> server aplikasi terdaftar di JITN Riau

          </div>

<div class="flex items-center gap-1">

<button class="px-2 py-1 rounded border border-outline-variant text-outline bg-surface cursor-not-allowed text-xs">Sebelumnya</button>

<button class="px-2.5 py-1 rounded bg-primary text-white text-xs font-bold">1</button>

<button class="px-2.5 py-1 rounded border border-outline-variant hover:bg-surface text-xs">2</button>

<button class="px-2.5 py-1 rounded border border-outline-variant hover:bg-surface text-xs">3</button>

<button class="px-2 py-1 rounded border border-outline-variant hover:bg-surface text-xs">Selanjutnya</button>

</div>

</div>

</section>

<!-- Institutional Footer Note -->

<footer class="mt-8 pt-4 border-t border-outline-variant flex flex-col md:flex-row items-center justify-between text-caption font-caption text-on-surface-variant gap-2">

<div class="flex items-center gap-2">

<span class="material-symbols-outlined text-primary text-base">verified_user</span>

<span class="">Standar Pengujian: SE Sekda Provinsi Riau No. 045/Diskominfo/2024 tentang Kelaikan Teknis Sistem Elektronik OPD.</span>

</div>

<div class="">

          &copy; 2025 Pemerintah Provinsi Riau &bull; Bidang TIK dan Penyelenggaraan E-Government

        </div>

</footer>

</main>
</div>

</body>
</html>
