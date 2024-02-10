<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\LinkCategory;
use Illuminate\Http\Request;

class LinkCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = LinkCategory::paginate(2);
        return view('admin.link_categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.link_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        LinkCategory::create($request->all());
        return redirect()->route('link_categories.index')->with('success', 'Категория добавлена');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = LinkCategory::find($id);
        return view('admin.link_categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required'
        ]);
        $category = LinkCategory::find($id);
        $category->update($request->all());
        return redirect()->route('link_categories.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = LinkCategory::find($id);
        if ($category->posts->count()) {
            return redirect()->route('link_categories.index')->with('error', 'Ошибка! У категории есть записи!');
        }
        $category->delete();
        return redirect()->route('link_categories.index')->with('success', 'Категория удалена');
    }
}
