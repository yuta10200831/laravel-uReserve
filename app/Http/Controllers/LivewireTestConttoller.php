<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivewireTestConttoller extends Controller
{
    public function register()
    {
        return view('livewire-test.register');
    }

    public function index()
    {
        return view('livewire-test.index');
    }
}