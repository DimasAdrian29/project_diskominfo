<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>SIMBANGDA RIAU - Dashboard Admin TIK</title>
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
<main class="flex-1 flex flex-col min-w-0 bg-background w-full">
<!-- MAIN PAGE CONTENT CONTAINER -->

<div class="p-4 lg:p-6 w-full min-w-0 space-y-6">

<!-- BREADCRUMB & PAGE HEADER WITH OFFICIAL ESELON III BADGE -->

<div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">

<div class="space-y-2">

<!-- Breadcrumb Navigation -->

<nav aria-label="Breadcrumb" class="flex items-center gap-2 text-xs font-medium text-outline">

<span class="hover:text-primary cursor-pointer">SIMBANGDA</span>

<span class="material-symbols-outlined text-xs" data-icon="chevron_right">chevron_right</span>

<span class="hover:text-primary cursor-pointer">Rekomendasi Infrastruktur</span>

<span class="material-symbols-outlined text-xs" data-icon="chevron_right">chevron_right</span>

<span class="text-primary font-semibold">Antrean Persetujuan Domain &amp; Hosting</span>

</nav>

<!-- Page Title & Authority Badge -->

<div class="flex flex-wrap items-center gap-3">

<h1 class="font-headline-md text-headline-md font-bold text-on-surface tracking-tight">

                Persetujuan Rekomendasi Domain &amp; Hosting

              </h1>

<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded border border-amber-300 bg-amber-50 text-amber-900 font-label-md text-label-md font-bold shadow-2xs">

<span class="material-symbols-outlined text-sm text-amber-700" data-icon="military_tech">military_tech</span>

                Kewenangan Eselon III

              </span>

</div>

<!-- Page Description -->

<p class="font-body-sm text-body-sm text-on-surface-variant max-w-3xl leading-relaxed">

              Otorisasi kelaikan teknis permohonan domain riau.go.id, sub-domain OPD, dan alokasi sumber daya hosting Pusat Data Lancang Kuning / PDN oleh Kepala Bidang.

            </p>

</div>

<!-- Quick Actions & Date Stamp -->

<div class="flex flex-col sm:flex-row items-end sm:items-center gap-3 shrink-0">

<div class="text-right hidden sm:block">

<div class="font-label-md text-label-md font-semibold text-on-surface">Sabtu, 25 Oktober 2025</div>

<div class="font-caption text-caption text-on-surface-variant">Zona Waktu: WIB (GMT+7)</div>

</div>

<button class="flex items-center gap-2 bg-surface-container-lowest text-primary border border-outline-variant hover:bg-surface-container-low px-4 py-2 rounded-md font-label-md text-label-md font-semibold shadow-sm transition-all duration-150">

<span class="material-symbols-outlined text-base" data-icon="ios_share">ios_share</span>

<span>Ekspor Lembar Disposisi</span>

</button>

</div>

</div>

