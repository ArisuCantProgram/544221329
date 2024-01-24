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
        Schema::create('member_card', function (Blueprint $table) {
            $table->increments('uid');
            $table->string('name');
            $table->enum('occupation', ['teacher', 'student'] );
            $table->integer('limit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_card');
    }
};
