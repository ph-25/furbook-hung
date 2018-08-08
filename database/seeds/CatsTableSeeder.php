<?php

use Illuminate\Database\Seeder;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentDateTime=date('Y-m-d H:i:s');
        DB::table('cats')->insert([
        	[
        		'id'=>1,
        		'name'=>'Meo tam the',
        		'date_of_birth'=>date('Y-m-d'),
        		'breed_id'=>1,
        		'created_at'=>$currentDateTime,
        		'updated_at'=>$currentDateTime,
        	]

    	]);
    }    
}
