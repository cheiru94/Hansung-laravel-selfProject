<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;

  // 1. user와 연동 
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  // 2. comment와 연동
  public function comments()
  {
    return $this->hasMany(Comment::class);
  }
}
