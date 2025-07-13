<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Verifikasi Jadwal Bimbingan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-6">
                    <div class="border-b border-slate-200 pb-4 mb-6">
                        <h3 class="text-lg font-medium text-slate-900">Jadwal Menunggu Verifikasi</h3>
                        <p class="mt-1 text-sm text-slate-500">Silakan verifikasi atau batalkan jadwal yang diajukan oleh Guru BK.</p>
                    </div>

                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">{{ session('success') }}</div>
                    @endif

                    <div class="overflow-x-auto border-t border-slate-200">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Siswa</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Diajukan Oleh</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Jadwal Diajukan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-200">
                                @forelse ($jadwal as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <div class="font-medium text-slate-900">{{ $item->siswa->nama }}</div>
                                            <div class="text-slate-500">{{ $item->siswa->kelas }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ $item->konselor->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-slate-700">{{ \Carbon\Carbon::parse($item->tanggal_jadwal)->isoFormat('dddd, D MMM YYYY, HH:mm') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <form action="{{ route('admin.jadwal.update', $item->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="status" value="terverifikasi">
                                                <button type="submit" class="inline-block px-3 py-1 text-sm font-semibold text-green-600 bg-green-50 rounded-md hover:bg-green-100">Verifikasi</button>
                                            </form>
                                            <form action="{{ route('admin.jadwal.update', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin membatalkan jadwal ini?');">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="status" value="dibatalkan">
                                                <button type="submit" class="ml-2 px-3 py-1 text-sm font-semibold text-red-600 bg-red-50 rounded-md hover:bg-red-100">Batalkan</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-slate-500">Tidak ada jadwal yang perlu diverifikasi.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                     @if ($jadwal->hasPages())
                        <div class="p-4 border-t border-slate-200">
                            {{ $jadwal->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>