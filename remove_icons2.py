import re

with open('resources/views/admin/pengujian_aplikasi/index.blade.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Pattern for the remaining icon blocks
pattern = r'<div class=\"w-10 h-10 rounded-md bg-[^\"]+ text-[^\"]+ flex items-center justify-center shrink-0 [^\"]+ mt-0\.5\">\s*<span class=\"material-symbols-outlined text-\[20px\]\">[^<]+</span>\s*</div>'
content = re.sub(pattern, '', content)

with open('resources/views/admin/pengujian_aplikasi/index.blade.php', 'w', encoding='utf-8') as f:
    f.write(content)
