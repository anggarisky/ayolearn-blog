<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tutorials = Tutorial::latest()->get();
        return view('cms/index', compact('tutorials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cms/new');
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
        //
        $data = $request->all();

        $thumbnailName = str_replace(' ', '-', $request->file('thumbnail')->getClientOriginalName());

        $url = $request->file('thumbnail')->storeAs(
            'assets/thumbnail_tips',
            $thumbnailName,
            'public'
        );

        $data['thumbnail'] = $url;
        $data['slug'] = Str::slug($request->title);

        Tutorial::create($data);

        return redirect()->route('admin.index.tutorial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function show(Tutorial $tutorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutorial $tutorial, $id)
    {
        //
        $details = Tutorial::where('id', $id)->firstOrFail();
        return view('cms.edit', compact('details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutorial $tutorial, $id)
    {
        //
        $data = $request->all();

        if ($request->file('thumbnail')) {
            $thumbnailName = str_replace(' ', '-', $request->file('thumbnail')->getClientOriginalName());

            $url = $request->file('thumbnail')->storeAs(
                'assets/thumbnail_tips',
                $thumbnailName,
                'public'
            );

            $data['thumbnail'] = $url;
        }
        $data['slug'] = Str::slug($request->title);

        $details_art = Tutorial::findOrFail($id);
        $details_art->update($data);

        return redirect()->route('admin.index.tutorial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutorial  $tutorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutorial $tutorial, Request $request, $id)
    {
        //
        $tutorial = Tutorial::findOrFail($id);
        $tutorial->delete();

        return redirect()->route('admin.index.tutorial');
    }
}