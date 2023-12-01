<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;

  protected $fillable = [
    'title',
    'name',
    'email',
    'contact',
    'user_id'
  ];


  // 1. user와 연동 
  public function users()
  {
    return $this->belongsTo(User::class);
  }

  // 2. comment와 연동
  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

  public function scopeSearch($query, $search)  // 첫 번째 인자 $query는 쿼리 빌더의 인스턴스, 두 번째 인자 $search는 사용자가 입력한 검색 키워드
  {
    // 🟢 검색어가 입력 되어있으면 실행 ( 초기 화면에는 실행되지 않음 )
    if ($search[1] !== null) {

      // 하나 이상의 연속된 공백 문자를 찾는 정규 표현식 
      $search_split2 = preg_split('/[\s]+/', $search[1]); // 한국어 공백 따개기

      //🟢 따개진 검색어 개수 많큼 반복 하면서 단어 확인
      foreach ($search_split2 as $value) {
        $query->where($search[0], 'like', '%' . $value . '%');
      }
    }

    return $query; // 생성된 쿼리 반환
  }
}
