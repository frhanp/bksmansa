<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Detail Laporan Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                {{-- Isi konten sama persis dengan view Wali Kelas --}}
                <div class="p-8 space-y-6">
                    {{-- ... (Salin semua div dari view Wali Kelas) ... --}}
                </div>
                 <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex justify-between items-center">
                    {{-- Ubah link kembali ini --}}
                    <a href="{{ route('ortu.dashboard') }}" class="text-sm font-semibold text-teal-600 hover:text-teal-800">&larr; Kembali ke Dasbor</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>