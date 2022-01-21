<?php

namespace Tests\Feature\Views;

use Tests\TestCase;

class WelcomeTest extends TestCase
{
    public function testWelcomeViewIsAccessible(): void
    {
        $this->get('/')->assertOk();
    }

    public function testCanBeRendered(): void
    {
        $view = $this->view('welcome');

        $contents = (string)$this->view('welcome');

        $view->assertSee('Welcome to TecFever');
        $this->assertStringContainsString('bg-red-500', $contents);
    }
}
