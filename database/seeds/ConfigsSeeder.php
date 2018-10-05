<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$array_header = [
						'banner-top'=>'1538557960.jpg',
						'logo'=>'1538464484.png',
    					];
    	$json_header = json_encode($array_header);
    	$array_footer = [
						'addr-1'=>'Số 6 Hoa Hồng, Phường 2, Quận Phú Nhuận, Hồ Chí Minh.',
						'phone-1'=>'(028) 7300 2299',
						'addr-2'=>'Tầng 5 Tòa nhà LE, 11 ngõ 71 Láng Hạ, Quận Ba Đình, Hà Nội.',
						'phone-2'=>'(024) 7300 0878',
    					];
    	$json_footer = json_encode($array_footer);
    	$array_contact = [
						'contact-addr-1'=>'<li>Tp.Hồ Chí Minh</li><li>Số 6 Hoa Hồng, Phường 2, Quận Phú Nhuận, Hồ Chí Minh.</li><li>(028) 7300 2299</li>',
						'contact-addr-2'=>'<li>Hà Nội</li><li>Tầng 5 Tòa nhà LE, 11 ngõ 71 Láng Hạ, Quận Ba Đình, Hà Nội.</li><li>(024) 7300 0878</li>',
						'contact-company-name'=>'CÔNG TY TNHH KDATA',
						'contact-hotline'=>'Hotline: 090 230 2080',
						'contact-email'=>'Email: info@kdata.vn',
						'contact-content'=>'<div style="font-weight:bold">Chúng tôi cam kết hỗ trợ khách hàng qua các hình thức: điện thoại, chat, email, ticket.</div><div>Hãy liên hệ với bộ phận kỹ thuật để được hỗ trợ. ( 24/7)<br />Tổng đài hỗ trợ kỹ thuật : 1-900-6413.<br />Gửi support ticket: nhấn vào đây!<br />Email hỗ trợ kỹ thuật: support@kdata.vn</div>',
						'contact-map-content-1'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1933678551163!2d106.68947731418264!3d10.796497161776605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cef2c0d839%3A0x98f202f9a5a797d0!2zNiBIb2EgSOG7k25nLCBwaMaw4budbmcgMiwgUGjDuiBOaHXhuq1uLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1528363621925" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>',
						'contact-map-content-2'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3539059470904!2d105.81444391430797!3d21.01852079350509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab64c51640bf%3A0xe9d3910a2e1fd04a!2zTmfDtSA3MSwgVGjDoG5oIEPDtG5nLCBCYSDEkMOsbmgsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1528363668179" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>',
    					];
    	$json_contact = json_encode($array_contact);
        $array_seo = [
                        'title-trangchu'=>'Kdata-Trang chủ',
                        'title-lienhe'=>'Kdata-Liên hệ',
                        'seo-keywords'=>'key',
                        'seo-description'=>'des',
                        'seo-robots'=>'index, follow',
                        'seo-language'=>'vietnamese',
                        'seo-copyright'=>'KDATA Việt Nam',
                        'seo-distribution'=>'Global',
                        'seo-author'=>'Kdata',
                        'seo-revisit-after'=>'1 DAYS',
                        'seo-rating'=>'GENERAL',
                        'seo-og-title'=>'',
                        'seo-og-description'=>'',
                        'seo-og-image'=>'',
                        'seo-og-url'=>'',
                        'seo-og-type'=>'',
                        'google-analytics'=>'',
                        'chat-script'=>'',
                    ];
        $json_seo = json_encode($array_seo);
        $array_fanpage = [
                        'iframe-fanpage'=>'<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkhoanhkhaccuocsong1101%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="215px;" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>'
                        ];
        $json_fanpage = json_encode($array_fanpage);
        $array = [
            ['key'=>'header','value'=>$json_header],
            ['key'=>'footer','value'=>$json_footer],
            ['key'=>'lienhe','value'=>$json_contact],
            ['key'=>'fanpage','value'=>$json_fanpage],
        ];
        DB::table('configs')->delete();
        DB::table('configs')->truncate();
        DB::table('configs')->insert($array);
    }
}
