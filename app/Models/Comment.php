<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  use HasFactory;

  protected $fillable = ['comment', 'post_id', 'user_id'];

  // 1. user와 연동 
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  //2. post와 연동
  public function posts()
  {
    return $this->belongsTo(Post::class);
  }
}
