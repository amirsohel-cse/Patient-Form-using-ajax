<?php

use Illuminate\Database\Seeder;

class DistricsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(\App\District::class,64)->create();

//        \App\District::create([
//            'dis_name'=> "Gazipur District",
//            'div_id'=> 1,
//            'dis_phone_extension' => 18781
//        ]);

//
//        \App\District::create([
//            'dis_name'=> "Narayanganj District",
//            'div_id'=> 1,
//            'dis_phone_extension' => 18781
//        ]);
//        \App\District::create([
//            'dis_name'=> "Tangail District",
//            'div_id'=> 1,
//            'dis_phone_extension' => 18781
//        ]);
//        \App\District::create([
//            'dis_name'=> "Tangail District",
//            'div_id'=> 2,
//            'dis_phone_extension' => 18781
//        ]);
//        \App\District::create([
//            'dis_name'=> "Tangail District",
//            'div_id'=> 2,
//            'dis_phone_extension' => 18781
//        ]);
//        \App\District::create([
//            'dis_name'=> "Tangail District",
//            'div_id'=> 2,
//            'dis_phone_extension' => 18781
//        ]);

    }
}
