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
        for ($i=1; $i <= 10; $i++) { 
            $array[] = [
                'parent' => '0',
                'title' => 'Tiêu đề ' . $i,
                'slug' => 'tieu-de-' . $i,
                'status' => 1,
            ];
        }
        DB::table('categories')->delete();
        DB::table('categories')->truncate();
        DB::table('categories')->insert($array);
    }
}
