<?php

namespace App\View\Components\partials;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LoginInputs extends Component
{
    public function render(): View
    {
        return view('components.partials.login-inputs');
    }
}
