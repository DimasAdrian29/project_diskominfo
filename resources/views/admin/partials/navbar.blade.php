<!-- resources/views/admin/partials/navbar.blade.php -->
<header class="sticky top-0 z-30 flex items-center justify-between h-16 px-6 bg-surface-container-lowest dark:bg-surface-container border-b border-outline-variant/30 shadow-xs">
    <!-- Left: Dynamic Title or Search Bar -->
    <div class="flex items-center gap-6">
        <h2 class="text-lg font-bold text-primary dark:text-inverse-primary">Dashboard</h2>
        <!-- Global Search OPD / Proposal -->
        <div class="relative hidden xl:block w-72">
            <span class="material-symbols-outlined absolute left-3 top-2.5 text-outline text-[18px]" data-icon="search">search</span>
            <input class="w-full pl-9 pr-4 py-1.5 text-body-sm font-body-sm bg-surface-container-low border border-outline-variant/50 rounded-lg text-on-surface placeholder:text-outline focus:outline-none focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition-all" placeholder="Cari OPD, tiket atau sistem..." type="text">
        </div>
    </div>

    <!-- Right: Clickable Profile Logo Button -->
    <div class="relative" id="profileDropdownWrapper">
        <button id="profileMenuBtn" type="button" aria-expanded="false" class="flex items-center justify-center w-10 h-10 rounded-full bg-surface-container-low hover:bg-surface-container text-primary border border-outline-variant/40 hover:border-primary/40 transition-colors shadow-xs focus:outline-none focus:ring-2 focus:ring-primary/20 cursor-pointer" title="Menu Akun">
            <span class="material-symbols-outlined text-[24px]" data-icon="account_circle">account_circle</span>
        </button>

        <!-- Dropdown Menu -->
        <div id="profileDropdownMenu" class="hidden absolute right-0 mt-2 w-48 py-1.5 bg-surface-container-lowest rounded-xl shadow-lg border border-outline-variant/30 z-50">
            <div class="px-4 py-2 border-b border-outline-variant/20">
                <p class="text-xs font-bold text-primary">Tim Teknis</p>
                <p class="text-[11px] text-on-surface-variant">Diskominfo Riau</p>
            </div>
            <a href="/login" class="flex items-center gap-2 px-4 py-2.5 text-xs font-semibold text-error hover:bg-error-container/30 transition-colors">
                <span class="material-symbols-outlined text-[18px]" data-icon="logout">logout</span>
                <span>Keluar</span>
            </a>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('profileMenuBtn');
        const menu = document.getElementById('profileDropdownMenu');
        if (btn && menu) {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                menu.classList.toggle('hidden');
            });
            document.addEventListener('click', function(e) {
                if (!menu.contains(e.target) && !btn.contains(e.target)) {
                    menu.classList.add('hidden');
                }
            });
        }
    });
</script>

