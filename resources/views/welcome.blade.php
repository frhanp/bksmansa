<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BK SMANSA Gorontalo</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Menghilangkan scrollbar agar lebih bersih */
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased" x-data="{
    scrollTo(selector) {
        document.querySelector(selector).scrollIntoView({ behavior: 'smooth' });
    }
}">

    <header class="fixed top-0 left-0 right-0 z-20 bg-white/80 backdrop-blur-sm shadow-sm transition-all duration-300">
        <nav class="max-w-7xl mx-auto flex justify-between items-center p-4">
            <a href="#" @click.prevent="scrollTo('#home')" class="flex items-center gap-3">
                <svg class="w-8 h-8 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.375a6.375 6.375 0 0 0 6.375-6.375a6.375 6.375 0 0 0-6.375-6.375a6.375 6.375 0 0 0-6.375 6.375a6.375 6.375 0 0 0 6.375 6.375Z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 12.75h.008v.008H12v-.008Z" />
                </svg>
                <span class="font-bold text-xl text-slate-800">BK SMANSA</span>
            </a>
            <div class="hidden md:flex items-center gap-2">  <a href="#" @click.prevent="scrollTo('#home')" class="text-sm font-semibold text-slate-600 hover:text-teal-600 px-3 py-2 rounded-lg hover:bg-teal-50 transition-all duration-300">Home</a>
                <a href="#" @click.prevent="scrollTo('#fitur')" class="text-sm font-semibold text-slate-600 hover:text-teal-600 px-3 py-2 rounded-lg hover:bg-teal-50 transition-all duration-300">Fitur</a>
                <a href="#" @click.prevent="scrollTo('#tentang')" class="text-sm font-semibold text-slate-600 hover:text-teal-600 px-3 py-2 rounded-lg hover:bg-teal-50 transition-all duration-300">Tentang</a>
            </div>
            <div class="flex items-center gap-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="rounded-md bg-teal-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-teal-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-600 transition-colors duration-300">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-slate-600 hover:text-teal-600 transition-colors duration-300">
                            Log in
                        </a>
                    @endif
                @endif
            </div>
        </nav>
    </header>

    <main x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 50)">

        <section id="home" class="min-h-screen flex items-center justify-center text-center px-4 pt-20">
            <div x-show="loaded" x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 translate-y-5" x-transition:enter-end="opacity-100 translate-y-0">
                <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 tracking-tight">
                    Sistem Informasi Bimbingan Konseling
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-lg text-slate-600">
                    Platform terpusat untuk digitalisasi proses pencatatan, penjadwalan, dan pelaporan pembinaan siswa SMANSA Gorontalo.
                </p>
                <div class="mt-10">
                    <a href="#" @click.prevent="scrollTo('#fitur')" class="rounded-md bg-teal-600 px-6 py-3 text-base font-semibold text-white shadow-lg hover:bg-teal-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-600 transition-colors duration-300">
                        Lihat Fitur
                    </a>
                </div>
            </div>
        </section>

        <section id="fitur" class="min-h-screen flex items-center bg-white py-20 px-4">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Solusi Digital untuk BK Modern</h2>
                    <p class="mt-4 text-lg text-slate-600">Dirancang untuk efisiensi dan transparansi dalam pembinaan siswa.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <div class="group rounded-xl border border-slate-200 p-8 transition-all duration-300 hover:border-teal-200 hover:shadow-xl hover:-translate-y-1">
                        <div class="mb-4 bg-teal-100 rounded-lg w-14 h-14 flex items-center justify-center">
                             <svg class="h-8 w-8 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75a3.375 3.375 0 0 1 6 0v1.5a3.375 3.375 0 0 1-6 0v-1.5a.375.375 0 0 0-.75 0V12m-9 3.75a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-900">Pencatatan Pelanggaran</h3>
                        <p class="mt-2 text-slate-600">Catat setiap pelanggaran dengan sistem poin yang terakumulasi otomatis dan mudah dipantau.</p>
                    </div>

                    <div class="group rounded-xl border border-slate-200 p-8 transition-all duration-300 hover:border-teal-200 hover:shadow-xl hover:-translate-y-1">
                        <div class="mb-4 bg-teal-100 rounded-lg w-14 h-14 flex items-center justify-center">
                            <svg class="h-8 w-8 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0h18M12 15.75h.008v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-900">Penjadwalan Terstruktur</h3>
                        <p class="mt-2 text-slate-600">Atur jadwal sesi konseling dengan mudah dan terverifikasi oleh koordinator untuk alur kerja yang jelas.</p>
                    </div>

                    <div class="group rounded-xl border border-slate-200 p-8 transition-all duration-300 hover:border-teal-200 hover:shadow-xl hover:-translate-y-1">
                        <div class="mb-4 bg-teal-100 rounded-lg w-14 h-14 flex items-center justify-center">
                            <svg class="h-8 w-8 text-teal-600" xmlns="http://www.w.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-900">Laporan Terpusat</h3>
                        <p class="mt-2 text-slate-600">Akses rekapitulasi data bimbingan dan pelanggaran dengan cepat sesuai hak akses masing-masing peran.</p>
                    </div>

                </div>
            </div>
        </section>
        
        <section id="tentang" class="min-h-screen flex items-center justify-center bg-slate-900 text-white px-4">
             <div class="text-center">
                <a href="#" @click.prevent="scrollTo('#home')" class="flex items-center justify-center gap-3 mb-8">
                    <svg class="w-10 h-10 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.375a6.375 6.375 0 0 0 6.375-6.375a6.375 6.375 0 0 0-6.375-6.375a6.375 6.375 0 0 0-6.375 6.375a6.375 6.375 0 0 0 6.375 6.375Z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 12.75h.008v.008H12v-.008Z" />
                    </svg>
                    <span class="font-bold text-2xl">BK SMANSA</span>
                </a>
                <p class="max-w-xl mx-auto text-slate-400">
                    Sistem ini didedikasikan untuk mendukung program Bimbingan Konseling SMAN 1 Gorontalo dalam membina karakter dan prestasi siswa.
                </p>
                <div class="mt-10">
                    <p class="text-sm text-slate-500">&copy; {{ date('Y') }} Tim Bimbingan Konseling SMAN 1 Gorontalo.</p>
                </div>
            </div>
        </section>

    </main>

</body>
</html>