<?php

namespace Tests\Unit;

use App\Models\Gallery;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class GalleryTest extends TestCase
{
    use WithFaker;

    public function testCreateGallery()
    {
        Storage::fake('public');

        $name = "test";
        $image = UploadedFile::fake()->image('gallery.jpg');

        $response = $this->get('/login');
        $response->assertStatus(200);

        // Отправка данных формы входа
        $response = $this->post('/login', [
            'email' => "admin@test.ee",
            'password' => "1234567890",
        ]);

        $response->assertRedirect('/dashboard');

        $response = $this->post('/addgallery', [
            'name' => $name,
            'image' => $image,
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/gallerylist');

        $this->assertDatabaseHas('gallery', [
            'name' => $name,
        ]);
    }

    public function testUpdateGallery(){
        $this->withoutExceptionHandling();

        $gallery = Gallery::factory()->create();

        $name = $this->faker->sentence;
        $description = $this->faker->paragraph;

        
        $response = $this->get('/login');
        $response->assertStatus(200);

        // Отправка данных формы входа
        $response = $this->post('/login', [
            'email' => "admin@test.ee",
            'password' => "1234567890",
        ]);

        $response->assertRedirect('/dashboard');

        $response = $this->post('editgallery/' . $gallery->id, [
            'name' => $name,
        ]);

        // Проверка успешного редиректа после обновления новости
        $response->assertRedirect('/gallerylist');

        // Обновление данных модели новости
        $gallery->refresh();

        // Проверка обновления данных новости в базе данных
        $this->assertEquals($name, $gallery->name);
    }
    public function testDeleteGallery()
    {
        $gallery = Gallery::factory()->create();

        $response = $this->get('/login');
        $response->assertStatus(200);

        // Отправка данных формы входа
        $response = $this->post('/login', [
            'email' => "admin@test.ee",
            'password' => "1234567890",
        ]);

        $response = $this->delete('gallerylist/' . $gallery->id);

        $response->assertStatus(302);
        $response->assertRedirect('/gallerylist');

        $this->assertDatabaseMissing('gallery', [
            'id' => $gallery->id,
        ]);
    }
}