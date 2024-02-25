<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Link;
use App\Models\LinkCategory;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LinkController extends Controller
{
    /**
     * Display a listing of the resources.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $links = Link::with('category')->orderBy('id', 'desc')->paginate(20);
        return view('admin.links.index', compact('links'));
    }

    /**
     * Show the form for creating a new resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = LinkCategory::pluck('title', 'id')->all();
        return view('admin.links.create', compact('categories'));
    }

    /**
     * Store a newly created resources in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


//        dd($request);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required|integer',
            'thumbnail' => 'image',
            'alt' => 'required',
            'link' => 'required',
            'is_published' => 'nullable|string',
        ]);

        $data = $request->all();
        $data['is_published'] = isset($data['is_published']) ? true : false;

        $data['thumbnail'] = Link::uploadImage($request);
        $link = Link::create($data);

        return redirect()->route('links.index')->with('success', 'Ссылка добавлена');
    }

    /**
     * Display the specified resources.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resources.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $link = Link::find($id);
        $categories = LinkCategory::pluck('title', 'id')->all();
//        dd($post->getImage());
        return view('admin.links.edit', compact('categories', 'link'));
    }

    /**
     * Update the specified resources in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required|integer',
            'thumbnail' => 'image',
            'alt' => 'required',
            'link' => 'required',
            'is_published' => 'nullable|string',
        ]);

        $link = Link::find($id);
        $data = $request->all();
        $data['is_published'] = isset($data['is_published']) ? true : false;

        if ($file = Link::uploadImage($request, $link->thumbnail)) {
            $data['thumbnail'] = $file;
        }

        $link->update($data);

        return redirect()->route('links.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = Link::find($id);
        Storage::delete($link->thumbnail);
        $link->delete();
        return redirect()->route('links.index')->with('success', 'Статья удалена');
    }
}
