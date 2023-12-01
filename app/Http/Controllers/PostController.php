<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComunityRequest;
use Illuminate\Support\Facades\Auth;

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
  public function store(Request $request) // 유효성 검사 적용
  {



    Post::create([
      'title' => $request->title,
      'name' =>  Auth::user()->name, // 지금은 하드 코딩, 회원관리 기능 구현 될때 까지는 
      'email' => $request->email,
      'contact' => $request->contact,
      'user_id' => Auth::user()->id
    ]);

    return to_route('posts.index');
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
    // dd('asdfads');
    $post = Post::find($id);
    $post->delete();
    return to_route('posts.index');
  }
}
