<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$array = [
    				['title'=>'title-1','photo'=>'1538793668.jpg','status'=>1,'type'=>'banner_sidebar_1','order'=>1],
    				['title'=>'title-2','photo'=>'1538793668.jpg','status'=>1,'type'=>'banner_sidebar_1','order'=>2],
    				['title'=>'title-3','photo'=>'1538793668.jpg','status'=>1,'type'=>'banner_sidebar_2','order'=>1],
    			];
        DB::table('images')->delete();
        DB::table('images')->truncate();
        DB::table('images')->insert($array);
    }
}
