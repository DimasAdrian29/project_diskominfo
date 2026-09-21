<!-- resources/views/opd/partials/footer.blade.php -->
<footer class="w-full bg-primary text-on-primary border-t border-outline-variant/30 mt-auto">
    <div class="w-full max-w-[1280px] mx-auto px-gutter-mobile md:px-gutter-desktop py-space-xl flex flex-col gap-space-lg">
        <!-- Top Grid: Identitas & Link Cepat -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
            <!-- Identitas Dinas -->
            <div class="md:col-span-5">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 rounded-xl bg-surface-container-lowest flex items-center justify-center p-1.5 overflow-hidden shadow-sm shrink-0">
                        <img src="{{ asset('images/kominfo-seeklogo.png') }}" alt="Logo Kominfo" class="w-full h-full object-contain">
                    </div>
                    <span class="text-title-lg font-title-lg text-on-primary font-bold">
                        SIMBANGDA Diskominfo Riau
                    </span>
                </div>
                <p class="text-body-sm font-body-sm text-on-primary-container max-w-sm mb-4 leading-relaxed">
                    Dinas Komunikasi, Informatika dan Statistik Provinsi Riau.<br/>
                    Jl. Diponegoro No. 24A, Sukamulia, Kec. Sail, Kota Pekanbaru, Riau 28133.
                </p>
                <div class="flex items-center gap-3 text-secondary-container">
                    <span class="material-symbols-outlined text-[20px]" data-icon="lan">lan</span>
                    <span class="text-caption font-caption font-medium">Layanan Terintegrasi Pusat Data Nasional (PDN)</span>
                </div>
            </div>

            <!-- Kolom Tautan Layanan -->
            <div class="md:col-span-4">
                <h4 class="text-title-md font-title-md font-bold text-white mb-3">Tautan Terkait</h4>
                <ul class="space-y-2 text-body-sm font-body-sm">
                    <li>
                        <a class="text-on-primary-container hover:text-secondary-fixed transition-colors flex items-center gap-1.5" href="https://riau.go.id" rel="noopener noreferrer" target="_blank">
                            <span class="material-symbols-outlined text-[16px]" data-icon="public">public</span>
                            Portal Resmi Pemprov Riau
                        </a>
                    </li>
                    <li>
                        <a class="text-on-primary-container hover:text-secondary-fixed transition-colors flex items-center gap-1.5" href="#">
                            <span class="material-symbols-outlined text-[16px]" data-icon="dataset">dataset</span>
                            Satu Data Provinsi Riau
                        </a>
                    </li>
                    <li>
                        <a class="text-on-primary-container hover:text-secondary-fixed transition-colors flex items-center gap-1.5" href="#">
                            <span class="material-symbols-outlined text-[16px]" data-icon="security">security</span>
                            RiauProv-CSIRT (Insiden Keamanan Siber)
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Kolom Regulasi & Aksesibilitas -->
            <div class="md:col-span-3">
                <h4 class="text-title-md font-title-md font-bold text-white mb-3">Kepatuhan Regulasi</h4>
                <div class="flex flex-col gap-2 text-body-sm font-body-sm text-on-primary-container">
                    <a class="text-on-primary-container hover:text-secondary-fixed transition-colors" href="#">Kebijakan Privasi</a>
                    <a class="text-on-primary-container hover:text-secondary-fixed transition-colors" href="#">Ketentuan Layanan</a>
                    <a class="text-on-primary-container hover:text-secondary-fixed transition-colors" href="#">Peta Situs</a>
                    <a class="text-on-primary-container hover:text-secondary-fixed transition-colors" href="/#helpdesk">Hubungi Kami</a>
                </div>
            </div>
        </div>

        <!-- Bottom Bar: Hak Cipta -->
        <div class="pt-6 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-3 text-caption font-caption text-on-primary-container">
            <p>
                Hak Cipta © 2025 Pemerintah Provinsi Riau - Dinas Komunikasi, Informatika dan Statistik. Seluruh Hak Cipta Dilindungi Undang-Undang.
            </p>
            <div class="flex items-center gap-2">
                <span class="inline-block w-2 h-2 rounded-full bg-emerald-400"></span>
                <span>Versi Sistem 2.4.0 (SPBE Verified)</span>
            </div>
        </div>
    </div>
</footer>

