<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Buat Laporan Bimbingan untuk ' . $jadwal->siswa->nama) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl">

                {{-- ================= AWAL MODIFIKASI ================= --}}
                <form action="{{ route('guru.laporan.store', $jadwal->id) }}" method="POST"
                      x-data='{
                          templates: @json($templateSurat),
                          errors: @js($errors->any() ? $errors->toArray() : (object)[]), // Gunakan object kosong jika tidak ada error
                          selectedTemplate: "{{ old('jenis_surat') }}",

                          isFieldVisible(fieldKey) {
                              for (const templateKey of this.selectedTemplates) {
                                  if (this.templates[templateKey]?.fields[fieldKey]) { return true; }
                              } return false;
                          },
                          isFieldRequired(fieldKey) {
                               for (const templateKey of this.selectedTemplates) {
                                  if (this.templates[templateKey]?.fields[fieldKey]?.required) { return true; }
                              } return false;
                          },
                          getFieldDetails(fieldKey) {
                              for (const templateKey of this.selectedTemplates) {
                                   if (this.templates[templateKey]?.fields[fieldKey]) {
                                      return this.templates[templateKey]?.fields[fieldKey];
                                  }
                              } return { label: "", type: "text", required: false };
                          },
                          selectedTemplates: @js(old('jenis_surat', []))
                      }'>
                {{-- ================= AKHIR MODIFIKASI ================= --}}
                    @csrf
                    <div class="p-8 space-y-6">
                        <div class="border-b border-slate-200 pb-6">
                            <h3 class="text-lg font-medium leading-6 text-slate-900">Detail Laporan</h3>
                            <p class="mt-1 text-sm text-slate-500">Pilih satu atau lebih jenis surat yang akan dibuat. Formulir akan menyesuaikan.</p>
                        </div>

                        <div>
                            <x-input-label :value="__('Pilih Jenis Surat/Laporan')" />
                             <div class="mt-2 space-y-2">
                                @foreach ($templateSurat as $key => $config)
                                <label class="flex items-center">
                                    <input type="checkbox" name="jenis_surat[]" value="{{ $key }}" x-model="selectedTemplates" class="rounded border-gray-300 text-teal-600 shadow-sm focus:ring-teal-500">
                                    <span class="ms-2 text-sm text-gray-600">{{ $config['label'] }}</span>
                                </label>
                                @endforeach
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('jenis_surat')" />
                             <x-input-error class="mt-2" :messages="$errors->get('jenis_surat.*')" />
                        </div>


                        {{-- FORM DINAMIS --}}
                        <div x-show="selectedTemplates.length > 0" class="space-y-6 border-t border-slate-200 pt-6">
                            <h4 class="text-md font-medium text-slate-700">Input Tambahan (jika diperlukan)</h4>

                             @php
                                $allPossibleFields = [];
                                foreach ($templateSurat as $config) {
                                    foreach ($config['fields'] as $key => $fieldConfig) {
                                        if (!isset($allPossibleFields[$key])) {
                                            $allPossibleFields[$key] = $fieldConfig;
                                        }
                                    }
                                }
                            @endphp

                            @foreach ($allPossibleFields as $key => $field)
                                <template x-if="isFieldVisible('{{ $key }}')">
                                    <div class="transition-all">
                                        <x-input-label x-text="getFieldDetails('{{ $key }}').label" for="{{ $key }}" />

                                        @if ($field['type'] === 'textarea')
                                            <textarea id="{{ $key }}" name="{{ $key }}" rows="7" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" x-bind:required="isFieldRequired('{{ $key }}')" placeholder="{{ $field['placeholder'] ?? '' }}">{{ old($key) }}</textarea>
                                        @elseif ($field['type'] === 'select')
                                            <select id="{{ $key }}" name="{{ $key }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" x-bind:required="isFieldRequired('{{ $key }}')">
                                                 <option value="">-- Pilih --</option>
                                                 @foreach($field['options'] as $optionValue => $optionLabel)
                                                     <option value="{{ $optionValue }}" @selected(old($key) == $optionValue)>{{ $optionLabel }}</option>
                                                 @endforeach
                                            </select>
                                        @else
                                            <x-text-input id="{{ $key }}" name="{{ $key }}" type="{{ $field['type'] }}" class="mt-1 block w-full" x-bind:required="isFieldRequired('{{ $key }}')" placeholder="{{ $field['placeholder'] ?? '' }}" value="{{ old($key, $field['value'] ?? '') }}" />
                                        @endif

                                        <div x-show="errors['{{ $key }}']" class="text-sm text-red-600 mt-2" x-text="errors['{{ $key }}']?.[0]"></div>
                                    </div>
                                </template>
                            @endforeach
                        </div>

                        <div class="border-t border-slate-200 pt-6 space-y-6">
                            <div>
                                <x-input-label for="isi_laporan" :value="__('Isi Laporan Tambahan (Opsional)')" />
                                <textarea id="isi_laporan" name="isi_laporan" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('isi_laporan') }}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('isi_laporan')" />
                            </div>

                            <div>
                                <x-input-label for="rencana_tindak_lanjut" :value="__('Rencana Tindak Lanjut (Opsional)')" />
                                <textarea id="rencana_tindak_lanjut" name="rencana_tindak_lanjut" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('rencana_tindak_lanjut') }}</textarea>
                                 <x-input-error class="mt-2" :messages="$errors->get('rencana_tindak_lanjut')" />
                            </div>
                        </div>

                    </div>

                    <div class="px-8 py-4 bg-slate-50 border-t border-slate-200 flex items-center gap-4">
                        <x-primary-button class="bg-teal-600 hover:bg-teal-500 focus:bg-teal-700 focus:ring-teal-500">
                            {{ __('Simpan & Buat Surat') }}
                        </x-primary-button>
                        <a href="{{ route('guru.jadwal-bimbingan.index') }}" class="text-sm text-slate-600 hover:text-slate-900">{{ __('Batal') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>