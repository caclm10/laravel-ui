<template x-if="isMounted">
    <div
        {{ $attributes->merge([
                'role' => 'menu',
                'aria-orientation' => 'vertical',
                'x-ref' => 'menu',
                'x-bind:class' => '{ \'opacity-0 scale-95\': !isActive, \'opacity-100 scale-100\': isActive }',
            ])->twMerge([
                'absolute transition-[opacity,transform] duration w-60 bg-white shadow-md rounded-lg space-y-0.5 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700',
            ]) }}>
        {{ $slot }}
    </div>
</template>
