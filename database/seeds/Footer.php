<?php

use Illuminate\Database\Seeder;

class Footer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_configs = array(
            "addr-1" => "Số 6 Hoa Hồng, Phường 2, Quận Phú Nhuận, Hồ Chí Minh.",
            "phone-1" => "(028) 7300 2299",
            "addr-2" => "Tầng 5 Tòa nhà LE, 11 ngõ 71 Láng Hạ, Quận Ba Đình, Hà Nội.",
            "phone-2" => "(024) 7300 0878"
        );
        DB::table('configs')->where('key','footer')->delete();
        DB::table('configs')->insert(['key'=>'footer','value'=>json_encode($array_configs)]);

        $array_images_thanhtoan = array(
            [
                'title' => 1,
                'photo' => 'pay-1.png',
                'status' => 1,
                'type' => 'thanhtoan',
                'order' => 1,
            ],
            [
                'title' => 2,
                'photo' => 'pay-2.png',
                'status' => 1,
                'type' => 'thanhtoan',
                'order' => 1,
            ],
            [
                'title' => 3,
                'photo' => 'pay-3.png',
                'status' => 1,
                'type' => 'thanhtoan',
                'order' => 1,
            ],
            [
                'title' => 4,
                'photo' => 'pay-4.png',
                'status' => 1,
                'type' => 'thanhtoan',
                'order' => 1,
            ],
            
        );
        DB::table('images')->where('type','thanhtoan')->delete();
        DB::table('images')->insert($array_images_thanhtoan);
    }
}
