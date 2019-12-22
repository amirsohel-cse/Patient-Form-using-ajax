<?php

use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Division::create([
           'div_name'=> "Dhaka Division",
            'div_phone_extension' => 18781
        ]);

            \App\Division::create( [
        'div_name'=> "Chittagong Division",
            'div_phone_extension' => 2258
            ]);
                \App\Division::create([
        'div_name'=> "Barisal Division",
            'div_phone_extension' => 4181
        ]);
                    \App\Division::create([
            'div_name'=> "Rangpur Division",
            'div_phone_extension' => 1841
        ]);
                        \App\Division::create( [
            'div_name'=> "Sylhet Division",
            'div_phone_extension' => 1851
        ]
        );
    }
}
