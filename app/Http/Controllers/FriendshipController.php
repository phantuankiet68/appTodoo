<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Friendship;
use Illuminate\Http\Request;
class FriendshipController extends Controller
{

    public function sendRequest(Request $request)
    {
        $friend = User::where('email', $request->email)->first();

        if (!$friend) {
            return redirect()->back()->with('error', 'Không tìm thấy người dùng với email này.');
        }

        if (Friendship::where('user_id', auth()->id())->where('friend_id', $friend->id)->exists()) {
            return redirect()->back()->with('error', 'Đã gửi yêu cầu kết bạn trước đó.');
        }

        Friendship::create([
            'user_id' => auth()->id(),
            'friend_id' => $friend->id,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('status', 'Yêu cầu kết bạn đã được gửi.');
    }

    public function acceptRequest($friendshipId)
    {
        $friendship = Friendship::findOrFail($friendshipId);

        if ($friendship->friend_id !== auth()->id()) {
            return redirect()->back()->with('error', 'Bạn không có quyền thực hiện thao tác này.');
        }

        $friendship->update(['status' => 'accepted']);

        return redirect()->back()->with('status', 'Yêu cầu kết bạn đã được chấp nhận.');
    }


    public function rejectRequest($friendshipId)
    {
        $friendship = Friendship::findOrFail($friendshipId);

        if ($friendship->friend_id !== auth()->id() && $friendship->user_id !== auth()->id()) {
            return redirect()->back()->with('error', 'Bạn không có quyền thực hiện thao tác này.');
        }

        $friendship->delete();

        return redirect()->back()->with('status', 'Yêu cầu kết bạn đã được hủy.');
    }


}
