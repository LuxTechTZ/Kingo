<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index()
    {
        $porojo =   Post::where('post_category_id','1')->where('status',1)->orderBy('id','desc')->first();
        $porojo2 =  Post::where('post_category_id','1')->orderBy('id','desc')->limit(2)->get();

        $domokaya =     Post::where('post_category_id','2')->where('status',1)->orderBy('id','desc')->first();
        $domokaya2 =    Post::where('post_category_id','2')->orderBy('id','desc')->limit(2)->get();

        $porojo_live =  Post::where('post_category_id','3')->where('status',1)->orderBy('id','desc')->first();
        $mjue_maarufu = Post::where('post_category_id','4')->where('status',1)->orderBy('id','desc')->first();
        $top_videos =    Post::where('post_category_id','5')->orderBy('id','desc')->limit(2)->get();
        $riwaya =   Post::where('post_category_id','6')->where('status',1)->orderBy('id','desc')->first();
        $kingo_katuni = Post::where('post_category_id','7')->where('status',1)->orderBy('id','desc')->limit(2)->get();
        $methali = Post::where('post_category_id','8')->orderBy('id','desc')->limit(2)->get();

        return view('website.index2',compact('porojo', 'porojo2',
            'domokaya','domokaya2','porojo_live','mjue_maarufu','top_videos','riwaya','kingo_katuni','methali'));
    }

    public function category($category)
    {
        if ($category == 'porojo'){
            $porojo = Post::where('post_category_id','1')->orderBy('post_date')->get();
        }elseif ($category == 'domokaya'){
            $porojo = Post::where('post_category_id','2')->orderBy('post_date')->get();
        }elseif ($category == 'porojo_live'){
            $porojo = Post::where('post_category_id','3')->orderBy('post_date')->get();
        }elseif ($category == 'mjue_maarufu'){
            $porojo = Post::where('post_category_id','4')->orderBy('post_date')->get();
        }elseif ($category == 'video'){
            $porojo = Post::where('post_category_id','5')->orderBy('post_date')->get();
        }elseif ($category == 'riwaya'){
            $porojo = Post::where('post_category_id','6')->orderBy('post_date')->get();
        }elseif ($category == 'kingo_katuni'){
            $porojo = Post::where('post_category_id','7')->orderBy('post_date')->get();
        }elseif ($category == 'methali'){
            $porojo = Post::where('post_category_id','8')->orderBy('post_date')->get();
        }

        return view('website.porojo',compact('porojo','category'));
    }

    public function post($name,$id)
    {
        $post = Post::findOrFail($id);
        $post->views = $post->views + 1;
        $post->save();
        return view('website.post',compact('post'));
    }

    public function singlePost($id,$name)
    {
        $post = Post::findOrFail($id);
        $post->views = $post->views + 1;
        $post->save();
        return view('website.post',compact('post'));
    }
}
