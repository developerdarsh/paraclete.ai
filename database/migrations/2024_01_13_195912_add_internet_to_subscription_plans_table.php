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
            $table->boolean('internet_feature')->nullable()->default(1);
            $table->boolean('chat_image_feature')->nullable()->default(1);
            $table->boolean('chat_pdf_feature')->nullable()->default(1);
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
            $table->dropColumn('internet_feature');
            $table->dropColumn('chat_image_feature');
            $table->dropColumn('chat_pdf_feature');
        });
    }
};
