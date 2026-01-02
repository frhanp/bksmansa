<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Manajemen Siswa Perwalian') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6 text-slate-900">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
                        <h3 class="text-lg font-bold text-slate-700 uppercase tracking-wider">Daftar Siswa Kelas
                            {{ Auth::user()->guru->siswaWalian->first()->kelas ?? '-' }}</h3>
                        <a href="{{ route('walikelas.siswa.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-teal-600 border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-700 transition ease-in-out duration-150">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4"></path>
                            </svg>
                            Tambah Siswa Baru
                        </a>
                    </div>

                    @if (session('success'))
                        <div
                            class="mb-4 p-4 bg-green-50 border-l-4 border-green-500 text-green-700 text-sm rounded-r-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto border border-slate-100 rounded-xl">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase">No</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase">NIS</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-slate-500 uppercase">Nama
                                        Siswa</th>
                                    <th class="px-6 py-3 text-center text-xs font-bold text-slate-500 uppercase">Total
                                        Poin</th>
                                    <th class="px-6 py-3 text-right text-xs font-bold text-slate-500 uppercase">Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-100">
                                @forelse ($siswa as $s)
                                    <tr class="hover:bg-slate-50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-500">
                                            {{ ($siswa->currentPage() - 1) * $siswa->perPage() + $loop->iteration }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-slate-700">
                                            {{ $s->nis }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-800">
                                            {{ $s->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            <span
                                                class="px-3 py-1 rounded-full text-xs font-bold {{ $s->totalPoin() > 50 ? 'bg-red-100 text-red-600' : 'bg-slate-100 text-slate-600' }}">
                                                {{ $s->totalPoin() }} Poin
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex justify-end gap-2">
                                                <a href="{{ route('walikelas.siswa.show', $s->id) }}"
                                                    class="p-2 text-teal-600 bg-teal-50 rounded-lg hover:bg-teal-100"
                                                    title="Detail">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <a href="{{ route('walikelas.siswa.edit', $s->id) }}"
                                                    class="p-2 text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100"
                                                    title="Edit">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <form action="{{ route('walikelas.siswa.destroy', $s->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Hapus siswa ini? Data pelanggaran & akun orang tua juga akan terhapus.')"
                                                    class="inline">
                                                    @csrf @method('DELETE')
                                                    <button type="submit"
                                                        class="p-2 text-red-600 bg-red-50 rounded-lg hover:bg-red-100">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-10 text-center text-slate-400 italic text-sm">
                                            Belum ada siswa yang ditambahkan ke kelas ini.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-6">
                        {{ $siswa->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
