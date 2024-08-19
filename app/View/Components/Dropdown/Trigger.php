<?php

namespace App\View\Components\Dropdown;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\View\ComponentAttributeBag;

class Trigger extends Component
{
    public string $cole = "helo";
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public function props(array $attrs = []): ComponentAttributeBag
    {
        return (new ComponentAttributeBag())->merge([
            'aria-haspopup' => 'menu',
            'aria-expanded' => false,
            'x-ref' => 'trigger',
            'x-on:click' => 'toggle',
            ...$attrs,
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dropdown.trigger');
    }
}
