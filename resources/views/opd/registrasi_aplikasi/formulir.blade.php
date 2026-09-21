<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Formulir Registrasi Aplikasi - SIMBANGDA Diskominfo Riau</title>
<!-- Google Fonts: Plus Jakarta Sans -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS v3 with plugins -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Verbatim Tailwind Configuration -->
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "on-tertiary-fixed": "#001d32",
            "on-tertiary": "#ffffff",
            "secondary-container": "#71aaff",
            "surface-container-lowest": "#ffffff",
            "tertiary": "#00385a",
            "background": "#f9f9ff",
            "primary-fixed": "#d9e2ff",
            "inverse-surface": "#263143",
            "on-primary-container": "#a1bbff",
            "secondary-fixed-dim": "#a8c8ff",
            "surface-container": "#e7eeff",
            "on-tertiary-container": "#7fc3ff",
            "surface-bright": "#f9f9ff",
            "surface-container-highest": "#d8e3fb",
            "on-primary-fixed-variant": "#00429c",
            "surface-dim": "#cfdaf2",
            "inverse-on-surface": "#ecf1ff",
            "inverse-primary": "#b0c6ff",
            "surface-container-low": "#f0f3ff",
            "on-tertiary-fixed-variant": "#004a75",
            "surface-tint": "#2b5bb5",
            "outline-variant": "#c3c6d4",
            "on-secondary": "#ffffff",
            "tertiary-fixed-dim": "#96ccff",
            "tertiary-container": "#00507e",
            "secondary-fixed": "#d5e3ff",
            "outline": "#737783",
            "tertiary-fixed": "#cee5ff",
            "on-primary-fixed": "#001945",
            "on-error": "#ffffff",
            "surface": "#f9f9ff",
            "surface-container-high": "#dee8ff",
            "on-error-container": "#93000a",
            "on-secondary-fixed": "#001b3c",
            "on-secondary-fixed-variant": "#00468a",
            "secondary": "#165eae",
            "surface-variant": "#d8e3fb",
            "primary": "#003178",
            "on-primary": "#ffffff",
            "primary-fixed-dim": "#b0c6ff",
            "on-surface-variant": "#434652",
            "error-container": "#ffdad6",
            "on-secondary-container": "#003d79",
            "primary-container": "#0d47a1",
            "error": "#ba1a1a",
            "on-surface": "#111c2d",
            "on-background": "#111c2d"
          },
          "borderRadius": {
            "DEFAULT": "0.125rem",
            "lg": "0.25rem",
            "xl": "0.5rem",
            "full": "0.75rem"
          },
          "spacing": {
            "space-3xl": "4rem",
            "space-2xl": "3rem",
            "space-2xs": "0.25rem",
            "space-lg": "1.5rem",
            "space-xl": "2rem",
            "space-md": "1rem",
            "gutter-desktop": "1.5rem",
            "space-xs": "0.5rem",
            "container-max": "1280px",
            "gutter-mobile": "1rem",
            "space-sm": "0.75rem"
          },
          "fontFamily": {
            "display-hero-mobile": ["Plus Jakarta Sans"],
            "headline-sm": ["Plus Jakarta Sans"],
            "headline-lg": ["Plus Jakarta Sans"],
            "label-lg": ["Plus Jakarta Sans"],
            "label-md": ["Plus Jakarta Sans"],
            "headline-md": ["Plus Jakarta Sans"],
            "title-lg": ["Plus Jakarta Sans"],
            "body-md": ["Plus Jakarta Sans"],
            "body-lg": ["Plus Jakarta Sans"],
            "body-sm": ["Plus Jakarta Sans"],
            "caption": ["Plus Jakarta Sans"],
            "headline-lg-mobile": ["Plus Jakarta Sans"],
            "title-md": ["Plus Jakarta Sans"],
            "display-hero": ["Plus Jakarta Sans"]
          },
          "fontSize": {
            "display-hero-mobile": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "800" }],
            "headline-sm": ["20px", { "lineHeight": "28px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
            "headline-lg": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" }],
            "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" }],
            "headline-md": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.015em", "fontWeight": "700" }],
            "title-lg": ["18px", { "lineHeight": "26px", "letterSpacing": "-0.005em", "fontWeight": "600" }],
            "body-md": ["16px", { "lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "400" }],
            "body-lg": ["18px", { "lineHeight": "28px", "letterSpacing": "0em", "fontWeight": "400" }],
            "body-sm": ["14px", { "lineHeight": "20px", "letterSpacing": "0em", "fontWeight": "400" }],
            "caption": ["12px", { "lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "400" }],
            "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.015em", "fontWeight": "700" }],
            "title-md": ["16px", { "lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "600" }],
            "display-hero": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.025em", "fontWeight": "800" }]
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

    /* Smooth transition for dropdown */
    .nav-dropdown-menu {
      opacity: 0;
      visibility: hidden;
      transform: translateY(8px);
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .group:hover .nav-dropdown-menu,
    .group:focus-within .nav-dropdown-menu {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }
  </style>
</head>
<body class="bg-surface-container-low text-on-surface font-body-md text-body-md min-h-screen flex flex-col antialiased">

<!-- Include Shared Navbar Component -->
@include('opd.partials.navbar')

<!-- Main Canvas -->
<main class="flex-grow w-full max-w-container-max mx-auto px-gutter-mobile md:px-gutter-desktop py-space-xl md:py-space-2xl">
<!-- Breadcrumb Trail -->
<nav class="flex items-center gap-2 text-body-sm font-body-sm text-outline mb-4">
<a class="hover:text-primary transition-colors flex items-center gap-1" href="/">
<span class="material-symbols-outlined text-[16px]">home</span>
<span>Beranda</span>
</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<a class="hover:text-primary transition-colors" href="/#tujuan-layanan">Portal Layanan OPD</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-primary font-semibold">Formulir Registrasi Usulan Aplikasi Baru</span>
</nav>
<!-- Page Header Block -->
<h1 class="text-headline-md md:text-headline-lg font-headline-md md:font-headline-lg text-on-surface tracking-tight mb-2">
        Formulir Registrasi Usulan Aplikasi Baru
      </h1>
<p class="text-body-md font-body-md text-on-surface-variant max-w-3xl leading-relaxed">
        Pengajuan proposal pembangunan sistem informasi perangkat daerah tahun anggaran berjalan sesuai standar arsitektur SPBE Provinsi Riau guna menjamin interoperabilitas dan efisiensi belanja TIK daerah.
      </p>
</div>
<!-- Centered Form Container Card (max-w-3xl) -->
<div class="max-w-3xl mx-auto">
<!-- Important Notice Banner -->
<div class="mb-6 bg-surface-container-lowest border-l-4 border-primary-container p-4 rounded-r-xl shadow-sm border-y border-r border-outline-variant/30 flex items-start gap-3">

<div>
</div>
</div>
<!-- Main Form Card -->
<section class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl shadow-md p-6 sm:p-8 md:p-10 relative overflow-hidden">
<!-- Form Header Section inside Card -->
<div class="flex items-start justify-between border-b border-outline-variant/30 pb-6 mb-8">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-xl bg-surface-container text-primary-container flex items-center justify-center border border-secondary-container/30 shadow-sm">
<span class="material-symbols-outlined text-2xl">post_add</span>
</div>
<div>
<h2 class="text-title-lg font-title-lg text-on-surface font-bold">
                Formulir Usulan Sistem &amp; Rancang Bangun
              </h2>
<p class="text-body-sm font-body-sm text-on-surface-variant">
                Isi data dengan lengkap dan valid sesuai Dokumen Rencana Strategis (Renstra) OPD.
              </p>
</div>
</div>
<span class="hidden sm:inline-flex items-center gap-1 text-caption font-caption bg-surface-container-low text-outline px-2.5 py-1 rounded-md border border-outline-variant/20">
<span class="material-symbols-outlined text-[14px]">lock</span> Data Terenkripsi
          </span>
</div>
<!-- Form Elements -->
<form action="#" class="space-y-6" method="POST">
@csrf
<!-- Input 1: Asal Dinas (OPD Autocomplete/Select) -->
<div class="space-y-2">
<div class="flex items-center justify-between">
<label class="block text-label-lg font-label-lg text-on-surface" for="asal_dinas">
                Asal Dinas / Instansi Pengusul <span class="text-error font-bold">*</span>
</label>
<span class="text-caption font-caption text-outline">Wajib diisi</span>
</div>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-xl">domain</span>
</div>
<select class="block w-full pl-10 pr-10 py-3 bg-surface-container-lowest border border-outline-variant rounded-xl text-body-md font-body-md text-on-surface focus:outline-none focus:border-secondary focus:ring-4 focus:ring-secondary-fixed/40 transition-shadow appearance-none cursor-pointer" id="asal_dinas" name="asal_dinas" required="">
<option disabled="" selected="" value="">Pilih atau cari instansi pengusul (OPD)</option>
<option value="dinkes">Dinas Kesehatan Provinsi Riau</option>
<option value="disdik">Dinas Pendidikan Provinsi Riau</option>
<option value="bapenda">Badan Pendapatan Daerah (Bapenda) Provinsi Riau</option>
<option value="bappeda">Badan Perencanaan Pembangunan Daerah (Bappeda)</option>
<option value="diskominfotik">Dinas Komunikasi, Informatika dan Statistik Provinsi Riau</option>
<option value="dishub">Dinas Perhubungan Provinsi Riau</option>
<option value="dinsos">Dinas Sosial Provinsi Riau</option>
<option value="disnakertrans">Dinas Tenaga Kerja dan Transmigrasi Provinsi Riau</option>
<option value="inspektorat">Inspektorat Daerah Provinsi Riau</option>
<option value="rsud_aa">RSUD Arifin Achmad Provinsi Riau</option>
</select>
<div class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-xl">expand_more</span>
</div>
</div>
<p class="text-caption font-caption text-on-surface-variant flex items-center gap-1.5 mt-1">
<span class="material-symbols-outlined text-[15px] text-outline">info</span>
<span>Pastikan memilih instansi resmi pengelola DPA/kegiatan yang bersangkutan.</span>
</p>
</div>
<!-- Input 2: Nama Aplikasi -->
<div class="space-y-2">
<div class="flex items-center justify-between">
<label class="block text-label-lg font-label-lg text-on-surface" for="nama_aplikasi">
                Nama Aplikasi <span class="text-error font-bold">*</span>
</label>
<span class="text-caption font-caption text-outline">Baku &amp; Informatif</span>
</div>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-xl">apps</span>
</div>
<input class="block w-full pl-10 pr-3.5 py-3 bg-surface-container-lowest border border-outline-variant rounded-xl text-body-md font-body-md text-on-surface placeholder:text-outline-variant focus:outline-none focus:border-secondary focus:ring-4 focus:ring-secondary-fixed/40 transition-shadow" id="nama_aplikasi" name="nama_aplikasi" placeholder="cth: Sistem Informasi Pelayanan Pajak Daerah Terpadu (SIPPD)" required="" type="text"/>
</div>
<div class="bg-surface-container-low p-2.5 rounded-lg border border-outline-variant/20 flex items-start gap-2 text-caption font-caption text-on-surface-variant">
<span class="material-symbols-outlined text-[16px] text-secondary mt-0.5">lightbulb</span>
<span><strong>Panduan Penamaan Baku SPBE:</strong> Gunakan nama yang mencerminkan fungsi substantif pelayanan, hindari akronim yang membingungkan atau berulang dengan sistem yang telah terdaftar di repository provinsi.</span>
</div>
</div>
<!-- Input 3: Kategori Aplikasi -->
<div class="space-y-2">
<div class="flex items-center justify-between">
<label class="block text-label-lg font-label-lg text-on-surface" for="kategori_aplikasi">
                Kategori Aplikasi <span class="text-error font-bold">*</span>
</label>
<span class="text-caption font-caption text-outline">Arsitektur Komputasi</span>
</div>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-xl">category</span>
</div>
<select class="block w-full pl-10 pr-10 py-3 bg-surface-container-lowest border border-outline-variant rounded-xl text-body-md font-body-md text-on-surface focus:outline-none focus:border-secondary focus:ring-4 focus:ring-secondary-fixed/40 transition-shadow appearance-none cursor-pointer" id="kategori_aplikasi" name="kategori_aplikasi" required="">
<option disabled="" selected="" value="">Pilih Kategori Platform Sistem</option>
<option value="web">Berbasis Web / Web Application</option>
<option value="mobile">Aplikasi Mobile Android / iOS</option>
<option value="desktop">Aplikasi Desktop / Layanan Khusus</option>
<option value="api">Web Service / API Gateway Interoperabilitas</option>
</select>
<div class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-xl">expand_more</span>
</div>
</div>
<p class="text-caption font-caption text-on-surface-variant">
              Sesuai panduan SPBE, arsitektur web responsif dan cloud-native diutamakan untuk layanan publik umum.
            </p>
</div>
<!-- Input 4: Area File Upload Drag-and-Drop -->
<div class="space-y-2">
<div class="flex items-center justify-between">
<label class="block text-label-lg font-label-lg text-on-surface">
                File Proposal &amp; Surat Pengantar <span class="text-error font-bold">*</span>
</label>
<span class="text-caption font-caption text-secondary font-semibold">Format: PDF, DOCX, ZIP (Maks 25MB)</span>
</div>
<!-- Modern Interactive Dropzone -->
<div class="relative group cursor-pointer border-2 border-dashed border-outline-variant/60 hover:border-secondary rounded-xl p-6 md:p-8 bg-surface-container-low hover:bg-surface-container transition-colors text-center" id="dropzone-container">
<input accept=".pdf,.docx,.zip" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="file_proposal" name="file_proposal" type="file"/>
<div class="flex flex-col items-center justify-center pointer-events-none">
<div class="w-14 h-14 rounded-full bg-white flex items-center justify-center text-primary-container shadow-sm group-hover:scale-105 transition-transform mb-3 border border-outline-variant/30">
<span class="material-symbols-outlined text-3xl">cloud_upload</span>
</div>
<h3 class="text-title-md font-title-md text-on-surface font-semibold mb-1">
                  Tarik &amp; Lepaskan Dokumen Proposal ke Sini
                </h3>
<p class="text-body-sm font-body-sm text-outline mb-3">
                  atau <span class="text-secondary font-semibold underline decoration-secondary">pilih berkas dari perangkat Anda</span>
</p>
<div class="flex flex-wrap items-center justify-center gap-2 text-caption font-caption text-outline">
<span class="px-2 py-0.5 rounded bg-white border border-outline-variant/30">Kerangka Acuan Kerja (KAK)</span>
<span class="px-2 py-0.5 rounded bg-white border border-outline-variant/30">Rincian Anggaran (RAB)</span>
<span class="px-2 py-0.5 rounded bg-white border border-outline-variant/30">Surat Pengantar Kepala Dinas</span>
</div>
</div>
</div>
<!-- Preview Box Berkas Contoh Terpilih (Enterprise UX) -->
<div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-3.5 flex items-center justify-between mt-3 shadow-sm">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-error-container text-error flex items-center justify-center font-bold">
<span class="material-symbols-outlined text-2xl">picture_as_pdf</span>
</div>
<div class="text-left">
<p class="text-label-md font-label-md text-on-surface font-semibold leading-tight truncate max-w-[220px] sm:max-w-md">
                    Proposal_Pengembangan_SIPPD_ProvRiau_2025.pdf
                  </p>
<p class="text-caption font-caption text-outline">
                    4.8 MB • Terverifikasi Siap Diunggah
                  </p>
</div>
</div>
<div class="flex items-center gap-2">
<span class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-800 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[13px]">check_circle</span> Siap
                </span>
<button class="p-1 rounded-md hover:bg-surface-container-low text-outline hover:text-error transition-colors" title="Hapus berkas" type="button">
<span class="material-symbols-outlined text-[18px]">close</span>
</button>
</div>
</div>
</div>
<!-- Kepatuhan & Persetujuan Ketentuan SPBE Checkbox -->
<div class="pt-2">
<label class="flex items-start gap-3 cursor-pointer select-none">
<div class="flex items-center h-5 mt-0.5">
<input class="w-4 h-4 rounded border-outline-variant text-primary-container focus:ring-secondary focus:ring-offset-0 cursor-pointer" id="agreement" name="agreement" required="" type="checkbox"/>
</div>
<div class="text-body-sm font-body-sm text-on-surface-variant">
<span>Saya menyatakan bahwa proposal pembangunan aplikasi ini telah dikoordinasikan secara internal dan mematuhi <strong>Pedoman Tata Kelola SPBE Pemprov Riau</strong>, serta bersedia mengikuti proses review teknis bersama Tim Asesor Diskominfo Provinsi Riau.</span>
</div>
</label>
</div>
<!-- Tombol Submit Lebar (Full-width Primary Action) -->
<div class="pt-4">
<button class="w-full py-3.5 px-6 rounded-xl bg-primary-container hover:bg-[#0056A6] active:bg-primary-container text-on-primary font-title-md text-title-md font-semibold tracking-wide shadow-sm hover:shadow-md transition-all duration-150 flex items-center justify-center gap-2 focus:outline-none focus:ring-4 focus:ring-secondary-fixed/50" type="submit">
<span class="material-symbols-outlined text-xl">send</span>
<span>Kirim Registrasi</span>
</button>
<p class="text-center text-caption font-caption text-outline mt-2.5">
              Notifikasi registrasi dan nomor tiket antrean usulan akan dikirimkan otomatis ke email resmi operator OPD.
            </p>
</div>
</form>
</section>
<!-- Additional Technical Support / Helpdesk Micro-card -->
<div class="mt-6 flex flex-col sm:flex-row items-center justify-between bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-4 gap-3 text-body-sm font-body-sm">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed">
<span class="material-symbols-outlined text-[18px]">support_agent</span>
</div>
<div>
<span class="font-semibold text-on-surface">Butuh asistensi penyusunan dokumen arsitektur?</span>
<span class="text-outline block sm:inline">Hubungi Helpdesk SPBE Diskominfo Riau.</span>
</div>
</div>
<a class="inline-flex items-center gap-1 text-label-md font-label-md text-secondary font-semibold hover:underline" href="/#helpdesk">
<span>Buka Tiket Konsultasi</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
</div>
</main>
<!-- Footer (Shared Component) -->
@include('opd.partials.footer')
<!-- Micro-interactions Script for Drag and Drop -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
      const dropzone = document.getElementById('dropzone-container');
      const fileInput = document.getElementById('file_proposal');

      ['dragenter', 'dragover'].forEach(eventName => {
        dropzone.addEventListener(eventName, (e) => {
          e.preventDefault();
          e.stopPropagation();
          dropzone.classList.add('border-primary', 'bg-surface-container');
        }, false);
      });

      ['dragleave', 'drop'].forEach(eventName => {
        dropzone.addEventListener(eventName, (e) => {
          e.preventDefault();
          e.stopPropagation();
          dropzone.classList.remove('border-primary', 'bg-surface-container');
        }, false);
      });

      fileInput.addEventListener('change', (e) => {
        if (e.target.files && e.target.files[0]) {
          console.log('File selected: ', e.target.files[0].name);
        }
      });
    });
  </script>
</body>
</html>

