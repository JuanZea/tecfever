<?php

namespace App\View\Components\partials;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class registerInputs extends Component
{
    public function render(): View
    {
        return view('components.partials.register-inputs');
    }
}
