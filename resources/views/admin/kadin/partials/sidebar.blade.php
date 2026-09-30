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
                <span class="text-[11px] font-medium text-on-surface-variant leading-tight mt-0.5">Kepala Dinas</span>
            </div>
        </a>

        <!-- Main Navigation Links -->
        <nav aria-label="Menu Utama" class="flex flex-col gap-1.5">

            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->is('admin/kadin') ? 'bg-surface-container text-primary font-semibold shadow-xs' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }} transition-colors" href="{{ route('admin.kadin.dashboard') }}">
                <span class="material-symbols-outlined text-[20px] {{ request()->is('admin/kadin') ? 'text-primary' : 'text-outline' }}" data-icon="monitoring" style="{{ request()->is('admin/kadin') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">monitoring</span>
                <span class="text-label-lg font-label-lg">Dashboard Monitoring</span>
            </a>

            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg {{ request()->is('admin/kadin/monitoring') ? 'bg-surface-container text-primary font-semibold shadow-xs' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }} transition-colors" href="{{ route('admin.kadin.monitoring') }}">
                <span class="material-symbols-outlined text-[20px] {{ request()->is('admin/kadin/monitoring') ? 'text-primary' : 'text-outline' }}" data-icon="fact_check" style="{{ request()->is('admin/kadin/monitoring') ? 'font-variation-settings: \'FILL\' 1;' : '' }}">fact_check</span>
                <span class="text-label-lg font-label-lg">Monitoring Pendaftaran</span>
            </a></nav>
    </div>

    <!-- Sidebar Bottom Actions -->
    <div class="flex flex-col gap-3 pt-4 border-t border-outline-variant/30">
        
        
        <div class="flex items-center justify-between px-2 pt-2 text-caption font-caption text-outline border-t border-outline-variant/20">
            <span>SIMBANGDA Riau</span>
            <span class="bg-surface-container px-2 py-0.5 rounded text-primary font-mono text-[11px] font-semibold border border-outline-variant/20">v3.4.0</span>
        </div>
    </div>
</aside>

