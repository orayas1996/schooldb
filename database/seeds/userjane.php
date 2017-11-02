<?php

use Illuminate\Database\Seeder;

class userjane extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('jane')->insert([
            'janeid' => 1,
            'name' => 'oraya',
			'birth' => '23/07/1996',
			'email' => 'ritzjane@gmail.com',
        ]);

       
    }
}
