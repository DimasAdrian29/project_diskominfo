import re

with open('resources/views/admin/pengujian_aplikasi/index.blade.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Row 1
content = re.sub(r'<td class=\"py-4 px-4\">\s*<div>\s*<span class=\"inline-flex items-center gap-1 bg-amber-50 text-amber-800 border border-amber-300 px-2.5 py-1 rounded text-label-md font-label-md\">\s*<span class=\"material-symbols-outlined text-\[16px\] text-amber-700\">pending</span>\s*Menunggu BAST CSIRT\s*</span>\s*<p class=\"text-caption font-caption text-on-surface-variant mt-1\">Status: Remediasi 1 Kerentanan Medium</p>\s*</div>\s*</td>', '', content)
# Row 2
content = re.sub(r'<td class=\"py-4 px-4\">\s*<div>\s*<span class=\"inline-flex items-center gap-1 bg-emerald-50 text-emerald-800 border border-emerald-300 px-2.5 py-1 rounded text-label-md font-label-md\">\s*<span class=\"material-symbols-outlined text-\[16px\] text-emerald-700\">format_image_left</span>\s*Aman \(0 Vulnerability\)\s*</span>\s*<p class=\"text-caption font-caption text-on-surface-variant mt-1\">BAST CSIRT No: 482/CSIRT/XI/2025</p>\s*</div>\s*</td>', '', content)
# Row 3
content = re.sub(r'<td class=\"py-4 px-4\">\s*<div>\s*<span class=\"inline-flex items-center gap-1 bg-emerald-50 text-emerald-800 border border-emerald-300 px-2.5 py-1 rounded text-label-md font-label-md\">\s*<span class=\"material-symbols-outlined text-\[16px\] text-emerald-700\">shield</span>\s*Aman \(Sertifikat Terbit\)\s*</span>\s*<p class=\"text-caption font-caption text-on-surface-variant mt-1\">Rekomendasi CSIRT Lengkap</p>\s*</div>\s*</td>', '', content)
# Row 4
content = re.sub(r'<td class=\"py-4 px-4\">\s*<div>\s*<span class=\"inline-flex items-center gap-1 bg-rose-50 text-rose-800 border border-rose-200 px-2.5 py-1 rounded text-label-md font-label-md\">\s*<span class=\"material-symbols-outlined text-\[16px\] text-rose-700\">bug_report</span>\s*Temuan Minor \(Remediasi\)\s*</span>\s*<p class=\"text-caption font-caption text-on-surface-variant mt-1\">CORS Misconfiguration &amp; Auth Token</p>\s*</div>\s*</td>', '', content)
# Row 5
content = re.sub(r'<td class=\"py-4 px-4\">\s*<div>\s*<span class=\"inline-flex items-center gap-1 bg-surface-container text-on-surface-variant border border-outline-variant px-2.5 py-1 rounded text-label-md font-label-md\">\s*<span class=\"material-symbols-outlined text-\[16px\]\">schedule</span>\s*Menunggu Kelengkapan Dokumen\s*</span>\s*<p class=\"text-caption font-caption text-on-surface-variant mt-1\">Formulir Self-Assessment VAPT</p>\s*</div>\s*</td>', '', content)

# Tahapan Pengujian (remove step 2 and 3)
content = re.sub(r'<div class=\"flex items-start gap-3\">\s*<div class=\"w-6 h-6 rounded-full bg-surface-container text-primary flex items-center justify-center font-bold text-caption shrink-0\">2</div>\s*<div>\s*<p class=\"text-label-md font-label-md text-on-surface\">Penetrasi Keamanan Siber \(VAPT\)</p>\s*<p class=\"text-caption font-caption text-on-surface-variant\">Audit OWASP Top 10 oleh RiauProv-CSIRT untuk mendeteksi kerentanan injeksi SQL, XSS, token leakage, dan miskonfigurasi server\.</p>\s*</div>\s*</div>', '', content)
content = re.sub(r'<div class=\"flex items-start gap-3\">\s*<div class=\"w-6 h-6 rounded-full bg-surface-container text-primary flex items-center justify-center font-bold text-caption shrink-0\">3</div>\s*<div>\s*<p class=\"text-label-md font-label-md text-on-surface\">Penerbitan Berita Acara &amp; SKLO Resmi</p>\s*<p class=\"text-caption font-caption text-on-surface-variant\">Penandatanganan digital tersertifikasi BSrE BSSN oleh Kepala Diskominfo sebelum deploy ke Pusat Data Nasional\.</p>\s*</div>\s*</div>', '', content)

with open('resources/views/admin/pengujian_aplikasi/index.blade.php', 'w', encoding='utf-8') as f:
    f.write(content)
