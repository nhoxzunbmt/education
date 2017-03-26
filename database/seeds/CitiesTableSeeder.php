<?php

use Illuminate\Database\Seeder;
use App\Models\City;
use Carbon\Carbon;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('cities')->get()->count() > 0)
        {
            DB::statement("SET foreign_key_checks = 0");
            City::truncate();
            DB::statement("SET foreign_key_checks = 1");
        }

        DB::table('cities')->insert([
            ['name' => 'Ha noi', 'code' => 'HN', 'parent_id' => 0, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Ho Chi Minh', 'parent_id' => 0, 'code' => 'HCM', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Hoan Kien', 'code' => 'HK', 'parent_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Hai Ba Trung', 'code' => 'HBT', 'parent_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Dong Da', 'code' => 'DD', 'parent_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
            ['name' => 'Quan 1', 'code' => 'Q1', 'parent_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quan 2', 'code' => 'Q2', 'parent_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quan 3', 'code' => 'Q3', 'parent_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
