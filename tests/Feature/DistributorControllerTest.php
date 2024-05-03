<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class DistributorControllerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /** @test */
    public function it_can_list_distributors()
    {

        $response = $this->get('/api/distributors');

        $response->assertStatus(200);
    }

    /** @test */
    /*public function it_can_show_a_single_user()
    {
        $response = $this->get('/api/distributors/1');

        $response->assertStatus(200);
    }*/

    /** @test */
    /*public function it_can_create_a_user()
    {
        $userData = [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
        ];

        $response = $this->post('/users', $userData);

        $response->assertStatus(201);
        $this->assertDatabaseHas('users', $userData);
    }*/

    /** @test */
    /*public function it_can_update_a_user()
    {
        $user = DB::table('users')->insertGetId([
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
        ]);
        $updatedUserData = [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
        ];

        $response = $this->put("/users/$user", $updatedUserData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('users', $updatedUserData);
    }*/

    /** @test */
    /*public function it_can_delete_a_user()
    {
        $user = DB::table('users')->insertGetId([
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
        ]);

        $response = $this->delete("/users/$user");

        $response->assertStatus(204);
        $this->assertDatabaseMissing('users', ['id' => $user]);
    }*/
}
