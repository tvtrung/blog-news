<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_product = array(
          [
            'title'=>'Store 1',
            'price'=>'1.800.000 vnđ/GB/Tháng',
            'content'=>'<li>Dung lượng: 100GB - 1TB</li><li>SSL</li><li>AES256</li><li>Versioning</li>',
            'order'=>1,
            'status'=>1,
            'link'=>'#'
          ],
          [
            'title'=>'Store 1',
            'price'=>'1.800.000 vnđ/GB/Tháng',
            'content'=>'<li>Dung lượng: 100GB - 1TB</li><li>SSL</li><li>AES256</li><li>Versioning</li>',
            'order'=>1,
            'status'=>1,
            'link'=>'#'
          ],
          [
            'title'=>'Store 1',
            'price'=>'1.800.000 vnđ/GB/Tháng',
            'content'=>'<li>Dung lượng: 100GB - 1TB</li><li>SSL</li><li>AES256</li><li>Versioning</li>',
            'order'=>1,
            'status'=>1,
            'link'=>'#'
          ],
          [
            'title'=>'Store 1',
            'price'=>'1.800.000 vnđ/GB/Tháng',
            'content'=>'<li>Dung lượng: 100GB - 1TB</li><li>SSL</li><li>AES256</li><li>Versioning</li>',
            'order'=>1,
            'status'=>1,
            'link'=>'#'
          ],
        );
        DB::table('products')->delete();
        DB::table('products')->insert($array_product);
    }
}