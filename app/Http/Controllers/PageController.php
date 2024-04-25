<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * If the user is at the public root returns the index view
     * @return type
     */
    public function index()
    {
        return $this->view('/');
    }

    public function view(string $slug)
    {
        $page = Page::where('slug', $slug)->where('status', 'ACTIVE')->first();

        if (!$page) {
            abort(404);
        }

        return view('view')->with('slug', $slug)
            ->with('page', $page);
    }
}
