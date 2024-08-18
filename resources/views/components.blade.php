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


        </div>

    </div>
</body>

</html>
