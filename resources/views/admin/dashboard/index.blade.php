<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>SIMBANGDA RIAU - Dashboard Analitik Tim Teknis Diskominfo</title>
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
<body class="bg-background text-on-surface font-body-md text-body-md antialiased min-h-screen flex">

<!-- ==================== SIDEBAR COMPONENT ==================== -->
@include('admin.partials.sidebar')

<!-- ==================== MAIN CONTENT WRAPPER ==================== -->
<div class="flex-1 flex flex-col ml-64 min-w-0 bg-background">

<!-- ==================== TOP NAV BAR COMPONENT ==================== -->
@include('admin.partials.navbar')

<!-- ==================== MAIN PAGE BODY ==================== -->
<main class="flex-1 p-6 lg:p-8 space-y-6 max-w-7xl">
<!-- Sapaan & Quick Action Bar (Civic Announcement Banner Pattern) -->
<section class="relative overflow-hidden rounded-xl bg-surface-container-lowest border border-outline-variant/30 p-6 text-on-surface shadow-xs">
<div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-4">
    <div class="space-y-1">
        <div class="flex items-center gap-2">
            <span class="px-2.5 py-0.5 rounded-full text-caption font-caption font-semibold bg-surface-container text-primary border border-outline-variant/30">Pemprov Riau</span>
            <span class="text-caption font-caption text-outline">Selasa, 11 Maret 2025</span>
        </div>
        <h3 class="text-headline-md font-headline-md text-primary tracking-tight font-bold">Selamat Datang</h3>
    </div>
    <div class="flex items-center gap-2.5 bg-surface-container-low px-3.5 py-2 rounded-lg border border-outline-variant/40 shrink-0">
        <div class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></div>

    </div>
</div>
<div class="absolute -right-8 -bottom-10 opacity-10 pointer-events-none text-outline">
<span class="material-symbols-outlined text-[160px]" data-icon="account_balance">account_balance</span>
</div>
</section>

<!-- 4 Summary Statistics Cards (Bento Metric Layout) -->
<section aria-label="Ringkasan Statistik" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
<!-- Card 1: Total Pengajuan Proposal -->
<div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/40 shadow-sm flex flex-col justify-between hover:border-secondary transition-all">
<div class="flex items-start justify-between">
<div>
<span class="text-label-md font-label-md text-on-surface-variant">Total Pengajuan Proposal</span>
<h4 class="text-display-hero-mobile font-display-hero-mobile text-primary mt-1">142</h4>
</div>
<div class="w-11 h-11 rounded-lg bg-surface-container flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-[24px]" data-icon="folder_copy">folder_copy</span>
</div>
</div>
<div class="flex items-center gap-1.5 mt-4 pt-3 border-t border-outline-variant/20"><span class="material-symbols-outlined text-[16px] text-emerald-600" data-icon="trending_up">trending_up</span><span class="text-caption font-caption font-bold text-emerald-600">+12%</span><span class="text-caption font-caption text-outline">bln lalu</span></div>
</div>
<!-- Card 2: Proposal Menunggu Penilaian -->
<div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/40 shadow-sm flex flex-col justify-between hover:border-secondary transition-all">
<div class="flex items-start justify-between">
<div>
<span class="text-label-md font-label-md text-on-surface-variant">Menunggu Penilaian</span>
<h4 class="text-display-hero-mobile font-display-hero-mobile text-amber-700 mt-1">14</h4>
</div>
<div class="w-11 h-11 rounded-lg bg-amber-50 flex items-center justify-center text-amber-700 shrink-0">
<span class="material-symbols-outlined text-[24px]" data-icon="hourglass_top">hourglass_top</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-outline-variant/20"><span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-caption font-caption font-semibold bg-amber-100/70 text-amber-800 border border-amber-300/50"><span class="w-1.5 h-1.5 rounded-full bg-amber-600"></span>Perlu Review</span></div>
</div>
<!-- Card 3: Proyek Berjalan -->
<div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/40 shadow-sm flex flex-col justify-between hover:border-secondary transition-all">
<div class="flex items-start justify-between">
<div>
<span class="text-label-md font-label-md text-on-surface-variant">Proyek Berjalan</span>
<h4 class="text-display-hero-mobile font-display-hero-mobile text-primary mt-1">28</h4>
</div>
<div class="w-11 h-11 rounded-lg bg-surface-container flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-[24px]" data-icon="deployed_code">deployed_code</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-outline-variant/20"><span class="text-caption font-caption text-on-surface-variant flex items-center gap-1"><span class="material-symbols-outlined text-[15px] text-secondary" data-icon="alt_route">alt_route</span>Rancang &amp; Integrasi</span></div>
</div>
<!-- Card 4: Aplikasi Selesai Diuji -->
<div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/40 shadow-sm flex flex-col justify-between hover:border-secondary transition-all">
<div class="flex items-start justify-between">
<div>
<span class="text-label-md font-label-md text-on-surface-variant">Aplikasi Selesai Diuji</span>
<h4 class="text-display-hero-mobile font-display-hero-mobile text-emerald-700 mt-1">65</h4>
</div>
<div class="w-11 h-11 rounded-lg bg-emerald-50 flex items-center justify-center text-emerald-700 shrink-0">
<span class="material-symbols-outlined text-[24px]" data-icon="verified" data-weight="fill" style="font-variation-settings: 'FILL' 1;">verified</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-outline-variant/20"><span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-caption font-caption font-semibold bg-emerald-100/70 text-emerald-800 border border-emerald-300/50"><span class="material-symbols-outlined text-[14px]" data-icon="check_circle">check_circle</span>Lolos Pengujian</span></div>
</div>
</section>

