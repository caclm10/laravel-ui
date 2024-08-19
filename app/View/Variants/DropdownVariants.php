<?php

namespace App\View\Variants;

class DropdownVariants
{
    public static function item(string $variant = '')
    {
        $itemClasses = [
            'flex items-center gap-x-3.5 py-2 px-3 w-full rounded-lg text-sm cursor-pointer focus:outline-none',
            match ($variant) {
                'danger' => 'text-danger-600 hover:bg-danger-50 focus:bg-danger-50',
                default => 'text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700'
            }
        ];

        return $itemClasses;
    }
}
