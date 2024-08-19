@use('App\View\Variants\ButtonVariants')

@props([
    'variant' => 'primary',
    'size' => 'md',
])

<button {{ $attributes->merge(['type' => 'button'])->twMerge(ButtonVariants::make($variant, $size)) }}>
    {{ $slot }}
</button>
