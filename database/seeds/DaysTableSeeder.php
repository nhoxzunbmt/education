<?php

use Illuminate\Database\Seeder;
use App\Models\Day;
use Carbon\Carbon;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('days')->get()->count() > 0)
        {
            DB::statement("SET foreign_key_checks = 0");
            Day::truncate();
            DB::statement("SET foreign_key_checks = 1");
        }

        DB::table('days')->insert([
            ['name' => 'Thứ 2', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Thứ 3', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Thứ 4', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Thứ 5', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Thứ 6', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Thứ 7', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Chủ nhật', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
