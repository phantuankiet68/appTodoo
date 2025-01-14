<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        return view('pages.calendar.index');
    }

    public function getEvents()
    {
        $userId = Auth::user()->id;

        $events = Event::where('user_id', $userId)->get();

        $formattedEvents = $events->map(function ($event) {
            return [
                'id' => $event->id,
                'title' => $event->title,
                'start' => $event->start,
                'end' => $event->end,
                'color' => $event->color,
            ];
        });

        return response()->json($formattedEvents);
    }

    public function store(Request $request)
    {
        $event = Event::create(array_merge($request->all(), ['color' => $request->color ?? '#000000']));
        return redirect()->route('calendar.index')->with('success', __('messages.success'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->update($request->all());
        return redirect()->route('calendar.index')->with('success', __('messages.success'));
    }

    public function destroy($id)
    {
        $event = Event::find($id);

        if ($event) {
            $event->delete();
            redirect()->route('calendar.index')->with('success', __('messages.success'));
        }
    
        return redirect()->route('calendar.index')->with('success', __('messages.success'));
    }
}
