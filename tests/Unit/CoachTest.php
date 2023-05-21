<?php

namespace Tests\Unit;

use App\Models\Coach;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class CoachTest extends TestCase
{
    use WithFaker;

    public function testCreateCoach()
    {
        Storage::fake('public');

        $firstname = $this->faker->firstName;
        $lastname = $this->faker->lastName;
        $description = $this->faker->paragraph;
        $image = UploadedFile::fake()->image('coach.jpg');

        $response = $this->get('/login');
        $response->assertStatus(200);

        // Отправка данных формы входа
        $response = $this->post('/login', [
            'email' => "admin@test.ee",
            'password' => "1234567890",
        ]);

        $response->assertRedirect('/dashboard');

        $response = $this->post('/addcoach', [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'description' => $description,
            'image' => $image,
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/coachlist');

        $this->assertDatabaseHas('coach', [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'description' => $description,
        ]);

    }

    public function testUpdateCoach()
    {
        $this->withoutExceptionHandling();

        $coach = Coach::factory()->create();

        $firstname = $this->faker->firstName;
        $lastname = $this->faker->lastName;
        $description = $this->faker->paragraph;
        $image = UploadedFile::fake()->image('coach.jpg');

        $response = $this->get('/login');
        $response->assertStatus(200);

        // Отправка данных формы входа
        $response = $this->post('/login', [
            'email' => "admin@test.ee",
            'password' => "1234567890",
        ]);

        $response->assertRedirect('/dashboard');

        $response = $this->post('editcoach/' . $coach->id, [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'description' => $description,
        ]);

        $response->assertRedirect('/coachlist');

        $coach->refresh();

        $this->assertEquals($firstname, $coach->firstname);
        $this->assertEquals($lastname, $coach->lastname);
        $this->assertEquals($description, $coach->description);

    }

    public function testDeleteCoach()
    {
        $coach = Coach::factory()->create();

        $response = $this->get('/login');
        $response->assertStatus(200);

        $response = $this->post('/login', [
            'email' => "admin@test.ee",
            'password' => "1234567890",
        ]);

        $response = $this->delete('coachlist/' . $coach->id);

        $response->assertStatus(302);
        $response->assertRedirect('/coachlist');

        $this->assertDatabaseMissing('coach', [
            'id' => $coach->id,
        ]);
    }
}