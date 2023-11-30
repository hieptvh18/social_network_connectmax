<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('bio')->nullable()->comment('Introduce personal infomation');
            $table->string('username')->unique();
            $table->string('phone')->nullable();
            $table->string('avatar')->nullable()->default('https://pbs.twimg.com/media/EYVxlOSXsAExOpX.jpg')->comment('avatar image');
            $table->date('birthday')->nullable();
            $table->string('location')->nullable();
            $table->enum('gender',['MALE','FEMALE'])->default('MALE')->comment('gender');
            $table->enum('status',['PUBLIC','PRIVATE','CUSTOM'])->default('PUBLIC')->comment('profile status');
            // social link
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkedln_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
