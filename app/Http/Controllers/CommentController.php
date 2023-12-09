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
      'user_id' =>  $name,
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
  public function edit(Request $req, string $postId, string $commentId)
  {
    //
    $userComment = $req->userComment;
    $chechedComment = $req->chechedComment;
    // dd($chechedComment);
    $post = Post::find($postId);
    $comment = Comment::find($commentId);
    return view('comunitys.comment_edit', compact('comment', 'post', 'userComment', 'chechedComment'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $post_id, string $comment_id)
  {
    //
    // Comment
    // return redirect()->back();
    // return view('welcome');
    $comment = Comment::find($comment_id);
    $comment->comment = $request->comment;
    $comment->save();
    /* 라우팅 방법 3개  */
    // return to_route('posts.show', $post_id); // 넘겨줄 값이 1개이면 배열 안해도 된다, 변수명도 지정하지 않아도 된다.
    return to_route('posts.show', ['post' => $post_id]); // 2개 이상일 경우 배열, 물론 1개도 가능
    // return redirect('/posts/' . $post_id); // redirect는 url 주소를 반환한다!!!

  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $post_id, string $comment_id)
  {
    // 댓글 삭제 
    $comment = Comment::find($comment_id);
    $comment->delete();

    // 리다이렉션 후 원래 페이지로 돌아가기( back 함수 )
    return redirect()->back();
  }
}
