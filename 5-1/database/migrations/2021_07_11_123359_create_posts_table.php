<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable(); //つぶやいたユーザーのID
            $table->string('body',255)->nullable(); //つぶやき本文
            $table->timestamp('created_at')->nullable(); //作成日
            $table->timestamp('updated_at')->nullable(); //更新日
            $table->timestamp('deleted_at')->nullable(); //論理削除フラグ
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
