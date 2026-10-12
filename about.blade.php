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
                <a href="/" class="hover:text-white transition">Home</a>
                <a href="/about" class="text-white font-medium">About</a>
                <a href="/contact" class="hover:text-white transition">Contact</a>
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-6 pt-20 pb-16">
        <div class="mb-3">
            <span class="text-xs font-semibold tracking-widest uppercase text-white/30">Tentang Project</span>
        </div>
        <h1 class="text-4xl font-bold mb-4">{{ $title }}</h1>
        <p class="text-white/50 mb-12">Data array dikirim dari controller ke view menggunakan Laravel.</p>

        {{-- Tech Stack --}}
        <div>
            <p class="text-xs uppercase tracking-widest text-white/30 mb-5">Tech Stack</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                @foreach($tech_stack as $index => $tech)
                <div class="flex items-center gap-4 border border-white/10 rounded-xl px-5 py-4 bg-white/[0.03] hover:bg-white/[0.06] transition">
                    <span class="text-xs font-mono text-white/20">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    <span class="font-medium text-white/80">{{ $tech }}</span>
                </div>
                @endforeach
            </div>
        </div>

        <div class="mt-12">
            <a href="/" class="text-sm text-white/40 hover:text-white transition">← Kembali ke Home</a>
        </div>
    </main>

</body>
</html>
