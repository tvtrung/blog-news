<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqsPage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_faq = array(
            'order'=>1,
            'name'=>'tvt',
            'email'=>'trungtv@kdata.vn',
            'website'=>'kdata.vn',
            'question'=>'This is Question',
            'content'=>'This is content',
            'status'=>1
        );
        DB::table('page_faq')->delete();
        DB::table('page_faq')->insert([$array_faq,$array_faq]);
    }
}
