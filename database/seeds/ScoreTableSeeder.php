<?php

use Illuminate\Database\Seeder;

class ScoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('score')->insert([
            'student_id' => '00001',
            'year' => '2017',
            'subject' => 'GG191',
            'totalscore' => '90',
            'behave_score' => '10'
        ]);
        DB::table('score')->insert([
            'student_id' => '00001',
            'year' => '2019',
            'subject' => 'GG192',
            'totalscore' => '70',
            'behave_score' => '9'
        ]);
    }
}