<!-- 4 SUMMARY METRIC CARDS (BENTO-STYLE CLEAN CARDS) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<!-- Card 1: Menunggu Persetujuan -->
<div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/40 shadow-sm flex flex-col justify-between hover:border-primary/50 transition-all">
<div class="flex items-start justify-between">
<div>
<span class="text-label-md font-label-md text-on-surface-variant font-medium block">Menunggu Persetujuan</span>
<h4 class="text-display-hero-mobile font-display-hero-mobile font-bold text-amber-700 mt-1">5</h4>
</div>
<div class="w-11 h-11 rounded-lg bg-amber-50 flex items-center justify-center text-amber-700 shrink-0">
<span class="material-symbols-outlined text-[24px]" data-icon="pending_actions">pending_actions</span>
</div>
</div>
<div class="flex items-center gap-1.5 mt-4 pt-3 border-t border-outline-variant/20 text-xs text-error font-semibold">
<span class="material-symbols-outlined text-sm" data-icon="notification_important">notification_important</span>
<span>2 permohonan batas SLA hari ini</span>
</div>
</div>
<!-- Card 2: Disetujui Bulan Ini -->
<div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/40 shadow-sm flex flex-col justify-between hover:border-primary/50 transition-all">
<div class="flex items-start justify-between">
<div>
<span class="text-label-md font-label-md text-on-surface-variant font-medium block">Disetujui Bulan Ini</span>
<h4 class="text-display-hero-mobile font-display-hero-mobile font-bold text-emerald-700 mt-1">28</h4>
</div>
<div class="w-11 h-11 rounded-lg bg-emerald-50 flex items-center justify-center text-emerald-700 shrink-0">
<span class="material-symbols-outlined text-[24px]" data-icon="task_alt">task_alt</span>
</div>
</div>
<div class="flex items-center gap-1.5 mt-4 pt-3 border-t border-outline-variant/20 text-xs text-emerald-700 font-semibold">
<span class="material-symbols-outlined text-sm" data-icon="trending_up">trending_up</span>
<span>+18% peningkatan efisiensi SPBE</span>
</div>
</div>
<!-- Card 3: Alokasi Hosting Aktif -->
<div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/40 shadow-sm flex flex-col justify-between hover:border-primary/50 transition-all">
<div class="flex items-start justify-between">
<div>
<span class="text-label-md font-label-md text-on-surface-variant font-medium block">Alokasi Hosting Aktif</span>
<h4 class="text-display-hero-mobile font-display-hero-mobile font-bold text-primary mt-1">46</h4>
</div>
<div class="w-11 h-11 rounded-lg bg-surface-container flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined text-[24px]" data-icon="cloud_done">cloud_done</span>
</div>
</div>
<div class="mt-4 pt-3 border-t border-outline-variant/20 space-y-1">
<div class="flex justify-between text-[11px] font-semibold text-on-surface-variant">
<span>Kapasitas PDN Terpakai</span>
<span class="text-primary font-bold">68.4%</span>
</div>
<div class="w-full bg-surface-container-highest rounded-full h-1.5">
<div class="bg-primary h-full rounded-full" style="width: 68.4%"></div>
</div>
</div>
</div>
<!-- Card 4: Sub-domain Terdaftar -->
<div class="bg-surface-container-lowest p-5 rounded-xl border border-outline-variant/40 shadow-sm flex flex-col justify-between hover:border-primary/50 transition-all">
<div class="flex items-start justify-between">
<div>
<span class="text-label-md font-label-md text-on-surface-variant font-medium block">Sub-domain Terdaftar</span>
<h4 class="text-display-hero-mobile font-display-hero-mobile font-bold text-secondary mt-1">112</h4>
</div>
<div class="w-11 h-11 rounded-lg bg-surface-container flex items-center justify-center text-secondary shrink-0">
<span class="material-symbols-outlined text-[24px]" data-icon="public">public</span>
</div>
</div>
<div class="flex items-center gap-1.5 mt-4 pt-3 border-t border-outline-variant/20 text-xs text-on-surface-variant font-medium">
<span class="material-symbols-outlined text-sm text-primary" data-icon="verified">verified</span>
<span class="truncate">100% Terintegrasi CSIRT &amp; SSL A</span>
</div>
</div>
</div>

<!-- FILTER CONTROLS & INTERACTIVE SEARCH -->

<div class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/40 shadow-sm space-y-3">

<div class="flex flex-col lg:flex-row gap-3 items-stretch lg:items-center justify-between">

<!-- Search bar -->

<div class="relative flex-1">

<span class="material-symbols-outlined absolute left-3 top-2.5 text-outline text-lg" data-icon="search">search</span>

<input class="w-full pl-9 pr-4 py-2 text-sm rounded-md border border-outline-variant bg-surface-container-lowest focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none placeholder:text-outline/70" placeholder="Cari OPD, nama sistem, domain, atau nomor tiket..." type="text"/>

</div>

<div class="flex flex-wrap sm:flex-nowrap gap-2.5 items-center">

<!-- Dropdown Jenis Kebutuhan -->

<div class="relative min-w-[190px] flex-1 sm:flex-none">

<select class="w-full appearance-none pl-3 pr-8 py-2 text-sm font-medium rounded-md border border-outline-variant bg-surface-container-lowest text-on-surface focus:border-primary focus:outline-none cursor-pointer">

<option selected="">Jenis Kebutuhan: Semua</option>

<option>Domain riau.go.id</option>

