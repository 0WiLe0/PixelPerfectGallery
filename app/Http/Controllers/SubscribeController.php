<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\DB;

class SubscribeController extends Controller
{
    public function store($user_id){
        $subscriber = Subscriber::create([
            'first_user_id' => $user_id,
            'second_user_id' => auth()->user()->id
        ]);
        
        return back();
    }
    public function destroy($user_id){
        $subscriber_del = DB::table('subscribers')
        ->where('first_user_id', $user_id)
        ->where('second_user_id', auth()->user()->id)
        ->delete();

        return back();
    }
}
