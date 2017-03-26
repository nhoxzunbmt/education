<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;
use Carbon\Carbon;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('subjects')->get()->count() > 0)
        {
            DB::statement("SET foreign_key_checks = 0");
            Subject::truncate();
            DB::statement("SET foreign_key_checks = 1");
        }

        DB::table('subjects')->insert([
            ['name' => 'Toán', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Lý', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Hóa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Văn', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tiếng Anh', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sinh', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sử', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Địa', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Đàn nhạc', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Vẽ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tin học', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tiếng việt', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Báo bài', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Luyện chữ đẹp', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Anh văn giao tiếp', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Kế toán', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tiếng Trung', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tiếng Nhật', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tiếng Hàn', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tiếng Nga', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tiếng Pháp', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tiếng Đức', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Học bơi', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Môn khác', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
