<?php

use Illuminate\Database\Seeder;

class OfficialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('officials')->insert([
            'ssn' => '3883864246561',
            'name' => 'เฟอร์นิเจอร์ วัคค์สป็อต',
            'sex' => 'w',
            'address' => 'Mauris quis felis pretium posuere at sed magna',
            'teacherroom' => '301',
            'club' => '11111'
        ]);
        DB::table('officials')->insert([
            'ssn' => '1624436366416',
            'name' => 'ด็อกเตอร์โมจิ สโรช',
            'sex' => 'm',
            'address' => 'Donec pharetra tortor vitae',
            'teacherroom' => '191',
            'club' => '19191'
        ]);
    }
}
