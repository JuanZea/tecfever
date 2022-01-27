<?php

namespace Tests\Feature\Authentication;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    private const URL = 'login';

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

        $response->assertViewIs('auth.login');
    }

    public function testAUserCanLogin(): void
    {
        $email = ['email' => 'test@email.com'];
        User::factory($email)->create();

        $response = $this->post(route(self::URL), $email + ['password' => 'password']);

        $response->assertRedirect(route('home'));
    }
}
