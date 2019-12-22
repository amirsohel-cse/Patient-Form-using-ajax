<?php

use Illuminate\Database\Seeder;

class ThanaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Thana::class,500)->create();
    }
}
