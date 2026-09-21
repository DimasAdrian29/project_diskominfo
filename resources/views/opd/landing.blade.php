<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>SIMBANGDA Diskominfo Riau - Sistem Manajemen Pengembangan Aplikasi</title>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Plus Jakarta Sans Font Family -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS CDN with forms and container-queries -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Theme Configuration -->
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "on-primary-container": "#a1bbff",
            "primary-container": "#0d47a1",
            "on-secondary-fixed-variant": "#00468a",
            "on-error": "#ffffff",
            "inverse-on-surface": "#ecf1ff",
            "surface-variant": "#d8e3fb",
            "surface-dim": "#cfdaf2",
            "background": "#f9f9ff",
            "surface-container-high": "#dee8ff",
            "on-tertiary-container": "#7fc3ff",
            "surface-container-lowest": "#ffffff",
            "surface-container": "#e7eeff",
            "inverse-surface": "#263143",
            "tertiary-fixed-dim": "#96ccff",
            "on-surface": "#111c2d",
            "outline": "#737783",
            "on-secondary-fixed": "#001b3c",
            "on-tertiary-fixed": "#001d32",
            "inverse-primary": "#b0c6ff",
            "on-tertiary": "#ffffff",
            "on-secondary-container": "#003d79",
            "outline-variant": "#c3c6d4",
            "surface-bright": "#f9f9ff",
            "on-primary-fixed": "#001945",
            "surface-container-low": "#f0f3ff",
            "on-primary-fixed-variant": "#00429c",
            "on-secondary": "#ffffff",
            "secondary-fixed": "#d5e3ff",
            "on-surface-variant": "#434652",
            "surface": "#f9f9ff",
            "primary-fixed-dim": "#b0c6ff",
            "secondary-fixed-dim": "#a8c8ff",
            "on-primary": "#ffffff",
            "on-tertiary-fixed-variant": "#004a75",
            "surface-tint": "#2b5bb5",
            "on-background": "#111c2d",
            "primary": "#003178",
            "secondary": "#165eae",
            "secondary-container": "#71aaff",
            "on-error-container": "#93000a",
            "tertiary-container": "#00507e",
            "surface-container-highest": "#d8e3fb",
            "error": "#ba1a1a",
            "primary-fixed": "#d9e2ff",
            "tertiary-fixed": "#cee5ff",
            "tertiary": "#00385a",
            "error-container": "#ffdad6"
          },
          "borderRadius": {
            "DEFAULT": "0.125rem",
            "lg": "0.25rem",
            "xl": "0.5rem",
            "full": "0.75rem"
          },
          "spacing": {
            "space-2xl": "3rem",
            "space-lg": "1.5rem",
            "space-md": "1rem",
            "space-xl": "2rem",
            "space-3xl": "4rem",
            "space-xs": "0.5rem",
            "space-sm": "0.75rem",
            "container-max": "1280px",
            "space-2xs": "0.25rem",
            "gutter-mobile": "1rem",
            "gutter-desktop": "1.5rem"
          },
          "fontFamily": {
            "body-md": ["Plus Jakarta Sans"],
            "headline-md": ["Plus Jakarta Sans"],
            "headline-lg-mobile": ["Plus Jakarta Sans"],
            "title-md": ["Plus Jakarta Sans"],
            "headline-lg": ["Plus Jakarta Sans"],
            "body-lg": ["Plus Jakarta Sans"],
            "body-sm": ["Plus Jakarta Sans"],
            "label-lg": ["Plus Jakarta Sans"],
            "caption": ["Plus Jakarta Sans"],
            "display-hero-mobile": ["Plus Jakarta Sans"],
            "display-hero": ["Plus Jakarta Sans"],
            "title-lg": ["Plus Jakarta Sans"],
            "label-md": ["Plus Jakarta Sans"],
            "headline-sm": ["Plus Jakarta Sans"]
          },
          "fontSize": {
            "body-md": ["16px", { "lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "400" }],
            "headline-md": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.015em", "fontWeight": "700" }],
            "headline-lg-mobile": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.015em", "fontWeight": "700" }],
            "title-md": ["16px", { "lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "600" }],
            "headline-lg": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
            "body-lg": ["18px", { "lineHeight": "28px", "letterSpacing": "0em", "fontWeight": "400" }],
            "body-sm": ["14px", { "lineHeight": "20px", "letterSpacing": "0em", "fontWeight": "400" }],
            "label-lg": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600" }],
            "caption": ["12px", { "lineHeight": "16px", "letterSpacing": "0.01em", "fontWeight": "400" }],
            "display-hero-mobile": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "800" }],
            "display-hero": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.025em", "fontWeight": "800" }],
            "title-lg": ["18px", { "lineHeight": "26px", "letterSpacing": "-0.005em", "fontWeight": "600" }],
            "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600" }],
            "headline-sm": ["20px", { "lineHeight": "28px", "letterSpacing": "-0.01em", "fontWeight": "600" }]
          }
        }
      }
    }
