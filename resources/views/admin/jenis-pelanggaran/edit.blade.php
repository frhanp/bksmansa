<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Edit Jenis Pelanggaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-8">
                    <form action="{{ route('admin.jenis-pelanggaran.update', $jenisPelanggaran->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="space-y-6">
                            <div>
                                <x-input-label for="nama_pelanggaran" :value="__('Nama Pelanggaran')" />
                                <x-text-input id="nama_pelanggaran" name="nama_pelanggaran" type="text" class="mt-1 block w-full" :value="old('nama_pelanggaran', $jenisPelanggaran->nama_pelanggaran)" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('nama_pelanggaran')" />
                            </div>

                            <div>
                                <x-input-label for="poin" :value="__('Poin Pelanggaran')" />
                                <x-text-input id="poin" name="poin" type="number" class="mt-1 block w-full" :value="old('poin', $jenisPelanggaran->poin)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('poin')" />
                            </div>

                            <div class="flex items-center gap-4 border-t border-slate-200 pt-6">
                                <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                                    {{ __('Update Data') }}
                                </x-primary-button>
                                <a href="{{ route('admin.jenis-pelanggaran.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>