<option>Alokasi Hosting VM</option>

<option>Buka Port JITN</option>

</select>

<span class="material-symbols-outlined absolute right-2.5 top-2.5 text-outline text-base pointer-events-none" data-icon="arrow_drop_down">arrow_drop_down</span>

</div>

<!-- Dropdown Status SLA -->

<div class="relative min-w-[160px] flex-1 sm:flex-none">

<select class="w-full appearance-none pl-3 pr-8 py-2 text-sm font-medium rounded-md border border-outline-variant bg-surface-container-lowest text-on-surface focus:border-primary focus:outline-none cursor-pointer">

<option selected="">Status SLA: Semua</option>

<option>Batas Hari Ini</option>

<option>SLA Tersisa</option>

</select>

<span class="material-symbols-outlined absolute right-2.5 top-2.5 text-outline text-base pointer-events-none" data-icon="arrow_drop_down">arrow_drop_down</span>

</div>

<!-- Segarkan Button -->

<button class="flex items-center gap-1.5 px-3.5 py-2 rounded-md border border-outline-variant bg-surface-container-low hover:bg-surface-container text-on-surface font-label-md text-label-md font-semibold transition-colors shrink-0" title="Muat Ulang Data">

<span class="material-symbols-outlined text-base text-primary" data-icon="refresh">refresh</span>

<span>Segarkan</span>

</button>

</div>

</div>

<!-- ALERT BANNER: BLUE TINT CONTAINER -->

<div class="bg-surface-container-low border border-primary/20 rounded-md p-3.5 flex items-start gap-3">

<span class="material-symbols-outlined text-primary text-xl shrink-0 mt-0.5" data-icon="info">info</span>

<div class="text-xs text-on-surface leading-relaxed">

<span class="font-semibold text-primary">Pemberitahuan Otorisasi:</span> Anda sedang melihat permohonan yang telah lolos Verifikasi Tim Teknis dan menunggu keputusan rekomendasi Kepala Bidang. (SOP Permohonan No. 12/2024).

              <a class="inline-flex items-center gap-0.5 text-primary hover:underline font-semibold ml-1" href="#">

                Unduh Petunjuk Teknis SOP »

              </a>

</div>

</div>

</div>

<!-- MAIN RICH DATA TABLE -->

<div class="bg-surface-container-lowest rounded-xl border border-outline-variant/40 shadow-sm overflow-hidden">

<div class="overflow-x-auto">

<table class="w-full text-left border-collapse">

<thead>

<tr class="bg-surface-container-low/70 border-b border-outline-variant text-[11px] font-bold text-on-surface-variant uppercase tracking-wider">

<th class="py-2.5 px-3">Instansi Pemohon (OPD)</th>

<th class="py-2.5 px-3">Aplikasi &amp; Nomor Tiket</th>

<th class="py-2.5 px-3">Rincian Kebutuhan Infrastruktur</th>

<th class="py-2.5 px-3">Waktu Pengajuan / SLA</th>

<th class="py-2.5 px-3 text-center">Lampiran</th>

<th class="py-2.5 px-3 text-center">Keputusan Kabid</th>

</tr>

</thead>

<tbody class="divide-y divide-outline-variant/60 font-body-sm text-body-sm text-on-surface">

<!-- ROW 1: Badan Pendapatan Daerah -->

<tr class="hover:bg-surface-container-low/40 transition-colors">

<td class="py-3 px-3 align-top">

<div class="font-semibold text-on-surface">Badan Pendapatan Daerah Provinsi Riau</div>

<div class="text-xs text-on-surface-variant flex items-center gap-1 mt-0.5">

<span class="material-symbols-outlined text-xs text-outline" data-icon="person">person</span>

<span>PIC: M. Fadillah, S.Kom</span>

</div>

</td>

<td class="py-3 px-3 align-top">

<div class="font-semibold text-primary">SIPPD Pajak Daerah v2</div>

<div class="flex items-center gap-2 mt-1">

<span class="font-mono text-xs text-on-surface-variant">#INF-2025-048</span>

<span class="bg-emerald-50 text-emerald-700 border border-emerald-200 text-[10px] font-bold px-1.5 py-0.5 rounded">Lolos Telaah Teknis</span>

