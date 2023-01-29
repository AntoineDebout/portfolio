<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\About\Logic\AboutLogic;

class HomeController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('home/index', [
            'aboutData' => AboutLogic::getData(),
        ]);
    }
}
