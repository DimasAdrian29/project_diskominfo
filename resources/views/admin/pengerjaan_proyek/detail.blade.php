<!DOCTYPE html>
<html lang="id" class="bg-surface">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>SIMBANGDA Riau - Manajemen Pengerjaan Proyek: SIPPD Pajak Daerah v2</title>
<!-- Google Fonts & Material Symbols Outlined -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100..900&display=swap" rel="stylesheet"/>
<!-- Tailwind CSS Script -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "surface": "#f9f9ff",
            "tertiary": "#00385a",
            "on-error": "#ffffff",
            "background": "#f9f9ff",
            "surface-tint": "#2b5bb5",
            "on-background": "#111c2d",
            "error-container": "#ffdad6",
            "inverse-surface": "#263143",
            "on-tertiary": "#ffffff",
            "on-tertiary-container": "#7fc3ff",
            "on-secondary-container": "#003d79",
            "on-surface": "#111c2d",
            "error": "#ba1a1a",
            "inverse-primary": "#b0c6ff",
            "on-tertiary-fixed": "#001d32",
            "primary-container": "#0d47a1",
            "surface-container": "#e7eeff",
            "outline": "#737783",
            "surface-container-highest": "#d8e3fb",
            "on-error-container": "#93000a",
            "surface-variant": "#d8e3fb",
            "on-primary-fixed": "#001945",
            "primary": "#003178",
            "on-secondary-fixed": "#001b3c",
            "secondary-fixed": "#d5e3ff",
            "on-primary-fixed-variant": "#00429c",
            "surface-dim": "#cfdaf2",
            "tertiary-container": "#00507e",
            "primary-fixed-dim": "#b0c6ff",
            "on-secondary-fixed-variant": "#00468a",
            "tertiary-fixed": "#cee5ff",
            "secondary-container": "#71aaff",
            "surface-container-lowest": "#ffffff",
            "surface-container-high": "#dee8ff",
            "surface-container-low": "#f0f3ff",
            "on-secondary": "#ffffff",
            "surface-bright": "#f9f9ff",
            "secondary": "#165eae",
            "inverse-on-surface": "#ecf1ff",
            "tertiary-fixed-dim": "#96ccff",
            "on-primary": "#ffffff",
            "on-tertiary-fixed-variant": "#004a75",
            "outline-variant": "#c3c6d4",
            "primary-fixed": "#d9e2ff",
            "secondary-fixed-dim": "#a8c8ff",
            "on-primary-container": "#a1bbff",
            "on-surface-variant": "#434652"
          },
          "borderRadius": {
            "DEFAULT": "0.125rem",
            "lg": "0.25rem",
            "xl": "0.5rem",
            "full": "0.75rem"
          },
          "spacing": {
            "space-3xl": "4rem",
            "container-max": "1280px",
            "space-md": "1rem",
            "space-2xl": "3rem",
            "space-lg": "1.5rem",
            "space-xs": "0.5rem",
            "gutter-desktop": "1.5rem",
            "space-sm": "0.75rem",
            "space-xl": "2rem",
            "gutter-mobile": "1rem",
            "space-2xs": "0.25rem"
          },
          "fontFamily": {
            "label-md": ["Plus Jakarta Sans"],
            "caption": ["Plus Jakarta Sans"],
            "label-lg": ["Plus Jakarta Sans"],
            "title-lg": ["Plus Jakarta Sans"],
            "headline-md": ["Plus Jakarta Sans"],
            "body-lg": ["Plus Jakarta Sans"],
            "display-hero-mobile": ["Plus Jakarta Sans"],
            "body-md": ["Plus Jakarta Sans"],
            "body-sm": ["Plus Jakarta Sans"],
            "headline-sm": ["Plus Jakarta Sans"],
            "headline-lg": ["Plus Jakarta Sans"],
            "headline-lg-mobile": ["Plus Jakarta Sans"],
            "display-hero": ["Plus Jakarta Sans"],
            "title-md": ["Plus Jakarta Sans"]
          },
          "fontSize": {
            "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" }],
            "caption": ["12px", { "lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "400" }],
            "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" }],
            "title-lg": ["18px", { "lineHeight": "26px", "letterSpacing": "-0.005em", "fontWeight": "600" }],
            "headline-md": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.015em", "fontWeight": "700" }],
            "body-lg": ["18px", { "lineHeight": "28px", "letterSpacing": "0em", "fontWeight": "400" }],
            "display-hero-mobile": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "800" }],
            "body-md": ["16px", { "lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "400" }],
            "body-sm": ["14px", { "lineHeight": "20px", "letterSpacing": "0em", "fontWeight": "400" }],
            "headline-sm": ["20px", { "lineHeight": "28px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
            "headline-lg": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.015em", "fontWeight": "700" }],
            "display-hero": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.025em", "fontWeight": "800" }],
            "title-md": ["16px", { "lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "600" }]
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
      font-size: 20px;
      line-height: 1;
      display: inline-block;
      vertical-align: middle;
    }
    input[type=range]::-webkit-slider-thumb {
      height: 22px;
      width: 22px;
      border-radius: 50%;
      background: #003178;
      cursor: pointer;
      border: 3px solid #ffffff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.25);
    }
  </style>
</head>
<body class="bg-background font-body-md text-on-surface antialiased flex min-h-screen">
<!-- ==================== SIDEBAR COMPONENT ==================== -->
@include('admin.partials.sidebar')

<!-- ==================== MAIN CONTENT WRAPPER ==================== -->
<div class="flex-1 flex flex-col ml-64 min-w-0 bg-background overflow-y-auto h-screen relative">
<!-- ==================== TOP NAV BAR COMPONENT ==================== -->
@include('admin.partials.navbar')

<!-- PAGE BODY CANVAS -->
<main class="flex-1 p-6 md:p-8 space-y-6 max-w-7xl mx-auto w-full">
<!-- BREADCRUMB & CONTEXTUAL HEADER -->
<div class="space-y-3">
<nav aria-label="Breadcrumb" class="flex items-center space-x-2 text-body-sm font-body-sm text-on-surface-variant">
<a class="hover:text-primary transition-colors flex items-center gap-1" href="/admin">
<span class="material-symbols-outlined text-[16px]">home</span>
<span>SIMBANGDA</span>
</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<a class="hover:text-primary transition-colors" href="/admin/pengerjaan-proyek">Pengerjaan Proyek</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="font-semibold text-primary">SIPPD Pajak Daerah v2</span>
</nav>
<!-- Main Page Title & Top Actions -->
<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 bg-surface-container-lowest p-5 rounded-xl border border-outline-variant shadow-sm">
<div class="space-y-1.5">
<div class="flex flex-wrap items-center gap-2.5">
<h1 class="text-headline-sm md:text-headline-md font-headline-md text-primary tracking-tight">
                  Manajemen Pengerjaan Proyek: SIPPD Pajak Daerah v2
                </h1>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-label-md font-label-md bg-secondary-container/40 text-on-secondary-container border border-secondary-container">
                  Bapenda Riau
                </span>
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-label-md font-label-md bg-amber-100 text-amber-800 border border-amber-300">
<span class="w-1.5 h-1.5 rounded-full bg-amber-500 mr-1.5 animate-ping"></span>
                  Tahap Pengembangan & Pengujian
                </span>
</div>
<p class="text-body-sm font-body-sm text-on-surface-variant flex items-center gap-2">
<span class="font-mono font-semibold bg-surface-container px-2 py-0.5 rounded text-primary">Kode Proyek: PRJ-2025-089</span>
<span>•</span>
<span>Sistem Informasi Pajak Daerah Terintegrasi Bapenda Prov. Riau</span>
</p>
</div>
<!-- Top Action Button Group -->
<div class="flex items-center gap-3 flex-shrink-0">
<a class="inline-flex items-center gap-1.5 px-4 py-2 border border-outline-variant rounded-lg text-label-lg font-label-lg text-on-surface hover:bg-surface-container-low transition-colors shadow-sm bg-surface-container-lowest" href="/admin/pengerjaan-proyek">
<span class="material-symbols-outlined text-[18px]">arrow_back</span>
<span>Kembali ke Daftar Proyek</span>
</a>
<button class="inline-flex items-center gap-1.5 px-4 py-2 bg-primary hover:bg-primary-container text-on-primary rounded-lg text-label-lg font-label-lg shadow-sm transition-all duration-150" type="button">
<span class="material-symbols-outlined text-[18px]">verified</span>
<span>Kirim ke Uji Kelayakan</span>
</button>
</div>
</div>
<!-- Metadata Highlight Cards (Bento Style) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
<div class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant shadow-sm flex items-center space-x-3.5">
<div class="p-2.5 bg-surface-container text-primary rounded-lg">
<span class="material-symbols-outlined text-[24px]">event</span>
</div>
<div>
<p class="text-caption font-caption text-on-surface-variant">Target Rilis Resmi</p>
<p class="text-label-lg font-label-lg text-on-surface">30 November 2025</p>
<span class="text-[11px] text-amber-700 font-medium">Sisa 67 Hari Kerja</span>
</div>
</div>
<div class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant shadow-sm flex items-center space-x-3.5">
<div class="p-2.5 bg-surface-container text-primary rounded-lg">
<span class="material-symbols-outlined text-[24px]">badge</span>
</div>
<div>
<p class="text-caption font-caption text-on-surface-variant">Tim Pengembang PIC</p>
<p class="text-label-lg font-label-lg text-on-surface">M. Fajri, S.Kom</p>
<span class="text-[11px] text-on-surface-variant">Tim Inti Aptika Diskominfo</span>
</div>
</div>
<div class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant shadow-sm flex items-center space-x-3.5">
<div class="p-2.5 bg-surface-container text-primary rounded-lg">
<span class="material-symbols-outlined text-[24px]">layers</span>
</div>
<div>
<p class="text-caption font-caption text-on-surface-variant">Arsitektur Stack</p>
<p class="text-label-lg font-label-lg text-on-surface">Laravel 11 & Vue.js 3</p>
<span class="text-[11px] text-emerald-700 font-medium">Database: PostgreSQL 16</span>
</div>
</div>
<div class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant shadow-sm flex items-center space-x-3.5">
<div class="p-2.5 bg-surface-container text-primary rounded-lg">
<span class="material-symbols-outlined text-[24px]">shield</span>
</div>
<div>
<p class="text-caption font-caption text-on-surface-variant">Standar Kepatuhan</p>
<p class="text-label-lg font-label-lg text-on-surface">SPBE & Audit BSSN</p>
<span class="text-[11px] text-emerald-700 font-medium">Enkripsi AES-256 Aktif</span>
</div>
</div>
</div>
</div>
<!-- 2-COLUMN MAIN CONTENT GRID -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
<!-- ==================== KOLOM KIRI (7 Kolom Grid Desktop): EVALUASI RAPAT & PROGRES ==================== -->
<div class="lg:col-span-7 space-y-6">
<!-- BAGIAN 1: PEMBARUAN PERSENTASE PROGRES -->
<section class="bg-surface-container-lowest rounded-xl border border-outline-variant p-6 shadow-sm">
<div class="flex items-center justify-between pb-4 mb-4 border-b border-outline-variant">
<div class="flex items-center space-x-2.5">
<div class="w-8 h-8 rounded-lg bg-surface-container text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">trending_up</span>
</div>
<div>
<h2 class="text-title-lg font-title-lg text-on-surface">Pembaruan Persentase Progres</h2>
<p class="text-caption font-caption text-on-surface-variant">Pantau serta sinkronisasi kemajuan fase pengembangan modul</p>
</div>
</div>
<span class="inline-flex items-center px-2 py-0.5 rounded text-caption font-caption bg-surface-container-low text-primary border border-outline-variant">
                  Sinkronisasi Realtime
                </span>
</div>
<!-- Visual Status & Progress Bar -->
<div class="space-y-4">
<div class="flex flex-col sm:flex-row sm:items-baseline justify-between gap-1">
<div>
<span class="text-headline-md md:text-display-hero-mobile font-headline-md text-primary tracking-tight" id="progressNumberText">68%</span>
<span class="text-body-sm font-body-sm font-medium text-on-surface-variant ml-2" id="progressStatusLabel">- Tahap Rancang Modul & Integrasi API</span>
</div>
<span class="text-caption font-caption text-outline">Terakhir diperbarui: 24 Okt 2025 (PIC Aptika)</span>
</div>
<!-- Gradient Dynamic Progress Bar Container -->
<div class="w-full bg-surface-container rounded-full h-4 p-0.5 overflow-hidden border border-outline-variant">
<div class="h-full rounded-full bg-gradient-to-r from-secondary to-primary transition-all duration-300 shadow-inner" id="dynamicProgressBar" style="width: 68%;"></div>
</div>
<!-- Interactive Range Slider -->
<div class="space-y-2 pt-2">
<div class="flex justify-between text-caption font-caption text-on-surface-variant font-medium">
<span>Sesuaikan Progres Proyek:</span>
<span class="font-mono text-primary font-bold" id="sliderValueBadge">68%</span>
</div>
<input class="w-full h-2.5 bg-surface-container-high rounded-lg appearance-none cursor-pointer focus:outline-none" id="progressRangeInput" max="100" min="0" type="range" value="68"/>
<!-- Milestone Indicators -->
<div class="grid grid-cols-4 text-center pt-2 text-[11px] text-on-surface-variant font-medium border-t border-surface-container-low">
<div class="cursor-pointer hover:text-primary transition-colors text-left" onclick="setManualProgress(25)">
<span class="block font-bold">25%</span>
<span>Wireframe & DFD</span>
</div>
<div class="cursor-pointer hover:text-primary transition-colors text-center" onclick="setManualProgress(50)">
<span class="block font-bold">50%</span>
<span>Backend & API</span>
</div>
<div class="cursor-pointer hover:text-primary transition-colors text-center text-primary font-bold" onclick="setManualProgress(75)">
<span class="block">75%</span>
<span>Integrasi Layanan</span>
</div>
<div class="cursor-pointer hover:text-primary transition-colors text-right" onclick="setManualProgress(100)">
<span class="block font-bold">100%</span>
<span>Siap Uji Kelayakan</span>
</div>
</div>
</div>
<!-- Save Progress Button -->
<div class="pt-3 flex justify-end gap-2">
<button class="px-3 py-1.5 text-label-md font-label-md text-on-surface-variant hover:text-on-surface transition-colors" onclick="resetProgress()" type="button">
                    Reset Semula
                  </button>
<button class="inline-flex items-center gap-1.5 px-4 py-2 bg-primary hover:bg-secondary text-on-primary rounded-lg text-label-md font-label-md shadow-sm transition-all duration-150" onclick="confirmProgressUpdate()" type="button">
<span class="material-symbols-outlined text-[16px]">sync</span>
<span>Perbarui Nilai Progres</span>
</button>
</div>
</div>
</section>
<!-- BAGIAN 2: INPUT NOTULENSI RAPAT KOORDINASI / TEKNIS -->
<section class="bg-surface-container-lowest rounded-xl border border-outline-variant p-6 shadow-sm space-y-5">
<div class="flex items-center justify-between pb-3 border-b border-outline-variant">
<div class="flex items-center space-x-2.5">
<div class="w-8 h-8 rounded-lg bg-surface-container text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">edit_note</span>
</div>
<div>
<h2 class="text-title-lg font-title-lg text-on-surface">Input Notulensi Rapat Koordinasi/Teknis</h2>
<p class="text-caption font-caption text-on-surface-variant">Dokumentasikan arahan SPBE, poin teknis, dan kesepakatan sprint</p>
</div>
</div>
<span class="text-caption font-caption text-outline">Formulir Resmi</span>
</div>
<!-- Form Input Fields -->
<form class="space-y-4" onsubmit="event.preventDefault(); appendNotulensi();">
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<!-- Tanggal Rapat -->
<div>
<label class="block text-label-lg font-label-lg text-on-surface mb-1" for="tanggalRapat">
                      Tanggal Pelaksanaan <span class="text-error">*</span>
</label>
<div class="relative">
<input class="w-full bg-surface-container-lowest border border-outline-variant text-body-sm font-body-sm rounded-lg px-3 py-2 text-on-surface focus:border-primary focus:ring-2 focus:ring-surface-container focus:outline-none" id="tanggalRapat" type="date" value="2025-10-24"/>
</div>
</div>
<!-- Nama Pimpinan/PIC Rapat -->
<div>
<label class="block text-label-lg font-label-lg text-on-surface mb-1" for="picRapat">
                      Nama Pimpinan / PIC Rapat <span class="text-error">*</span>
</label>
<input class="w-full bg-surface-container-lowest border border-outline-variant text-body-sm font-body-sm rounded-lg px-3 py-2 text-on-surface focus:border-primary focus:ring-2 focus:ring-surface-container focus:outline-none placeholder:text-outline" id="picRapat" placeholder="Contoh: Kabid Aptika / Ir. H. Hendra" type="text"/>
</div>
</div>
<!-- Agenda Pembahasan -->
<div>
<label class="block text-label-lg font-label-lg text-on-surface mb-1" for="agendaRapat">
                    Agenda Pembahasan <span class="text-error">*</span>
</label>
<input class="w-full bg-surface-container-lowest border border-outline-variant text-body-sm font-body-sm rounded-lg px-3 py-2 text-on-surface focus:border-primary focus:ring-2 focus:ring-surface-container focus:outline-none placeholder:text-outline" id="agendaRapat" placeholder="Contoh: Pembahasan Integrasi API Gateway Bank Riau Kepri & Validasi NIK Bapenda" type="text"/>
</div>
<!-- Textarea Notulensi -->
<div>
<label class="block text-label-lg font-label-lg text-on-surface mb-1" for="isiNotulensi">
                    Isi Notulensi Rapat Koordinasi/Teknis <span class="text-error">*</span>
</label>
<textarea class="w-full bg-surface-container-lowest border border-outline-variant text-body-sm font-body-sm rounded-lg p-3 text-on-surface focus:border-primary focus:ring-2 focus:ring-surface-container focus:outline-none placeholder:text-outline leading-relaxed" id="isiNotulensi" placeholder="Tuliskan poin-poin kesepakatan teknis, bug list prioritas, penyesuaian arsitektur database, atau tindak lanjut arahan kepatuhan SPBE..." rows="4"></textarea>
<p class="text-caption font-caption text-on-surface-variant mt-1">Gunakan poin penomoran (-) untuk memperjelas item action plan tim.</p>
</div>
<!-- Simpan Button -->
<div class="flex justify-end pt-1">
<button class="inline-flex items-center gap-2 px-5 py-2.5 bg-primary hover:bg-primary-container text-on-primary rounded-lg text-label-lg font-label-lg shadow-sm transition-all duration-150" type="submit">
<span class="material-symbols-outlined text-[18px]">save</span>
<span>Simpan Notulensi</span>
</button>
</div>
</form>
<!-- RIWAYAT SINGKAT NOTULENSI RAPAT SEBELUMNYA (TIMELINE) -->
<div class="pt-4 border-t border-outline-variant space-y-3">
<div class="flex items-center justify-between">
<h3 class="text-label-lg font-label-lg text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-[18px] text-primary">history</span>
<span>Riwayat Notulensi Rapat Sebelumnya</span>
</h3>
<span class="text-caption font-caption text-on-surface-variant font-medium">3 Catatan Tersimpan</span>
</div>
<div class="space-y-3" id="notulensiTimelineContainer">
<!-- Card Log 1 -->
<div class="p-3.5 rounded-lg border border-outline-variant bg-surface-container-low/60 space-y-1.5 hover:bg-surface-container-low transition-colors">
<div class="flex flex-wrap items-center justify-between gap-1">
<span class="font-semibold text-label-md font-label-md text-primary">Rapat Koordinasi Arsitektur Database & Keamanan API</span>
<span class="text-caption font-caption text-outline">18 Okt 2025 • 09:30 WIB</span>
</div>
<div class="text-caption font-caption text-on-surface-variant flex items-center gap-2">
<span>Pimpinan: <strong>Kabid Aptika (Dr. H. Rusdi)</strong></span>
<span>•</span>
<span class="text-emerald-700 font-medium">Dihadiri Tim Bapenda & Diskominfo</span>
</div>
<p class="text-body-sm font-body-sm text-on-surface text-[13px] leading-relaxed">
                      Poin kesepakatan: 1) Format payload data pajak bumi & bangunan diseragamkan dengan format JSON ISO-8583. 2) Penggunaan token JWT dengan durasi masa berlaku 15 menit dan implementasi SSL pinning.
                    </p>
</div>
<!-- Card Log 2 -->
<div class="p-3.5 rounded-lg border border-outline-variant bg-surface-container-low/60 space-y-1.5 hover:bg-surface-container-low transition-colors">
<div class="flex flex-wrap items-center justify-between gap-1">
<span class="font-semibold text-label-md font-label-md text-primary">Kick-off & Review Sprint 1 (Modul Pendaftaran Wajib Pajak)</span>
<span class="text-caption font-caption text-outline">05 Okt 2025 • 13:30 WIB</span>
</div>
<div class="text-caption font-caption text-on-surface-variant flex items-center gap-2">
<span>Pimpinan: <strong>M. Fajri, S.Kom (PIC Teknis)</strong></span>
<span>•</span>
<span class="text-emerald-700 font-medium">Fase Analisis Kebutuhan</span>
</div>
<p class="text-body-sm font-body-sm text-on-surface text-[13px] leading-relaxed">
                      Hasil: Wireframe disetujui Bapenda Riau dengan penambahan integrasi Dukcapil via webservice aman untuk auto-fill data NIK wajib pajak.
                    </p>
</div>
</div>
</div>
</section>
</div>
<!-- ==================== KOLOM KANAN (5 Kolom Grid Desktop): MANAJEMEN DOKUMEN PROYEK ==================== -->
<div class="lg:col-span-5 space-y-6">
<section class="bg-surface-container-lowest rounded-xl border border-outline-variant p-6 shadow-sm space-y-5">
<!-- Card Header -->
<div class="flex items-center justify-between pb-3 border-b border-outline-variant">
<div class="flex items-center space-x-2.5">
<div class="w-8 h-8 rounded-lg bg-surface-container text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">folder_open</span>
</div>
<div>
<h2 class="text-title-lg font-title-lg text-on-surface">Manajemen & Kelengkapan Dokumen Proyek</h2>
<p class="text-caption font-caption text-on-surface-variant">Prasyarat verifikasi teknis Diskominfo Prov. Riau</p>
</div>
</div>
<div class="text-right">
<span class="inline-flex items-center px-2 py-0.5 rounded-full text-label-md font-label-md bg-secondary-container/30 text-on-secondary-container font-bold border border-secondary-container">
                    2 dari 3 Selesai
                  </span>
</div>
</div>
<!-- DOKUMEN 1: DOKUMEN PERANCANGAN AWAL (SELESAI) -->
<div class="p-4 rounded-xl border border-outline-variant bg-surface-container-lowest space-y-3">
<div class="flex items-start justify-between">
<div class="flex items-center space-x-2.5">
<span class="material-symbols-outlined text-primary text-[22px]">description</span>
<div>
<h3 class="text-label-lg font-label-lg text-on-surface">Unggah Dokumen Perancangan Awal</h3>
<p class="text-caption font-caption text-on-surface-variant">SRS (Software Requirements Specification) & DFD</p>
</div>
</div>
<!-- Status Badge Hijau -->
<span class="inline-flex items-center px-2.5 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-800 border border-emerald-300">
<span class="material-symbols-outlined text-[14px] mr-1">check_circle</span>
                    Selesai
                  </span>
</div>
<!-- File Info Card -->
<div class="flex items-center justify-between p-3 bg-surface-container-low rounded-lg border border-outline-variant">
<div class="flex items-center space-x-2.5 truncate mr-2">
<span class="material-symbols-outlined text-error text-[24px]">picture_as_pdf</span>
<div class="truncate">
<p class="text-label-md font-label-md text-on-surface truncate">SRS_SIPPD_v2.0_Final.pdf</p>
<p class="text-caption font-caption text-outline">4.2 MB • Diunggah 19 Okt 2025</p>
</div>
</div>
<div class="flex items-center space-x-1.5 flex-shrink-0">
<button class="p-1.5 text-on-surface-variant hover:text-primary hover:bg-surface-container rounded transition-colors" title="Unduh Berkas" type="button">
<span class="material-symbols-outlined text-[18px]">download</span>
</button>
<button class="p-1.5 text-on-surface-variant hover:text-primary hover:bg-surface-container rounded transition-colors" title="Perbarui Berkas" type="button">
<span class="material-symbols-outlined text-[18px]">refresh</span>
</button>
</div>
</div>
<p class="text-[11px] text-emerald-700 flex items-center gap-1 font-medium">
<span class="material-symbols-outlined text-[14px]">verified</span>
                  Terverifikasi oleh Tim Arsitektur SPBE Riau
                </p>
</div>
<!-- DOKUMEN 2: DOKUMEN KODE SUMBER / SOURCE CODE (BELUM DIUNGGAH) -->
<div class="p-4 rounded-xl border-2 border-dashed border-amber-300 bg-amber-50/40 space-y-3">
<div class="flex items-start justify-between">
<div class="flex items-center space-x-2.5">
<span class="material-symbols-outlined text-amber-800 text-[22px]">code</span>
<div>
<h3 class="text-label-lg font-label-lg text-on-surface">Unggah Dokumen Kode Sumber (Source Code)</h3>
<p class="text-caption font-caption text-on-surface-variant">Arsip bundle kode sumber atau export snapshot repo (ZIP/TAR.GZ)</p>
</div>
</div>
<!-- Status Badge Kuning -->
<span class="inline-flex items-center px-2.5 py-0.5 rounded text-[11px] font-bold bg-amber-100 text-amber-800 border border-amber-300">
<span class="material-symbols-outlined text-[14px] mr-1">schedule</span>
                    Belum Diunggah
                  </span>
</div>
<!-- Dropzone Area Interaktif -->
<div class="border border-dashed border-amber-400/80 rounded-lg p-5 text-center bg-white hover:bg-amber-50/80 transition-colors cursor-pointer group">
<div class="w-10 h-10 mx-auto rounded-full bg-amber-100 text-amber-800 flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-[24px]">cloud_upload</span>
</div>
<p class="text-label-md font-label-md text-on-surface">
                    Seret & letakkan arsip berkas ke sini, atau <span class="text-primary underline">pilih file</span>
</p>
<p class="text-caption font-caption text-outline mt-1">
                    Format yang diterima: ZIP, TAR.GZ (Maksimal 150 MB).
                  </p>
</div>
<!-- Panduan Enkripsi File -->
<div class="flex items-start space-x-2 p-2.5 bg-white rounded border border-amber-200 text-caption font-caption text-amber-900">
<span class="material-symbols-outlined text-amber-700 text-[18px] flex-shrink-0">lock</span>
<span>
<strong>Penting:</strong> Kode sumber harus dienkripsi dengan password standar Diskominfo atau dihubungkan langsung ke private git runner internal Pemprov Riau.
                  </span>
</div>
</div>
<!-- DOKUMEN 3: LAPORAN PENGAJUAN PENDAFTARAN REPOSITORI (SELESAI) -->
<div class="p-4 rounded-xl border border-outline-variant bg-surface-container-lowest space-y-3">
<div class="flex items-start justify-between">
<div class="flex items-center space-x-2.5">
<span class="material-symbols-outlined text-primary text-[22px]">domain_verification</span>
<div>
<h3 class="text-label-lg font-label-lg text-on-surface">Laporan Pengajuan Pendaftaran Repositori</h3>
<p class="text-caption font-caption text-on-surface-variant">Formulir pendaftaran repositori Git Pemprov Riau / BSSN</p>
</div>
</div>
<!-- Status Badge Hijau -->
<span class="inline-flex items-center px-2.5 py-0.5 rounded text-[11px] font-bold bg-emerald-100 text-emerald-800 border border-emerald-300">
<span class="material-symbols-outlined text-[14px] mr-1">check_circle</span>
                    Selesai
                  </span>
</div>
<!-- File Info Card -->
<div class="flex items-center justify-between p-3 bg-surface-container-low rounded-lg border border-outline-variant">
<div class="flex items-center space-x-2.5 truncate mr-2">
<span class="material-symbols-outlined text-primary text-[24px]">task</span>
<div class="truncate">
<p class="text-label-md font-label-md text-on-surface truncate">Form_Pendaftaran_Repo_GitRiau.pdf</p>
<p class="text-caption font-caption text-outline">1.8 MB • Nomor Reg: GIT-RIAU-2025/119</p>
</div>
</div>
<div class="flex items-center space-x-1.5 flex-shrink-0">
<button class="p-1.5 text-on-surface-variant hover:text-primary hover:bg-surface-container rounded transition-colors" title="Unduh Berkas" type="button">
<span class="material-symbols-outlined text-[18px]">download</span>
</button>
<button class="p-1.5 text-on-surface-variant hover:text-primary hover:bg-surface-container rounded transition-colors" title="Lihat Status Pendaftaran" type="button">
<span class="material-symbols-outlined text-[18px]">visibility</span>
</button>
</div>
</div>
<div class="p-2.5 rounded bg-surface-container-low/70 border border-outline-variant/60 flex items-center justify-between text-caption font-caption">
<span class="text-on-surface-variant">URL Repositori Internal:</span>
<span class="font-mono text-primary font-medium">git.riau.go.id/bapenda/sippd-v2</span>
</div>
</div>
<!-- Petunjuk Verifikasi Berkas -->
<div class="p-3.5 rounded-lg bg-surface-container text-body-sm font-body-sm text-on-surface space-y-1">
<p class="font-semibold text-label-md font-label-md text-primary flex items-center gap-1.5">
<span class="material-symbols-outlined text-[18px]">info</span>
                  Catatan Verifikator Diskominfo:
                </p>
<p class="text-[12px] text-on-surface-variant leading-relaxed">
                  Semua berkas kelengkapan wajib berstatus <strong>Selesai</strong> sebelum tombol <span class="font-medium text-primary">"Kirim ke Uji Kelayakan"</span> dapat diproses ke tim Penjaminan Mutu & Audit Siber Diskominfo Provinsi Riau.
                </p>
</div>
</section>
</div>
</div>
</main>
<!-- FOOTER (Shared Component: Footer) -->
<footer class="bg-surface-container-low border-t border-outline-variant w-full py-4 px-8 mt-auto">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center text-body-sm font-body-sm text-on-surface-variant gap-4">
<div class="flex items-center space-x-2 text-center md:text-left">
<span class="material-symbols-outlined text-primary text-[18px]">shield</span>
<p class="text-caption font-caption text-on-surface-variant">
              © 2024 Dinas Komunikasi, Informatika dan Statistik Pemerintah Provinsi Riau. Hak Cipta Dilindungi Undang-Undang.
            </p>
</div>
<div class="flex flex-wrap items-center justify-center gap-6 text-label-md font-label-md">
<a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Kebijakan Privasi</a>
<a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Ketentuan Layanan</a>
<a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Standar Keamanan Siber</a>
<a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Hubungi Diskominfo</a>
</div>
</div>
</footer>
</div>

<!-- Toast Notification Template -->
<div class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none bg-inverse-surface text-inverse-on-surface px-4 py-3 rounded-lg shadow-xl flex items-center space-x-3 border border-outline" id="toastNotification">
<span class="material-symbols-outlined text-emerald-400" id="toastIcon">check_circle</span>
<div>
<p class="font-semibold text-label-md font-label-md" id="toastTitle">Berhasil Disimpan</p>
<p class="text-caption font-caption text-surface-dim" id="toastMessage">Pembaruan progres berhasil disinkronkan ke server.</p>
</div>
</div>
<!-- Inline Micro-interactions Script -->
<script>
    const slider = document.getElementById('progressRangeInput');
    const dynamicBar = document.getElementById('dynamicProgressBar');
    const numberText = document.getElementById('progressNumberText');
    const badgeText = document.getElementById('sliderValueBadge');
    const statusLabel = document.getElementById('progressStatusLabel');

    function updateProgressUI(val) {
      dynamicBar.style.width = val + '%';
      numberText.innerText = val + '%';
      badgeText.innerText = val + '%';

      if (val < 30) {
        statusLabel.innerText = '- Tahap Perancangan & Wireframe';
      } else if (val < 60) {
        statusLabel.innerText = '- Tahap Pengembangan Backend API';
      } else if (val < 85) {
        statusLabel.innerText = '- Tahap Rancang Modul & Integrasi API';
      } else if (val < 100) {
        statusLabel.innerText = '- Tahap Integrasi Penuh & Bug Fixing';
      } else {
        statusLabel.innerText = '- Tahap Akhir & Siap Uji Kelayakan';
      }
    }

    if(slider) {
      slider.addEventListener('input', function() {
        updateProgressUI(this.value);
      });
    }

    function setManualProgress(val) {
      if(slider) {
        slider.value = val;
        updateProgressUI(val);
      }
    }

    function resetProgress() {
      setManualProgress(68);
      showToast('Reset Selesai', 'Nilai progres dikembalikan ke nilai awal (68%).');
    }

    function confirmProgressUpdate() {
      const val = slider ? slider.value : 68;
      showToast('Pembaruan Disimpan', 'Progres proyek kini tersimpan pada ' + val + '%. Notifikasi diteruskan ke Tim Bapenda Riau.');
    }

    function appendNotulensi() {
      const tgl = document.getElementById('tanggalRapat').value || '24 Okt 2025';
      const pic = document.getElementById('picRapat').value || 'PIC Belum Ditentukan';
      const agenda = document.getElementById('agendaRapat').value || 'Koordinasi Teknis Terpadu';
      const isi = document.getElementById('isiNotulensi').value;

      if(!isi.trim()) {
        alert('Mohon isi catatan atau poin-poin kesepakatan notulensi.');
        return;
      }

      const container = document.getElementById('notulensiTimelineContainer');
      const newCard = document.createElement('div');
      newCard.className = "p-3.5 rounded-lg border border-primary/40 bg-surface-container-low space-y-1.5 animate-fadeIn";
      newCard.innerHTML = `
        <div class="flex flex-wrap items-center justify-between gap-1">
          <span class="font-semibold text-label-md font-label-md text-primary">${agenda}</span>
          <span class="text-caption font-caption text-outline">${tgl} • Baru saja</span>
        </div>
        <div class="text-caption font-caption text-on-surface-variant flex items-center gap-2">
          <span>Pimpinan: <strong>${pic}</strong></span>
          <span>•</span>
          <span class="text-emerald-700 font-medium">Tercatat di SIMBANGDA</span>
        </div>
        <p class="text-body-sm font-body-sm text-on-surface text-[13px] leading-relaxed">
          ${isi.replace(/\n/g, '<br>')}
        </p>
      `;

      container.insertBefore(newCard, container.firstChild);
      document.getElementById('isiNotulensi').value = '';
      showToast('Notulensi Tersimpan', 'Catatan notulensi berhasil ditambahkan ke riwayat rapat proyek.');
    }

    function showToast(title, msg) {
      const toast = document.getElementById('toastNotification');
      document.getElementById('toastTitle').innerText = title;
      document.getElementById('toastMessage').innerText = msg;
      
      toast.classList.remove('translate-y-20', 'opacity-0', 'pointer-events-none');
      setTimeout(() => {
        toast.classList.add('translate-y-20', 'opacity-0', 'pointer-events-none');
      }, 3500);
    }
  </script>
</body>
</html>
