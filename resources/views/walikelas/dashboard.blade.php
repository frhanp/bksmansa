<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Dasbor Wali Kelas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- BOX TUPOKSI (Penyempurnaan Revisi 3) --}}
            <div class="mb-8 p-6 bg-teal-50 border-l-4 border-teal-500 rounded-r-xl shadow-sm">
                <div class="flex items-center gap-3 mb-2">
                    <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="font-bold text-teal-900">Tugas Pokok & Fungsi (Tupoksi)</h3>
                </div>
                <p class="text-sm text-teal-800 leading-relaxed">
                    Sebagai <strong>Wali Kelas</strong>, Anda adalah penanggung jawab utama data siswa di kelas Anda. Tugas Anda meliputi <strong>pendaftaran siswa baru</strong> ke dalam sistem, pemantauan poin pelanggaran, serta koordinasi dengan Guru BK jika terdapat siswa yang membutuhkan bimbingan intensif.
                </p>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <div class="border-b border-slate-200 pb-4 mb-6 flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-medium text-slate-900">
                                Daftar Siswa Perwalian
                            </h3>
                            <p class="mt-1 text-sm text-slate-500">
                                Berikut adalah daftar siswa yang berada di bawah perwalian Anda.
                            </p>
                        </div>
                        {{-- Tombol Kelola Siswa (Revisi 2: Akses Input) --}}
                        {{-- <a href="{{ route('walikelas.siswa.index') }}" class="inline-flex items-center px-4 py-2 bg-slate-800 border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-slate-700 active:bg-slate-900 focus:outline-none focus:border-slate-900 focus:ring ring-slate-300 disabled:opacity-25 transition ease-in-out duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            Kelola & Tambah Siswa
                        </a> --}}
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">No</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Nama Siswa</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">NIS</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Total Poin</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($siswaDiampu as $siswa)
                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">{{ $loop->iteration }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-slate-900">{{ $siswa->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $siswa->nis }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-bold {{ $siswa->totalPoin() > 50 ? 'text-red-600' : 'text-slate-800' }}">
                                            {{ $siswa->totalPoin() }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('walikelas.siswa.show', $siswa->id) }}" class="inline-block px-3 py-1 text-sm font-semibold text-teal-600 bg-teal-50 rounded-md hover:bg-teal-100">Lihat Detail</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-10 text-center text-slate-500 italic">
                                            Tidak ada siswa yang terdaftar di bawah perwalian Anda. <br>
                                            <a href="{{ route('walikelas.siswa.create') }}" class="text-teal-600 font-bold hover:underline">Tambah Siswa Sekarang</a>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>