<!-- ==================== TABEL PENGAJUAN PROPOSAL OPD TERBARU ==================== -->
<section class="bg-surface-container-lowest rounded-xl border border-outline-variant/40 shadow-sm overflow-hidden">
<!-- Table Control Header -->
<div class="p-5 border-b border-outline-variant/30 flex flex-col lg:flex-row lg:items-center justify-between gap-4">
<div class="space-y-0.5"><h3 class="text-headline-sm font-headline-sm text-primary flex items-center gap-2"><span class="material-symbols-outlined text-[22px] text-primary" data-icon="assignment">assignment</span>Pengajuan Proposal Terbaru</h3></div>
<!-- Controls: Filters & Search Input -->
<div class="flex flex-wrap items-center gap-3">
<!-- Filter Status Chips -->
<div class="inline-flex p-1 bg-surface-container-low rounded-lg border border-outline-variant/30 text-caption font-caption">
<button class="px-3 py-1 font-semibold rounded bg-surface-container-lowest text-primary shadow-xs">Semua (142)</button>
<button class="px-3 py-1 font-medium text-on-surface-variant hover:text-primary">Menunggu (14)</button>
<button class="px-3 py-1 font-medium text-on-surface-variant hover:text-primary">Uji VAPT (8)</button>
<button class="px-3 py-1 font-medium text-on-surface-variant hover:text-primary">Disetujui (120)</button>
</div>
<!-- Search OPD Input -->
<div class="relative w-56">
<span class="material-symbols-outlined absolute left-2.5 top-2 text-outline text-[16px]" data-icon="search">search</span>
<input class="w-full pl-8 pr-3 py-1 text-caption font-caption bg-surface-container-lowest border border-outline-variant/50 rounded text-on-surface placeholder:text-outline focus:outline-none focus:border-secondary" placeholder="Filter OPD / Sistem..." type="text">
</div>
<!-- Refresh Button -->
<button class="p-1.5 text-on-surface-variant hover:text-primary border border-outline-variant/40 rounded hover:bg-surface-container-low transition-colors" title="Muat Ulang Data">
<span class="material-symbols-outlined text-[18px]" data-icon="refresh">refresh</span>
</button>
</div>
</div>
<!-- Data Table -->
<div class="overflow-x-auto">
<table aria-label="Tabel Pengajuan Proposal OPD" class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant/30 text-caption font-caption text-on-surface font-bold uppercase tracking-wider">
<th class="py-3 px-4" scope="col">No. Tiket</th>
<th class="py-3 px-4" scope="col">Asal OPD</th>
<th class="py-3 px-4" scope="col">Nama Aplikasi</th>
<th class="py-3 px-4" scope="col">Platform / Tipe</th>
<th class="py-3 px-4" scope="col">Tgl Masuk &amp; SLA</th>
<th class="py-3 px-4" scope="col">Status Penilaian</th>
<th class="py-3 px-4 text-center" scope="col">Aksi Teknis</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/20 text-body-sm font-body-sm text-on-surface">
<!-- Row 1: Bapenda -->
<tr class="hover:bg-surface-container-low/60 transition-colors"><td class="py-3.5 px-4 font-mono font-semibold text-primary text-caption">TIK-RIAU-2025-089</td><td class="py-3.5 px-4"><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px] text-secondary" data-icon="domain">domain</span><span class="font-semibold block text-on-surface">Bapenda Riau</span></div></td><td class="py-3.5 px-4"><span class="font-bold text-primary block">SIPPD Pajak Daerah v2</span><span class="text-caption font-caption text-on-surface-variant">Sistem Pembayaran PKB &amp; BBNKB</span></td><td class="py-3.5 px-4"><span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-caption font-caption bg-surface-container text-tertiary font-medium"><span class="material-symbols-outlined text-[13px]" data-icon="cloud">cloud</span>Web Cloud</span></td><td class="py-3.5 px-4"><span class="block text-caption font-caption font-medium">10 Mar 2025</span><span class="text-caption font-caption text-amber-700 font-semibold flex items-center gap-1"><span class="material-symbols-outlined text-[13px]" data-icon="alarm">alarm</span>SLA: 2 Hari</span></td><td class="py-3.5 px-4"><span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-caption font-caption font-bold bg-amber-50 text-amber-800 border border-amber-200"><span class="w-1.5 h-1.5 rounded-full bg-amber-600"></span>Menunggu Penilaian</span></td><td class="py-3.5 px-4 text-center"><div class="inline-flex items-center gap-1.5"><button class="px-3 py-1 bg-primary text-on-primary hover:bg-secondary rounded text-caption font-caption font-semibold transition-colors shadow-xs">Review</button><button class="p-1 text-outline hover:text-primary rounded hover:bg-surface-container" title="Detail"><span class="material-symbols-outlined text-[18px]" data-icon="more_vert">more_vert</span></button></div></td></tr>
<!-- Row 2: Dinas Kesehatan -->
<tr class="hover:bg-surface-container-low/60 transition-colors"><td class="py-3.5 px-4 font-mono font-semibold text-primary text-caption">TIK-RIAU-2025-088</td><td class="py-3.5 px-4"><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px] text-secondary" data-icon="local_hospital">local_hospital</span><span class="font-semibold block text-on-surface">Dinas Kesehatan</span></div></td><td class="py-3.5 px-4"><span class="font-bold text-primary block">e-Puskesmas Terpadu</span><span class="text-caption font-caption text-on-surface-variant">Integrasi Rekam Medis</span></td><td class="py-3.5 px-4"><span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-caption font-caption bg-secondary-fixed text-on-secondary-fixed-variant font-medium"><span class="material-symbols-outlined text-[13px]" data-icon="smartphone">smartphone</span>Mobile &amp; Web</span></td><td class="py-3.5 px-4"><span class="block text-caption font-caption font-medium">08 Mar 2025</span><span class="text-caption font-caption text-emerald-700 font-semibold flex items-center gap-1"><span class="material-symbols-outlined text-[13px]" data-icon="check">check</span>Tepat Waktu</span></td><td class="py-3.5 px-4"><span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-caption font-caption font-bold bg-blue-50 text-blue-800 border border-blue-200"><span class="w-1.5 h-1.5 rounded-full bg-blue-600 animate-pulse"></span>Uji VAPT</span></td><td class="py-3.5 px-4 text-center"><div class="inline-flex items-center gap-1.5"><button class="px-3 py-1 bg-primary text-on-primary hover:bg-secondary rounded text-caption font-caption font-semibold transition-colors shadow-xs">Review</button><button class="p-1 text-outline hover:text-primary rounded hover:bg-surface-container" title="Detail"><span class="material-symbols-outlined text-[18px]" data-icon="more_vert">more_vert</span></button></div></td></tr>
<!-- Row 3: Dinas Pendidikan -->
<tr class="hover:bg-surface-container-low/60 transition-colors"><td class="py-3.5 px-4 font-mono font-semibold text-primary text-caption">TIK-RIAU-2025-087</td><td class="py-3.5 px-4"><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px] text-secondary" data-icon="school">school</span><span class="font-semibold block text-on-surface">Dinas Pendidikan</span></div></td><td class="py-3.5 px-4"><span class="font-bold text-primary block">Si-Pelajar Cerdas</span><span class="text-caption font-caption text-on-surface-variant">Portal Beasiswa Prestasi</span></td><td class="py-3.5 px-4"><span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-caption font-caption bg-surface-container text-tertiary font-medium"><span class="material-symbols-outlined text-[13px]" data-icon="cloud">cloud</span>Web Portal</span></td><td class="py-3.5 px-4"><span class="block text-caption font-caption font-medium">05 Mar 2025</span><span class="text-caption font-caption text-emerald-700 font-semibold flex items-center gap-1"><span class="material-symbols-outlined text-[13px]" data-icon="check">check</span>Lolos Berkas</span></td><td class="py-3.5 px-4"><span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-caption font-caption font-bold bg-indigo-50 text-indigo-800 border border-indigo-200"><span class="w-1.5 h-1.5 rounded-full bg-indigo-600"></span>Review Arsitektur</span></td><td class="py-3.5 px-4 text-center"><div class="inline-flex items-center gap-1.5"><button class="px-3 py-1 bg-primary text-on-primary hover:bg-secondary rounded text-caption font-caption font-semibold transition-colors shadow-xs">Review</button><button class="p-1 text-outline hover:text-primary rounded hover:bg-surface-container" title="Detail"><span class="material-symbols-outlined text-[18px]" data-icon="more_vert">more_vert</span></button></div></td></tr>
<!-- Row 4: RSUD Arifin Achmad -->
<tr class="hover:bg-surface-container-low/60 transition-colors"><td class="py-3.5 px-4 font-mono font-semibold text-primary text-caption">TIK-RIAU-2025-086</td><td class="py-3.5 px-4"><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px] text-secondary" data-icon="emergency">emergency</span><span class="font-semibold block text-on-surface">RSUD Arifin Achmad</span></div></td><td class="py-3.5 px-4"><span class="font-bold text-primary block">SIMRS BPJS</span><span class="text-caption font-caption text-on-surface-variant">API Antrean Poli &amp; Farmasi</span></td><td class="py-3.5 px-4"><span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-caption font-caption bg-surface-variant text-on-surface font-medium"><span class="material-symbols-outlined text-[13px]" data-icon="api">api</span>Layanan API</span></td><td class="py-3.5 px-4"><span class="block text-caption font-caption font-medium">04 Mar 2025</span><span class="text-caption font-caption text-error font-semibold flex items-center gap-1"><span class="material-symbols-outlined text-[13px]" data-icon="warning">warning</span>SLA Lewat</span></td><td class="py-3.5 px-4"><span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-caption font-caption font-bold bg-rose-50 text-rose-800 border border-rose-200"><span class="w-1.5 h-1.5 rounded-full bg-rose-600"></span>Revisi Dokumen</span></td><td class="py-3.5 px-4 text-center"><div class="inline-flex items-center gap-1.5"><button class="px-3 py-1 bg-primary text-on-primary hover:bg-secondary rounded text-caption font-caption font-semibold transition-colors shadow-xs">Review</button><button class="p-1 text-outline hover:text-primary rounded hover:bg-surface-container" title="Detail"><span class="material-symbols-outlined text-[18px]" data-icon="more_vert">more_vert</span></button></div></td></tr>
<!-- Row 5: Dinas PUPR -->
<tr class="hover:bg-surface-container-low/60 transition-colors"><td class="py-3.5 px-4 font-mono font-semibold text-primary text-caption">TIK-RIAU-2025-085</td><td class="py-3.5 px-4"><div class="flex items-center gap-2"><span class="material-symbols-outlined text-[18px] text-secondary" data-icon="construction">construction</span><span class="font-semibold block text-on-surface">Dinas PUPR PKPP</span></div></td><td class="py-3.5 px-4"><span class="font-bold text-primary block">GIS Infrastruktur</span><span class="text-caption font-caption text-on-surface-variant">Pemetaan Ruas Jalan</span></td><td class="py-3.5 px-4"><span class="inline-flex items-center gap-1 px-2 py-0.5 rounded text-caption font-caption bg-surface-container text-tertiary font-medium"><span class="material-symbols-outlined text-[13px]" data-icon="map">map</span>Web GIS</span></td><td class="py-3.5 px-4"><span class="block text-caption font-caption font-medium">01 Mar 2025</span><span class="text-caption font-caption text-emerald-700 font-semibold flex items-center gap-1"><span class="material-symbols-outlined text-[13px]" data-icon="check">check</span>Terverifikasi</span></td><td class="py-3.5 px-4"><span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-caption font-caption font-bold bg-amber-50 text-amber-800 border border-amber-200"><span class="w-1.5 h-1.5 rounded-full bg-amber-600"></span>Menunggu Penilaian</span></td><td class="py-3.5 px-4 text-center"><div class="inline-flex items-center gap-1.5"><button class="px-3 py-1 bg-primary text-on-primary hover:bg-secondary rounded text-caption font-caption font-semibold transition-colors shadow-xs">Review</button><button class="p-1 text-outline hover:text-primary rounded hover:bg-surface-container" title="Detail"><span class="material-symbols-outlined text-[18px]" data-icon="more_vert">more_vert</span></button></div></td></tr>
</tbody>
</table>
</div>

