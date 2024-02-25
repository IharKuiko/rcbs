<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resources.
     */
    public function index()
    {
        $tags = Tag::paginate(20);
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resources.
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resources in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);
        Tag::create($request->all());
        return redirect()->route('tags.index')->with('success', 'Тег добавлен');
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
        $tag = Tag::find($id);
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resources in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required'
        ]);
        $tag = Tag::find($id);
        $tag->update($request->all());
        return redirect()->route('tags.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resources from storage.
     */
    public function destroy(string $id)
    {
        $tag = Tag::find($id);
        if ($tag->posts->count()) {
            return redirect()->route('tags.index')->with('error', 'Ошибка! У тега есть записи!');
        }
        $tag->delete();
        return redirect()->route('tags.index')->with('success', 'Тег удален');
    }
}
