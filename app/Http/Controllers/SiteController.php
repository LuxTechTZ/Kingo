<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index()
    {
        $porojo = Post::where('post_category_id','1')->where('status',1)->orderBy('id','desc')->first();
        $domokaya = Post::where('post_category_id','2')->where('status',1)->orderBy('id','desc')->first();
        $porojo_live = Post::where('post_category_id','3')->where('status',1)->orderBy('id','desc')->first();
        $mjue_maarufu = Post::where('post_category_id','4')->where('status',1)->orderBy('id','desc')->first();
        $video = Post::where('post_category_id','5')->where('status',1)->orderBy('id','desc')->first();
        $riwaya = Post::where('post_category_id','6')->where('status',1)->orderBy('id','desc')->first();
        $kingo_katuni = Post::where('post_category_id','7')->where('status',1)->orderBy('id','desc')->first();

        return view('website.index',compact('porojo','domokaya','porojo_live','mjue_maarufu','video','riwaya','kingo_katuni'));
    }

    public function category($category)
    {
        if ($category == 'porojo'){
            $porojo = Post::where('post_category_id','1')->orderBy('id','desc')->get();
        }elseif ($category == 'domokaya'){
            $porojo = Post::where('post_category_id','2')->orderBy('id','desc')->get();
        }elseif ($category == 'porojo_live'){
            $porojo = Post::where('post_category_id','3')->orderBy('id','desc')->get();
        }elseif ($category == 'mjue_maarufu'){
            $porojo = Post::where('post_category_id','4')->orderBy('id','desc')->get();
        }elseif ($category == 'video'){
            $porojo = Post::where('post_category_id','5')->orderBy('id','desc')->get();
        }elseif ($category == 'riwaya'){
            $porojo = Post::where('post_category_id','6')->orderBy('id','desc')->get();
        }elseif ($category == 'kingo_katuni'){
            $porojo = Post::where('post_category_id','7')->orderBy('id','desc')->get();
        }

        return view('website.porojo',compact('porojo'));
    }

    public function post($name,$id)
    {
        $post = Post::findOrFail($id);
        $post->views = $post->views + 1;
        $post->save();
        return view('website.post',compact('post'));
    }
}
