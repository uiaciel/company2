<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        //
    }


    public function show($slug)
    {
        $slug = Page::where('slug', $slug)->first();

        return view('page', [
            'page' => $slug
        ]);
    }
}
