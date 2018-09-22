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
        $array = array(
    		[
    		'parent' => '0',
    		'title' => 'Tiêu đề 1',
    		'slug' => 'tieu-de-1',
    		'status' => 1,
    		],
    		[
    		'parent' => '0',
    		'title' => 'Tiêu đề 2',
    		'slug' => 'tieu-de-2',
    		'status' => 1,
    		],
    		[
    		'parent' => '0',
    		'title' => 'Tiêu đề 3',
    		'slug' => 'tieu-de-3',
    		'status' => 1,
    		],
    		[
    		'parent' => '0',
    		'title' => 'Tiêu đề 4',
    		'slug' => 'tieu-de-4',
    		'status' => 1,
    		],
    		[
    		'parent' => '0',
    		'title' => 'Tiêu đề 5',
    		'slug' => 'tieu-de-5',
    		'status' => 1,
    		],
    		[
    		'parent' => '1',
    		'title' => 'Tiêu đề 1-1',
    		'slug' => 'tieu-de-1-1',
    		'status' => 1,
    		],
    		[
    		'parent' => '1',
    		'title' => 'Tiêu đề 1-2',
    		'slug' => 'tieu-de-1-2',
    		'status' => 1,
    		],
    		[
    		'parent' => '2',
    		'title' => 'Tiêu đề 2-1',
    		'slug' => 'tieu-de-1',
    		'status' => 1,
    		],
    		[
    		'parent' => '3',
    		'title' => 'Tiêu đề 3-1',
    		'slug' => 'tieu-de-1',
    		'status' => 1,
    		],
    		[
    		'parent' => '3',
    		'title' => 'Tiêu đề 3-2',
    		'slug' => 'tieu-de-1',
    		'status' => 1,
    		],
    	);
        DB::table('categories')->delete();
        DB::table('categories')->insert($array);
    }
}
