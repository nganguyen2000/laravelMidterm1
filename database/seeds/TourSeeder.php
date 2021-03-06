<?php

use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $i=0;
        for($i== 0; $i<10; $i++) {
            DB::table('tours')->insert([
               'name' => $faker->sentence,
                'image' => 'https://travel.com.vn/images/destination/Large/tf_160129_dc_150910_HoiAn.jpg',
                'typetour' =>'Tu Ho Chi Minh',
                'Schedule' =>'4 ngay 3 dem',
                'depart'=>'12/5/2020',
                'number'=>'9',
                'price'=>9000000,

            ]);
        }
    }
}
