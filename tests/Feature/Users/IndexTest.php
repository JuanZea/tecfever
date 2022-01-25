<?php

namespace Tests\Feature\Users;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexTest extends TestCase
{
    use RefreshDatabase;

    private const URL = 'users.index';

    public function setUp(): void
    {
        parent::setUp();

        $this->artisan('db:seed');

        $this->app->make(\Spatie\Permission\PermissionRegistrar::class)->registerPermissions();
    }

    public function testAGuestUserCannotAccess(): void
    {
        $response = $this->get(route(self::URL));

        $response->assertRedirect(route('login'));
    }

    public function testAUserCannotAccess(): void
    {
        $response = $this->actingAs(User::factory()->create())->get(route(self::URL));

        $response->assertStatus(403);
    }

    public function testAnAdminCanAccess(): void
    {
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $response = $this->actingAs($admin)->get(route(self::URL));

        $response->assertOk();
    }

    public function testViewHasUsersCollection(): void
    {
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $response = $this->actingAs($admin)->get(route(self::URL));

        $response->assertViewHas('users');
    }
}
