<?php

namespace Tests\Feature\Authentication;

use App\Models\User;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    private const URL = 'register';

    public function testAGuestUserCanAccess(): void
    {
        $this->get(route(self::URL))->assertOk();
    }

    public function AUserCannotAccess(): void
    {
        $this->actingAs(User::factory()->create())->get('/login')->assertRedirect('/');
    }

    public function testViewIsRendered(): void
    {
        $response = $this->get(route(self::URL));

        $response->assertViewIs('auth.register');
    }
}
