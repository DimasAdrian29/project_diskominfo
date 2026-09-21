<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>SIMBANGDA Riau - Manajemen Pengujian Aplikasi</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS with Forms and Container Queries -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "error-container": "#ffdad6",
            "background": "#f9f9ff",
            "surface-container": "#e7eeff",
            "inverse-on-surface": "#ecf1ff",
            "tertiary-container": "#00507e",
            "surface-dim": "#cfdaf2",
            "primary-fixed": "#d9e2ff",
            "on-surface": "#111c2d",
            "surface-tint": "#2b5bb5",
            "on-error-container": "#93000a",
            "on-secondary": "#ffffff",
            "secondary-container": "#71aaff",
            "outline-variant": "#c3c6d4",
            "primary-container": "#0d47a1",
            "surface-container-highest": "#d8e3fb",
            "surface-bright": "#f9f9ff",
            "on-tertiary-fixed": "#001d32",
            "on-primary-fixed": "#001945",
            "tertiary-fixed": "#cee5ff",
            "surface-container-lowest": "#ffffff",
            "error": "#ba1a1a",
            "inverse-primary": "#b0c6ff",
            "on-primary-fixed-variant": "#00429c",
            "on-tertiary": "#ffffff",
            "primary": "#003178",
            "surface-container-high": "#dee8ff",
            "inverse-surface": "#263143",
            "primary-fixed-dim": "#b0c6ff",
            "surface-variant": "#d8e3fb",
            "on-background": "#111c2d",
            "on-secondary-fixed": "#001b3c",
            "on-secondary-container": "#003d79",
            "on-tertiary-fixed-variant": "#004a75",
            "on-secondary-fixed-variant": "#00468a",
            "secondary-fixed-dim": "#a8c8ff",
            "tertiary": "#00385a",
            "outline": "#737783",
            "on-primary": "#ffffff",
            "surface-container-low": "#f0f3ff",
            "secondary-fixed": "#d5e3ff",
            "tertiary-fixed-dim": "#96ccff",
            "on-surface-variant": "#434652",
            "on-error": "#ffffff",
            "on-primary-container": "#a1bbff",
            "on-tertiary-container": "#7fc3ff",
            "secondary": "#165eae",
            "surface": "#f9f9ff"
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
            "body-md": ["Plus Jakarta Sans"],
            "title-lg": ["Plus Jakarta Sans"],
            "body-sm": ["Plus Jakarta Sans"],
            "display-hero": ["Plus Jakarta Sans"],
            "headline-md": ["Plus Jakarta Sans"],
            "title-md": ["Plus Jakarta Sans"],
            "headline-lg": ["Plus Jakarta Sans"],
            "body-lg": ["Plus Jakarta Sans"],
            "headline-lg-mobile": ["Plus Jakarta Sans"],
            "caption": ["Plus Jakarta Sans"],
            "label-md": ["Plus Jakarta Sans"],
            "display-hero-mobile": ["Plus Jakarta Sans"],
            "label-lg": ["Plus Jakarta Sans"],
            "headline-sm": ["Plus Jakarta Sans"]
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
<body class="bg-background text-on-surface font-body-md text-body-md min-h-screen flex antialiased">
<!-- ==================== SIDEBAR COMPONENT ==================== -->
@include('admin.partials.sidebar')

<!-- ==================== MAIN CONTENT WRAPPER ==================== -->
<div class="flex-1 flex flex-col ml-64 min-w-0 bg-background overflow-y-auto h-screen relative">
<!-- ==================== TOP NAV BAR COMPONENT ==================== -->
@include('admin.partials.navbar')

