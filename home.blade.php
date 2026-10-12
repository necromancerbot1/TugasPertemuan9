<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
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
                <a href="/" class="text-white font-medium">Home</a>
                <a href="/about" class="hover:text-white transition">About</a>
                <a href="/contact" class="hover:text-white transition">Contact</a>
            </div>
        </div>
    </nav>

    {{-- Hero --}}
    <main class="max-w-5xl mx-auto px-6 pt-24 pb-16">
        <div class="mb-3">
            <span class="text-xs font-semibold tracking-widest uppercase text-white/30">Laravel 10 · MySQL · Tailwind</span>
        </div>
        <h1 class="text-5xl font-bold leading-tight mb-6">
            {{ $title }}
        </h1>
        <p class="text-white/50 text-lg max-w-xl mb-10">{{ $description }}</p>

        <div class="flex items-center gap-4">
            <a href="/about" class="bg-white text-black px-6 py-3 rounded-lg font-semibold text-sm hover:bg-white/90 transition">
                Lihat About →
            </a>
            <a href="/contact" class="border border-white/20 text-white px-6 py-3 rounded-lg font-semibold text-sm hover:bg-white/5 transition">
                Contact
            </a>
        </div>

        {{-- Bonus Route --}}
        <div class="mt-20 border border-white/10 rounded-xl p-6 bg-white/[0.03]">
            <p class="text-xs uppercase tracking-widest text-white/30 mb-3">Bonus — Route Parameter</p>
            <p class="text-white/60 text-sm mb-4">Coba akses route dengan parameter nama:</p>
            <a href="/hello/NamaAnda" class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/15 transition px-4 py-2 rounded-lg text-sm font-mono text-white">
                /hello/NamaAnda
            </a>
        </div>
    </main>

</body>
</html>
