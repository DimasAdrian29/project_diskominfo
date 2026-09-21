<!-- resources/views/opd/partials/navbar.blade.php -->


<!-- 1. TOP NAVBAR -->
<header class="w-full sticky top-0 z-50 bg-primary-container text-on-primary shadow-sm">
    <div class="w-full max-w-[1280px] mx-auto px-gutter-mobile md:px-gutter-desktop py-3.5 flex items-center justify-between">
        <!-- Logo & Title Brand -->
        <a class="flex items-center gap-3 group shrink-0" href="/">
            <div class="w-10 h-10 rounded-xl bg-surface-container-lowest flex items-center justify-center shadow-sm ring-2 ring-white/20 p-1.5 overflow-hidden shrink-0">
                <img src="{{ asset('images/kominfo-seeklogo.png') }}" alt="Logo Kominfo" class="w-full h-full object-contain">
            </div>
            <div class="flex flex-col">
                <span class="text-title-lg font-title-lg font-bold tracking-tight text-on-primary leading-tight">
                    SIMBANGDA Diskominfo Riau
                </span>
                <span class="text-caption font-caption text-on-primary-container tracking-wider -mt-0.5">
                    Sistem Manajemen Pengembangan Aplikasi Perangkat Daerah
                </span>
            </div>
        </a>

        <!-- Desktop Navigation Menu Cluster -->
        <nav aria-label="Menu Utama" class="hidden lg:flex items-center gap-6">
            <div class="relative group">
                <button aria-expanded="false" class="flex items-center gap-1.5 text-on-primary-container hover:text-on-primary font-medium py-2 transition-colors cursor-pointer" type="button">
                    <span class="text-label-lg font-label-lg">Tentang Diskominfo Provinsi Riau</span>
                    <span class="material-symbols-outlined text-[18px] transition-transform duration-200 group-hover:rotate-180" data-icon="expand_more">expand_more</span>
                </button>
                <div class="nav-dropdown-menu absolute left-0 top-full mt-1 w-72 bg-surface-container-lowest text-on-surface rounded-xl shadow-lg border border-outline-variant/30 p-2 z-50">
                    <a class="flex items-start gap-3 p-2.5 rounded-lg hover:bg-surface-container-low transition-colors" href="/#tentang">
                        <div class="p-2 rounded-lg bg-surface-container text-primary mt-0.5">
                            <span class="material-symbols-outlined text-[20px]" data-icon="visibility">visibility</span>
                        </div>
                        <div>
                            <span class="block text-label-lg font-label-lg text-primary font-semibold">Visi dan Misi</span>
                            <span class="block text-caption font-caption text-on-surface-variant">Arah pembangunan digital Riau Bersatu dan Bermartabat</span>
                        </div>
                    </a>
                    <a class="flex items-start gap-3 p-2.5 rounded-lg hover:bg-surface-container-low transition-colors" href="/#tentang">
                        <div class="p-2 rounded-lg bg-surface-container text-primary mt-0.5">
                            <span class="material-symbols-outlined text-[20px]" data-icon="assignment">assignment</span>
                        </div>
                        <div>
                            <span class="block text-label-lg font-label-lg text-primary font-semibold">Tupoksi Dinas</span>
                            <span class="block text-caption font-caption text-on-surface-variant">Tugas pokok pengendalian aplikasi &amp; infrastruktur TIK</span>
                        </div>
                    </a>
                    <a class="flex items-start gap-3 p-2.5 rounded-lg hover:bg-surface-container-low transition-colors" href="/#tentang">
                        <div class="p-2 rounded-lg bg-surface-container text-primary mt-0.5">
                            <span class="material-symbols-outlined text-[20px]" data-icon="corporate_fare">corporate_fare</span>
                        </div>
                        <div>
                            <span class="block text-label-lg font-label-lg text-primary font-semibold">Struktur Organisasi</span>
                            <span class="block text-caption font-caption text-on-surface-variant">Tata kelola Bidang Aplikasi Informatika &amp; Siber</span>
                        </div>
                    </a>
                </div>
            </div>
            <a class="border-b-2 border-secondary-container text-on-primary font-semibold pb-1 text-label-lg font-label-lg" href="/#tujuan-layanan">Layanan</a>
            <a class="text-on-primary-container hover:text-on-primary font-medium transition-colors text-label-lg font-label-lg" href="/#regulasi">Regulasi SPBE</a>
            <a class="text-on-primary-container hover:text-on-primary font-medium transition-colors text-label-lg font-label-lg" href="/#panduan">Panduan</a>
        </nav>

        <!-- Trailing Action Buttons -->
        <div class="flex items-center gap-space-sm shrink-0">
            <a class="hidden sm:inline-flex items-center gap-1.5 px-3 py-2 rounded-xl text-label-lg font-label-lg text-on-primary hover:bg-white/10 transition-colors" href="/#helpdesk">
                <span class="material-symbols-outlined text-[18px]" data-icon="help_outline">help_outline</span>
                Bantuan OPD
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-surface-container-lowest text-primary font-semibold text-label-lg font-label-lg shadow-sm hover:bg-surface-container-low transition-all" href="/login">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-primary shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                    <polyline points="10 17 15 12 10 7"/>
                    <line x1="15" y1="12" x2="3" y2="12"/>
                </svg>
                <span>Login</span>
            </a>
        </div>
    </div>
</header>
