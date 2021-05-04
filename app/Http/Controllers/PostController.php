<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::get();

        return view('cms.porojo.index',compact('posts'));
    }

    public function porojo()
    {
        $posts = Post::where('post_category_id','1')->get();

       $category = "Porojo";

        return view('cms.post.index',compact('posts','category'));
    }

    public function createPorojo()
    {
        //
        return view('cms.porojo.create');
    }

    public function storePorojo(Request $request)
    {
        if (isset($request['image'])) {
            $request['image_url'] = Storage::putFile('public/porojo', $request->file('image'));
        }

        if ($request['status'] == 1){
            $posts = Post::where('post_category_id','1')->where('status',1)->get();
            foreach ($posts as $post){
                $post->status = 0;
                $post->save();
            }
        }

        $request['post_category_id'] = 1;
        $request['desc'] = $request['title'];
        Post::create($request->all());
        return redirect()->route('porojo');
    }

//    Domokaya

    public function domokaya()
    {
        $posts = Post::where('post_category_id','2')->get();
        $category = "Domokaya";

        return view('cms.post.index',compact('posts','category'));
    }

    public function createDomokaya()
    {
        //
        return view('cms.domokaya.create');
    }


    public function storeDomokaya(Request $request)
    {
        if (isset($request['image'])) {
            $request['image_url'] = Storage::putFile('public/domokaya', $request->file('image'), 'public');
        }

        if ($request['status'] == 1){
            $posts = Post::where('post_category_id','2')->where('status',1)->get();
            foreach ($posts as $post){
                $post->status = 0;
                $post->save();
            }
        }

        $request['post_category_id'] = 2;
        $request['desc'] = $request['title'];
        Post::create($request->all());
        return redirect()->route('domokaya');
    }

//    Porojo Live

    public function porojoLive()
    {
        $posts = Post::where('post_category_id','3')->get();
        $category = 'Porojo Live';

        return view('cms.post.index',compact('posts','category'));
    }

    public function createLive()
    {
        //
        return view('cms.domokaya.create');
    }


    public function storeLive(Request $request)
    {
        if (isset($request['image'])) {
            $request['image_url'] = Storage::putFile('public/domokaya', $request->file('image'), 'public');
        }

        if ($request['status'] == 1){
            $posts = Post::where('post_category_id','2')->where('status',1)->get();
            foreach ($posts as $post){
                $post->status = 0;
                $post->save();
            }
        }

        $request['post_category_id'] = 2;
        $request['desc'] = $request['title'];
        Post::create($request->all());
        return redirect()->route('domokaya');
    }

//    All Posts
    public function showPost($id)
    {
        $post = Post::findOrFail($id);
        return view('cms.post.show',compact('post'));
    }

    public function editPost($id)
    {
        $post = Post::findOrFail($id);
        return view('cms.post.edit',compact('post'));
    }

    public function create($category)
    {
        $category = PostCategory::where('name',$category)->first();
        return view('cms.post.create',compact('category'));
    }

    public function store(Request $request)
    {
        if (isset($request['image'])) {
            $request['image_url'] = Storage::putFile('public/posts', $request->file('image'), 'public');
        }

        if ($request['status'] == 1){
            $posts = Post::where('post_category_id',$request['post_category_id'])->where('status',1)->get();
            foreach ($posts as $post){
                $post->status = 0;
                $post->save();
            }
        }

        $request['desc'] = $request['title'];
        $post = Post::create($request->all());
        return redirect('home/post/show/'.$post->id);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        if ($request['status'] == 1){
            $posts = Post::where('post_category_id',$post->category->id)->where('status',1)->get();
            foreach ($posts as $pre_post){
                $pre_post->status = 0;
                $pre_post->save();
            }
        }
        $post->update($request->all());
        return redirect('/home/post/'.$post->id);
//        return view('cms.post.show',compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $category = $post->category->name;
        Post::destroy($id);
        return redirect()->route(strtolower($category));

    }


}
