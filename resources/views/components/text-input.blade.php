@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-slate-300 focus:border-teal-600 focus:ring-teal-600 focus:ring-opacity-50 rounded-lg shadow-sm transition-all duration-300 hover:border-teal-500 text-slate-800 placeholder-slate-400 disabled:opacity-50 disabled:cursor-not-allowed font-inter']) }}>