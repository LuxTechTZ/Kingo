<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostImage;
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


//    Domokaya

    public function domokaya()
    {
        $posts = Post::where('post_category_id','2')->get();
        $category = "Domokaya";

        return view('cms.post.index',compact('posts','category'));
    }

//    Porojo Live

    public function porojoLive()
    {
        $posts = Post::where('post_category_id','3')->get();
        $category = 'Porojo Live';

        return view('cms.post.index',compact('posts','category'));
    }

    //    Mjue Maarufu

    public function mjueMaarufu()
    {
        $posts = Post::where('post_category_id','4')->get();
        $category = 'Mjue Maarufu';

        return view('cms.post.index',compact('posts','category'));
    }

        //    Video

    public function video()
    {
        $posts = Post::where('post_category_id','5')->get();
        $category = 'Video';

        return view('cms.post.index',compact('posts','category'));
    }

        //    Riwaya

    public function riwaya()
    {
        $posts = Post::where('post_category_id','6')->get();
        $category = 'Riwaya';

        return view('cms.post.index',compact('posts','category'));
    }

        //    Kingo Katunu

    public function kingoKatuni()
    {
        $posts = Post::where('post_category_id','7')->get();
        $category = 'Kingo Katuni';

        return view('cms.post.index',compact('posts','category'));
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


        if ($request['status'] == 1){
            $posts = Post::where('post_category_id',$request['post_category_id'])->where('status',1)->get();
            foreach ($posts as $post){
                $post->status = 0;
                $post->save();
            }
        }

        $request['desc'] = $request['title'];
        if (isset($request['image'])) {
            $fmg = $request['image'];
            $first_image = $fmg[0];
            if (is_array($request['image'])){
                $request['image_url'] = Storage::putFile('public/posts', $first_image, 'public');
                $post = Post::create($request->all());
                foreach ($request['image'] as $img){
                    $data['post_id'] = $post->id;
                    $data['path'] =  Storage::putFile('public/posts', $img, 'public');
                    PostImage::create($data);
                }
            }else{
                $request['image_url'] = Storage::putFile('public/posts', $request->file('image'), 'public');
                $post = Post::create($request->all());
            }
        }
        return redirect('home/post/show/'.$post->id);
    }

    public function update(Request $request, $id)
    {
//        return $request['status'];
        $post = Post::findOrFail($id);
        if ($request['status'] == 1){
            $posts = Post::where('post_category_id',$post->category->id)->where('status',1)->where('id','!=',$post->id)->get();
            foreach ($posts as $pre_post){
                $pre_post->status = 0;
                $pre_post->save();
            }

        }

        if (isset($request['image'])) {
            $fmg = $request['image'];
            $first_image = end($fmg);
            if (is_array($request['image'])){
                $request['image_url'] = Storage::putFile('public/posts', $first_image, 'public');
                foreach ($request['image'] as $img){
                    $data['post_id'] = $post->id;
                    $data['path'] =  Storage::putFile('public/posts', $img, 'public');
                    PostImage::create($data);
                }
            }else{
                $request['image_url'] = Storage::putFile('public/posts', $request->file('image'), 'public');
            }
        }

        $post->update($request->all());
        return redirect('/home/post/show/'.$post->id);
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
        return redirect()->route(str_replace(' ','_',strtolower($category)));

    }


}
