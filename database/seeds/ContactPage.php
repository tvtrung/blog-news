<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactPage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_configs = array(
            "contact-addr-1" => "<li>HỒ CHÍ MINH</li><li>Số 6 Hoa Hồng, Phường 2, Quận Phú Nhuận, Hồ Chí Minh.</li><li>(028) 7300 2299</li>",
            "contact-addr-2" => "<li>HÀ NỘI</li><li>Tầng 5 Tòa nhà LE, 11 ngõ 71 Láng Hạ, Quận Ba Đình, Hà Nội.</li><li>(024) 7300 0878</li>",
            "contact-company-name" => "CÔNG TY TNHH KDATA",
            "contact-hotline" => "Hotline: 090 230 2080",
            "contact-email" => "Email: info@kdata.vn",
            "contact-content" => "<div style=\"font-weight: bold;\">Chúng tôi cam kết hỗ trợ khách hàng qua các hình thức: điện thoại, chat, email, ticket.</div><div>Hãy liên hệ với bộ phận kỹ thuật để được hỗ trợ. ( 24/7)<br>Tổng đài hỗ trợ kỹ thuật : 1-900-6413. <br>Gửi support ticket: nhấn vào đây!<br>Email hỗ trợ kỹ thuật: support@kdata.vn</div>",
            "contact-map-title-1" => "Văn phòng Hồ Chí Minh",
            "contact-map-title-2" => "Văn phòng Hà Nội",
            "contact-map-content-1" => "<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1933678551163!2d106.68947731418264!3d10.796497161776605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cef2c0d839%3A0x98f202f9a5a797d0!2zNiBIb2EgSOG7k25nLCBwaMaw4budbmcgMiwgUGjDuiBOaHXhuq1uLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1528363621925\" width=\"600\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>",
            "contact-map-content-2" => "<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3539059470904!2d105.81444391430797!3d21.01852079350509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab64c51640bf%3A0xe9d3910a2e1fd04a!2zTmfDtSA3MSwgVGjDoG5oIEPDtG5nLCBCYSDEkMOsbmgsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1528363668179\" width=\"600\" height=\"250\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>"
        );
        DB::table('configs')->where('key','lienhe')->delete();
        DB::table('configs')->insert(['key'=>'lienhe','value'=>json_encode($array_configs)]);
    }
}