</div>

</td>

<td class="py-3 px-3 align-top max-w-xs">

<div class="flex items-center gap-1.5 font-medium text-xs text-primary">

<span class="material-symbols-outlined text-sm" data-icon="link">link</span>

<span class="underline">sippd.riau.go.id</span>

</div>

<div class="flex items-center gap-1.5 text-xs text-on-surface-variant mt-1">

<span class="material-symbols-outlined text-sm text-outline" data-icon="dns">dns</span>

<span>VM 8 vCPU, 32GB RAM, 500GB SSD</span>

</div>

<div class="text-[11px] text-outline mt-0.5">Klaster: Pusat Data Mandiri Lancang Kuning</div>

</td>

<td class="py-3 px-3 align-top">

<div class="font-medium text-xs text-on-surface">25 Okt 2025</div>

<span class="inline-block mt-1 bg-emerald-100 text-emerald-800 text-[11px] font-semibold px-2 py-0.5 rounded">Tersisa 2 hari</span>

</td>

<td class="py-3 px-3 align-top text-center">

<button class="inline-flex items-center gap-1 text-xs text-primary hover:bg-surface-container-high px-2 py-1 rounded border border-outline-variant/70 font-medium">

<span class="material-symbols-outlined text-sm" data-icon="description">description</span>

<span>3 Berkas</span>

</button>

</td>

<td class="py-3 px-3 align-top text-center">

<div class="flex items-center justify-center gap-1.5">

<button class="bg-emerald-600 hover:bg-emerald-700 text-white font-label-md text-label-md font-semibold px-3 py-1.5 rounded flex items-center gap-1 shadow-2xs transition-colors" title="Beri Rekomendasi Disetujui">

<span class="material-symbols-outlined text-sm font-bold" data-icon="check">check</span>

<span>Setujui</span>

</button>

<button class="bg-surface-container-lowest hover:bg-red-50 text-red-700 border border-red-300 font-label-md text-label-md font-semibold px-3 py-1.5 rounded flex items-center gap-1 transition-colors" title="Kembalikan / Tolak Permohonan">

<span class="material-symbols-outlined text-sm font-bold" data-icon="close">close</span>

<span>Tolak</span>

</button>

</div>

</td>

</tr>

<!-- ROW 2: Dinas Kesehatan -->

<tr class="hover:bg-surface-container-low/40 transition-colors">

<td class="py-3 px-3 align-top">

<div class="font-semibold text-on-surface">Dinas Kesehatan Provinsi Riau</div>

<div class="text-xs text-on-surface-variant flex items-center gap-1 mt-0.5">

<span class="material-symbols-outlined text-xs text-outline" data-icon="person">person</span>

<span>PIC: Dr. Ardiansyah</span>

</div>

</td>

<td class="py-3 px-3 align-top">

<div class="font-semibold text-primary">e-Puskesmas Terpadu Riau</div>

<div class="flex items-center gap-2 mt-1">

<span class="font-mono text-xs text-on-surface-variant">#INF-2025-047</span>

<span class="bg-emerald-50 text-emerald-700 border border-emerald-200 text-[10px] font-bold px-1.5 py-0.5 rounded">Lolos Telaah Teknis</span>

</div>

</td>

<td class="py-3 px-3 align-top max-w-xs">

<div class="flex items-center gap-1.5 font-medium text-xs text-primary">

<span class="material-symbols-outlined text-sm" data-icon="link">link</span>

<span class="underline">epuskesmas.riau.go.id</span>

</div>

<div class="flex items-center gap-1.5 text-xs text-on-surface-variant mt-1">

<span class="material-symbols-outlined text-sm text-outline" data-icon="cloud_sync">cloud_sync</span>

<span>Cluster VM 4 Node, 1TB Cloud</span>

</div>

<div class="text-[11px] text-outline mt-0.5">Klaster: Hybrid Cloud PDN Kemenkominfo</div>

</td>

<td class="py-3 px-3 align-top">

<div class="font-medium text-xs text-on-surface">23 Okt 2025</div>

<span class="inline-block mt-1 bg-amber-100 text-amber-900 border border-amber-300 text-[11px] font-semibold px-2 py-0.5 rounded">Tinggal 1 Hari</span>

