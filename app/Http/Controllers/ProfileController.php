<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProfileController extends Controller
{
    public function create( $user_id )
    {
        $user = User::findorfail($user_id);
        
        $images = DB::table('images')
            ->select('*',
                    DB::raw('(SELECT SUBSTRING_INDEX(GROUP_CONCAT(tegs.teg ORDER BY tegs.id SEPARATOR ", "), ",", 3)
                            FROM tegs 
                            WHERE tegs.post_id = posts.id) as tags'),
                    DB::raw('(SELECT COUNT(*) 
                            FROM like_posts 
                            WHERE like_posts.post_id = posts.id) as like_count'),
                    DB::raw('(SELECT COUNT(*) 
                            FROM post_coms 
                            WHERE post_coms.post_id = posts.id) as com_count')
                    )
            ->join('posts', 'posts.image_id', '=', 'images.id')       
            ->where('posts.user_id','=',$user_id)
            ->get();
        
        $image_count = DB::table('images')
            ->where('user_id', '=', $user_id)
            ->count();    

        $check_friend = DB::table('friends')
            ->where(function ($query) use($user_id){
                $query->where('second_user_id', '=', $user_id)
                    ->Where('first_user_id', '=', auth()->user()->id);
            })
            ->orwhere(function ($query) use($user_id){
                $query->where('first_user_id', '=', $user_id)
                    ->Where('second_user_id', '=', auth()->user()->id);
            })
            ->get();
        $check_friend = $check_friend->get(0);

        $subscriber = DB::table('subscribers')
            ->where('first_user_id','=',$user_id)
            ->count(); 

        $check_subscriber = DB::table('subscribers')
            ->where('first_user_id', $user_id)
            ->where('second_user_id', auth()->user()->id)
            ->count();    

        $check_like = DB::table('like_posts')
            ->select('*',
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
            ->where('like_posts.user_id','=',auth()->user()->id)
            ->join('posts', 'posts.id', '=', 'like_posts.post_id')
            ->join('images', 'posts.image_id', '=', 'images.id')
            ->get();

        return view('/profile', compact('user','images','check_friend', 'image_count','subscriber','check_subscriber', 'check_like'));
    }
    public function update(Request $request)
    {   
        if ($request->file('image') == null){
            $path = null;
        }else{
            $image = $request->file('image');
                $path = $image->store('user_avatar');
        }    
        $user = DB::table('users')
              ->where('id', auth()->user()->id)
              ->update([
                'nickname' => $request->nickname,
                'fio' => $request->fio,
                'email' => $request->email,
                'image' => $path
            ]);
        return redirect("/profile/" . auth()->user()->id);

    }
}
