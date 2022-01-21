<?php

namespace Tests\Feature\Views;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    public function testWelcomeViewIsAccessible(): void
    {
        $this->get(route('home'))->assertOk();
    }

    public function testCanBeRendered(): void
    {
        $view = $this->view('home');
    }
}

