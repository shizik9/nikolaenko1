<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        return Division::all();
    }
    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'address' => 'required',
        ]);
        return Division::create($request->All());

    }
    public function show(Division $id)
    {
        return $id;
    }
    public function update(Division $post, Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'address' => 'required',
        ]);
        $post->update($request->all());
        return $post;
    }
    public function destroy(Division $post)
    {
        $post->delete();
        return [
            "deleted" => true
        ];
    }

}
