<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aTags = Tag::all();
        return view('admin.tags.index', ['aTags'=>$aTags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $aRequest)
    {
        $this->validate($aRequest, [
            'title' =>  'required'
        ]);

        Tag::create($aRequest->all());
        return redirect()->route('tags.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $iId
     * @return \Illuminate\Http\Response
     */
    public function edit($iId)
    {
        $aTag = Tag::find($iId);
        return view('admin.tags.edit', ['aTag'=>$aTag]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $iId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $id, $iId)
    {
        $this->validate($id, [
            'title' =>  'required'
        ]);

        $aTag = Tag::find($iId);

        $aTag->update($id->all());

        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $iId
     * @return \Illuminate\Http\Response
     */
    public function destroy($iId)
    {
        Tag::find($iId)->delete();
        return redirect()->route('tags.index');
    }
}
