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
    {Schema::create('departments', function (Blueprint $table) {
        $table->id();
        $table->enum('name', ['Digital Marketing', 'Web and Social Media Management', 'Covering and Organizing Events', 'Motion Graphics', 'Visual Identity Design', 'Graphic Design', 'Programming and Web Development', 'Audio Production']);
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
        Schema::dropIfExists('departments');
    }
};