<!-- CONTENT WRAPPER -->
<main class="flex-1 px-8 py-6 max-w-7xl w-full mx-auto space-y-6">
<!-- ========================================================================= -->
<!-- SECTION: PAGE HEADER & INTRO                                              -->
<!-- ========================================================================= -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 border-b border-outline-variant/60 pb-4">
<div>
<nav aria-label="Breadcrumb" class="flex items-center gap-1.5 font-label-md text-label-md font-normal text-on-surface-variant mb-2">
<a class="hover:text-primary transition-colors flex items-center gap-1" href="/admin/pengujian-aplikasi">
<span class="material-symbols-outlined text-[16px]">verified</span>
  Pengujian Aplikasi
</a>
<span class="material-symbols-outlined text-xs">chevron_right</span>
<span class="text-primary font-semibold">Formulir Pelaporan Uji Kelayakan</span>
</nav>

<div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded bg-surface-container text-primary font-label-md text-label-md mb-2 font-medium">
<span class="material-symbols-outlined text-sm" data-icon="rule_folder">rule_folder</span>
            Standard Operating Procedure • Verifikasi Standar SPBE Pemprov Riau
          </div>
<h1 class="font-headline-lg text-headline-lg font-bold text-on-surface tracking-tight">
            Manajemen Pengujian &amp; Uji Kelayakan Aplikasi
          </h1>
<p class="font-body-md text-body-md text-on-surface-variant max-w-4xl mt-1">
            Pelaporan verifikasi kesesuaian fungsional (UAT) untuk memastikan kelaikan fungsionalitas sistem Pemprov Riau.
          </p>
</div>
<!-- Quick Info Badge -->
<div class="flex items-center gap-2 bg-surface-container-lowest p-2 rounded-lg border border-outline-variant shadow-xs flex-shrink-0">
<span class="material-symbols-outlined text-secondary text-headline-sm" data-icon="policy">policy</span>
<div class="text-left">
<span class="block font-label-md text-label-md text-on-surface font-bold">Pergub Riau No. 48/2023</span>
<span class="block font-caption text-caption text-on-surface-variant">Kepatuhan Keamanan SPBE</span>
</div>
</div>
</div>
<!-- ========================================================================= -->
<!-- SECTION: TARGET APP METADATA & STATUS CARDS (Bento/Card Header)           -->
<!-- ========================================================================= -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-4">
<!-- Left 8 Cols: Target Application Identification Card -->
<div class="lg:col-span-8 bg-surface-container-lowest border border-outline-variant rounded-lg p-4 shadow-sm">
<div class="flex items-start justify-between pb-3 border-b border-outline-variant/60">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-primary font-bold text-headline-sm">
<span class="material-symbols-outlined" data-icon="account_tree">account_tree</span>
</div>
<div>
<div class="flex items-center gap-2">
<h2 class="font-title-lg text-title-lg font-bold text-on-surface">SIPPD Pajak Daerah v2</h2>
<span class="px-2 py-0.5 bg-blue-100 text-blue-800 text-[11px] font-semibold rounded border border-blue-200">Rilis Mayor v2.0</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Badan Pendapatan Daerah (Bapenda) Provinsi Riau</p>
</div>
</div>
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-amber-50 text-amber-800 border border-amber-300 font-label-md text-label-md font-semibold">
<span class="w-2 h-2 rounded-full bg-amber-500 animate-ping"></span>
              Tahap Pengujian Akhir
            </span>
