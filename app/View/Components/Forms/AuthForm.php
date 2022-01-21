<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class AuthForm extends Component
{
    public $action;
    public $type;

    public function __construct($action, $type)
    {
        $this->action = $action;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.auth-form');
    }
}
