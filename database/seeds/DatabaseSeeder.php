<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(DivisionsTableSeeder::class);
         $this->call(DistricsTableSeeder::class);
         $this->call(ThanaTableSeeder::class);
    }
}
