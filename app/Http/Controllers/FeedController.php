<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedController extends Controller
{
    public function create()
    {
        $posts = DB::table('posts')
        ->select(
            'posts.*',
            'posts.id as true_id',
            'images.*',
            'users.*',
            DB::raw('(SELECT SUBSTRING_INDEX(GROUP_CONCAT(tegs.teg ORDER BY tegs.id SEPARATOR ", "), ",", 3)
                    FROM tegs 
                    WHERE tegs.post_id = posts.id) as tags'),
            DB::raw('(SELECT COUNT(*) 
                    FROM subscribers 
                    WHERE subscribers.first_user_id = posts.user_id) as subscriber_count'),
            DB::raw('(SELECT COUNT(*) 
                    FROM like_posts 
                    WHERE like_posts.post_id = posts.id) as like_count'),
            DB::raw('(SELECT COUNT(*) 
                    FROM post_coms 
                    WHERE post_coms.post_id = posts.id) as com_count')        
        )
        ->join('images', 'posts.image_id', '=', 'images.id')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->get();
        
        return view('lenta' , compact('posts'));
    }
}
