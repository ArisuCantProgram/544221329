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
        Schema::create('member_log', function (Blueprint $table) {
            $table->integer('uid');
            $table->string('name');
            $table->enum('occupation', ['teacher', 'student'] );
            $table->integer('bookid');
            $table->string('category');
            $table->string('title');
            $table->integer('stock');
            $table->date('borrowdate');
            $table->date('returndate');
            $table->enum('status', ['returned-late', 'on-going', 'returned']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_log');
    }
};