</td>

<td class="py-3 px-3 align-top text-center">

<button class="inline-flex items-center gap-1 text-xs text-primary hover:bg-surface-container-high px-2 py-1 rounded border border-outline-variant/70 font-medium">

<span class="material-symbols-outlined text-sm" data-icon="description">description</span>

<span>2 Berkas</span>

</button>

</td>

<td class="py-3 px-3 align-top text-center">

<div class="flex items-center justify-center gap-1.5">

<button class="bg-emerald-600 hover:bg-emerald-700 text-white font-label-md text-label-md font-semibold px-3 py-1.5 rounded flex items-center gap-1 shadow-2xs transition-colors">

<span class="material-symbols-outlined text-sm font-bold" data-icon="check">check</span>

<span>Setujui</span>

</button>

<button class="bg-surface-container-lowest hover:bg-red-50 text-red-700 border border-red-300 font-label-md text-label-md font-semibold px-3 py-1.5 rounded flex items-center gap-1 transition-colors">

<span class="material-symbols-outlined text-sm font-bold" data-icon="close">close</span>

<span>Tolak</span>

</button>

</div>

</td>

</tr>

<!-- ROW 3: RSUD Arifin Achmad (Urgent SLA) -->

<tr class="bg-red-50/20 hover:bg-red-50/40 transition-colors">

<td class="py-3 px-3 align-top">

<div class="font-semibold text-on-surface">RSUD Arifin Achmad Provinsi Riau</div>

<div class="text-xs text-on-surface-variant flex items-center gap-1 mt-0.5">

<span class="material-symbols-outlined text-xs text-outline" data-icon="person">person</span>

<span>PIC: Hendri Prasetyo, S.T</span>

</div>

</td>

<td class="py-3 px-3 align-top">

<div class="font-semibold text-primary">SIMRS Rekam Medis Cloud</div>

<div class="flex items-center gap-2 mt-1">

<span class="font-mono text-xs text-on-surface-variant">#INF-2025-045</span>

<span class="bg-emerald-50 text-emerald-700 border border-emerald-200 text-[10px] font-bold px-1.5 py-0.5 rounded">Lolos Telaah Teknis</span>

</div>

</td>

<td class="py-3 px-3 align-top max-w-xs">

<div class="flex items-center gap-1.5 font-medium text-xs text-primary">

<span class="material-symbols-outlined text-sm" data-icon="link">link</span>

<span class="underline">simrs.rsudarifinachmad.riau.go.id</span>

</div>

<div class="flex items-center gap-1.5 text-xs text-on-surface-variant mt-1">

<span class="material-symbols-outlined text-sm text-outline" data-icon="dataset">dataset</span>

<span>Dedicated Datacenter Tier-3 &amp; Private VLAN Interconnect</span>

</div>

<div class="text-[11px] text-outline mt-0.5">Klaster: Core RSUD &amp; Node Replikasi PDN</div>

</td>

<td class="py-3 px-3 align-top">

<div class="font-medium text-xs text-on-surface">22 Okt 2025</div>

<span class="inline-flex items-center gap-1 mt-1 bg-red-100 text-red-800 border border-red-300 text-[11px] font-bold px-2 py-0.5 rounded animate-pulse">

<span class="material-symbols-outlined text-xs" data-icon="warning">warning</span>

<span>Tinggal 6 Jam</span>

</span>

</td>

<td class="py-3 px-3 align-top text-center">

<button class="inline-flex items-center gap-1 text-xs text-primary hover:bg-surface-container-high px-2 py-1 rounded border border-outline-variant/70 font-medium">

<span class="material-symbols-outlined text-sm" data-icon="description">description</span>

<span>4 Berkas</span>

</button>

</td>

<td class="py-3 px-3 align-top text-center">

<div class="flex items-center justify-center gap-1.5">

<button class="bg-emerald-600 hover:bg-emerald-700 text-white font-label-md text-label-md font-semibold px-3 py-1.5 rounded flex items-center gap-1 shadow-2xs transition-colors">

<span class="material-symbols-outlined text-sm font-bold" data-icon="check">check</span>

