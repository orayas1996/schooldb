<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'id' => '00001',
            'ssn' => '7868206013351',
            'name' => 'ภควัทคี ตาอุปสงค์',
            'sex' => 'm',
            'age' => 11,
            'address' => 'Etiam vel neque in odio',
            'behave_score' => '10'
            'grade' => '3',
            'room' => '1'
        ]);
        DB::table('students')->insert([
            'id' => '00002',
            'ssn' => '2535381715261',
            'name' => 'ตู้เซฟ ซูเอี๋ย',
            'sex' => 'm',
            'age' => 11,
            'address' => 'Aenean euismod lacus ut',
            'behave_score' => '10'
            'grade' => '1',
            'room' => '2'
        ]);
    }
}
