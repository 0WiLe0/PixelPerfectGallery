<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like_post;
class LikeController extends Controller
{
    public function store($id)
    {   
        Like_post::create([
            'user_id'=>auth()->user()->id,
            'post_id'=>$id
        ]);

        return back();
    }
}