</script>
<style>
    html {
      scroll-behavior: smooth;
      overscroll-behavior: none;
    }

    .material-symbols-outlined {
      font-family: 'Material Symbols Outlined';
      font-weight: normal;
      font-style: normal;
      font-size: 20px;
      line-height: 1;
      display: inline-block;
      white-space: nowrap;
      word-wrap: normal;
      direction: ltr;
      -webkit-font-feature-settings: 'liga';
      -webkit-font-smoothing: antialiased;
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
<body class="bg-background text-on-surface font-body-md text-body-md antialiased min-h-screen flex flex-col selection:bg-secondary-fixed selection:text-on-secondary-fixed">

 
@include('opd.partials.navbar')

<main class="flex-grow">
<section class="relative bg-gradient-to-b from-primary-container via-primary to-background pt-12 pb-20 text-on-primary overflow-hidden">
<!-- Background subtle grid pattern -->
<div class="absolute inset-0 opacity-10 pointer-events-none bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:20px_20px]"></div>
<div class="max-w-container-max mx-auto px-gutter-desktop relative z-10">
<!-- Official Badge -->
<div class="flex justify-center md:justify-start mb-6">

</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
<!-- Left Column: Greeting & Narrative -->
<div class="lg:col-span-7 text-center md:text-left">
<h1 class="text-display-hero-mobile md:text-display-hero font-display-hero font-extrabold tracking-tight leading-tight text-white mb-4">
              Selamat Datang Di Pengelola TIK Perangkat Daerah (OPD) Provinsi Riau
            </h1>
<p class="text-body-lg font-body-lg text-surface-variant max-w-2xl mb-8 leading-relaxed">
              Sistem Manajemen Pengembangan Aplikasi (SIMBANGDA) merupakan pusat kendali terintegrasi untuk verifikasi, standarisasi arsitektur SPBE, uji kerentanan keamanan siber, dan monitoring siklus hidup aplikasi di seluruh OPD Pemerintah Provinsi Riau.
            </p>
<!-- Hero CTA Trigger Group -->
<div class="flex flex-wrap items-center justify-center md:justify-start gap-4">
<a class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-surface-container-lowest text-primary font-bold text-label-lg font-label-lg shadow-md hover:bg-surface-container hover:shadow-lg transition-all transform hover:-translate-y-0.5" href="#cta-portal">
<span class="material-symbols-outlined text-[20px]" data-icon="dashboard">dashboard</span>
                Akses Portal Layanan Aplikasi
              </a>
<a class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-white/10 hover:bg-white/20 text-white font-semibold text-label-lg font-label-lg border border-white/20 backdrop-blur transition-all" href="#alur-verifikasi">
<span class="material-symbols-outlined text-[20px]" data-icon="flowsheet">flowsheet</span>
                Lihat Alur Standarisasi
              </a>
</div>
</div>
<!-- Right Column: Institutional Feature Image -->
<div class="lg:col-span-5 relative mt-8 lg:mt-0">
    <div class="w-full rounded-2xl overflow-hidden shadow-2xl border border-white/20 aspect-[4/3] lg:aspect-[5/4] max-h-[420px]">
        <!-- Main Image clean without any overlays -->
        <img class="w-full h-full object-cover object-center"
             alt="Pusat Kendali Digital SPBE Riau"
             src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiOd2CTSlRuc9Jjf50JjLpA8KWP8NQLDg2D8uAfTjvqWZnA-HaBMHKe5NUnmDp0zfFN9Lx9ODSqrRcN30W36L7YUAV4-BsLWESswUBC4lQexvgEaweBzfgPpTKnQHeQxQ3EQsSmqSRhJD1a_y2Yj_yxPyaMEqGfRose7bmduoE-NHKMaeZQOnuvrnbCpp8hawwdwI_VFkaQOq8MnSj0JE4b6QvUnZ45o6LINu02GwOaTakodMoeVUW"/>
    </div>
</div>
</div>
</div>
</div>
<!-- Mini Stats Grid: Metrik Keterpaduan TIK -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-14 pt-8 border-t border-white/15">
<div class="bg-white/10 backdrop-blur rounded-xl p-4 border border-white/15 flex items-center gap-4">
<div class="w-12 h-12 rounded-xl bg-surface-container-lowest/20 flex items-center justify-center text-white">
<span class="material-symbols-outlined text-[28px]" data-icon="apps">apps</span>
</div>
<div>
<div class="text-headline-md font-headline-md text-white font-bold">142+</div>
<div class="text-body-sm font-body-sm text-surface-variant">Aplikasi Sektoral Terdaftar</div>
</div>
</div>
<div class="bg-white/10 backdrop-blur rounded-xl p-4 border border-white/15 flex items-center gap-4">
<div class="w-12 h-12 rounded-xl bg-surface-container-lowest/20 flex items-center justify-center text-white">
<span class="material-symbols-outlined text-[28px]" data-icon="domain">domain</span>
</div>
<div>
<div class="text-headline-md font-headline-md text-white font-bold">48 OPD</div>
<div class="text-body-sm font-body-sm text-surface-variant">Terhubung di Pemprov Riau</div>
</div>
</div>
<div class="bg-white/10 backdrop-blur rounded-xl p-4 border border-white/15 flex items-center gap-4">
<div class="w-12 h-12 rounded-xl bg-surface-container-lowest/20 flex items-center justify-center text-white">
<span class="material-symbols-outlined text-[28px]" data-icon="hub">hub</span>
</div>
<div>
<div class="text-headline-md font-headline-md text-white font-bold">94.8%</div>
<div class="text-body-sm font-body-sm text-surface-variant">Kepatuhan Interoperabilitas API</div>
</div>
</div>
</div>
</div>
</section>


<!-- 3. TENTANG APLIKASI (Tujuan & Landasan Layanan) -->
<section class="py-space-2xl bg-surface" id="tujuan-layanan">
<div class="max-w-container-max mx-auto px-gutter-desktop">
<!-- Section Header -->
<div class="text-center max-w-3xl mx-auto mb-12">
<div class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-surface-container text-primary text-caption font-caption font-semibold mb-3">
<span class="material-symbols-outlined text-[16px]" data-icon="fact_check">fact_check</span>
            Landasan Tata Kelola
          </div>
<h2 class="text-headline-lg font-headline-lg text-primary font-bold tracking-tight mb-3">
            Tentang Sistem Manajemen Pengembangan Aplikasi
          </h2>
<p class="text-body-md font-body-md text-on-surface-variant">
            Pusat kendali dan standarisasi siklus rekayasa perangkat lunak pemerintah daerah untuk menjamin transparansi, efisiensi anggaran, serta keamanan aset digital Provinsi Riau.
          </p>
</div>
<!-- 4 Core Pillars Bento Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Pilar 1 -->
<div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant/30 shadow-sm hover:shadow-md hover:border-secondary transition-all flex flex-col justify-between">
<div>
<div class="w-12 h-12 rounded-xl bg-surface-container text-primary flex items-center justify-center mb-5">
<span class="material-symbols-outlined text-[26px]" data-icon="account_tree">account_tree</span>
</div>
<h3 class="text-title-lg font-title-lg font-bold text-on-surface mb-2.5">
                Standarisasi Arsitektur SPBE
              </h3>
<p class="text-body-sm font-body-sm text-on-surface-variant leading-relaxed">
                Menyeragamkan framework, protokol integrasi REST API, basis data, dan penjaminan interoperabilitas data antar-instansi sesuai Rencana Induk SPBE Provinsi Riau.
              </p>
</div>
<div class="mt-6 pt-4 border-t border-outline-variant/20 flex items-center text-primary text-caption font-caption font-semibold gap-1">
<span class="material-symbols-outlined text-[16px]" data-icon="check_circle">check_circle</span>
              Kesesuaian Arsitektur 100%
            </div>
</div>
<!-- Pilar 2 -->
<div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant/30 shadow-sm hover:shadow-md hover:border-secondary transition-all flex flex-col justify-between">
<div>
<div class="w-12 h-12 rounded-xl bg-surface-container text-primary flex items-center justify-center mb-5">
<span class="material-symbols-outlined text-[26px]" data-icon="savings">savings</span>
</div>
<h3 class="text-title-lg font-title-lg font-bold text-on-surface mb-2.5">
                Efisiensi Anggaran TIK Daerah
              </h3>
<p class="text-body-sm font-body-sm text-on-surface-variant leading-relaxed">
                Mencegah duplikasi aplikasi serupa antar-OPD. Setiap pengajuan divalidasi dengan katalog aplikasi eksisting guna mengoptimalkan belanja modal APBD Riau.
              </p>
</div>
<div class="mt-6 pt-4 border-t border-outline-variant/20 flex items-center text-primary text-caption font-caption font-semibold gap-1">
<span class="material-symbols-outlined text-[16px]" data-icon="check_circle">check_circle</span>
              Pencegahan Redundansi Sistem
            </div>
</div>
<!-- Pilar 3 -->
<div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant/30 shadow-sm hover:shadow-md hover:border-secondary transition-all flex flex-col justify-between">
<div>
<div class="w-12 h-12 rounded-xl bg-surface-container text-primary flex items-center justify-center mb-5">
<span class="material-symbols-outlined text-[26px]" data-icon="shield_lock">shield_lock</span>
</div>
<h3 class="text-title-lg font-title-lg font-bold text-on-surface mb-2.5">
                Uji Keamanan Informasi (VAPT)
              </h3>
<p class="text-body-sm font-body-sm text-on-surface-variant leading-relaxed">
                Pemeriksaan kerentanan ketat (Vulnerability Assessment &amp; Penetration Testing) oleh Tim CSIRT Diskominfo Riau sebelum aplikasi memperoleh izin deployment live.
              </p>
</div>
<div class="mt-6 pt-4 border-t border-outline-variant/20 flex items-center text-primary text-caption font-caption font-semibold gap-1">
<span class="material-symbols-outlined text-[16px]" data-icon="check_circle">check_circle</span>
              Sertifikasi Bebas Kerentanan
            </div>
</div>
<!-- Pilar 4 -->
<div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant/30 shadow-sm hover:shadow-md hover:border-secondary transition-all flex flex-col justify-between">
<div>
<div class="w-12 h-12 rounded-xl bg-surface-container text-primary flex items-center justify-center mb-5">
<span class="material-symbols-outlined text-[26px]" data-icon="published_with_changes">published_with_changes</span>
</div>
<h3 class="text-title-lg font-title-lg font-bold text-on-surface mb-2.5">
                Siklus Hidup Terkelola
              </h3>
<p class="text-body-sm font-body-sm text-on-surface-variant leading-relaxed">
                Pemantauan menyeluruh dari fase usulan (inkubasi), pengujian, operasional aktif, penundaan jadwal, hingga penonaktifan aplikasi yang sudah usang/terintegrasi.
              </p>
</div>
<div class="mt-6 pt-4 border-t border-outline-variant/20 flex items-center text-primary text-caption font-caption font-semibold gap-1">
<span class="material-symbols-outlined text-[16px]" data-icon="check_circle">check_circle</span>
              Audit Siklus Berkala Tahunan
            </div>
</div>
</div>
</div>
</section>

<!-- 4. CALL TO ACTION (CTA) UTAMA: 3 TOMBOL SIKLUS HIDUP APLIKASI OPD -->
<section class="py-space-2xl bg-surface-container-low border-y border-outline-variant/20" id="cta-portal">
<div class="max-w-container-max mx-auto px-gutter-desktop">
<!-- Header CTA Card Container -->
<div class="bg-surface-container-lowest rounded-2xl p-6 sm:p-10 border border-outline-variant/30 shadow-sm">
<div class="max-w-3xl mb-8">
<div class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-primary-fixed text-on-primary-fixed text-caption font-caption font-bold mb-2.5">
<span class="material-symbols-outlined text-[16px]" data-icon="touch_app">touch_app</span>
              Layanan Mandiri Perangkat Daerah (OPD)
            </div>
<h2 class="text-headline-lg font-headline-lg font-bold text-primary tracking-tight mb-2">
              Kelola &amp; Ajukan Permohonan Siklus Hidup Aplikasi OPD
            </h2>
<p class="text-body-md font-body-md text-on-surface-variant">
              Pilihlah jalur permohonan dinas di bawah ini sesuai tahapan sistem yang sedang dikelola oleh Unit TIK OPD Anda:
            </p>
</div>
<!-- TEPAT 3 TOMBOL UTAMA BERUKURAN PROPORSIONAL (3 KOLOM BERDAMPINGAN) -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Tombol 1: Registrasi Aplikasi -->
<div class="group relative rounded-xl border-2 border-primary/20 hover:border-primary bg-surface-container-lowest p-6 flex flex-col justify-between transition-all duration-200 hover:shadow-lg">
<div>
<div class="flex items-center justify-between mb-4">
<div class="w-12 h-12 rounded-xl bg-primary-container text-white flex items-center justify-center shadow-md">
<span class="material-symbols-outlined text-[26px]" data-icon="note_add">note_add</span>
</div>
<span class="text-caption font-caption font-bold px-2.5 py-1 rounded bg-primary-fixed text-on-primary-fixed">Tahap Awal</span>
</div>
<h3 class="text-title-lg font-title-lg font-bold text-primary mb-2">
                  Registrasi Aplikasi
                </h3>
<p class="text-body-sm font-body-sm text-on-surface-variant mb-6 leading-relaxed">
                  Pendaftaran usulan rancang bangun baru, audit arsitektur SPBE, dan registrasi kode aplikasi sebelum masuk DPA/pengembangan.
                </p>
</div>
<div>
<a href="/registrasi-aplikasi" class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-lg bg-primary hover:bg-secondary text-white font-semibold text-label-lg font-label-lg shadow transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="add_circle">add_circle</span>
                  Ajukan Registrasi Baru
                </a>
<span class="block text-center text-caption font-caption text-outline mt-2">Estimasi verifikasi: 3-5 hari kerja</span>
</div>
</div>
<!-- Tombol 2: Penundaan Aplikasi -->
<div class="group relative rounded-xl border-2 border-amber-300 hover:border-amber-500 bg-surface-container-lowest p-6 flex flex-col justify-between transition-all duration-200 hover:shadow-lg">
<div>
<div class="flex items-center justify-between mb-4">
<div class="w-12 h-12 rounded-xl bg-amber-500 text-white flex items-center justify-center shadow-md">
<span class="material-symbols-outlined text-[26px]" data-icon="pause_circle">pause_circle</span>
</div>
<span class="text-caption font-caption font-bold px-2.5 py-1 rounded bg-amber-100 text-amber-800">Penyesuaian</span>
</div>
<h3 class="text-title-lg font-title-lg font-bold text-amber-900 mb-2">
                  Penundaan Aplikasi
                </h3>
<p class="text-body-sm font-body-sm text-on-surface-variant mb-6 leading-relaxed">
                  Permohonan penangguhan sementara proses pengembangan perangkat lunak, jeda uji fungsi, atau penyesuaian jadwal rilis operasional.
                </p>
</div>
<div>
<a href="/penundaan-aplikasi" class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-lg bg-amber-600 hover:bg-amber-700 text-white font-semibold text-label-lg font-label-lg shadow transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="hourglass_top">hourglass_top</span>
                  Ajukan Penundaan
                </a>
<span class="block text-center text-caption font-caption text-outline mt-2">Wajib lampiran surat pengantar Kadis</span>
</div>
</div>
<!-- Tombol 3: Penonaktifkan Aplikasi -->
<div class="group relative rounded-xl border-2 border-slate-300 hover:border-rose-400 bg-surface-container-lowest p-6 flex flex-col justify-between transition-all duration-200 hover:shadow-lg">
<div>
<div class="flex items-center justify-between mb-4">
<div class="w-12 h-12 rounded-xl bg-slate-700 text-white flex items-center justify-center shadow-md">
<span class="material-symbols-outlined text-[26px]" data-icon="power_settings_new">power_settings_new</span>
</div>
<span class="text-caption font-caption font-bold px-2.5 py-1 rounded bg-rose-100 text-rose-800">Fase Akhir</span>
</div>
<h3 class="text-title-lg font-title-lg font-bold text-slate-900 mb-2">
                  Penonaktifkan Aplikasi
                </h3>
<p class="text-body-sm font-body-sm text-on-surface-variant mb-6 leading-relaxed">
                  Permohonan sunset, migrasi data ke SuperApp Riau, penutupan repositori, pelepasan sub-domain riau.go.id, dan penonaktifan server.
                </p>
</div>
<div>
<a href="/penonaktifan-aplikasi" class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-lg bg-slate-800 hover:bg-rose-700 text-white font-semibold text-label-lg font-label-lg shadow transition-colors">
<span class="material-symbols-outlined text-[20px]" data-icon="archive">archive</span>
                  Ajukan Deaktivasi
                </a>
<span class="block text-center text-caption font-caption text-outline mt-2">Proses backup data permanen</span>
</div>
</div>
</div>
<!-- Official Instruction Notice -->
<div class="mt-8 p-4 rounded-xl bg-surface-container-low border border-outline-variant/30 flex items-start gap-3">
<span class="material-symbols-outlined text-primary text-[22px] mt-0.5" data-icon="info">info</span>
<div class="text-body-sm font-body-sm text-on-surface">
<span class="font-bold text-primary">Petunjuk bagi Admin OPD:</span> Pastikan akun operator Anda telah terdaftar pada Single Sign-On (SSO) Pemerintah Provinsi Riau dan memiliki Surat Keputusan (SK) Tim Pengelola TIK OPD yang masih berlaku.
            </div>
</div>
</div>
</div>
</section>

<!-- 5. ALUR VERIFIKASI & KONTAK BANTUAN DISKOMINFO RIAU -->
<section class="py-space-2xl bg-surface" id="alur-verifikasi">
<div class="max-w-container-max mx-auto px-gutter-desktop">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
<!-- Left 7 Cols: 4 Langkah Alur Verifikasi -->
<div class="lg:col-span-7">
<div class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-surface-container text-primary text-caption font-caption font-semibold mb-2">
<span class="material-symbols-outlined text-[16px]" data-icon="alt_route">alt_route</span>
              Tata Kelola Transparan
            </div>
<h2 class="text-headline-lg font-headline-lg font-bold text-primary tracking-tight mb-2">
              Alur 4 Tahap Verifikasi &amp; Uji Kelayakan Aplikasi
            </h2>
<p class="text-body-md font-body-md text-on-surface-variant mb-8">
              Mekanisme standarisasi yang dilalui setiap usulan aplikasi sebelum dapat diterapkan secara publik di lingkungan Pemprov Riau:
            </p>
<div class="space-y-4">
<!-- Step 1 -->
<div class="flex gap-4 p-4 rounded-xl bg-surface-container-lowest border border-outline-variant/20 shadow-sm">
<div class="w-10 h-10 rounded-full bg-primary-container text-white flex items-center justify-center font-bold text-label-lg shrink-0">
                  1
                </div>
<div>
<h4 class="text-title-md font-title-md font-bold text-primary">Pengajuan Berkas &amp; Arsitektur SPBE</h4>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1">
                    OPD mengunggah dokumen spesifikasi teknis, data flow diagram (DFD), rancangan API, dan surat rekomendasi dinas melalui portal SIMBANGDA.
                  </p>
</div>
</div>
<!-- Step 2 -->
<div class="flex gap-4 p-4 rounded-xl bg-surface-container-lowest border border-outline-variant/20 shadow-sm">
<div class="w-10 h-10 rounded-full bg-primary-container text-white flex items-center justify-center font-bold text-label-lg shrink-0">
                  2
                </div>
<div>
<h4 class="text-title-md font-title-md font-bold text-primary">Review Redundansi &amp; Validasi Data Sektoral</h4>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1">
                    Diskominfo memeriksa kesamaan modul dengan aplikasi provinsi lain serta memastikan integrasi data dengan Satu Data Riau.
                  </p>
</div>
</div>
<!-- Step 3 -->
<div class="flex gap-4 p-4 rounded-xl bg-surface-container-lowest border border-outline-variant/20 shadow-sm">
<div class="w-10 h-10 rounded-full bg-primary-container text-white flex items-center justify-center font-bold text-label-lg shrink-0">
                  3
                </div>
<div>
<h4 class="text-title-md font-title-md font-bold text-primary">Uji Penetrasi &amp; Keamanan Informasi (VAPT)</h4>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1">
                    Tim Siber Diskominfo melakukan pengujian kerentanan (OWASP Top 10) pada server staging. Temuan celah keamanan wajib diperbaiki tim developer.
                  </p>
</div>
</div>
<!-- Step 4 -->
<div class="flex gap-4 p-4 rounded-xl bg-surface-container-lowest border border-outline-variant/20 shadow-sm">
<div class="w-10 h-10 rounded-full bg-primary-container text-white flex items-center justify-center font-bold text-label-lg shrink-0">
                  4
                </div>
<div>
<h4 class="text-title-md font-title-md font-bold text-primary">Penerbitan Surat Rekomendasi &amp; Deploy Live</h4>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1">
                    Penerbitan Surat Kelaikan Operasional Resmi, alokasi domain riau.go.id, dan penempatan aplikasi pada Data Center Provinsi Riau.
                  </p>
</div>
</div>
</div>
</div>
<!-- Right 5 Cols: Helpdesk & Tim Teknis Konsultasi -->
<div class="lg:col-span-5 flex flex-col justify-between" id="helpdesk">
<div class="bg-primary-container text-on-primary rounded-2xl p-6 sm:p-8 shadow-md">
<div class="flex items-center gap-3 mb-4">
<div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center">
<span class="material-symbols-outlined text-[28px] text-secondary-container" data-icon="contact_support">contact_support</span>
</div>
<div>
<h3 class="text-title-lg font-title-lg font-bold text-white">Helpdesk Konsultasi OPD</h3>
<p class="text-caption font-caption text-on-primary-container">Bidang Aplikasi Informatika &amp; Siber</p>
</div>
</div>
<p class="text-body-sm font-body-sm text-surface-variant mb-6 leading-relaxed">
                Butuh pendampingan penyusunan arsitektur SPBE, uji VAPT mendesak, atau konsultasi API Satu Data Riau? Tim teknis Diskominfo Riau siap membantu:
              </p>
<div class="space-y-3.5 mb-6 text-body-sm font-body-sm">
<div class="flex items-center gap-3 p-3 rounded-lg bg-white/10">
<span class="material-symbols-outlined text-secondary-container" data-icon="location_on">location_on</span>
<span>Gedung Diskominfotik Riau, Jl. Diponegoro No. 24A, Pekanbaru</span>
</div>
<div class="flex items-center gap-3 p-3 rounded-lg bg-white/10">
<span class="material-symbols-outlined text-secondary-container" data-icon="mail">mail</span>
<span>simbangda@riau.go.id / aptika@riau.go.id</span>
</div>
<div class="flex items-center gap-3 p-3 rounded-lg bg-white/10">
<span class="material-symbols-outlined text-secondary-container" data-icon="call">call</span>
<span>(0761) 23456 (Senin - Jumat, 08.00 - 16.00 WIB)</span>
</div>
</div>
<a class="inline-flex w-full items-center justify-center gap-2 py-3 px-4 rounded-xl bg-secondary-container hover:bg-white text-on-secondary-container hover:text-primary font-bold text-label-lg font-label-lg transition-all shadow" href="https://wa.me/" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[20px]" data-icon="chat">chat</span>
                Hubungi WhatsApp Helpdesk TIK
              </a>
</div>
<!-- Download Panduan Quick Card -->
<div class="mt-6 bg-surface-container-lowest p-5 rounded-2xl border border-outline-variant/30 flex items-center justify-between" id="panduan">
<div class="flex items-center gap-3">
<div class="p-2.5 rounded-xl bg-surface-container text-primary">
<span class="material-symbols-outlined text-[24px]" data-icon="menu_book">menu_book</span>
</div>
<div>
<div class="text-title-md font-title-md font-bold text-primary">Buku Saku Standarisasi 2025</div>
<div class="text-caption font-caption text-on-surface-variant">Pedoman Teknis Pengembangan Aplikasi Pemprov Riau (PDF)</div>
</div>
</div>
<a class="p-2.5 rounded-lg text-primary hover:bg-surface-container transition-colors" href="#" title="Unduh Panduan">
<span class="material-symbols-outlined text-[24px]" data-icon="download">download</span>
</a>
</div>
</div>
</div>
</div>
</section>

<!-- 6. REGULASI SPBE SECTION -->
<section class="py-space-xl bg-surface-container-lowest border-t border-outline-variant/20" id="regulasi">
<div class="max-w-container-max mx-auto px-gutter-desktop">
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
<div>
<h3 class="text-title-lg font-title-lg font-bold text-primary">Dasar Hukum &amp; Regulasi SPBE Riau</h3>
<p class="text-body-sm font-body-sm text-on-surface-variant">Keputusan dan Peraturan Gubernur yang memayungi standarisasi aplikasi</p>
</div>
<a class="inline-flex items-center gap-1 text-label-lg font-label-lg text-secondary hover:underline" href="#">
            Lihat JDIH Pemprov Riau
            <span class="material-symbols-outlined text-[16px]" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div class="p-4 rounded-xl bg-surface border border-outline-variant/30">
<span class="text-caption font-caption font-bold text-secondary">Perpres No. 95 Tahun 2018</span>
<p class="text-body-sm font-body-sm font-semibold text-on-surface mt-1">Sistem Pemerintahan Berbasis Elektronik (SPBE) Nasional</p>
</div>
<div class="p-4 rounded-xl bg-surface border border-outline-variant/30">
<span class="text-caption font-caption font-bold text-secondary">Perpres No. 39 Tahun 2019</span>
<p class="text-body-sm font-body-sm font-semibold text-on-surface mt-1">Satu Data Indonesia &amp; Keterpaduan Layanan Publik</p>
</div>
<div class="p-4 rounded-xl bg-surface border border-outline-variant/30">
<span class="text-caption font-caption font-bold text-secondary">Pergub Riau No. 12 Tahun 2022</span>
<p class="text-body-sm font-body-sm font-semibold text-on-surface mt-1">Penyelenggaraan SPBE di Lingkungan Pemerintah Provinsi Riau</p>
</div>
</div>
</div>
</section>
<!-- 7. TENTANG DISKOMINFO RIAU -->
<section class="py-space-2xl bg-surface-container-lowest border-t border-outline-variant/20" id="tentang">
<div class="max-w-container-max mx-auto px-gutter-desktop">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
  <div>
    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-secondary-fixed text-on-secondary-fixed text-caption font-caption font-semibold mb-4">
      <span class="material-symbols-outlined text-[16px]">corporate_fare</span>
      Profil Instansi
    </div>
    <h2 class="text-headline-lg font-headline-lg font-bold text-primary tracking-tight mb-4">
      Dinas Komunikasi, Informatika dan Statistik Provinsi Riau
    </h2>
    <p class="text-body-md font-body-md text-on-surface-variant mb-6 leading-relaxed">
      Dinas Komunikasi, Informatika dan Statistik (Diskominfotik) Provinsi Riau adalah instansi pelaksana urusan pemerintahan di bidang komunikasi, informatika, statistik, dan persandian yang menjadi kewenangan daerah.
    </p>
    <p class="text-body-md font-body-md text-on-surface-variant mb-8 leading-relaxed">
      Diskominfotik Riau berkomitmen untuk mewujudkan pelayanan informasi publik yang transparan, tata kelola Sistem Pemerintahan Berbasis Elektronik (SPBE) yang terintegrasi, serta keamanan siber yang tangguh demi mendukung pembangunan daerah.
    </p>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      <div class="p-4 rounded-xl bg-surface-container-low border border-outline-variant/30 flex items-start gap-3">
        <span class="material-symbols-outlined text-secondary mt-0.5">public</span>
        <div>
          <div class="font-bold text-on-surface text-title-md">Transformasi Digital</div>
          <div class="text-caption font-caption text-on-surface-variant mt-1">Akselerasi layanan SPBE terpadu.</div>
        </div>
      </div>
      <div class="p-4 rounded-xl bg-surface-container-low border border-outline-variant/30 flex items-start gap-3">
        <span class="material-symbols-outlined text-secondary mt-0.5">security</span>
        <div>
          <div class="font-bold text-on-surface text-title-md">Keamanan Siber</div>
          <div class="text-caption font-caption text-on-surface-variant mt-1">Perlindungan data Pemprov Riau.</div>
        </div>
      </div>
      <div class="p-4 rounded-xl bg-surface-container-low border border-outline-variant/30 flex items-start gap-3">
        <span class="material-symbols-outlined text-secondary mt-0.5">analytics</span>
        <div>
          <div class="font-bold text-on-surface text-title-md">Satu Data Riau</div>
          <div class="text-caption font-caption text-on-surface-variant mt-1">Integrasi data statistik daerah.</div>
        </div>
      </div>
      <div class="p-4 rounded-xl bg-surface-container-low border border-outline-variant/30 flex items-start gap-3">
        <span class="material-symbols-outlined text-secondary mt-0.5">cell_tower</span>
        <div>
          <div class="font-bold text-on-surface text-title-md">Infrastruktur TIK</div>
          <div class="text-caption font-caption text-on-surface-variant mt-1">Jaringan komunikasi andal.</div>
        </div>
      </div>
    </div>
    
    <div class="mt-8">
      <a href="https://diskominfotik.riau.go.id/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-primary hover:bg-secondary text-white font-semibold text-label-lg font-label-lg transition-colors shadow-sm">
        <span>Kunjungi Website Resmi</span>
        <span class="material-symbols-outlined text-[18px]">open_in_new</span>
      </a>
    </div>
  </div>
  
  <div class="relative mt-8 lg:mt-0">
    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-lg border border-outline-variant/20 relative z-10 bg-white flex items-center justify-center p-8">
      <img src="{{ asset('images/kominfo-seeklogo.png') }}" alt="Logo Kominfo" class="w-1/2 h-auto object-contain">
    </div>
    <div class="absolute -bottom-6 -right-6 w-3/4 h-3/4 bg-primary-fixed rounded-2xl -z-10"></div>
    <div class="absolute -top-6 -left-6 w-1/2 h-1/2 bg-surface-container-highest rounded-2xl -z-10"></div>
  </div>
</div>
</div>
</section>
</main>

<!-- 7. FOOTER RESMI -->
@include('opd.partials.footer')
</body>
</html>

