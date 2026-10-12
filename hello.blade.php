<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo {{ $nama }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#0f0f0f] text-white min-h-screen">

    {{-- Navbar --}}
    <nav class="border-b border-white/10 px-6 py-4">
        <div class="max-w-5xl mx-auto flex items-center justify-between">
            <span class="text-sm font-semibold tracking-widest uppercase text-white/40">TugasWeb P9</span>
            <div class="flex items-center gap-6 text-sm text-white/60">
                <a href="/" class="hover:text-white transition">Home</a>
                <a href="/about" class="hover:text-white transition">About</a>
                <a href="/contact" class="hover:text-white transition">Contact</a>
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-6 pt-24 pb-16">
        <div class="mb-3">
            <span class="text-xs font-semibold tracking-widest uppercase text-white/30">Route Parameter · /hello/{nama}</span>
        </div>
        <h1 class="text-5xl font-bold leading-tight mb-6">
            Halo, <span class="text-white/50">{{ $nama }}</span>
        </h1>
        <p class="text-white/40 text-lg mb-10">
            Ini halaman bonus dari route parameter Laravel.
        </p>

        <div class="border border-white/10 rounded-xl p-5 bg-white/[0.03] max-w-sm">
            <p class="text-xs uppercase tracking-widest text-white/30 mb-2">Parameter diterima</p>
            <code class="text-white/70 text-sm font-mono">$nama = "{{ $nama }}"</code>
        </div>

        <div class="mt-12">
            <a href="/" class="text-sm text-white/40 hover:text-white transition">← Kembali ke Home</a>
        </div>
    </main>

</body>
</html>
