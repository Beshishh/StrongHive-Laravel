<?php

namespace Tests\Unit;

use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class NewsTest extends TestCase
{
    use WithFaker;

    public function testCreateNews()
    {
        $this->withoutExceptionHandling();

        // Генерация фейковых данных для создания новости
        $title = $this->faker->sentence;
        $description = $this->faker->paragraph;
        $image = UploadedFile::fake()->image('news.jpg');

        $response = $this->get('/login');
        $response->assertStatus(200);

        // Отправка данных формы входа
        $response = $this->post('/login', [
            'email' => "admin@test.ee",
            'password' => "1234567890",
        ]);

        $response->assertRedirect('/dashboard');

        // Отправка запроса на создание новости
        $response = $this->post('/addnews', [
            'title' => $title,
            'description' => $description,
            'image' => $image,
        ]);

        // Проверка успешного редиректа после создания новости
        $response->assertRedirect('/newslist');

        // Проверка создания новости в базе данных
        $this->assertDatabaseHas('news', [
            'title' => $title,
            'description' => $description,
        ]);

    }

    public function testUpdateNews()
    {
        $this->withoutExceptionHandling();

        // Создание тестовой новости в базе данных
        $news = News::factory()->create();

        // Генерация фейковых данных для обновления новости
        $title = $this->faker->sentence;
        $description = $this->faker->paragraph;

        $response = $this->get('/login');
        $response->assertStatus(200);

        // Отправка данных формы входа
        $response = $this->post('/login', [
            'email' => "admin@test.ee",
            'password' => "1234567890",
        ]);

        $response->assertRedirect('/dashboard');

        // Отправка запроса на обновление новости
        $response = $this->post('editnews/' . $news->id, [
            'title' => $title,
            'description' => $description,
        ]);

        // Проверка успешного редиректа после обновления новости
        $response->assertRedirect('/newslist');

        // Обновление данных модели новости
        $news->refresh();

        // Проверка обновления данных новости в базе данных
        $this->assertEquals($title, $news->title);
        $this->assertEquals($description, $news->description);
    }

    public function testDeleteNews()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/login');
        $response->assertStatus(200);

        // Отправка данных формы входа
        $response = $this->post('/login', [
            'email' => "admin@test.ee",
            'password' => "1234567890",
        ]);

        $response->assertRedirect('/dashboard');

        $news = News::factory()->create();

        // Отправка запроса на удаление новости
        $response = $this->delete('newslist/' . $news->id);

        // Проверка успешного редиректа после удаления
        $response->assertRedirect('/newslist');

        // Проверка удаления новости из базы данных
        $this->assertDatabaseMissing('news', [
            'id' => $news->id,
        ]);
    }
}