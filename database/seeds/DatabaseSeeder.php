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
      //  schema::disableForeignKeyConstraints();
        $this->call('ClubTableSeeder');
        $this->call('OfficialTableSeeder');
        $this->call('ClassroomTableSeeder');
        $this->call('SubjectTableSeeder');
        $this->call('EducationTableSeeder');
    //    schema::enableForeignKeyConstraints();
    }
}
