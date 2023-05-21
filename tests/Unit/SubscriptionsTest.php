<?php

namespace Tests\Unit;

use App\Models\Subscriptions;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class SubscriptionsTest extends TestCase
{
    use WithFaker;

    public function testCreateSubscriptions()
    {
        Storage::fake('public');

        $name = "test";
        $description = $this->faker->paragraph;
        $price = $this->faker->numberBetween(1, 100);
        $days = $this->faker->numberBetween(1, 100);

        $response = $this->get('/login');
        $response->assertStatus(200);

        // Отправка данных формы входа
        $response = $this->post('/login', [
            'email' => "admin@test.ee",
            'password' => "1234567890",
        ]);

        $response->assertRedirect('/dashboard');

        $response = $this->post('/addsubcription', [
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'days' => $days,
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/subscriptionslist');

        $this->assertDatabaseHas('subscriptions', [
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'days' => $days,
        ]);

    }

    public function testUpdateSubscriptions()
    {
        $this->withoutExceptionHandling();


        $subscriptions = Subscriptions::factory()->create();

        $name = "test";
        $description = $this->faker->paragraph;
        $price = $this->faker->numberBetween(1, 100);
        $days = $this->faker->numberBetween(1, 100);

        $response = $this->get('/login');
        $response->assertStatus(200);

        // Отправка данных формы входа
        $response = $this->post('/login', [
            'email' => "admin@test.ee",
            'password' => "1234567890",
        ]);

        $response->assertRedirect('/dashboard');

        // Отправка запроса на обновление новости
        $response = $this->post('editsubscription/' . $subscriptions->id, [
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'days' => $days,
        ]);

        // Проверка успешного редиректа после обновления новости
        $response->assertRedirect('/subscriptionslist');

        // Обновление данных модели новости
        $subscriptions->refresh();

        // Проверка обновления данных новости в базе данных
        $this->assertEquals($name, $subscriptions->name);
        $this->assertEquals($description, $subscriptions->description);
        $this->assertEquals($price, $subscriptions->price);
        $this->assertEquals($days, $subscriptions->days);

    }

    public function testDeleteSubscription()
    {
        $subscriptions = Subscriptions::factory()->create();

        $response = $this->get('/login');
        $response->assertStatus(200);

        // Отправка данных формы входа
        $response = $this->post('/login', [
            'email' => "admin@test.ee",
            'password' => "1234567890",
        ]);

        $response = $this->delete('subscriptionslist/' . $subscriptions->id);

        $response->assertStatus(302);
        $response->assertRedirect('/subscriptionslist');

        $this->assertDatabaseMissing('subscriptions', [
            'id' => $subscriptions->id,
        ]);
    }
}