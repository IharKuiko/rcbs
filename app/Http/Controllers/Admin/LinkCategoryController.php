<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\LinkCategory;
use Illuminate\Http\Request;

class LinkCategoryController extends Controller
{
    /**
     * Display a listing of the resources.
     */
    public function index()
    {
        $categories = LinkCategory::paginate(20);
        return view('admin.link_categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resources.
     */
    public function create()
    {
        return view('admin.link_categories.create');
    }

    /**
     * Store a newly created resources in storage.
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
     * Display the specified resources.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resources.
     */
    public function edit(string $id)
    {
        $category = LinkCategory::find($id);
        return view('admin.link_categories.edit', compact('category'));
    }

    /**
     * Update the specified resources in storage.
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
     * Remove the specified resources from storage.
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
