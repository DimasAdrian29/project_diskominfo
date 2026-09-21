import re

with open('resources/views/admin/pengujian_aplikasi/index.blade.php', 'r', encoding='utf-8', errors='ignore') as f:
    content = f.read()

content = re.sub(r'<span>[^<]*</span>\s*<span class=\"font-mono text-outline\">', r'<span>&bull;</span>\n<span class="font-mono text-outline">', content)
content = re.sub(r'<span>[^<]*</span>\s*<span class=\"text-secondary\">', r'<span>&bull;</span>\n<span class="text-secondary">', content)
content = re.sub(r'<span>[^<]*</span>\s*<span>SatuSehat', r'<span>&bull;</span>\n<span>SatuSehat', content)
content = re.sub(r'<span>[^<]*</span>\s*<span class=\"text-primary\">', r'<span>&bull;</span>\n<span class="text-primary">', content)
content = re.sub(r'<span>[^<]*</span>\s*<span>Integrasi', r'<span>&bull;</span>\n<span>Integrasi', content)
content = re.sub(r'<span>[^<]*</span>\s*<span>Sistem', r'<span>&bull;</span>\n<span>Sistem', content)


with open('resources/views/admin/pengujian_aplikasi/index.blade.php', 'w', encoding='utf-8') as f:
    f.write(content)
