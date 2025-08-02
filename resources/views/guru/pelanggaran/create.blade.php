<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Catat Pelanggaran Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                 <form action="{{ route('guru.pelanggaran-siswa.store') }}" method="POST">
                    @csrf
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Detail Kejadian</h3>
                            <p class="mt-1 text-sm text-slate-500">Pilih siswa dan jenis pelanggaran yang dilakukan.</p>
                        </div>

                        <div>
                            <x-input-label for="select-siswa" :value="__('Pilih Siswa (Ketik untuk mencari)')" />
                            {{-- ID baru ditambahkan di sini --}}
                            <select id="select-siswa" name="siswa_id" placeholder="Pilih siswa..." required>
                                <option value="">-- Pilih Siswa --</option>
                                @foreach($siswa as $s)
                                    <option value="{{ $s->id }}" {{ old('siswa_id') == $s->id ? 'selected' : '' }}>{{ $s->nama }} (Kelas: {{ $s->kelas }})</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('siswa_id')" />
                        </div>

                        <div>
                            <x-input-label for="select-pelanggaran" :value="__('Jenis Pelanggaran (Ketik untuk mencari)')" />
                             {{-- ID baru ditambahkan di sini --}}
                            <select id="select-pelanggaran" name="jenis_pelanggaran_id" placeholder="Pilih pelanggaran..." required>
                                <option value="">-- Pilih Jenis Pelanggaran --</option>
                                @foreach($jenisPelanggaran as $jp)
                                    <option value="{{ $jp->id }}" {{ old('jenis_pelanggaran_id') == $jp->id ? 'selected' : '' }}>{{ $jp->nama_pelanggaran }} ({{$jp->poin}} Poin)</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('jenis_pelanggaran_id')" />
                        </div>

                        <div>
                            <x-input-label for="catatan" :value="__('Catatan Tambahan (Opsional)')" />
                            <textarea id="catatan" name="catatan" rows="4" class="mt-1 block w-full border-gray-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm">{{ old('catatan') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('catatan')" />
                        </div>
                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Simpan Catatan') }}
                        </x-primary-button>
                        <a href="{{ route('guru.pelanggaran-siswa.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new TomSelect('#select-siswa',{
                create: false,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });

            new TomSelect('#select-pelanggaran',{
                create: false,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });
        });
    </script>
    @endpush
</x-app-layout>