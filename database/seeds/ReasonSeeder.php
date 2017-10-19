<?php

use Illuminate\Database\Seeder;

class ReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reasons')->insert(
            array(
                array('name' => 'Buying equipment'),
                array('name' => 'Hiring employees'),
                array('name' => 'Marketing'),
                array('name' => 'Remodeling or expansion'),
                array('name' => 'Working capital'),
                array('name' => 'Refinancing best'),
                array('name' => 'Purchasing inventory'),
                array('name' => 'Other')
            )
        );
    }
}
