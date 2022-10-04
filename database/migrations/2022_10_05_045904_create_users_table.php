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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("name",50);
            $table->string("email",100);
            $table->string("pasword",50);
            $table->string("image",100);
            $table->string("twitter_pass",100);
            $table->string("github_pass",50);
            $table->text('objective');
            $table->text('introduction');
            $table->text('study_content');
            $table->string("audio",50);
            $table->string("time_schedule",50);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
