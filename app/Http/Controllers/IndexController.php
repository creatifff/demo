<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
    /**
     * Страница "о нас"
     *
     * @return View|\Illuminate\Foundation\Application|Factory|Application
     */
    public function index(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('pages.index');
    }

    /**
     * Страница регистрации
     *
     * @return View|\Illuminate\Foundation\Application|Factory|Application
     */
    public function register(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('pages.auth.register');
    }

    /**
     * Страница авторизации
     *
     * @return View|\Illuminate\Foundation\Application|Factory|Application
     */
    public function login(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('pages.auth.login');
    }
}
