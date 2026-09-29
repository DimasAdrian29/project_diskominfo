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
                <span class="text-[11px] font-medium text-on-surface-variant leading-tight mt-0.5">Admin APTIKA</span>
            </div>
        </a>


      

        <!-- Main Navigation Links -->
        <nav aria-label="Menu Utama" class="flex flex-col gap-1.5">

            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->is('admin/aptika') ? 'bg-surface-container text-primary font-semibold shadow-xs' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }} transition-colors" href="{{ route('admin.aptika.dashboard') }}">
                <span class="material-symbols-outlined text-[20px] {{ request()->is('admin/aptika') ? 'text-primary' : 'text-outline' }}" data-icon="dashboard" style="{{ request()->is('admin/aptika') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">dashboard</span>
                <span class="text-label-lg font-label-lg">Dashboard Analitik</span>
            </a>
            
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->is('admin/aptika/penilaian-proposal*') ? 'bg-surface-container text-primary font-semibold shadow-xs' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }} transition-colors" href="{{ route('admin.aptika.penilaian-proposal') }}">
                <span class="material-symbols-outlined text-[20px] {{ request()->is('admin/aptika/penilaian-proposal*') ? 'text-primary' : 'text-outline' }}" data-icon="description" style="{{ request()->is('admin/aptika/penilaian-proposal*') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">description</span>
                <span class="text-label-lg font-label-lg">Penerimaan Proposal</span>
            </a>
            
            <!-- Manajemen Data Master dengan Submenu -->
            <div class="flex flex-col gap-1">
                <a onclick="document.getElementById('submenu-data-master').classList.toggle('hidden'); document.getElementById('icon-data-master').classList.toggle('rotate-180')" class="flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->is('admin/aptika/manajemen-data-master*') ? 'bg-surface-container text-primary font-semibold shadow-xs' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }} transition-colors cursor-pointer">
                    <span class="material-symbols-outlined text-[20px] {{ request()->is('admin/aptika/manajemen-data-master*') ? 'text-primary' : 'text-outline' }}" data-icon="database" style="{{ request()->is('admin/aptika/manajemen-data-master*') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">database</span>
                    <span class="text-label-lg font-label-lg flex-1">Manajemen Data Master</span>
                    <span id="icon-data-master" class="material-symbols-outlined text-[20px] transition-transform duration-200 {{ request()->is('admin/aptika/manajemen-data-master*') ? 'rotate-180' : '' }}">expand_more</span>
                </a>
                
                <!-- Submenu items -->
                <div id="submenu-data-master" class="flex flex-col pl-9 pr-2 gap-1 py-1 {{ request()->is('admin/aptika/manajemen-data-master*') ? '' : 'hidden' }}">
                    <a href="{{ route('admin.aptika.manajemen-data-master') }}?tab=instansi" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm {{ request()->get('tab') == 'instansi' || (!request()->has('tab') && request()->is('admin/aptika/manajemen-data-master*')) ? 'text-primary font-semibold bg-surface-container/50' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low/50' }} transition-colors">
                        <span class="w-1.5 h-1.5 rounded-full {{ request()->get('tab') == 'instansi' || (!request()->has('tab') && request()->is('admin/aptika/manajemen-data-master*')) ? 'bg-primary' : 'bg-outline-variant' }}"></span>
                        Data Instansi
                    </a>
                    <a href="{{ route('admin.aptika.manajemen-data-master') }}?tab=tim" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm {{ request()->get('tab') == 'tim' ? 'text-primary font-semibold bg-surface-container/50' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low/50' }} transition-colors">
                        <span class="w-1.5 h-1.5 rounded-full {{ request()->get('tab') == 'tim' ? 'bg-primary' : 'bg-outline-variant' }}"></span>
                        Tim Project
                    </a>
                    <a href="{{ route('admin.aptika.manajemen-data-master') }}?tab=penugasan" class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm {{ request()->get('tab') == 'penugasan' ? 'text-primary font-semibold bg-surface-container/50' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low/50' }} transition-colors">
                        <span class="w-1.5 h-1.5 rounded-full {{ request()->get('tab') == 'penugasan' ? 'bg-primary' : 'bg-outline-variant' }}"></span>
                        Penugasan Project
                    </a>
                </div>
            </div>
            
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->is('admin/aptika/pengerjaan-proyek*') ? 'bg-surface-container text-primary font-semibold shadow-xs' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }} transition-colors" href="{{ route('admin.aptika.pengerjaan-proyek') }}">
                <span class="material-symbols-outlined text-[20px] {{ request()->is('admin/aptika/pengerjaan-proyek*') ? 'text-primary' : 'text-outline' }}" data-icon="assignment" style="{{ request()->is('admin/aptika/pengerjaan-proyek*') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">assignment</span>
                <span class="text-label-lg font-label-lg">Pengerjaan Proyek</span>
            </a>
            
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->is('admin/aptika/penundaan-aplikasi*') ? 'bg-surface-container text-primary font-semibold shadow-xs' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }} transition-colors" href="{{ route('admin.aptika.penundaan-aplikasi') }}">
                <span class="material-symbols-outlined text-[20px] {{ request()->is('admin/aptika/penundaan-aplikasi*') ? 'text-primary' : 'text-outline' }}" data-icon="pause_circle" style="{{ request()->is('admin/aptika/penundaan-aplikasi*') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">pause_circle</span>
                <span class="text-label-lg font-label-lg">Penundaan Aplikasi</span>
            </a>
        </nav>

    </div>

    <!-- Sidebar Bottom Actions -->
    <div class="flex flex-col gap-3 pt-4 border-t border-outline-variant/30">
        
        
        <div class="flex items-center justify-between px-2 pt-2 text-caption font-caption text-outline border-t border-outline-variant/20">
            <span>SIMBANGDA Riau</span>
            <span class="bg-surface-container px-2 py-0.5 rounded text-primary font-mono text-[11px] font-semibold border border-outline-variant/20">v3.4.0</span>
        </div>
    </div>
</aside>

