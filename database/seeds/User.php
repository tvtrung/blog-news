<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$array_user = array(
    		[
    		'name' => 'Trung',
    		'email' => 'trungtv@kdata.vn',
            'password' => Hash::make('1123456'),
    		'level' => 1
    		],
    		[
    		'name' => 'Trình',
    		'email' => 'trinhvv@kdata.vn',
    		'password' => Hash::make('1123456'),
            'level' => 1
    		],
    		[
    		'name' => 'Trung',
    		'email' => 'trunglt@kdata.vn',
    		'password' => Hash::make('1123456'),
            'level' => 1
    		],
    	);
        DB::table('users')->delete();
        DB::table('users')->insert($array_user);
    }
}
