<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Friendship;
class V1MessageController extends Controller
{
    public function index()
    {
        $receivedFriendRequests = Friendship::with('user')
        ->where('friend_id', auth()->id())
        ->where('status', 'pending')
        ->get();

        $friends = auth()->user()->friends;

        return view('pages.message.index',compact('receivedFriendRequests','friends'));
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
