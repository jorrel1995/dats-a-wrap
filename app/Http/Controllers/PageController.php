<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Storage;
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
        // Get all files from the specific folder
        $gallery = Storage::disk('public')->files('/pages/Home/Gallery');
        $banner = Storage::disk('public')->files('/pages/Home/Banner')[0] ? Storage::disk('public')->files('/pages/Home/Banner')[0] : '';
        if(empty($files)) {
            $files = [];
        }
        
        return view('view')->with('slug', $slug)
            ->with('banner', $banner)
            ->with('gallery', $gallery)
            ->with('page', $page);
    }
}