<span>Setujui</span>

</button>

<button class="bg-surface-container-lowest hover:bg-red-50 text-red-700 border border-red-300 font-label-md text-label-md font-semibold px-3 py-1.5 rounded flex items-center gap-1 transition-colors">

<span class="material-symbols-outlined text-sm font-bold" data-icon="close">close</span>

<span>Tolak</span>

</button>

</div>

</td>

</tr>

<!-- ROW 4: Dinas Pendidikan -->

<tr class="hover:bg-surface-container-low/40 transition-colors">

<td class="py-3 px-3 align-top">

<div class="font-semibold text-on-surface">Dinas Pendidikan Provinsi Riau</div>

<div class="text-xs text-on-surface-variant flex items-center gap-1 mt-0.5">

<span class="material-symbols-outlined text-xs text-outline" data-icon="person">person</span>

<span>PIC: Rahmat Hidayat, M.Pd</span>

</div>

</td>

<td class="py-3 px-3 align-top">

<div class="font-semibold text-primary">PPDB SMA/SMK Online Riau</div>

<div class="flex items-center gap-2 mt-1">

<span class="font-mono text-xs text-on-surface-variant">#INF-2025-044</span>

<span class="bg-emerald-50 text-emerald-700 border border-emerald-200 text-[10px] font-bold px-1.5 py-0.5 rounded">Lolos Telaah Teknis</span>

</div>

</td>

<td class="py-3 px-3 align-top max-w-xs">

<div class="flex items-center gap-1.5 font-medium text-xs text-primary">

<span class="material-symbols-outlined text-sm" data-icon="link">link</span>

<span class="underline">ppdb.riau.go.id</span>

</div>

<div class="flex items-center gap-1.5 text-xs text-on-surface-variant mt-1">

<span class="material-symbols-outlined text-sm text-outline" data-icon="speed">speed</span>

<span>Tambahan Bandwidth CDN Anti-DDoS 10 Gbps</span>

</div>

<div class="text-[11px] text-outline mt-0.5">Klaster: Klaster Khusus Ujian &amp; Seleksi Terpusat</div>

</td>

<td class="py-3 px-3 align-top">

<div class="font-medium text-xs text-on-surface">21 Okt 2025</div>

<span class="inline-block mt-1 bg-emerald-100 text-emerald-800 text-[11px] font-semibold px-2 py-0.5 rounded">Tersisa 3 hari</span>

</td>

<td class="py-3 px-3 align-top text-center">

<button class="inline-flex items-center gap-1 text-xs text-primary hover:bg-surface-container-high px-2 py-1 rounded border border-outline-variant/70 font-medium">

<span class="material-symbols-outlined text-sm" data-icon="description">description</span>

<span>2 Berkas</span>

</button>

</td>

<td class="py-3 px-3 align-top text-center">

<div class="flex items-center justify-center gap-1.5">

<button class="bg-emerald-600 hover:bg-emerald-700 text-white font-label-md text-label-md font-semibold px-3 py-1.5 rounded flex items-center gap-1 shadow-2xs transition-colors">

<span class="material-symbols-outlined text-sm font-bold" data-icon="check">check</span>

<span>Setujui</span>

</button>

<button class="bg-surface-container-lowest hover:bg-red-50 text-red-700 border border-red-300 font-label-md text-label-md font-semibold px-3 py-1.5 rounded flex items-center gap-1 transition-colors">

<span class="material-symbols-outlined text-sm font-bold" data-icon="close">close</span>

<span>Tolak</span>

</button>

</div>

</td>

</tr>

<!-- ROW 5: Badan Kepegawaian Daerah -->

<tr class="hover:bg-surface-container-low/40 transition-colors">

<td class="py-3 px-3 align-top">

<div class="font-semibold text-on-surface">Badan Kepegawaian Daerah (BKD) Provinsi Riau</div>

<div class="text-xs text-on-surface-variant flex items-center gap-1 mt-0.5">

<span class="material-symbols-outlined text-xs text-outline" data-icon="person">person</span>

<span>PIC: Yulianti, S.Sos</span>

</div>

</td>

<td class="py-3 px-3 align-top">

