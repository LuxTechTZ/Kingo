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

        return view('website.index',compact('porojo','domokaya'));
    }
}
