<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            [
            	'name' => 'red',
            	'hex_code' => '#f00',
            	'created_at' => date("Y-m-d H:i:s"),
            	'updated_at' => date("Y-m-d H:i:s")
        	],
        	[
            	'name' => 'blue',
            	'hex_code' => '#00f',
            	'created_at' => date("Y-m-d H:i:s"),
            	'updated_at' => date("Y-m-d H:i:s")
        	],
        	[
            	'name' => 'green',
            	'hex_code' => '#0f0',
            	'created_at' => date("Y-m-d H:i:s"),
            	'updated_at' => date("Y-m-d H:i:s")
        	],
        	[
            	'name' => 'sky blue',
            	'hex_code' => '#09f',
            	'created_at' => date("Y-m-d H:i:s"),
            	'updated_at' => date("Y-m-d H:i:s")
        	],
        ]);
    }
}
