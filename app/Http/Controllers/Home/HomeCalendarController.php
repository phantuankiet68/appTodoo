<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        $query = Event::where('user_id', Auth::id());
    
        if (!empty($search)) {
            $query->where('title', 'LIKE', "%{$search}%");
        }
    
        $events = $query->get();
    
        $totalEvents = $query->count();
    
        View::share('totalEvents', $totalEvents);
        
        return view('pages.calendar.index', compact('events'));
    }
}
