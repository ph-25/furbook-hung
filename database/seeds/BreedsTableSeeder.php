<?php

use Illuminate\Database\Seeder;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$currentDateTime=date('Y-m-d H:i:s');
        DB::table('breeds')->insert([
        	[
        		'id'=>1,
        		'name'=>'Domestic',
        		'created_at'=>$currentDateTime,
        		'updated_at'=>$currentDateTime,
        	],
        	[
        		'id'=>2,
        		'name'=>'Persian',
        		'created_at'=>$currentDateTime,
        		'updated_at'=>$currentDateTime,
        	],
        	[
        		'id'=>3,
        		'name'=>'Siamese',
        		'created_at'=>$currentDateTime,
        		'updated_at'=>$currentDateTime,
        	],
        	[
        		'id'=>4,
        		'name'=>'Abyssinian',
        		'created_at'=>$currentDateTime,
        		'updated_at'=>$currentDateTime,
        	],

        	
        	
        ]);
    }
}
