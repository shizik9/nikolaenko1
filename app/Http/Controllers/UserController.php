<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        return User::create($request->All());

    }
    public function show(User $id)
    {
        return $id;
    }
    public function update(User $post, Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $post->update($request->all());
        return $post;
    }
    public function destroy(User $post)
    {
        $post->delete();
        return [
            "deleted" => true
        ];
    }

}
