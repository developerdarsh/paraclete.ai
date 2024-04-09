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
        Schema::table('users', function (Blueprint $table) {
            $table->string('personal_openai_key')->nullable();
            $table->string('personal_sd_key')->nullable();
            $table->boolean('enable_openai_api_usage')->default(false)->nullable();
            $table->boolean('enable_sd_api_usage')->default(false)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('personal_openai_key');
            $table->dropColumn('personal_sd_key');
            $table->dropColumn('enable_openai_api_usage');
            $table->dropColumn('enable_sd_api_usage');
        });
    }
};
