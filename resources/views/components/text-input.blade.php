@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'border-gray-300 dark:border-gray-700 dark:bg-slate-200 dark:text-black focus:border-red-600 dark:focus:border-red-600 focus:border-red-600 dark:focus:ring-red-600 shadow-sm',
]) !!}>
