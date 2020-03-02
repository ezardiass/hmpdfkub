<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    

    public function AddEvent(Request $request)
    {
        $event = new Event;
        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->date = $request->input('date');
        $event->save();
    }

    public function DeleteEvent($id)
    {
        $event = Event::find($id);
        $event->delete();
    }

    public function DoneEvent($id)
    {
        $event = Event::find($id);
        $event->isDone = true;
    }
}
