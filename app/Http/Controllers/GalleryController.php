<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = News::orderBy('id', 'asc')->get();
        return view('gallery.index', compact('gallery'));
    }

    public function show(Gallery $gallery)
    {  
        return view('gallery.detail', compact('gallery'));
    }
    
    
    public function search(Gallery $gallery)
    {  
        if (request('search')) {
            $gallery = Gallery::where('name', 'like', '%' . request('search') . '%')->get();
        } else {
            $gallery = Gallery::all();
        }
    
        return view('gallery.index', compact('gallery'));
    }


    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'image' => 'required',
    ]);

    $data = $request->all();
    $filename = $request->file('image')->getClientOriginalName();
    $data['image']= $filename;
    Gallery::create($data);
    $file = $request->file('image');
    if($filename) {
        $file->move('../public/assets/img/gallery/', $filename);
    }
    return redirect('/gallerylist');
}

public function edit(Gallery $gallery)
{
    {
        return view('gallery.edit', compact('gallery'));
    }
}

public function update(Request $request, Gallery $gallery)
{
    $request->validate([
        'name' => 'required',
    ]);
    $data = $request->all();
    if($request->file('image')){
    $filename = $request->file('image')->getClientOriginalName();
    $data['image'] = $filename;
    $file = $request->file('image');
    if($filename){
        $file->move('../public/assets/img/gallery/', $filename);
    }
}
    $news->update($data);
    return redirect('/gallerylist');
}

public function destroy(Gallery $gallery)
{
    $gallery->delete();
    return redirect('/gallerylist');
}

}