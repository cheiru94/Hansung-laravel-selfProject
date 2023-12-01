<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('contact_forms', function (Blueprint $table) {
      $table->id();
      $table->string('title', 50); // 1. 문의 사항 
      $table->string('name', 20); // 2. 이름 
      $table->string('email', 255); // 3. 이메일
      $table->string('type', 20); // 4. 건물 종류
      $table->string('region', 20); // 5. 지역
      // $table->string('contact', 200); // 6. 문의 내용
      $table->text('contact'); // 6. 문의 내용
      // user와 1 : 다 관계
      $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('contact_forms');
  }
};
