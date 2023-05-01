<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        $coach = Coach::orderBy('id', 'asc')->get();
        return view('coach.index', compact('coach'));
    }

    public function show(Coach $coach)
    {  
        return view('coach.detail', compact('coach'));
    }
    
    
    public function search(Coach $coach)
    {  
        if (request('search')) {
            $coach = Coach::where('firstname', 'like', '%' . request('search') . '%')->get();
        } else {
            $coach = Coach::all();
        }
    
        return view('coach.index', compact('coach'));
    }


    public function create()
    {
        return view('coach.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'description' => 'required',
        'image' => 'required',
    ]);

    $data = $request->all();
    $filename = $request->file('image')->getClientOriginalName();
    $data['image']= $filename;
    Coach::create($data);
    $file = $request->file('image');
    if($filename) {
        $file->move('../public/assets/img/coaches/', $filename);
    }
    return redirect('/coachlist');
}

public function edit(Coach $coach)
{
    {
        return view('coach.edit', compact('coach'));
    }
}

public function update(Request $request, Coach $coach)
{
    $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'description' => 'required',
    ]);
    $data = $request->all();
    if($request->file('image')){
    $filename = $request->file('image')->getClientOriginalName();
    $data['image'] = $filename;
    $file = $request->file('image');
    if($filename){
        $file->move('../public/assets/img/coaches/', $filename);
    }
}
    $coach->update($data);
    return redirect('/coachlist');
}

public function destroy(Coach $coach)
{
    $coach->delete();
    return redirect('/coachlist');
}

}