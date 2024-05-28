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

        $contact_image = json_decode($page->contact_image);
        $contact_image = $contact_image[0]->download_link;

        if(!$contact_image){
            $contact_image = '';
        }


        $banner = json_decode($page->banner);
        $banner = $banner[0]->download_link;

        if(!$banner){
            $banner = '';
        }

        // Extract the file extension
        $bannerextension = strtolower(pathinfo($banner, PATHINFO_EXTENSION));
        if(!$bannerextension){
            $bannerextension = '';
        }

        return view('view')->with('slug', $slug)
            ->with('banner', $banner)
            ->with('bannerextension', $bannerextension)
            ->with('gallery', $gallery)
            ->with('page', $page);
    }
    
}
