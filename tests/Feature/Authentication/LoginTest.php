<?php

namespace Tests\Feature\Authentication;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    private const URL = 'login';

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

        $response->assertViewIs('login');
    }
}
