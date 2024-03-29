<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aCategories = Category::all();

        return view('admin.categories.index', ['aCategories' => $aCategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'title' => 'required'
        ]);

        Category::create($aRequest->all());

        return redirect()->route('categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $iId
     * @return \Illuminate\Http\Response
     */
    public function edit($iId)
    {
        $aCategory = Category::find($iId);

        return view('admin.categories.edit', ['aCategory'=>$aCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $iId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $aRequest, $iId)
    {
        $this->validate($aRequest, [
            'title' => 'required'
        ]);

        $aCategory = Category::find($iId);
        $aCategory->update($aRequest->all());

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $iId
     * @return \Illuminate\Http\Response
     */
    public function destroy($iId)
    {
        Category::find($iId)->delete();

        return redirect()->route('categories.index');
    }

}
