<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'id' => 'MA001',
            'name' => 'MATH101',
            'time' => '8.00-9.00 1 dec 2017',
            'year' => '2017',
            'sj_teacher' => '3883864246561'
        ]);
        DB::table('subjects')->insert([
            'id' => 'GG191',
            'name' => 'Geometric1',
            'time' => '11.00-12.00 4 dec 2017',
            'year' => '2017',
            'sj_teacher' => '1624436366416'
        ]);
    }
}
