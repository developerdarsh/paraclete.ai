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
        Schema::table('images', function (Blueprint $table) {
            $table->string('vendor_engine')->nullable();
            $table->boolean('public')->default(false);
            $table->boolean('favorite')->default(false);
            $table->integer('views')->nullable();
            $table->integer('downloads')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('vendor_engine');
            $table->dropColumn('public');
            $table->dropColumn('favorite');
            $table->dropColumn('views');
            $table->dropColumn('downloads');
        });
    }
};
