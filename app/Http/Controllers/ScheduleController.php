<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedule = Schedule::orderBy('id', 'asc')->get();
        return view('schedule.index', compact('schedule'));
    }

public function edit(Schedule $schedule)
{
    {
        return view('schedule.edit', compact('schedule'));
    }
}

public function update(Request $request, Schedule $schedule)
{
    $request->validate([
        'open' => 'required',
        'close' => 'required'
    ]);
    $data = $request->all();
    $schedule->update($data);
    return redirect('/scheduletable');
}

}