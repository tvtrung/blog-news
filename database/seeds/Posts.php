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
    	for ($i=1; $i <= 3; $i++) { 
    		$array[] = [
    			'title' => 'Bài viết cat 6-' . $i,
    			'slug' => 'bai-viet-cat-6-' . $i,
    			'description' => 'Mô tả ' . $i,
    			'content' => 'Nội dung ' . $i,
    			'photo' => '15386388925hyFb.jpg',
    			'status' => 1,
    			'view' => 0,
    			'seo_keyword' => 'Seo Keyword ' . $i,
    			'seo_description' => 'Seo Description ' . $i,
    			'seo_content' => 'Seo content ' . $i,
    			'cat_id' => 6
    		];
    	}
        for ($i=1; $i <= 3; $i++) { 
            $array[] = [
                'title' => 'Bài viết cat 2-' . $i,
                'slug' => 'bai-viet-cat-2-' . $i,
                'description' => 'Mô tả ' . $i,
                'content' => 'Nội dung ' . $i,
                'photo' => '15386388925hyFb.jpg',
                'status' => 1,
                'view' => 0,
                'seo_keyword' => 'Seo Keyword ' . $i,
                'seo_description' => 'Seo Description ' . $i,
                'seo_content' => 'Seo content ' . $i,
                'cat_id' => 2
            ];
        }
        for ($i=1; $i <= 2; $i++) { 
            $array[] = [
                'title' => 'Bài viết cat 3-' . $i,
                'slug' => 'bai-viet-cat-3-' . $i,
                'description' => 'Mô tả ' . $i,
                'content' => 'Nội dung ' . $i,
                'photo' => '15386388925hyFb.jpg',
                'status' => 1,
                'view' => 0,
                'seo_keyword' => 'Seo Keyword ' . $i,
                'seo_description' => 'Seo Description ' . $i,
                'seo_content' => 'Seo content ' . $i,
                'cat_id' => 3
            ];
        }
        for ($i=1; $i <= 5; $i++) { 
            $array[] = [
                'title' => 'Bài viết cat 4-' . $i,
                'slug' => 'bai-viet-cat-4-' . $i,
                'description' => 'Mô tả ' . $i,
                'content' => 'Nội dung ' . $i,
                'photo' => '15386388925hyFb.jpg',
                'status' => 1,
                'view' => 0,
                'seo_keyword' => 'Seo Keyword ' . $i,
                'seo_description' => 'Seo Description ' . $i,
                'seo_content' => 'Seo content ' . $i,
                'cat_id' => 4
            ];
        }
        for ($i=1; $i <= 10; $i++) { 
            $array[] = [
                'title' => 'Bài viết cat 5-' . $i,
                'slug' => 'bai-viet-cat-5-' . $i,
                'description' => 'Mô tả ' . $i,
                'content' => 'Nội dung ' . $i,
                'photo' => '15386388925hyFb.jpg',
                'status' => 1,
                'view' => 0,
                'seo_keyword' => 'Seo Keyword ' . $i,
                'seo_description' => 'Seo Description ' . $i,
                'seo_content' => 'Seo content ' . $i,
                'cat_id' => 5
            ];
        }
        DB::table('posts')->delete();
        DB::table('posts')->truncate();
        DB::table('posts')->insert($array);
    }
}
