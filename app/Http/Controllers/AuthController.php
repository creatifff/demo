<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\CreateUserRequest;
use App\Http\Requests\Auth\LoginUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function createUser(CreateUserRequest $request): RedirectResponse
    {
        // Данные валидируются
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']); // пароль хэшируется

        $user = User::query()->create($validated); // юзер создается
        auth()->login($user); // сразу авторизация

        return redirect()->route('page.index');
    }

    public function logoutUser(): RedirectResponse
    {
        auth()->logout(); // выходим
        session()->invalidate(); // инвалид
        session()->regenerate(); // регенерат
        return redirect()->route('page.index');
    }

    public function loginUser(LoginUserRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if(auth()->attempt($validated)) {
            return redirect()->route('page.index');
        }
        return back()->withErrors(['invalid' => 'Неверный логин или пароль']);

    }
}
