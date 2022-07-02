<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;
class ManagePostController extends Controller
{
    public function index(){
        $posts= Post::all();
        return view('backend.posts.show')
        ->with('posts',$posts);
    }
    public function update_status($id){
        $post = DB::table('posts')
        ->where('id',$id)->first();
        // ->update(['status'=>1]);
        if($post->status == 0){
            DB::table('posts')
            ->where('id',$id)
            ->update(['status'=>1]);
        }else{
            DB::table('posts')
            ->where('id',$id)
            ->update(['status'=>0]);
        }

        // dd($post);
        return redirect('/admin');
    }
    public function delete($id){
        Post::where('id',$id)->delete();
        return redirect('/admin');
    }
}
