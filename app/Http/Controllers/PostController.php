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


    public function create()
    {
        //
        return view('cms.porojo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function storePorojo(Request $request)
    {
        if (isset($request['image'])) {
            $request['image_url'] = $this->upload_image($request['image']);
        }

        $request['post_category_id'] = 1;
        Post::create($request->all());
        return redirect()->route('porojo');
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
