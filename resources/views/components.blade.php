<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Components - Laravel UI</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="p-10">

        <h1 class="text-3xl mb-10">Laravel UI</h1>

        <div class="space-y-8">
            <div class="space-y-6">
                <h2 class="text-xl underline">Button</h2>

                <div class="space-y-4">
                    <div class="flex items-center gap-x-3">
                        <x-button variant="primary">Click Me</x-button>
                        <x-button variant="primary-outline">Click Me</x-button>
                        <x-button variant="primary-ghost">Click Me</x-button>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <x-button variant="danger">Click Me</x-button>
                        <x-button variant="danger-outline">Click Me</x-button>
                        <x-button variant="danger-ghost">Click Me</x-button>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <x-button variant="danger" size="sm">Click Me</x-button>
                        <x-button variant="danger" size="md">Click Me</x-button>
                        <x-button variant="danger" size="lg">Click Me</x-button>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <h2 class="text-xl underline">Dropdown</h2>

                <div class="space-y-4">
                    <x-dropdown>
                        <x-dropdown.trigger>
                            @php($attributes = $component->props())
                            <x-button {{ $attributes }} size="sm">
                                Actions
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="size-[18px] shrink-0 transition-transform"
                                    x-bind:class="{ 'rotate-180': isActive }">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 9l6 6l6 -6" />
                                </svg>
                            </x-button>
                        </x-dropdown.trigger>

                        <x-dropdown.menu>
                            <x-dropdown.item.a href="#">
                                Newsletter
                            </x-dropdown.item.a>
                            <x-dropdown.item.button>
                                Purchases
                            </x-dropdown.item.button>
                            <x-dropdown.item.button>
                                Downloads
                            </x-dropdown.item.button>
                            <x-dropdown.item.button variant="danger">
                                Delete All
                            </x-dropdown.item.button>
                        </x-dropdown.menu>
                    </x-dropdown>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