<div class="font-semibold text-primary">SIMPEG Talenta ASN Riau</div>

<div class="flex items-center gap-2 mt-1">

<span class="font-mono text-xs text-on-surface-variant">#INF-2025-042</span>

<span class="bg-emerald-50 text-emerald-700 border border-emerald-200 text-[10px] font-bold px-1.5 py-0.5 rounded">Lolos Telaah Teknis</span>

</div>

</td>

<td class="py-3 px-3 align-top max-w-xs">

<div class="flex items-center gap-1.5 font-medium text-xs text-primary">

<span class="material-symbols-outlined text-sm" data-icon="link">link</span>

<span class="underline">talenta.bkd.riau.go.id</span>

</div>

<div class="flex items-center gap-1.5 text-xs text-on-surface-variant mt-1">

<span class="material-symbols-outlined text-sm text-outline" data-icon="memory">memory</span>

<span>VM 4 vCPU, 16GB RAM</span>

</div>

<div class="text-[11px] text-outline mt-0.5">Klaster: Pusat Data Mandiri Lancang Kuning</div>

</td>

<td class="py-3 px-3 align-top">

<div class="font-medium text-xs text-on-surface">20 Okt 2025</div>

<span class="inline-block mt-1 bg-emerald-100 text-emerald-800 text-[11px] font-semibold px-2 py-0.5 rounded">Tersisa 4 hari</span>

</td>

<td class="py-3 px-3 align-top text-center">

<button class="inline-flex items-center gap-1 text-xs text-primary hover:bg-surface-container-high px-2 py-1 rounded border border-outline-variant/70 font-medium">

<span class="material-symbols-outlined text-sm" data-icon="description">description</span>

<span>3 Berkas</span>

</button>

</td>

<td class="py-3 px-3 align-top text-center">

<div class="flex items-center justify-center gap-1.5">

<button class="bg-emerald-600 hover:bg-emerald-700 text-white font-label-md text-label-md font-semibold px-3 py-1.5 rounded flex items-center gap-1 shadow-2xs transition-colors">

<span class="material-symbols-outlined text-sm font-bold" data-icon="check">check</span>

<span>Setujui</span>

</button>

<button class="bg-surface-container-lowest hover:bg-red-50 text-red-700 border border-red-300 font-label-md text-label-md font-semibold px-3 py-1.5 rounded flex items-center gap-1 transition-colors">

<span class="material-symbols-outlined text-sm font-bold" data-icon="close">close</span>

<span>Tolak</span>

</button>

</div>

</td>

</tr>

</tbody>

</table>

</div>

<!-- TABLE PAGINATION FOOTER -->

<div class="py-3 px-6 bg-surface-container-low border-t border-outline-variant flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-on-surface-variant font-medium">

<span>Menampilkan <strong class="text-on-surface">1 - 5</strong> dari <strong class="text-on-surface">5</strong> permohonan</span>

<div class="flex items-center gap-1">

<button class="px-3 py-1 rounded border border-outline-variant/80 bg-surface-container-lowest text-on-surface-variant disabled:opacity-50 font-label-md text-label-md font-semibold hover:bg-surface-container-low transition-colors" disabled="">

                Sebelumnya

              </button>

<button class="w-8 h-8 rounded bg-primary text-on-primary font-bold text-xs flex items-center justify-center shadow-xs">

                1

              </button>

<button class="px-3 py-1 rounded border border-outline-variant/80 bg-surface-container-lowest text-on-surface-variant disabled:opacity-50 font-label-md text-label-md font-semibold hover:bg-surface-container-low transition-colors" disabled="">

                Berikutnya

              </button>

</div>

</div>

</div>

<!-- QUICK GUIDELINE NOTE CARD -->

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">

<div class="p-4 rounded-lg bg-surface-container-lowest border border-outline-variant shadow-sm flex items-start gap-3">

<div class="w-9 h-9 rounded bg-blue-50 text-primary flex items-center justify-center shrink-0">

<span class="material-symbols-outlined text-xl" data-icon="gavel">gavel</span>

</div>

<div class="space-y-1 text-xs">

<h4 class="font-bold text-on-surface">Ketentuan Rekomendasi Domain &amp; Hosting</h4>

