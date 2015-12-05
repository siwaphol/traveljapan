<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(TravelJapan::class);

        Model::reguard();
    }
}

class TravelJapan extends Seeder {
    public function run()
    {
        DB::table('regions')->delete();
        DB::table('provinces')->delete();
        DB::table('districts')->delete();
        DB::table('areas')->delete();
        DB::table('attractions')->delete();


        $region = \App\Region::create(['name'=>'Hokkaido']);
        $province = \App\Province::create(['name'=>'Hokkaido', 'region_id'=>$region->id]);
        $district = \App\District::create(['name'=>'Sapporo', 'province_id'=>$province->id]);
        $area = \App\Area::create(['name'=>'none', 'district_id'=>$district->id]);
        \App\Attraction::create(['name'=>'Ramen Alley', 'real_name'=>'Hosuisusukino Station', 'data'=>'Ramen Alley หรือ Ramen Yokocho เป็นแหล่งรวบรวมร้านราเมนดังๆที่เปิดมาตั้งแต่ปี 1951 สองข้างทางเป็นร้านราเมนเล็กๆที่มีที่นั่งเพียง 10 กว่าที่ รสชาติของราเมนมีความหลากหลาย ซึ่งซัปโปโรเป็นต้นกำเนิดของมิโซะราเมน(Miso Ramen)นั่นเอง
นอกจากในตรอกนี้แล้วยังมีร้านราเมนอื่นๆที่เปิดอยู่ในตรอกเยื้องกัน โดยทำเป็นที่เดินผ่านลอดตึก เรียกว่า “ตรอกราเมนใหม่” (New Ramen Alley หรือ Shin Ramen Yokocho)', 'pic'=>'Ramen-Alley.jpg', 'area_id'=>$area->id]);


        $region = \App\Region::create(['name'=>'Tohoku']);

        $region = \App\Region::create(['name'=>'Kanto']);
    }
}
