<?php

use Illuminate\Database\Seeder;

class Header extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $array_configs = array(
            "hotline-1" => "HCM: (028) 7300 2299",
            "hotline-2" => "HN: (024) 7300 0878",
            "hotline-3" => "Hotline : 1-900-6413",
            "link-register" => "#register",
            "link-login" => "#login",
            "logo" => "logo.png"
        );
        DB::table('configs')->where('key','header')->delete();
        DB::table('configs')->insert(['key'=>'header','value'=>json_encode($array_configs)]);
    }
}
