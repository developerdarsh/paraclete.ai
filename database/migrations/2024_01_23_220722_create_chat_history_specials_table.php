<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ChatSpecial;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_history_specials', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreignIdFor(ChatSpecial::class)->onDelete('cascade');
            $table->string("role");
            $table->text("content");
            $table->string("model")->nullable();
            $table->integer('input_tokens')->default(0);
            $table->integer('output_tokens')->default(0);
            $table->integer('words')->default(0);
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
        Schema::dropIfExists('chat_history_specials');
    }
};
