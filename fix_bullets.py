import re

with open('resources/views/admin/pengujian_aplikasi/index.blade.php', 'r', encoding='utf-8', errors='ignore') as f:
    content = f.read()

content = content.replace('<span></span>', '<span>&bull;</span>')
content = content.replace('', '&bull;')

with open('resources/views/admin/pengujian_aplikasi/index.blade.php', 'w', encoding='utf-8') as f:
    f.write(content)
