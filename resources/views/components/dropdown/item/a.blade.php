@use('App\View\Variants\DropdownVariants')

@props([
    'variant' => '',
])

<a {{ $attributes->twMerge(DropdownVariants::item($variant)) }} x-bind="item">
    {{ $slot }}
</a>
