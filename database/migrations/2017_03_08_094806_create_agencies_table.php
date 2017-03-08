<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('city_id');
            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade');
            $table->boolean('type')->default(false); // La giao vien or phu huynh
            $table->string('code', 10);
            $table->string('name', 50); // Ho va Ten bat buoc
            $table->string('email', 50)->nullable(); // Email (Bat buoi voi giao vien)
            $table->string('phone', 15); // So may ban
            $table->string('mobile', 15); // So di dong
            $table->string('address', 255);
            $table->string('avatar', 20)->nullable(); // Anh dai dien (Giao vien moi co)
            $table->string('file_id', 20)->nullable(); // Anh the SV, bang cap...
            $table->string('days', 255)->nullable(); // Nhung ngay hoc
            $table->string('subjects', 255)->nullable(); // Nhung mon hoc
            $table->unsignedTinyInteger('sex'); // Gioi tinh
            $table->unsignedTinyInteger('level'); // Trinh do
            $table->unsignedTinyInteger('number'); // So buoi hoc
            $table->unsignedTinyInteger('time'); // Thoi gian hoc
            $table->string('salary', 15)->nullable(); // Muc luong
            $table->string('note')->nullable(); // Ghi chu
            $table->boolean('status')->default(false); // Trang thai
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
        Schema::table('agencies', function (Blueprint $table) {
            $table->dropForeign(['city_id']);
        });

        Schema::dropIfExists('agencies');
    }
}
