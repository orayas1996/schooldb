<?php

use Illuminate\Database\Seeder;

class ClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->insert([
            'id' => '11111',
            'name' => 'Math_is_MAGIC'
        ]);
        DB::table('clubs')->insert([
            'id' => '19191',
            'name' => 'sleepless in every day life'
        ]);
    }
}
