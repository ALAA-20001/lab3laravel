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
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->unsignedBigInteger();
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->boolean('enabled')->default(false);
            $table->dateTime('published_at')->useCurrent();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->softDeletes();
            
            //Constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
