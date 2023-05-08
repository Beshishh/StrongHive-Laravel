<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Gallery;
use App\Models\Coach;
use App\Models\News;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function dashboard()
    {
        return view('dashboard');
    }

    public function IndexController()
    {
        $galleryLimit = Gallery::orderBy('id', 'asc')->take(5)->get();
        $coach = Coach::orderBy('id', 'asc')->get();
        return view('index', compact('galleryLimit'), compact('coach'));
    }

    public function galleryList()
    {
        $galleryList = Gallery::orderBy('id', 'asc')->get();
        return view('gallery', compact('galleryList'));
    }

    public function newsList()
    {
        $newsList = News::orderBy('id', 'asc')->get();
        $dayNumber = date('d');
        $monthNumber = date('m');
        return view('blog', compact('newsList'));
    }


}
