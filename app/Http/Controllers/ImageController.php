<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;
use App\Models\Teg;
use App\Models\Image;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        
        $image = $request->file('photo_add');
        $path = $image->store('images');
        
        $image_url = Image::create([
            "user_id"=>auth()->user()->id,
            "url"=>$path,
        ]);

        $post = Post::create([
            "user_id"=>auth()->user()->id,
            "descr"=>$request->podp,
            "image_id"=>$image_url->id,
            "date_post"=>date("Y-m-d"),
        ]);
        
        foreach ($_POST as $key => $value) { 
            if (substr($key, 0, -1) == 'tags_') {
                $teg = Teg::create([
                    "post_id"=>$post->id,
                    "teg"=>$value,
                ]);
                
            } 
        } 

        return redirect::to('/profile/'.auth()->user()->id);
    }
}
