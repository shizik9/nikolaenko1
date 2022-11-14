<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
        ]);
        return Category::create($request->All());
    }
    public function show(Category $id)
    {
        return $id;
    }
    public function update(Category $post, Request $request)
    {
        $post->update($request->all());
        $request -> validate([
            'name' => 'required',

        ]);
        return $post;
    }
    public function destroy(Category $post)
    {
        $post->delete();
        return [
            "deleted" => true
        ];
    }

}
