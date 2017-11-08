<?php

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert([
            'grade' => '1',
            'room' => '1',
            'subject' =>'MA001',
            'day' => 1,
            'period' => 1,
            'place' => '311'
        ]);
        DB::table('education')->insert([
            'grade' => '1',
            'room' => '1',
            'subject' =>'MA001',
            'day' => 3,
            'period' => 1,
            'place' => '311'
        ]);
    }
}
