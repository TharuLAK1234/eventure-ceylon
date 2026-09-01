<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoleMiddlewareTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_access_admin_dashboard(): void
    {
        $admin = User::factory()->admin()->create();

        $response = $this->actingAs($admin)->get('/admin/dashboard');

        $response->assertStatus(200);
    }

    public function test_customer_cannot_access_admin_dashboard(): void
    {
        $customer = User::factory()->create();

        $response = $this->actingAs($customer)->get('/admin/dashboard');

        $response->assertStatus(403);
    }

    public function test_operations_staff_can_access_staff_dashboard(): void
    {
        $staff = User::factory()->operationsStaff()->create();

        $response = $this->actingAs($staff)->get('/staff/dashboard');

        $response->assertStatus(200);
    }

    public function test_customer_cannot_access_staff_dashboard(): void
    {
        $customer = User::factory()->create();

        $response = $this->actingAs($customer)->get('/staff/dashboard');

        $response->assertStatus(403);
    }

    public function test_guest_is_redirected_to_login_from_admin_dashboard(): void
    {
        $response = $this->get('/admin/dashboard');

        $response->assertRedirect('/login');
    }

    public function test_new_registrations_default_to_customer_role(): void
    {
        $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $user = User::where('email', 'test@example.com')->firstOrFail();

        $this->assertTrue($user->isCustomer());
    }
}
