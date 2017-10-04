<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\PostTag;
use Illuminate\Support\Facades\Session;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('manage.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.tags.create');
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
            'tag_name'  => 'required|unique:tags,name' 
        ]);
        $tag = new Tag();
        $tag->name = $request->get('tag_name');
        if ( ! $tag->save()) {
            Session::flash('danger', 'Unable to create new tag.');
            return redirect()->back();
        }
        Session::flash('success', 'Successfully created a new tag.');
        return redirect()->route('tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::find($id);
        return view('manage.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('manage.tags.edit', compact('tag'));
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
            'tag_name'  => 'required|unique:tags,name,'.$id 
        ]);
        $tag = Tag::find($id);
        $tag->name = $request->get('tag_name');
        if ($tag->isDirty() && ! $tag->save()) {
            Session::flash('danger', 'Failed to update tag.');
            return redirect()->back();
        }
        Session::flash('success', 'Successfully updated selected tag.');
        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tag::destroy($id);
        PostTag::where('tag_id', $id)->delete();
        Session::flash('success', 'Successfully deleted selected tag.');
        return redirect()->route('tags.index');
    }
}
