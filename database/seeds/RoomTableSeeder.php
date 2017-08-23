<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('room')->delete();
        
        \DB::table('room')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'IOT',
                'created_at' => '2017-08-23 16:58:42',
                'updated_at' => '2017-08-23 16:58:47',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'AppGame',
                'created_at' => '2017-08-23 16:58:45',
                'updated_at' => '2017-08-23 16:58:47',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Robot',
                'created_at' => '2017-08-23 16:58:46',
                'updated_at' => '2017-08-23 16:58:48',
            ),
        ));
        
        
    }
}