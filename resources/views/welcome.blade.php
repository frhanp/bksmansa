<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BK SMANSA Gorontalo</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        /* Subtle Glassmorphism Header */
        header {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.97), rgba(255, 255, 255, 0.85));
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        /* Minimalist Nav Hover Effect */
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -4px;
            left: 0;
            background: #0d9488;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: #0d9488;
        }

        /* Hero Section */
        #home {
            position: relative;
            background: linear-gradient(180deg, #f8fafc, #f1f5f9);
            overflow: hidden;
        }

        #home::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://source.unsplash.com/random/1920x1080?abstract') no-repeat center center/cover;
            opacity: 0.03;
            transform: translateY(0);
            transition: transform 0.8s ease;
        }

        #home::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 30%, rgba(20, 184, 166, 0.1) 0%, transparent 50%);
            opacity: 0.5;
            z-index: 0;
        }

        .hero-heading {
            position: relative;
            background: linear-gradient(to right, #0d9488, #1e293b);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hero-heading::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, #0d9488, #14b8a6);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            transition: width 0.5s ease;
        }

        .hero-heading:hover::after {
            width: 100px;
        }

        /* Scroll Down Indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translate(-50%, 0);
            }

            40% {
                transform: translate(-50%, -10px);
            }

            60% {
                transform: translate(-50%, -5px);
            }
        }

        /* Feature Card */
        .feature-card {
            transition: transform 0.6s ease, box-shadow 0.6s ease;
            transform-style: preserve-3d;
            position: relative;
            border: 1px solid transparent;
            background-clip: padding-box;
            border-radius: 1.5rem;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: -1px;
            left: -1px;
            right: -1px;
            bottom: -1px;
            border-radius: 1.5rem;
            background: linear-gradient(45deg, transparent, #14b8a6, transparent);
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: -1;
        }

        .feature-card:hover::before {
            opacity: 1;
        }

        .feature-card:hover {
            transform: translateY(-10px) rotateX(3deg) rotateY(3deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }

        .feature-card .icon-wrapper {
            transition: transform 0.3s ease;
        }

        .feature-card:hover .icon-wrapper {
            transform: scale(1.1);
        }

        /* Tentang Section Gradient */
        #tentang {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
        }

        /* Button Minimalist Glow */
        .btn-primary {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 0.75rem;
        }

        .btn-primary:hover {
            transform: scale(1.03);
            box-shadow: 0 0 15px rgba(20, 184, 166, 0.2);
        }

        .btn-secondary {
            position: relative;
            transition: transform 0.3s ease, background-color 0.3s ease;
            border-radius: 0.75rem;
        }

        .btn-secondary:hover {
            transform: scale(1.03);
            background-color: #f1f5f9;
        }

        /* Add scroll margin to sections */
        section {
            scroll-margin-top: 80px;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased" x-data="{
    scrollTo(selector) {
        const element = document.querySelector(selector);
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        } else {
            console.error('Element not found:', selector);
        }
    }
}">

    <header class="fixed top-0 left-0 right-0 z-20 shadow-sm transition-all duration-500">
        <nav class="max-w-7xl mx-auto flex justify-between items-center p-5">
            <a href="#" @click.prevent="scrollTo('#home')" class="flex items-center gap-3">
                <svg class="w-8 h-8 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18zm0-2a7 7 0 1 1 0-14 7 7 0 0 1 0 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0l-2-2m2 2l2-2" />
                </svg>
                <span class="font-semibold text-xl text-slate-900 tracking-tight">BK SMANSA</span>
            </a>
            <div class="hidden md:flex items-center gap-6">
                <a href="#" @click.prevent="scrollTo('#home')"
                    class="nav-link text-sm font-medium text-slate-700 px-3 py-2">Home</a>
                <a href="#" @click.prevent="scrollTo('#fitur')"
                    class="nav-link text-sm font-medium text-slate-700 px-3 py-2">Fitur</a>
                <a href="#" @click.prevent="scrollTo('#tentang')"
                    class="nav-link text-sm font-medium text-slate-700 px-3 py-2">Tentang</a>
            </div>
            <div class="flex items-center gap-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="btn-primary rounded-lg bg-teal-600 px-5 py-2 text-sm font-medium text-white shadow-sm transition-all duration-300">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="nav-link text-sm font-medium text-slate-700 transition-colors duration-300">
                            Log in
                        </a>
                    @endif
                    @endif
                </div>
            </nav>
        </header>

        <main x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 50)">

            <section id="home" class="min-h-screen flex items-center justify-center text-center px-6 pt-20 relative">
                <div x-show="loaded" x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                    class="z-10">
                    <h1 class="hero-heading text-5xl md:text-7xl font-bold tracking-tight leading-tight">
                        Bimbingan Konseling Digital
                    </h1>
                    <p class="mt-6 max-w-2xl mx-auto text-lg text-slate-600 leading-relaxed">
                        Solusi modern untuk pencatatan, penjadwalan, dan pelaporan pembinaan siswa SMANSA Gorontalo.
                    </p>
                    <div class="mt-10 flex gap-4 justify-center">
                        <a href="#" @click.prevent="scrollTo('#fitur')"
                            class="btn-primary bg-teal-600 px-6 py-3 text-base font-medium text-white shadow-sm transition-all duration-300">
                            Jelajahi Fitur
                        </a>
                        <a href="#" @click.prevent="scrollTo('#tentang')"
                            class="btn-secondary border border-slate-300 px-6 py-3 text-base font-medium text-slate-700 transition-all duration-300"
                            x-show="loaded" x-transition:enter="transition ease-out duration-1000 delay-200"
                            x-transition:enter-start="opacity-0 translate-y-8"
                            x-transition:enter-end="opacity-100 translate-y-0">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <a href="#" @click.prevent="scrollTo('#fitur')" class="scroll-indicator">
                    <svg class="w-6 h-6 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                    </svg>
                </a>
            </section>

            <section id="fitur" class="min-h-screen flex items-center bg-white py-28 px-6">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Solusi untuk BK Modern</h2>
                        <p class="mt-4 text-lg text-slate-600 leading-relaxed">Efisien, transparan, dan terstruktur untuk
                            pembinaan siswa.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-data="{ loaded: false }"
                        x-init="setTimeout(() => loaded = true, 100)">
                        <div class="feature-card rounded-2xl bg-white p-8" x-show="loaded"
                            x-transition:enter="transition ease-out duration-600 delay-100"
                            x-transition:enter-start="opacity-0 translate-y-10"
                            x-transition:enter-end="opacity-100 translate-y-0">
                            <div class="icon-wrapper mb-6 bg-teal-50 rounded-xl w-14 h-14 flex items-center justify-center">
                                <svg class="h-8 w-8 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75M3 12h18" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900">Pencatatan Pelanggaran</h3>
                            <p class="mt-3 text-slate-600 leading-relaxed">Catat pelanggaran siswa dengan sistem poin
                                otomatis untuk pemantauan efisien.</p>
                        </div>
                        <div class="feature-card rounded-2xl bg-white p-8" x-show="loaded"
                            x-transition:enter="transition ease-out duration-600 delay-200"
                            x-transition:enter-start="opacity-0 translate-y-10"
                            x-transition:enter-end="opacity-100 translate-y-0">
                            <div
                                class="icon-wrapper mb-6 bg-teal-50 rounded-xl w-14 h-14 flex items-center justify-center">
                                <svg class="h-8 w-8 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0h18" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900">Penjadwalan Terstruktur</h3>
                            <p class="mt-3 text-slate-600 leading-relaxed">Atur sesi konseling dengan sistem terverifikasi
                                untuk alur kerja jelas.</p>
                        </div>
                        <div class="feature-card rounded-2xl bg-white p-8" x-show="loaded"
                            x-transition:enter="transition ease-out duration-600 delay-300"
                            x-transition:enter-start="opacity-0 translate-y-10"
                            x-transition:enter-end="opacity-100 translate-y-0">
                            <div
                                class="icon-wrapper mb-6 bg-teal-50 rounded-xl w-14 h-14 flex items-center justify-center">
                                <svg class="h-8 w-8 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h16.5M3.75 3H12v11.25M12 16.5h6A2.25 2.25 0 0 0 20.25 14.25V3" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-slate-900">Laporan Terpusat</h3>
                            <p class="mt-3 text-slate-600 leading-relaxed">Akses rekapitulasi data bimbingan dan
                                pelanggaran sesuai peran.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tentang" class="min-h-screen flex items-center justify-center text-white px-6">
                <div class="text-center">
                    <a href="#" @click.prevent="scrollTo('#home')"
                        class="flex items-center justify-center gap-3 mb-8">
                        <svg class="w-10 h-10 text-teal-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18zm0-2a7 7 0 1 1 0-14 7 7 0 0 1 0 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0l-2-2m2 2l2-2" />
                        </svg>
                        <span class="font-semibold text-2xl tracking-tight">BK SMANSA</span>
                    </a>
                    <p class="max-w-xl mx-auto text-lg text-slate-300 leading-relaxed">
                        Sistem untuk mendukung program Bimbingan Konseling SMAN 1 Gorontalo dalam membina karakter dan
                        prestasi siswa.
                    </p>
                    <div class="mt-10">
                        <p class="text-sm text-slate-400">© {{ date('Y') }} Tim Bimbingan Konseling SMAN 1 Gorontalo.
                        </p>
                    </div>
                </div>
            </section>

        </main>

    </body>

    </html>
