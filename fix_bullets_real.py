import re

with open('resources/views/admin/pengujian_aplikasi/index.blade.php', 'r', encoding='utf-8') as f:
    content = f.read()

content = content.replace('<span></span>', '<span>&bull;</span>')
# Fix the mangled character which was originally ''
content = content.replace('<span></span>', '<span>&bull;</span>')

with open('resources/views/admin/pengujian_aplikasi/index.blade.php', 'w', encoding='utf-8') as f:
    f.write(content)
