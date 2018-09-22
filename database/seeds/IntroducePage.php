<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntroducePage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_configs = array(
            'title'=> 'Với công nghệ mạnh mẽ Kdata đảm bảo việc dữ liệu người dùng luôn đạt 3 tiêu chí:',
            'stt1' => '01',
            "title-line-one-1" => "TÍNH KHẢ DỤNG CAO",
            "title-line-two-1" => "( High Availability )",
            "content-1" => "Đảm bảo độ sẵn sàng của thông tin, tức là thông tin có thể được truy xuất bởi những người được phép vào bất cứ khi nào họ muốn",

            'stt2' => '02',
            "title-line-one-2" => "TÍNH BẢO MẬT",
            "title-line-two-2" => "( Confidentiality )",
            "content-2" => "Đảm bảo độ sẵn sàng của thông tin, tức là thông tin có thể được truy xuất bởi những người được phép vào bất cứ khi nào họ muốn",

            'stt3' => '03',
            "title-line-one-3" => "TÍNH TOÀN VẸN",
            "title-line-two-3" => "( Integrity )",
            "content-3" => "Thông tin chỉ được phép xóa hoặc sửa bởi những đối tượng được phép và phải đảm bảo rằng thông tin vẫn còn chính xác khi được lưu trữ hay truyền đi.",

            "icon-1" => "gioithieu-icon-1.png",
            "icon-2" => "gioithieu-icon-2.png",
            "icon-3" => "gioithieu-icon-3.png"
        );
        DB::table('configs')->where('key','gioithieu')->delete();
        DB::table('configs')->insert(['key'=>'gioithieu','value'=>json_encode($array_configs)]);


        $array_images = array(
            [
                'title'=>'GIỚI THIỆU CHUNG VỀ CÔNG TY KDATA',
                'content'=>'<li>Ðược thành lập ngày 04/01/2012, sau hơn sáu năm hoạt động, KDATA đã xây dựng tên tuổi trên thị trường và tạo được sự tin tưởng trong lĩnh vực dịch vụ cho thuê máy chủ, chỗ đặt máy chủ, Cloud VPS và Hosting…</li><li>Với sự thấu hiểu sâu sắc những khó khăn của Khách hàng, cùng kinh nghiệm dày dặn về thị trường Việt Nam, KDATA là một người bạn đồng hành cùng đối tác viết nên câu chuyện thành công của họ. Với mạng lưới hơn 1000 máy chủ cùng sự Ổn định, Mạnh mẽ và Bảo mật cao của KDATA, chúng tôi hân hạnh là đối tác lớn của các doanh nghiệp trong và ngoài nước như VNPT DATA, FPT, Viettel…</li><li>Với đội ngũ nhân viên trẻ, nhiệt tình, năng động bên cạnh các chuyên viên giàu kinh nghiệm, KDATA luôn sẵn sàng hỗ trợ Khách hàng ngay khi có nhu cầu 24/7. Chúng tôi tự hào mang lại sự tận tâm, nhiệt tình, vì sự thành công của quý Khách hàng.</li><li>Ở KDATA, chúng tôi không ngừng tích lũy kinh nghiệm và hoàn thiện dịch vụ, luôn phát triển với việc nâng cấp hạ tầng công nghệ theo tiêu chuẩn Quốc Tế, nhằm đảm bảo sự Ổn định, Mạnh mẽ và Bảo mật cao. Luôn cam kết cung cấp dịch vụ phù hợp và tốt nhất với quý Khách hàng</li>',
                'photo'=>'logo2.png',
                'status'=>1,
                'type'=>'gioithieu',
                'order'=>1
            ],
            [
                'title'=>'giới thiệu dịch vụ CLOUD STORAGE',
                'content'=>'<li>Cloud storage là dịch vụ lưu trữ lưu trữ tệp tin, hình ảnh, nhạc, video, … trên nền tảng hướng đối tượng sử dụng chuẩn giao tiếp lập trình S3 của Amazon (S3 API storage). Cloud Storage cung cấp cho doanh nghiệp không gian lưu trữ dựa trên nền tảng điện toán đám mây (Cloud Computing). Dịch vụ này cho phép khách hàng hay người dùng có thể truy cập , sử dụng, sửa đổi bất cứ lúc nào, bất cứ nơi đâu bằng các thiết bị có kết nối mạng như PC, Ipad, Mobile,... </li><li>Dữ liệu của khách hàng sẽ được lưu trực tuyến trên hệ thống máy chủ lưu trữ của KDATA, người dùng ko cần sử dụng các hệ thống lưu trữ cục bộ như ổ cứng, usb từ đó giảm thiểu chi phí đầu tư hạ tầng cho các doanh nghiệp cũng như khách hàng cá nhân</li>',
                'photo'=>'intro_comp.png','status'=>1,
                'type'=>'gioithieu',
                'order'=>2
            ]
            
        );
        DB::table('images')->where('type','gioithieu')->delete();
        DB::table('images')->insert($array_images);
    }
}