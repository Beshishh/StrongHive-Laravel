<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Auth;

class UserTest extends TestCase
{
    use WithFaker;

    public function testUserRegistration()
    {
        $this->withoutExceptionHandling();

        // Генерация фейковых данных для регистрации пользователя
        $name = $this->faker->name;
        $email = $this->faker->unique()->safeEmail;
        $password = $this->faker->password(8);
        $role = 'client'; // Выберите соответствующую роль для теста

        // Переход на страницу регистрации
        $response = $this->get('/register');
        $response->assertStatus(200);

        // Отправка данных формы регистрации
        $response = $this->post('/register', [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password,
            'role' => $role,
        ]);

        // Проверка создания пользователя в базе данных
        $this->assertDatabaseHas('users', [
            'name' => $name,
            'email' => $email,
            'role' => $role,
        ]);
    }

    public function testUserLogin()
    {
        $this->withoutExceptionHandling();

        // Генерация фейковых данных для регистрации пользователя
        $name = $this->faker->name;
        $email = $this->faker->unique()->safeEmail;
        $password = $this->faker->password(8);
        $role = 'client'; // Выберите соответствующую роль для теста

        // Переход на страницу регистрации
        $response = $this->get('/register');
        $response->assertStatus(200);

        // Отправка данных формы регистрации
        $response = $this->post('/register', [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password,
            'role' => $role,
        ]);

        // Проверка создания пользователя в базе данных
        $this->assertDatabaseHas('users', [
            'name' => $name,
            'email' => $email,
            'role' => $role,
        ]);

        // Переход на страницу входа
        $response = $this->get('/login');
        $response->assertStatus(200);

        // Отправка данных формы входа
        $response = $this->post('/login', [
            'email' => $email,
            'password' => $password,
        ]);
        // Проверка успешного редиректа после входа
        $response->assertRedirect('/'); 
        // Проверка, что пользователь успешно аутентифицирован
        $this->assertAuthenticatedAs(Auth::user());
    }

    public function testUserLogout()
    {
        $this->withoutExceptionHandling();

        // Генерация фейковых данных для регистрации пользователя
        $name = $this->faker->name;
        $email = $this->faker->unique()->safeEmail;
        $password = $this->faker->password(8);
        $role = 'client'; // Выберите соответствующую роль для теста

        // Переход на страницу регистрации
        $response = $this->get('/register');
        $response->assertStatus(200);

        // Отправка данных формы регистрации
        $response = $this->post('/register', [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password,
            'role' => $role,
        ]);

        // Проверка создания пользователя в базе данных
        $this->assertDatabaseHas('users', [
            'name' => $name,
            'email' => $email,
            'role' => $role,
        ]);

        // Переход на страницу входа
        $response = $this->get('/login');
        $response->assertStatus(200);

        // Отправка данных формы входа
        $response = $this->post('/login', [
            'email' => $email,
            'password' => $password,
        ]);
        // Проверка успешного редиректа после входа
        $response->assertRedirect('/'); 
        // Проверка, что пользователь успешно аутентифицирован
        $this->assertAuthenticatedAs(Auth::user());

        // Выход из аккаунта
        $response = $this->get('/logout');

        // Проверка успешного редиректа после выхода
        $response->assertRedirect('/');

        // Проверка, что пользователь разлогинен
        $this->assertGuest();
    }
}