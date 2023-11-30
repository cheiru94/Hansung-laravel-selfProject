<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //

  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   * POST |  posts/{post}/comments ..............posts.comments.store › CommentController@store
   */
  public function store(Request $request, string $post_id)
  {
    //
    // dd($request->comment);
    $comment = $request->comment;
    // dd($post_id);
    $name =  Auth::user()->id;
    Comment::create([
      'comment' => $comment,
      'user_id' =>  $name, // 지금은 하드 코딩, 회원관리 기능 구현 될때 까지는 
      'post_id' => $post_id
    ]);

    // return to_route('posts.show', $post_id);  ⭕️  to_route는 명명된 라우터를 인자로 사용해야 함
    // return redirect('posts.show', $post_id);  ❌  redirect는 url 경로를 인자로 입력
    return redirect('/posts/' .  $post_id); //to_route는 적용이 안됨.....
  }

  /**
   * Display the specified resource.
   */
  public function show(Comment $comment)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Comment $comment)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Comment $comment)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Comment $comment)
  {
    // 댓글 삭제 
    $comment->delete();

    // 리다이렉션 후 원래 페이지로 돌아가기( back 함수 )
    return redirect()->back();
  }
}
