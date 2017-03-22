<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('roles')->get()->count() > 0)
        {
            DB::statement("SET foreign_key_checks = 0");
            Role::truncate();
            DB::statement("SET foreign_key_checks = 1");
        }

        DB::table('roles')->insert([
            ['name' => 'Super', 'slug' => 'super', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Admin', 'slug' => 'admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Report', 'slug' => 'report', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Teacher', 'slug' => 'teacher', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Personal', 'slug' => 'personal', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Amazon', 'slug' => 'amazon', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
