<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.  🟡 설정 완료
   */
  public function up(): void
  {
    Schema::create('comments', function (Blueprint $table) {
      $table->id();
      $table->text('comment');

      // user와 1 : 다 관계
      $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');

      // post와 1 : 다 관계 
      $table->foreignId('post_id')->constrained()->onDelete('cascade')->onUpdate('cascade');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('comments');
  }
};
