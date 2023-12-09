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
  public function index(Request $request)
  {
    //
    // dd();

    $topic = $request->topic; // 입력 받은 키워드 
    $search = $request->search; // 입력 받은 키워드 
    $query = Post::search([$topic, $search]); // Laravel은 자동으로 쿼리 빌더 인스턴스를 생성

    $posts = $query->select('id', 'name', 'title',  'created_at')
      ->orderByDesc('id')
      ->paginate(10);


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
      'name' =>  Auth::user()->name,
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
    $post = Post::find($id);
    return view('comunitys.post_edit', compact('post'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    // dd($request->all());
    // Log::info($request->all());
    $post = Post::find($id);

    $post->title = $request->title;
    $post->name =  Auth::user()->name;
    $post->email = $request->email;
    $post->contact = $request->contact;
    $post->user_id =  Auth::user()->id;

    $post->save();
    return to_route('posts.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    // dd('asdfads');
    $post = Post::find($id);
    $post->delete();
    return to_route('posts.index'); // 여기서 redirect로 하니 변경된 새로운 인스턴스르 자꾸 반환하더라 (변경해도 게시글이 새로 생성되었음)
  }
}
