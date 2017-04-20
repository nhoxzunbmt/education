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
            ['name' => 'Hà Nội', 'parent_id' => 0, 'slug' => str_slug('Hà Nội'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Thành phố Hồ Chí Minh', 'parent_id' => 0, 'slug' => str_slug('Thành phố Hồ Chí Minh'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Hải Phòng', 'parent_id' => 0, 'slug' => str_slug('Hải Phòng'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Đà Nẵng', 'parent_id' => 0, 'slug' => str_slug('Đà Nẵng'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cần Thơ', 'parent_id' => 0, 'slug' => str_slug('Cần Thơ'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Ba Đình', 'parent_id' => 1, 'slug' => str_slug('Quận Ba Đình'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Hoàn Kiếm', 'parent_id' => 1, 'slug' => str_slug('Quận Hoàn Kiếm'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Hai Bà Trưng', 'parent_id' => 1, 'slug' => str_slug('Quận Hai Bà Trưng'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Đống Đa', 'parent_id' => 1, 'slug' => str_slug('Quận Đống Đa'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Tây Hồ', 'parent_id' => 1, 'slug' => str_slug('Quận Tây Hồ'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Cầu Giấy', 'parent_id' => 1, 'slug' => str_slug('Quận Cầu Giấy'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Thanh Xuân', 'parent_id' => 1, 'slug' => str_slug('Quận Thanh Xuân'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Hoàng Mai', 'parent_id' => 1, 'slug' => str_slug('Quận Hoàng Mai'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Long Biên', 'parent_id' => 1, 'slug' => str_slug('Quận Long Biên'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Nam Từ Liêm', 'parent_id' => 1, 'slug' => str_slug('Quận Nam Từ Liêm'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Bắc Từ Liêm', 'parent_id' => 1, 'slug' => str_slug('Quận Bắc Từ Liêm'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận 1', 'parent_id' => 2, 'slug' => str_slug('Quận 1'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận 2', 'parent_id' => 2, 'slug' => str_slug('Quận 2'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận 3', 'parent_id' => 2, 'slug' => str_slug('Quận 3'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận 4', 'parent_id' => 2, 'slug' => str_slug('Quận 4'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận 5', 'parent_id' => 2, 'slug' => str_slug('Quận 5'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận 6', 'parent_id' => 2, 'slug' => str_slug('Quận 6'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận 7', 'parent_id' => 2, 'slug' => str_slug('Quận 7'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận 8', 'parent_id' => 2, 'slug' => str_slug('Quận 8'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận 9', 'parent_id' => 2, 'slug' => str_slug('Quận 9'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận 11', 'parent_id' => 2, 'slug' => str_slug('Quận 11'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận 12', 'parent_id' => 2, 'slug' => str_slug('Quận 12'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Thủ Đức', 'parent_id' => 2, 'slug' => str_slug('Quận Thủ Đức'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Gò Vấp', 'parent_id' => 2, 'slug' => str_slug('Quận Gò Vấp'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Bình Thạnh', 'parent_id' => 2, 'slug' => str_slug('Quận Bình Thạnh'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Tân Bình', 'parent_id' => 2, 'slug' => str_slug('Quận Tân Bình'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Tân Phú', 'parent_id' => 2, 'slug' => str_slug('Quận Tân Phú'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Phú Nhuận', 'parent_id' => 2, 'slug' => str_slug('Quận Phú Nhuận'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Bình Tân', 'parent_id' => 2, 'slug' => str_slug('Quận Bình Tân'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Hồng Bàng', 'parent_id' => 3, 'slug' => str_slug('Quận Hồng Bàng'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Lê Chân', 'parent_id' => 3, 'slug' => str_slug('Quận Lê Chân'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Ngô Quyền', 'parent_id' => 3, 'slug' => str_slug('Quận Ngô Quyền'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Kiến An', 'parent_id' => 3, 'slug' => str_slug('Quận Kiến An'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Hải An', 'parent_id' => 3, 'slug' => str_slug('Quận Hải An'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Đồ Sơn', 'parent_id' => 3, 'slug' => str_slug('Quận Đồ Sơn'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Dương Kinh', 'parent_id' => 3, 'slug' => str_slug('Quận Dương Kinh'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Thanh Khê', 'parent_id' => 4, 'slug' => str_slug('Quận Thanh Khê'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Liên Chiểu', 'parent_id' => 4, 'slug' => str_slug('Quận Liên Chiểu'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Hải Châu', 'parent_id' => 4, 'slug' => str_slug('Quận Hải Châu'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Ngũ Hành Sơn', 'parent_id' => 4, 'slug' => str_slug('Quận Ngũ Hành Sơn'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Sơn Trà', 'parent_id' => 4, 'slug' => str_slug('Quận Sơn Trà'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Huyện Hòa Vang', 'parent_id' => 4, 'slug' => str_slug('Huyện Hòa Vang'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Huyện đảo Hoàng Sa', 'parent_id' => 4, 'slug' => str_slug('Huyện đảo Hoàng Sa'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Ninh Kiều', 'parent_id' => 5, 'slug' => str_slug('Quận Ninh Kiều'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Bình Thuỷ', 'parent_id' => 5, 'slug' => str_slug('Quận Bình Thuỷ'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Cái Răng', 'parent_id' => 5, 'slug' => str_slug('Quận Cái Răng'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Quận Ô Môn', 'parent_id' => 5, 'slug' => str_slug('Quận Ô Môn'), 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
