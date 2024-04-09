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
        Schema::table('subscription_plans', function (Blueprint $table) {
            $table->boolean('chat_web_feature')->nullable()->default(1);
            $table->boolean('chat_csv_feature')->nullable()->default(1);
            $table->integer('chat_csv_file_size')->nullable()->default(10);
            $table->integer('chat_pdf_file_size')->nullable()->default(10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscription_plans', function (Blueprint $table) {
            $table->dropColumn('chat_web_feature');
            $table->dropColumn('chat_csv_feature');
            $table->dropColumn('chat_csv_file_size');
            $table->dropColumn('chat_pdf_file_size');
        });
    }
};
