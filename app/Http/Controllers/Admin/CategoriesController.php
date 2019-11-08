<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $aCategories = Category::all();

        return view('admin.categories.index', ['aCategories' => $aCategories]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $aRequest)
    {
        $this->validate($aRequest, [
            'title' => 'required'
        ]);

        Category::create($aRequest->all());

        return redirect()->route('categories.index');
    }

    public function edit($iId)
    {
        $aCategory = Category::find($iId);

        return view('admin.categories.edit', ['aCategory'=>$aCategory]);
    }

    public function update(Request $aRequest, $iId)
    {
        $this->validate($aRequest, [
            'title' => 'required'
        ]);

        $aCategory = Category::find($iId);
        $aCategory->update($aRequest->all());

        return redirect()->route('categories.index');
    }

    public function destroy($iId)
    {
        Category::find($iId)->delete();

        return redirect()->route('categories.index');
    }

}
