import re

with open('resources/views/admin/pengujian_aplikasi/index.blade.php', 'r', encoding='utf-8') as f:
    content = f.read()

content = content.replace('<span class="font-medium text-on-surface">', '<span class="text-on-surface">')

with open('resources/views/admin/pengujian_aplikasi/index.blade.php', 'w', encoding='utf-8') as f:
    f.write(content)