</div>
<!-- Metadata 4-column Grid -->
<div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-3">
<div>
<span class="block font-caption text-caption text-on-surface-variant">Nomor Registrasi Proyek</span>
<span class="font-label-lg text-label-lg font-semibold text-on-surface">PRJ-2025-089</span>
</div>
<div>
<span class="block font-caption text-caption text-on-surface-variant">PIC Tim Teknis Penguji</span>
<span class="font-label-lg text-label-lg font-semibold text-on-surface">Ir. Hendra Saputra, M.Kom</span>
</div>
<div>
<span class="block font-caption text-caption text-on-surface-variant">Target Rilis Produksi</span>
<span class="font-label-lg text-label-lg font-semibold text-on-surface">30 November 2025</span>
</div>
<div>
<span class="block font-caption text-caption text-on-surface-variant">Lingkungan Audit</span>
<span class="font-label-lg text-label-lg font-semibold text-primary">Staging v2.riau.go.id</span>
</div>
</div>
</div>
<!-- Right 4 Cols: Status Indikator Pengujian -->
<div class="lg:col-span-4 flex flex-col gap-2">
<!-- Card Uji Fungsional -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-3 shadow-xs flex items-center justify-between">
<div class="flex items-center gap-2">
<div class="w-9 h-9 rounded-md bg-emerald-100 text-emerald-700 flex items-center justify-center">
<span class="material-symbols-outlined text-title-md" data-icon="task_alt">task_alt</span>
</div>
<div>
<span class="block font-label-md text-label-md font-semibold text-on-surface">Uji Fungsional (UAT)</span>
<span class="font-caption text-caption text-emerald-700 font-medium">100% Lolos UAT (42/42 Skenario)</span>
</div>
</div>
<span class="material-symbols-outlined text-emerald-600" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</div>

</div>
</div>
<!-- ========================================================================= -->
<!-- SECTION: MAIN REPORT FORM (Large White Card with Soft Shadow)             -->
<!-- ========================================================================= -->
<section class="bg-surface-container-lowest rounded-xl border border-surface-dim shadow-sm p-6 sm:p-8 space-y-8">
<!-- Form Header with Instructions -->
<div class="border-b border-outline-variant/60 pb-5 flex flex-col md:flex-row md:items-center justify-between gap-4">
<div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-title-lg" data-icon="assignment">assignment</span>
<h2 class="font-headline-sm text-headline-sm font-bold text-on-surface">
                Pelaporan &amp; Dokumen Pengujian Kelaikan Sistem
              </h2>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
              Unggah lampiran dokumen validasi resmi hasil pengujian dan cantumkan ringkasan rekomendasi tim sebelum diteruskan ke Kepala Bidang APTIKA.
            </p>
</div>
<!-- Upload Guideline Tag -->
<div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-md bg-surface-container-low border border-outline-variant text-caption text-on-surface-variant">
<span class="material-symbols-outlined text-primary text-base" data-icon="info">info</span>
<span>Format: <strong>PDF</strong> • Maks <strong>25MB</strong> • Wajib <strong>TTE</strong></span>
</div>
</div>
<!-- TWO-COLUMN DRAG & DROP UPLOAD ZONE -->
<div class="grid grid-cols-1 gap-6">
<!-- 1. Area Unggah: UAT Document -->
<div class="flex flex-col space-y-2">
<label class="font-label-lg text-label-lg font-semibold text-on-surface flex items-center justify-between">
<span>1. Dokumen Pengujian Kesesuaian Fungsi (UAT)</span>
<span class="text-error font-medium text-caption">*Wajib</span>
</label>
<p class="font-caption text-caption text-on-surface-variant">
              Berita Acara Uji Terima Pengguna (UAT) yang ditandatangani perwakilan OPD pemohon dan Lead Developer.
            </p>
<!-- Dropzone Container -->
<div class="border-2 border-dashed border-outline-variant hover:border-primary rounded-lg p-6 flex flex-col items-center justify-center text-center bg-surface-container-low/40 hover:bg-surface-container-low transition-all duration-150 group cursor-pointer">
<div class="w-12 h-12 rounded-full bg-surface-container flex items-center justify-center text-primary group-hover:scale-105 transition-transform duration-150 mb-3 shadow-xs">
<span class="material-symbols-outlined text-headline-sm" data-icon="description">description</span>
</div>
<p class="font-title-md text-title-md font-semibold text-on-surface mb-1">
                Tarik berkas hasil uji fungsional ke sini
              </p>
