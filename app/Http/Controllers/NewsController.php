<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'asc')->get();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'required',
    ]);

    $data = $request->all();
    $filename = $request->file('image')->getClientOriginalName();
    $data['image']= $filename;
    News::create($data);
    $file = $request->file('image');
    if($filename) {
        $file->move('../public/assets/img/blog/', $filename);
    }
    return redirect('/newslist');
}

public function edit(News $news)
{
    {
        return view('news.edit', compact('news'));
    }
}

public function update(Request $request, News $news)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required'
    ]);
    $data = $request->all();
    if($request->file('image')){
    $filename = $request->file('image')->getClientOriginalName();
    $data['image'] = $filename;
    $file = $request->file('image');
    if($filename){
        $file->move('../public/assets/img/blog/', $filename);
    }
}
    $news->update($data);
    return redirect('/newslist');
}

public function destroy(News $news)
{
    $news->delete();
    return redirect('/newslist');
}

}