<!-- Table Pagination & Footer -->
<div class="px-5 py-4 border-t border-outline-variant/30 flex flex-col sm:flex-row sm:items-center justify-between gap-3 bg-surface-container-lowest">
<div class="text-caption font-caption text-on-surface-variant">Menampilkan <span class="font-bold text-on-surface">1 - 5</span> dari <span class="font-bold text-on-surface">14</span> pengajuan</div>
<div class="flex items-center gap-1">
<button class="px-2.5 py-1.5 rounded border border-outline-variant/40 text-caption font-caption text-outline hover:bg-surface-container disabled:opacity-40" disabled="">
<span class="material-symbols-outlined text-[16px]" data-icon="chevron_left">chevron_left</span>
</button>
<button class="px-3 py-1 rounded text-caption font-caption font-bold bg-primary text-on-primary">1</button>
<button class="px-3 py-1 rounded text-caption font-caption text-on-surface-variant hover:bg-surface-container">2</button>
<button class="px-3 py-1 rounded text-caption font-caption text-on-surface-variant hover:bg-surface-container">3</button>
<button class="px-2.5 py-1.5 rounded border border-outline-variant/40 text-caption font-caption text-on-surface-variant hover:bg-surface-container">
<span class="material-symbols-outlined text-[16px]" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</div>
</section>

<!-- Institutional Notice / Disclaimer Footer -->
<footer class="pt-4 pb-6 flex flex-col sm:flex-row items-center justify-between text-caption font-caption text-outline border-t border-outline-variant/20 gap-2">
<div class="flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-primary" data-icon="security">security</span><span>© 2025 Diskominfo Riau</span></div>
<div class="flex items-center gap-4 text-secondary font-medium">
<a class="hover:underline" href="#kebijakan">Kebijakan Privasi SPBE</a>
<a class="hover:underline" href="#standar">Standar VAPT &amp; ISO 27001</a>
<a class="hover:underline" href="#kontak">Helpdesk Diskominfo</a>
</div>
</footer>
</main>
</div>

</body>
</html>

