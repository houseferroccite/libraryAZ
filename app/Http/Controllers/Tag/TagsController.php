<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::get();
        return view('tags.listTags',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.action.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RequestTag $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RequestTag $request)
    {
        $params = $request->all();
        Tag::create($params);
        return redirect()->route('tags');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('tags.action.form',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RequestTag $request
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(RequestTag $request, Tag $tag)
    {
        $params = $request->all();
        $tag->update($params);
        return redirect()->route('tags');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param RequestTag $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(RequestTag $request)
    {
        $tags = Tag::findOrFail($request->tag_id);
        $tags->delete();
        return redirect()->route('tags');
    }
}
