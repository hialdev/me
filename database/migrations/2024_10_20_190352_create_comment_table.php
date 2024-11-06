<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama pengguna
            $table->string('email'); // Email pengguna
            $table->text('body'); // Isi komentar
            $table->unsignedBigInteger('commentable_id'); // ID dari model terkait (Article atau Project)
            $table->string('commentable_type'); // Nama model (Article atau Project)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
