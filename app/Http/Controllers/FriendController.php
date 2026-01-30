<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Friend;

class FriendController extends Controller
{
    public function store($user_id)
    {
        // dd($user_id);
        $friend = Friend::create([
            'first_user_id' => auth()->user()->id,
            'second_user_id' => $user_id,
        ]);

        return back();
    }
    public function destroy(friend $friend_id)
    {
        $redirect_to_user = $friend_id->second_user_id;

        if($friend_id->first_user_id !== auth()->user()->id){
            $redirect_to_user = $friend_id->first_user_id;
        }

        $friend_id->delete(); 

        return Redirect::to('/profile/'.$redirect_to_user);
    }
    public function update(Friend $friend_id)
    {
        $data = [
            'conf' => 1,
        ];

        $redirect_to_user = $friend_id->first_user_id;

        if ($friend_id->first_user_id !== auth()->user()->id) {
            $friend_destroy = $friend_id->first_user_id;
        }

        $friend_id->update($data); 

        return Redirect::to('/profile/'.$redirect_to_user);
    }
}
