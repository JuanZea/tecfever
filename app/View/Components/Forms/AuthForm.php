<?php

namespace App\View\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AuthForm extends Component
{
    public $action;
    public $type;

    public function __construct(string $action, string $type)
    {
        $this->action = $action;
        $this->type = $type;
    }

    public function render(): View
    {
        return view('components.forms.auth-form');
    }
}
