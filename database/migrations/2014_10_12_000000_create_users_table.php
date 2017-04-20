<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('mobile', 12); // So dt di dong
            $table->string('phone', 15)->nullable(); // So dt ban
            $table->string('avatar', 150)->nullable(); // Anh the doi voi sv
            $table->string('file_id', 150)->nullable(); // The SV or Bang cap
            $table->string('note', 255)->nullable(); // Admin ghi nhung cau noi yeu thich
            $table->unsignedTinyInteger('gender')->default(0); // 1: nam, 2: nu
            $table->unsignedTinyInteger('skin')->default(0); // Admin skins
            $table->unsignedTinyInteger('branch')->default(0); // Chi nhanh
            $table->date('birthday')->nullable();
            $table->string('address', 255)->nullable();
            $table->boolean('confirmed')->default(true);
            $table->rememberToken();
            $table->timestamp('last_login')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->engine = 'InnoDB';
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
}
