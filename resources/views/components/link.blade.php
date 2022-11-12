@props(['active'])

@php
  $classes = $active ?? false ? 'inline-flex w-full items-center text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-white text-gray-50' : 'inline-flex w-full items-center text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 text-gray-400 ';
@endphp

@if ($active)
  <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-purple-600" aria-hidden="true"></span>
@endif

<a {{ $attributes->merge(['class' => $classes]) }}>

  {{ $slot }}
</a>
