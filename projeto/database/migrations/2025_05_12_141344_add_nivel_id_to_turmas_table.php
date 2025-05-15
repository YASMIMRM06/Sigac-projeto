<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('turmas', function (Blueprint $table) {
          
            $table->unsignedBigInteger('nivel_id')->nullable();

            $table->foreign('nivel_id')->references('id')->on('nivels')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('turmas', function (Blueprint $table) {
            $table->dropForeign(['nivel_id']);
            $table->dropColumn('nivel_id');
        });
    }
};
