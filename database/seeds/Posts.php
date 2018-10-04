<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Posts extends Seeder
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
    			'title' => 'Bài viết ' . $i,
    			'slug' => 'bai-viet-' . $i,
    			'description' => 'Mô tả ' . $i,
    			'content' => 'Nội dung ' . $i,
    			'photo' => '15386388925hyFb.jpg',
    			'status' => 1,
    			'view' => 12,
    			'seo_keyword' => 'Seo Keyword ' . $i,
    			'seo_description' => 'Seo Description ' . $i,
    			'seo_content' => 'Seo content ' . $i,
    			'cat_id' => 1
    		];
    	}
        DB::table('posts')->delete();
        DB::table('posts')->truncate();
        DB::table('posts')->insert($array);
    }
}
