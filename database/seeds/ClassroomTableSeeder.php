<?php

use Illuminate\Database\Seeder;

class ClassroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->insert([
            'grade' => '1',
            'room' => '1',
            'class_teacher' => '3883864246561',
            'year' => '2017'
        ]);
        DB::table('classrooms')->insert([
            'grade' => '1',
            'room' => '2',
            'class_teacher' => '1624436366416',
            'year' => '2017'
        ]);
    }
}
