<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['parent'=>0,'array_parent'=>serialize(array(0)),'title'=>'Tin tức','slug'=>'tin-tuc','status'=>1,'order'=>1,'url'=>'tin-tuc'],
            ['parent'=>0,'array_parent'=>serialize(array(0)),'title'=>'Kiến thức','slug'=>'kien-thuc','status'=>1,'order'=>1,'url'=>'kien-thuc'],
            ['parent'=>0,'array_parent'=>serialize(array(0)),'title'=>'Khuyến mãi','slug'=>'khuyen-mai','status'=>1,'order'=>1,'url'=>'khuyen-mai'],
            ['parent'=>0,'array_parent'=>serialize(array(0)),'title'=>'High Tech','slug'=>'high-tech','status'=>1,'order'=>1,'url'=>'high-tech'],
            ['parent'=>0,'array_parent'=>serialize(array(0)),'title'=>'App Game','slug'=>'app-game','status'=>1,'order'=>1,'url'=>'app-game'],
            ['parent'=>0,'array_parent'=>serialize(array(0)),'title'=>'Tutorial','slug'=>'tutorial','status'=>1,'order'=>1,'url'=>'tutorial'],
            ['parent'=>0,'array_parent'=>serialize(array(0)),'title'=>'Khác','slug'=>'khac','status'=>1,'order'=>1,'url'=>'khac'],
        ];
        DB::table('categories')->delete();
        DB::table('categories')->truncate();
        DB::table('categories')->insert($array);
    }
}
