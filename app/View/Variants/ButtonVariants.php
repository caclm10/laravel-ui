<?php

namespace App\View\Variants;

class ButtonVariants
{
    public static function make(
        string $variant = 'primary',
        string $size = 'md',
    ): array {
        $buttonClasses = [
            'inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border focus:outline-none disabled:opacity-50 disabled:pointer-events-none',
            match ($variant) {
                'primary' => 'border-transparent bg-primary-600 text-white hover:bg-primary-700 focus:bg-primary-700',
                'primary-outline' => 'border-primary-600 text-primary-600 hover:border-primary-500 hover:text-primary-500  focus:border-primary-500 focus:text-primary-500 dark:border-primary-500 dark:text-primary-500 dark:hover:text-primary-400 dark:hover:border-primary-400',
                'primary-ghost' => 'border-transparent text-primary-600 hover:bg-primary-100 hover:text-primary-800 focus:bg-primary-100 focus:text-primary-800 dark:text-primary-500 dark:hover:bg-primary-800/30 dark:hover:text-primary-400 dark:focus:bg-primary-800/30 dark:focus:text-primary-400',
                'danger' => 'border-transparent bg-danger-600 text-white hover:bg-danger-700 focus:bg-danger-700',
                'danger-outline' => 'border-danger-600 text-danger-600 hover:border-danger-500 hover:text-danger-500  focus:border-danger-500 focus:text-danger-500 dark:border-danger-500 dark:text-danger-500 dark:hover:text-danger-400 dark:hover:border-danger-400',
                'danger-ghost' => 'border-transparent text-danger-600 hover:bg-danger-100 hover:text-danger-800 focus:bg-danger-100 focus:text-danger-800 dark:text-danger-500 dark:hover:bg-danger-800/30 dark:hover:text-danger-400 dark:focus:bg-danger-800/30 dark:focus:text-danger-400',
            },
            match ($size) {
                'sm' => 'py-2 px-3',
                'md' => 'py-3 px-4',
                'lg' => 'p-4 sm:p-5'
            }
        ];

        return $buttonClasses;
    }
}
