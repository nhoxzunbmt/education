<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('users')->get()->count() > 0)
        {
            DB::statement("SET foreign_key_checks = 0");
            User::truncate();
            DB::statement("SET foreign_key_checks = 1");
        }

        DB::table('users')->insert([
            ['role_id' => 1, 'name' => 'Super', 'email' => 'super@example.com', 'password' => bcrypt('admin'), 'confirmed' => true, 'mobile' => '09534583948', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}