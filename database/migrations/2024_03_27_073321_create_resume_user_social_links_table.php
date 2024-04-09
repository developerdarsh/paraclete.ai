<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_user_social_links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('resume_user_id')->nullable();
            $table->foreign('resume_user_id')->references('id')->on('resume_users')->onDelete('cascade');
            $table->string('label')->nullable();
            $table->string('link')->nullable();
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
        Schema::dropIfExists('resume_user_social_links');
    }
};