<p class="font-body-sm text-body-sm text-on-surface-variant max-w-xs mb-4">
                atau klik untuk memilih berkas (.PDF bertandatangan Kepala Tim Teknis &amp; OPD pemohon)
              </p>
<button class="px-4 py-2 bg-surface-container-lowest border border-outline-variant text-primary font-label-lg text-label-lg rounded-md hover:bg-surface-container hover:border-primary transition-colors shadow-xs inline-flex items-center gap-1.5" type="button">
<span class="material-symbols-outlined text-base" data-icon="file_upload">file_upload</span>
                Pilih Berkas
              </button>
<!-- Uploaded Preview Pill (Simulated Status) -->
<div class="w-full mt-5 pt-4 border-t border-outline-variant/60 flex items-center justify-between text-left">
<div class="flex items-center gap-2 min-w-0">
<span class="material-symbols-outlined text-emerald-600 text-lg" data-icon="check_circle">check_circle</span>
<div class="truncate">
<span class="block font-label-md text-label-md font-medium text-on-surface truncate">BAST_UAT_SIPPD_v2_FINAL_SIGNED.pdf</span>
<span class="block font-caption text-caption text-on-surface-variant">4.2 MB • TTE BSrE Terverifikasi</span>
</div>
</div>
<button class="text-on-surface-variant hover:text-error p-1 rounded transition-colors" title="Hapus Berkas" type="button">
<span class="material-symbols-outlined text-base" data-icon="close">close</span>
</button>
</div>
</div>
</div>
</div>
<!-- TEST RESULT NOTES SECTION -->
<div class="space-y-3 pt-2">
<div class="flex items-center justify-between">
<label class="font-label-lg text-label-lg font-semibold text-on-surface flex items-center gap-1.5" for="catatan_pengujian">
<span>Catatan Hasil Pengujian &amp; Rekomendasi Teknis</span>
<span class="text-error">*</span>
</label>
<span class="font-caption text-caption text-on-surface-variant">Maks. 2.000 Karakter</span>
</div>
<p class="font-caption text-caption text-on-surface-variant">
            Berikan ringkasan catatan kritis, rekomendasi mitigasi kerentanan, atau pernyataan kelayakan fungsional untuk pertimbangan verifikasi pimpinan.
          </p>
<textarea class="w-full rounded-md border border-outline-variant bg-surface-container-lowest p-3 font-body-sm text-body-sm text-on-surface placeholder:text-outline focus:border-secondary focus:ring-3 focus:ring-secondary/20 transition-all" id="catatan_pengujian" placeholder="Contoh: Seluruh 42 skenario pengujian fungsional modul pembayaran dan sinkronisasi SIPD telah berjalan 100% valid dan aplikasi dinyatakan aman untuk diimplementasikan pada lingkungan produksi Pemprov Riau..." rows="5"></textarea>
<!-- Quick Verification Checklist -->
<div class="bg-surface-container-low p-4 rounded-lg border border-outline-variant/70 space-y-3">
<span class="block font-label-md text-label-md font-bold text-on-surface">
              Checklist Kelaikan Mandiri Tim Penguji (Pra-Otorisasi Kabid):
            </span>
<div class="grid grid-cols-1 sm:grid-cols-1 gap-3">
<label class="flex items-start gap-2.5 cursor-pointer">
<input checked="" class="rounded border-outline-variant text-primary focus:ring-secondary mt-0.5 w-4 h-4" type="checkbox"/>
<span class="font-body-sm text-body-sm text-on-surface">Fungsi CRUD &amp; Integrasi SIPD tervalidasi 100%</span>
</label>

</div>
</div>
</div>
<!-- ACTION BUTTONS CLUSTER -->
<div class="pt-6 border-t border-outline-variant/60 flex flex-col-reverse sm:flex-row items-center justify-between gap-4">
<div class="flex items-center gap-3 w-full sm:w-auto">
<button class="w-full sm:w-auto px-5 py-2.5 bg-surface-container-lowest border border-outline-variant text-on-surface-variant font-label-lg text-label-lg rounded-md hover:bg-surface-container-low hover:text-on-surface transition-colors flex items-center justify-center gap-2" type="button">
<span class="material-symbols-outlined text-base" data-icon="save">save</span>
              Simpan sebagai Draf
            </button>