<p class="text-on-surface-variant leading-relaxed">

                Setiap persetujuan menghasilkan dokumen digital bertandatangan elektronik (TTE BSrE BSSN) yang otomatis didisposisikan ke Tim Network Operation Center (NOC) Diskominfo Riau.

              </p>

</div>

</div>

<div class="p-4 rounded-lg bg-surface-container-lowest border border-outline-variant shadow-sm flex items-start gap-3">

<div class="w-9 h-9 rounded bg-amber-50 text-amber-800 flex items-center justify-center shrink-0">

<span class="material-symbols-outlined text-xl" data-icon="policy">policy</span>

</div>

<div class="space-y-1 text-xs">

<h4 class="font-bold text-on-surface">Kepatuhan Standar SPBE &amp; Keamanan Siber</h4>

<p class="text-on-surface-variant leading-relaxed">

                Permohonan sistem informasi yang memproses data kependudukan wajib memiliki sertifikasi penelaahan CSIRT Riau sebelum port publik diaktivasi.

              </p>

</div>

</div>

</div>

</div>

<!-- INSTITUTIONAL FOOTER COMPONENT (Shared Components JSON Anchor) -->

<footer class="w-full py-4 px-6 flex flex-col md:flex-row items-center justify-between border-t border-outline-variant bg-surface-container-low mt-auto gap-4">

<div class="flex flex-col gap-1 text-center md:text-left">

<div class="font-title-md text-title-md font-bold text-on-surface">

            SIMBANGDA RIAU v3.4.0

          </div>

<p class="font-body-sm text-body-sm text-on-surface-variant max-w-2xl">

            &copy; 2024 Dinas Komunikasi, Informatika dan Statistik Provinsi Riau. Seluruh hak cipta dilindungi undang-undang. Sistem Terhubung dengan Pusat Data Nasional (PDN) dan Layanan Keamanan Siber CSIRT Riau.

          </p>

</div>

<div class="flex flex-wrap justify-center items-center gap-4 text-xs font-medium">

<a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Kebijakan Privasi</a>

<span class="text-outline-variant">•</span>

<a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Keamanan Siber TIK</a>

<span class="text-outline-variant">•</span>

<a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Standar Pelayanan Publik SPBE</a>

<span class="text-outline-variant">•</span>

<a class="text-primary font-semibold hover:underline" href="#">Kontak Helpdesk Diskominfo</a>

</div>

</footer>
</main>
</div>

<script>

    // Lightweight Micro-Interactions for Approval Actions

    document.querySelectorAll('table button').forEach(button => {

      button.addEventListener('click', function(e) {

        const actionText = this.innerText.trim();

        const row = this.closest('tr');

        const opdName = row ? row.querySelector('.font-semibold').innerText : 'Permohonan';

        

        if (actionText.includes('Setujui')) {

          const confirmed = confirm(`Konfirmasi: Otorisasi rekomendasi teknis untuk ${opdName}? Berkas disposisi elektronik akan diproses.`);

          if (confirmed) {

            this.disabled = true;

            this.innerHTML = '<span class="material-symbols-outlined text-sm animate-spin" data-icon="progress_activity">progress_activity</span> Memproses...';

            setTimeout(() => {

              this.parentElement.innerHTML = '<span class="inline-flex items-center gap-1 text-emerald-700 bg-emerald-50 border border-emerald-300 font-bold text-xs px-2.5 py-1 rounded"><span class="material-symbols-outlined text-sm">verified</span> Disetujui</span>';

            }, 800);

          }

        } else if (actionText.includes('Tolak')) {

          const reason = prompt(`Masukkan catatan penolakan / revisi telaah untuk ${opdName}:`, 'Kelengkapan dokumen arsitektur SPBE belum sesuai');

          if (reason) {

            this.disabled = true;

            setTimeout(() => {

              this.parentElement.innerHTML = '<span class="inline-flex items-center gap-1 text-red-700 bg-red-50 border border-red-300 font-bold text-xs px-2.5 py-1 rounded"><span class="material-symbols-outlined text-sm">cancel</span> Dikembalikan</span>';

            }, 500);

          }

        }

      });

    });

  </script>
</body>
</html>
