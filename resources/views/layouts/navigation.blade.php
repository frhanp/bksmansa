<aside class="h-full flex flex-col md:h-screen md:sticky md:top-0">
    <div class="p-6 border-b border-gray-200">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
            <svg class="w-8 h-8 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 18.375a6.375 6.375 0 0 0 6.375-6.375a6.375 6.375 0 0 0-6.375-6.375a6.375 6.375 0 0 0-6.375 6.375a6.375 6.375 0 0 0 6.375 6.375Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 12.75h.008v.008H12v-.008Z" />
            </svg>
            <span class="text-xl font-bold text-gray-800">BK SMANSA</span>
        </a>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2">

        {{-- Tombol Dasbor Umum --}}
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('*dashboard')">
            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            {{ __('Dashboard') }}
        </x-nav-link>

        {{-- MENU KHUSUS ADMIN BK --}}
        @if (Auth::user()->role == 'admin_bk')
            <x-nav-link :href="route('admin.jenis-pelanggaran.index')" :active="request()->routeIs('admin.jenis-pelanggaran.*')">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                {{ __('Jenis Pelanggaran') }}
            </x-nav-link>
            <x-nav-link :href="route('admin.pengguna.index')" :active="request()->routeIs('admin.pengguna.*')">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372m-10.5-.372a9.369 9.369 0 0 1 2.625-.372M12 21a9.75 9.75 0 0 1-8.25-4.5m16.5 4.5a9.75 9.75 0 0 0-8.25-4.5m-8.25 4.5A9.75 9.75 0 0 1 12 3m0 18a9.75 9.75 0 0 0 8.25-4.5M3.75 4.5a9.75 9.75 0 0 1 8.25-4.5m0 18a9.75 9.75 0 0 1-8.25-4.5m16.5-4.5a9.75 9.75 0 0 0-8.25-4.5m-8.25 4.5A9.75 9.75 0 0 1 12 3m0 18a9.75 9.75 0 0 0-8.25-4.5M3.75 4.5a9.75 9.75 0 0 1 8.25-4.5" />
                </svg>
                {{ __('Pengguna Sistem') }}
            </x-nav-link>
            <x-nav-link :href="route('admin.jadwal.index')" :active="request()->routeIs('admin.jadwal.*')">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                {{ __('Verifikasi Jadwal') }}
            </x-nav-link>
        @endif

        {{-- MENU KHUSUS GURU BK --}}
        @if (Auth::user()->role == 'guru_bk')
            <x-nav-link :href="route('guru.siswa.index')" :active="request()->routeIs('guru.siswa.*')">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
                {{ __('Data Siswa') }}
            </x-nav-link>
            <x-nav-link :href="route('guru.pelanggaran-siswa.index')" :active="request()->routeIs('guru.pelanggaran-siswa.*')">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75a3.375 3.375 0 0 1 6 0v1.5a3.375 3.375 0 0 1-6 0v-1.5a.375.375 0 0 0-.75 0V12m-9 3.75a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Z" />
                </svg>
                {{ __('Catat Pelanggaran') }}
            </x-nav-link>
            <x-nav-link :href="route('guru.jadwal-bimbingan.index')" :active="request()->routeIs('guru.jadwal-bimbingan.*')">
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0h18M12 15.75h.008v.008H12v-.008Z" />
                </svg>
                {{ __('Jadwal Bimbingan') }}
            </x-nav-link>
        @endif

    </nav>

    <div x-data="{ open: false }" class="px-4 py-4 border-t border-gray-200">
        <button @click="open = !open"
            class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium text-left bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200">
            <span>{{ Auth::user()->name }}</span>
            <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <div x-show="open" x-cloak class="mt-2 space-y-1 bg-white rounded-lg shadow-inner text-sm text-gray-700">
            <a href="{{ route('profile.edit') }}"
                class="block px-4 py-2 hover:bg-gray-100 rounded-lg">{{ __('Profile') }}</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</aside>
