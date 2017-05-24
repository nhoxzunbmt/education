<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->unsignedInteger('city_id');
            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade');
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->string('code', 10)->nullable(); // Ma lop hoc
            $table->string('grades', 255)->nullable(); // Lop 1,2, 3
            $table->string('days', 255)->nullable(); // So ngay hoc or ngay day (Thu 2...)
            $table->string('subjects', 255)->nullable(); // Mon hoc or mon day
            $table->unsignedTinyInteger('level')->nullable(); // Trinh do doi voi gia su
            $table->unsignedTinyInteger('number')->nullable(); // So buoi hoc
            $table->unsignedTinyInteger('time')->nullable(); // Thoi gian hoc day (sang or chieu)
            $table->unsignedTinyInteger('type');
            $table->unsignedInteger('view')->nullable(); // so luong click
            $table->string('salary', 15)->nullable(); // Muc luong mon muon
            $table->string('partner_note', 255)->nullable(); // Ghi chu
            $table->string('districts', 255)->nullable(); // Quan, huyen
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
        Schema::table('partners', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['city_id']);
        });

        Schema::dropIfExists('partners');
    }
}