<button class="w-full sm:w-auto px-5 py-2.5 bg-surface-container-lowest border border-outline-variant text-error font-label-lg text-label-lg rounded-md hover:bg-error-container/40 transition-colors flex items-center justify-center" type="button">
              Batalkan
            </button>
</div>
<!-- Primary Submit Button -->
<button class="w-full sm:w-auto px-8 py-3 bg-primary-container text-on-primary hover:bg-primary font-label-lg text-label-lg font-semibold rounded-md shadow-sm active:scale-[0.99] transition-all flex items-center justify-center gap-2" type="button">
<span class="material-symbols-outlined text-title-md" data-icon="send">send</span>
            Kirim Laporan Pengujian ke Kepala Bidang
          </button>
</div>
<!-- Governance Compliance Note -->
<div class="rounded-lg bg-surface-container-low/70 border-l-4 border-primary p-3.5 flex items-start gap-3">
<span class="material-symbols-outlined text-primary text-xl flex-shrink-0 mt-0.5" data-icon="gavel">gavel</span>
<div class="text-caption text-on-surface-variant leading-relaxed">
<strong>Kepatuhan Alur Otorisasi SPBE Riau:</strong> Berkas yang dikirimkan akan langsung masuk ke antrean verifikasi digital Kepala Bidang Aplikasi Informatika (APTIKA).
          </div>
</div>
</section>
<!-- ========================================================================= -->
<!-- SECTION: RECENT TEST HISTORY LOG                                         -->
<!-- ========================================================================= -->
<section class="bg-surface-container-lowest rounded-lg border border-outline-variant p-5 shadow-xs space-y-4">
<div class="flex items-center justify-between">
<h3 class="font-title-md text-title-md font-bold text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-secondary" data-icon="history">history</span>
            Riwayat Aktivitas Pengujian Terakhir (Audit Trail)
          </h3>
<a class="font-label-md text-label-md text-secondary hover:underline" href="#">Lihat Log Lengkap</a>
</div>
<div class="divide-y divide-outline-variant/50">
<div class="py-2.5 flex items-center justify-between text-body-sm">
<div class="flex items-center gap-3">
<span class="w-2 h-2 rounded-full bg-emerald-500"></span>
<span class="font-medium text-on-surface">UAT Fungsional Modul Wajib Pajak</span>
<span class="text-caption text-on-surface-variant">diverifikasi oleh Bapenda Prov. Riau</span>
</div>
<span class="font-caption text-caption text-on-surface-variant">24 Nov 2025, 14:20 WIB</span>
</div>

</div>
</section>
</main>
<!-- ========================================================================= -->
<!-- OFFICIAL INSTITUTIONAL FOOTER                                             -->
<!-- ========================================================================= -->
<footer class="mt-auto border-t border-outline-variant/60 bg-surface-container-lowest py-4 px-8">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4 text-caption text-on-surface-variant">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-base text-primary" data-icon="hub">hub</span>
<span>© 2025 <strong>Dinas Komunikasi, Informatika dan Statistik Provinsi Riau</strong>. Hak Cipta Dilindungi Undang-Undang.</span>
</div>
<div class="flex items-center gap-4">
<a class="hover:text-primary transition-colors" href="#">Kebijakan Privasi SPBE</a>
<span>•</span>
<a class="hover:text-primary transition-colors" href="#">Standar Layanan Kominfo</a>
<span>•</span>
<a class="hover:text-primary transition-colors" href="#">Helpdesk CSIRT Riau</a>
</div>
</div>
</footer>
</div>
</body>
</html>
