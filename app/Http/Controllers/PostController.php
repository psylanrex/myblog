<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\PostTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('manage.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('manage.posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:posts,title',
            'body'  => 'required',
            'image' => 'mimes:jpg,jpeg,bmp,png'
        ]);
        $post = new Post();
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->published_at = $request->get('published_at');
        if (! $post->save()) {
            Session::flash('danger', 'Failed to create new post.');
            return redirect()->back();
        }
        // Generate slug
        $post->slug = $post->slug();
        $post->save();
        
        // Save tags
        $tags = json_decode($request->get('tags'));
        if (count($tags) > 0) {
            foreach ($tags as $i => $tag) {
                $post->tags()->attach($tag->id);
            }
        }
        
        // Save image if there is
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $post->getImageName() . '.' . $image->getClientOriginalExtension();
            $path = 'blog/' . $filename;
            $storage = Storage::disk('capital-direct-blog');
            $saved = $storage->put($path, file_get_contents($image), 'public');
            $post->image = $filename;
            $post->image_url = $storage->url($path);
        } 
        
        if (! $post->save()) {
            Session::flash('danger', 'Failed to save image to new post.');
        }
        
        Session::flash('success', 'Successfully created new post.');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('manage.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $tags = Tag::all();
        return view('manage.posts.edit', compact('post', 'tags'));
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
        $this->validate($request, [
            'title' => 'required|unique:posts,title,'.$id,
            'body'  => 'required'
        ]);
        $post = Post::findOrFail($id);
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        if ($post->isDirty() && ! $post->save()) {
            Session::flash('danger', 'Failed to update post.');
        }
        // Update slug
        $post->slug = $post->slug();
        $post->save();
        
        // Update tags
        $tags = json_decode($request->get('tags'));
        if (count($tags) > 0) {
            $post->tags()->detach();
            foreach ($tags as $i => $tag) {
                $post->tags()->attach($tag->id);
            }
        }
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newFilename = $post->getImageName() . '.' . $image->getClientOriginalExtension();
            $path = 'blog/' . $newFilename;
            $storage = Storage::disk('capital-direct-blog');
            $saved = $storage->put($path, file_get_contents($image), 'public');
            
            $oldFilename = $post->image;
            
            $post->image = $newFilename;
            $post->image_url = $storage->url($path);
            $post->save();
            
            $storage->delete('blog/' . $oldFilename);
        }
        Session::flash('success', 'Successfully updated post.');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        PostTag::where('post_id', $id)->delete();
        Session::flash('success', 'Successfully deleted selected post.');
        return redirect()->route('posts.index');
    }
}
