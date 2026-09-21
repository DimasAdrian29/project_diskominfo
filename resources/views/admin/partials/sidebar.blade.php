<!-- resources/views/admin/partials/sidebar.blade.php -->
<aside class="fixed inset-y-0 left-0 z-40 flex flex-col justify-between p-4 w-64 h-screen shrink-0 bg-surface-container-lowest border-r border-outline-variant/30 shadow-xs">
    <div class="flex flex-col gap-6">
        <!-- Logo & Header -->
        <a href="/admin" class="flex items-center gap-3 px-2 py-2 rounded-xl hover:bg-surface-container-low transition-colors group">
            <div class="w-12 h-12 rounded-xl bg-surface-container-lowest flex items-center justify-center p-1.5 overflow-hidden shadow-xs border border-outline-variant/40 shrink-0 group-hover:border-primary/40 transition-colors">
                <img src="{{ asset('images/kominfo-seeklogo.png') }}" alt="Logo Kominfo" class="w-full h-full object-contain">
            </div>
            <div class="flex flex-col justify-center min-w-0">
                <h1 class="text-sm font-bold text-primary tracking-tight leading-tight group-hover:text-secondary transition-colors">SIMBANGDA RIAU</h1>
                <span class="text-[11px] font-medium text-on-surface-variant leading-tight mt-0.5">Diskominfo Riau - Tim Teknis</span>
            </div>
        </a>

        <!-- Main Navigation Links -->
        <nav aria-label="Menu Utama" class="flex flex-col gap-1.5">
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->is('admin') ? 'bg-surface-container text-primary font-semibold shadow-xs' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }} transition-colors" href="/admin">
                <span class="material-symbols-outlined text-[20px] {{ request()->is('admin') ? 'text-primary' : 'text-outline' }}" data-icon="dashboard" style="{{ request()->is('admin') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">dashboard</span>
                <span class="text-label-lg font-label-lg">Dashboard Analitik</span>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->is('admin/manajemen-data-master*') ? 'bg-surface-container text-primary font-semibold shadow-xs' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }} transition-colors" href="/admin/manajemen-data-master">
                <span class="material-symbols-outlined text-[20px] {{ request()->is('admin/manajemen-data-master*') ? 'text-primary' : 'text-outline' }}" data-icon="database" style="{{ request()->is('admin/manajemen-data-master*') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">database</span>
                <span class="text-label-lg font-label-lg">Manajemen Data Master</span>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->is('admin/penilaian-proposal*') ? 'bg-surface-container text-primary font-semibold shadow-xs' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }} transition-colors" href="/admin/penilaian-proposal">
                <span class="material-symbols-outlined text-[20px] {{ request()->is('admin/penilaian-proposal*') ? 'text-primary' : 'text-outline' }}" data-icon="folder_shared" style="{{ request()->is('admin/penilaian-proposal*') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">folder_shared</span>
                <span class="text-label-lg font-label-lg">Penilaian Proposal</span>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors" href="#evaluasi">
                <span class="material-symbols-outlined text-[20px] text-outline" data-icon="groups">groups</span>
                <span class="text-label-lg font-label-lg">Evaluasi Rapat</span>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->is('admin/pengerjaan-proyek*') ? 'bg-surface-container text-primary font-semibold shadow-xs' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }} transition-colors" href="/admin/pengerjaan-proyek">
                <span class="material-symbols-outlined text-[20px] {{ request()->is('admin/pengerjaan-proyek*') ? 'text-primary' : 'text-outline' }}" data-icon="assignment" style="{{ request()->is('admin/pengerjaan-proyek*') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">assignment</span>
                <span class="text-label-lg font-label-lg">Pengerjaan Proyek</span>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->is('admin/pengujian-aplikasi*') ? 'bg-surface-container text-primary font-semibold shadow-xs' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }} transition-colors" href="/admin/pengujian-aplikasi">
                <span class="material-symbols-outlined text-[20px] {{ request()->is('admin/pengujian-aplikasi*') ? 'text-primary' : 'text-outline' }}" data-icon="verified" style="{{ request()->is('admin/pengujian-aplikasi*') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">verified</span>
                <span class="text-label-lg font-label-lg">Pengujian Aplikasi</span>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors" href="#pengaturan">
                <span class="material-symbols-outlined text-[20px] text-outline" data-icon="settings">settings</span>
                <span class="text-label-lg font-label-lg">Pengaturan Sistem</span>
            </a>
        </nav>
    </div>

    <!-- Sidebar Bottom Actions -->
    <div class="flex flex-col gap-3 pt-4 border-t border-outline-variant/30">
        <button class="w-full flex items-center justify-center gap-2 py-2 px-3 bg-surface-container-low hover:bg-surface-container text-primary border border-outline-variant/40 rounded-lg font-label-lg text-label-lg transition-colors shadow-xs active:scale-[0.98]">
            <span class="material-symbols-outlined text-[18px] text-primary" data-icon="download">download</span>
            <span>Unduh Laporan</span>
        </button>
        <div class="flex flex-col gap-1">
            <a class="flex items-center gap-2 px-2 py-1.5 text-on-surface-variant hover:text-primary text-label-md font-label-md transition-colors" href="#csirt">
                <span class="material-symbols-outlined text-[16px] text-outline" data-icon="help">help</span>
                <span>Bantuan CSIRT / Teknis</span>
            </a>
            <a class="flex items-center gap-2 px-2 py-1.5 text-on-surface-variant hover:text-primary text-label-md font-label-md transition-colors" href="#api">
                <span class="material-symbols-outlined text-[16px] text-outline" data-icon="code">code</span>
                <span>Dokumentasi API</span>
            </a>
        </div>
        <div class="flex items-center justify-between px-2 pt-2 text-caption font-caption text-outline border-t border-outline-variant/20">
            <span>SIMBANGDA Riau</span>
            <span class="bg-surface-container px-2 py-0.5 rounded text-primary font-mono text-[11px] font-semibold border border-outline-variant/20">v3.4.0</span>
        </div>
    </div>
</aside>

