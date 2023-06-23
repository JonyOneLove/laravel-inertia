<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::all();
        return Inertia::render('Links/Index', [
            'links' => $links,
        ]);
    }
}
