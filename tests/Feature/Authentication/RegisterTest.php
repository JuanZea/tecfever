<?php

namespace Tests\Feature\Authentication;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    private const URL = 'register';

    public function setUp(): void
    {
        parent::setUp();

        $this->artisan('db:seed');

        $this->app->make(\Spatie\Permission\PermissionRegistrar::class)->registerPermissions();
    }

    public function testAGuestUserCanAccess(): void
    {
        $this->get(route(self::URL))->assertOk();
    }

    public function testAUserCannotAccess(): void
    {
        $this->actingAs(User::factory()->create())->get(route(self::URL))->assertRedirect(route('home'));
    }

    public function testViewIsRendered(): void
    {
        $response = $this->get(route(self::URL));

        $response->assertViewIs('auth.register');
    }

    public function testAGuestCanRegister(): void
    {
        $response = $this->post(
            route(self::URL),
            [
                'name' => 'TestName',
                'email' => 'Test@email.com',
                'password' => 'password',
                'password_confirmation' => 'password',
            ]
        );

        $response->assertRedirect(route('home'));
    }
}
