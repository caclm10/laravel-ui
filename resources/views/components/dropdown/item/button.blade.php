@use('App\View\Variants\DropdownVariants')

@props([
    'variant' => '',
])

<button type="button" {{ $attributes->twMerge(DropdownVariants::item($variant)) }} x-bind="item">
    {{ $slot }}
</button>
