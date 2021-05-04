<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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

        return view('cms.porojo.index',compact('posts'));
    }

    public function createPorojo()
    {
        //
        return view('cms.porojo.create');
    }

        public function storePorojo(Request $request)
    {
        if (isset($request['image'])) {
            $request['image_url'] = $this->upload_image($request['image']);
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

    public function domokaya()
    {
        $posts = Post::where('post_category_id','2')->get();

        return view('cms.domokaya.index',compact('posts'));
    }

    public function createDomokaya()
    {
        //
        return view('cms.domokaya.create');
    }


    public function storeDomokaya(Request $request)
    {
        if (isset($request['image'])) {
            $request['image_url'] = $this->upload_image($request['image']);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function upload_image($file)
    {

        $file_type = $file->extension();

        $file_name  = microtime(true).".".$file_type;

        // $file_size = $file->getClientSize();

        $file->move('uploads/sliders/',$file_name);

        return $request['image_url'] = 'uploads/sliders/'.$file_name;

    }
}
