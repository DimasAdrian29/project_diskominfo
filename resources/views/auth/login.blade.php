<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login - SIMBANGDA Riau</title>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Google Fonts: Plus Jakarta Sans -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS with Forms and Container Queries -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#0D47A1",
            "primary-container": "#0d47a1",
            "on-primary": "#ffffff",
            "secondary": "#165eae",
            "surface": "#f8fafc",
            "surface-container": "#e7eeff",
            "on-surface": "#111c2d",
            "on-surface-variant": "#64748b",
            "outline-variant": "#e2e8f0",
            "error": "#ba1a1a"
          },
          fontFamily: {
            "body-md": ["Plus Jakarta Sans", "sans-serif"]
          }
        },
      },
    }
  </script>
<style>
    html {
      overscroll-behavior: none;
    }

    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      display: inline-block;
      vertical-align: middle;
      line-height: 1;
    }
  </style>
</head>
<body class="bg-[#f4f6fa] text-on-surface font-body-md min-h-screen flex flex-col items-center justify-center p-4 sm:p-6 antialiased selection:bg-blue-100 selection:text-primary">
<main class="w-full max-w-[440px]">
<!-- Clean Minimal Login Card -->
<div class="bg-white rounded-2xl border border-slate-200/80 shadow-[0_8px_30px_rgb(0,0,0,0.04)] p-8 sm:p-10">
<!-- Header Group -->
<div class="text-center mb-8">
<!-- Logo -->
<div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-white border border-slate-200/80 shadow-md p-2 mb-4">
<img src="{{ asset('images/kominfo-seeklogo.png') }}" alt="Logo Kominfo" class="w-full h-full object-contain">
</div>
<h1 class="text-2xl font-bold text-slate-900 tracking-tight">
        SIMBANGDA</h1>
<p class="text-xs sm:text-sm text-slate-500 mt-2 leading-relaxed font-normal">
          Sistem Manajemen Pengembangan Aplikasi (SIMBANGDA)<br/>Diskominfo Provinsi Riau
        </p>
</div>
<!-- Main Login Form -->
<form id="loginForm" class="space-y-5" onsubmit="event.preventDefault(); window.location.href = document.getElementById('role_select').value;">
        <!-- Username / NIP Input (Simulated as Role Selector) -->
        <div>
          <label for="role_select" class="block text-sm font-semibold text-slate-700 mb-2">
            Pilih Peran (Simulasi)
          </label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
              <span class="material-symbols-outlined text-[20px]">badge</span>
            </div>
            <select id="role_select" name="role_select" class="block w-full pl-10 pr-3.5 py-2.5 bg-slate-50/50 hover:bg-white text-slate-900 border border-slate-200 rounded-lg text-sm focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#0D47A1]/20 focus:border-[#0D47A1] transition-all duration-150 cursor-pointer">
              <option value="/admin/aptika">Admin APTIKA (Manajemen Aplikasi)</option>
              <option value="/admin/tik">Admin TIK (Infrastruktur & Keamanan)</option>
              <option value="/admin/persandian">Admin Persandian (Pengujian Sistem)</option>
              <option value="/admin/kadin">Kepala Dinas (Monitoring)</option>
            </select>
          </div>
        </div>

        <!-- Password Input -->
        <div>
          <div class="flex items-center justify-between mb-2">
            <label for="password" class="block text-sm font-semibold text-slate-700">
              Kata Sandi
            </label>
          </div>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
              <span class="material-symbols-outlined text-[20px]">lock</span>
            </div>
            <input type="password" name="password" id="password" class="block w-full pl-10 pr-3.5 py-2.5 bg-slate-50/50 hover:bg-white text-slate-900 border border-slate-200 rounded-lg text-sm placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#0D47A1]/20 focus:border-[#0D47A1] transition-all duration-150" placeholder="••••••••" value="password" required>
          </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-[#0D47A1] hover:bg-[#165eae] text-white font-semibold py-2.5 px-4 rounded-lg shadow-sm shadow-[#0D47A1]/20 transition-all duration-200 flex items-center justify-center gap-2">
          <span>Masuk Aplikasi</span>
          <span class="material-symbols-outlined text-[18px]">login</span>
        </button>
      </form>
<!-- Back to Public Portal Link -->
<div class="mt-7 pt-6 border-t border-slate-100 text-center">
<a class="inline-flex items-center gap-1.5 text-xs font-semibold text-slate-500 hover:text-[#0D47A1] transition" href="/">
<span class="material-symbols-outlined text-[16px]">arrow_back</span>
<span>Kembali ke Portal Publik</span>
</a>
</div>
</div>
<!-- Simple Footer -->
<div class="mt-6 text-center text-xs text-slate-400">
      © 2025 Diskominfo Provinsi Riau. Seluruh hak cipta dilindungi.
    </div>
</main>

<script>
  const toggleBtn = document.getElementById('togglePassword');
  const passwordInput = document.getElementById('password');
  const eyeIcon = document.getElementById('eyeIcon');

  if (toggleBtn && passwordInput && eyeIcon) {
    toggleBtn.addEventListener('click', function() {
      const isPassword = passwordInput.getAttribute('type') === 'password';
      passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
      eyeIcon.textContent = isPassword ? 'visibility_off' : 'visibility';
    });
  }
</script>
</body>
</html>
