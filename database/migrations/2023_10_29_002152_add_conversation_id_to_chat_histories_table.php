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
        Schema::table('chat_histories', function (Blueprint $table) {
            $table->string('conversation_id')->nullable();  
            $table->longText('response')->nullable();  
            $table->longText('prompt')->nullable();  
            $table->integer('words')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chat_histories', function (Blueprint $table) {
            $table->dropColumn('conversation_id');
            $table->dropColumn('words');
            $table->dropColumn('response');
            $table->dropColumn('prompt');
        });
    }
};
