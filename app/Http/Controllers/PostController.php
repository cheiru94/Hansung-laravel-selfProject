<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComunityRequest;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
    $posts = Post::orderBy('created_at', 'desc')->get();
    // $name = Post::find($posts->id)->user->name;
    return view('comunitys.index', compact('posts'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
    return view('comunitys.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreComunityRequest $request, string $id) // 유효성 검사 적용
  {
    Post::create($request->all());
    return view('/post');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
    $post = Post::find($id);
    $comments = $post->comments();

    // dd($comments);
    return view('comunitys.show', compact('post', 'comments'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
