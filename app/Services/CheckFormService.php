<?php

// 이렇게 함으로써 UserController 클래스는 
//다른 네임스페이스에서 정의된 UserController와 충돌하지 않는다
namespace App\Services; // 이 안의 클래스임을 나타낸다.

class CheckFormService
{
  // 4. type
  public static function checkType($data1){
    switch ($data1->type ) {
      case 'house':
        $type = '주택';
        break;
      case 'villa':
        $type = '빌라';
        break;
      case 'apartment':
        $type = '아파트';
        break;
      case 'shop':
        $type = '상가';
        break;
      case 'supervision':
        $type = '감리';
        break;
    }
    return $type;
  }

  // 5. region
  public static function checkRegion($data2){
    switch ($data2->region ) {
      case '남구':
        $region = '남구';
        break;
      case '중구':
        $region = '중구';
        break;
      case '북구':
        $region = '북구';
        break;
      case '동구':
        $region = '동구';
        break;
      case '울주군':
        $region = '울주군';
        break;
      case '그 외 지역':
        $region = '그 외 지역';
        break;
    }
    return $region;
  }
}