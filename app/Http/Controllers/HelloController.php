<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Hello;

class HelloController extends Controller
{
    public function show()
    {
        $hello = Hello::inRandomOrder()->first();
        return Inertia::render('Hello/Show', [
            'hello' => $hello,
        ]);
    }
}