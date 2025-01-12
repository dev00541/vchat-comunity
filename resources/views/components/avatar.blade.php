@props(['src' => null])
<div
    {{ $attributes->merge(['class' => 'shrink-0 inline-flex items-center justify-center overflow-hidden rounded-full border border-gray-200 dark:border-secondary-500 w-10 h-10 text-base']) }}>
    <img @class([
        'shrink-0 w-full h-full object-cover object-center rounded-full',
    ])
        src="https://www.gravatar.com/avatar/{{ $src }}?d=https%3A%2F%2Fwww.gravatar.com%2Favatar%2Fdefault.jpg&amp;s=150" />
</div>
