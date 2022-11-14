<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return Application::all();
    }
    public function store(Request $request)
    {

        $request -> validate([
            'title' => 'required',
            'text' => 'required',
            'user_id' => 'required',
            'division_id' => 'required',
            "category_id" => 'required',
            "date" => 'required'

        ]);
        return Application::create($request->All());
    }
    public function show(Application $id)
    {
        return $id;
    }
    public function update(Application $post, Request $request)
    {
        $post->update($request->all());
        $request -> validate([
            'title' => 'required',
            'text' => 'required',
            'user_id' => 'required',
            'division_id' => 'required',
            "category_id" => 'required',
            "date" => 'required'

        ]);
        return $post;
    }
    public function destroy(Application $post)
    {
        $post->delete();
        return [
            "deleted" => true
        ];
    }

}
