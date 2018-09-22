<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomePage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_configs = array(
            'image'=>'img-tinhnang.png'
        );
        DB::table('configs')->where('key','home-tinhnang')->delete();
        DB::table('configs')->insert(['key'=>'home-tinhnang','value'=>json_encode($array_configs)]);


        $array_images_slider = array(
            [
                'title' => 1,
                'photo' => 'slide.png',
                'status' => 1,
                'type' => 'slider',
                'order' => 1,
            ]
        );
        $array_images_tinhchat = array(
            [
                'title' => 'Tính khả dụng cao <br><i>(High Availability)</i>',
                'content' => 'Đảm bảo độ sẵn sàng của thông tin, tức là thông tin có thể được truy xuất bởi những người được phép vào bất cứ khi nào họ muốn',
                'photo' => 'tinhchat-1.png',
                'status' => 1,
                'type' => 'tinhchat',
                'order' => 1,
            ],
            [
                'title' => 'Tính bảo mật <br><i>(Confidentiality)</i>',
                'content' => 'Đảm bảo tính bảo mật của thông tin, tức là thông tin chỉ được phép truy cập (đọc) bởi những đối tượng (người, chương trình máy tính…) được cấp phép',
                'photo' => 'tinhchat-2.png',
                'status' => 1,
                'type' => 'tinhchat',
                'order' => 2,
            ],
            [
                'title' => 'Tính toàn vẹn<br><i>(Integrity)</i>',
                'content' => 'Thông tin chỉ được phép xóa hoặc sửa bởi những đối tượng được phép và phải đảm bảo rằng thông tin vẫn còn chính xác khi được lưu trữ hay truyền đi.',
                'photo' => 'tinhchat-3.png',
                'status' => 1,
                'type' => 'tinhchat',
                'order' => 3,
            ]
            
        );
        $array_images_uudiem = array(
            [
                'title' => 'TỐI ƯU CHI PHÍ',
                'content' => 'Cắt giảm được nhiều chi phí đầu tư ban đầu. Với Cloud Storage bạn có thể thêm hoặc xóa bớt không gian lưu trữ theo nhu cầu và chỉ trả tiền theo dung lượng mình sử dụng.',
                'status' => 1,
                'type' => 'uudiem',
                'order' => 1,
            ],
            [
                'title' => 'Giảm thời gian triển khai',
                'content' => 'Thiết lập một lần, tự động tập lịch sao chép dữ liệu. Chỉ cần xác định số lượng dữ liệu và tổng dung lượng lưu trữ cần thiết rồi triển khai.',
                'status' => 1,
                'type' => 'uudiem',
                'order' => 2,
            ],
            [
                'title' => 'Quản lý thông tin dễ dàng',
                'content' => 'Dễ dàng thực hiện công việc quản lý thông tin vô cùng dễ dàng phân quyền, quản trị thành viên, chia sẽ dữ liệu nội bộ, cá nhân.',
                'status' => 1,
                'type' => 'uudiem',
                'order' => 3,
            ],
            [
                'title' => 'Khôi phục thiệt hại',
                'content' => 'Tự động sao lưu dữ liệu phòng trường hợp không may dữ liệu bị hư hỏng hay mất bạn vẫn sẽ còn bản copy này.',
                'status' => 1,
                'type' => 'uudiem',
                'order' => 4,
            ],
            [
                'title' => 'Hỗ trợ 24/7',
                'content' => 'Với đội ngũ kỹ thuật chuyên nghiệp sẽ sẵn sàng hỗ trợ cho bạn 24/7 , đảm bảo tính ổn định.',
                'status' => 1,
                'type' => 'uudiem',
                'order' => 5,
            ]
        );
        $array_images_tinhnang = array(
            [
                'title' => 'Lưu trữ dữ liệu hướng đối tượng' ,
                'content'=>'Lưu trữ, quản lý, chia sẻ, sao lưu các dữ liệu (Hình ảnh, Video, Tập tin,…) từ xa. ',
                'photo'=>'tinhnang-1.png',
                'status'=>1,
                'type'=>'tinhnang',
                'order'=>1,
            ],
            [
                 'title' => 'GIAO DIỆN WEB NGƯỜI DÙNG' ,
                'content'=>'Được tích hợp phần mềm quản trị giao diện website dễ sử dụng và quản trị dữ liệu.',
                'photo'=>'tinhnang-2.png',
                'status'=>1,
                'type'=>'tinhnang',
                'order'=>2,
            ],
            [
                'title' => 'Giao diện lập trình chuẩn API S3' ,
                'content'=>'Truy cập hệ thống qua  API S3 kết nối cho phép người dùng tự phát triển ứng dụng một cách đơn giản và nhanh chóng.',
                'photo'=>'tinhnang-3.png',
                'status'=>1,
                'type'=>'tinhnang',
                'order'=>3,
            ],
            
        );
        $array_images_cauhoi = array(
            [
                'title'=>'Khách hàng cá nhân có sử dụng Cloud Storage của kdata được không ?',
                'content'=>'Chắc chắn là được, thay vì tốn cả triệu mua ổ cứng di động, bạn chỉ trả theo dung lượng bạn sử dụng thôi.',
                'photo'=>'cauhoi.png',
                'status'=>1,
                'type'=>'cauhoi',
                'order'=>1
            ],
            [
                'title'=>'Tôi muốn nâng cấp dung lượng. Phải làm sao ?',
                'content'=>'Kỹ thuật viên của KDATA hỗ trợ 24/7 sẽ hỗ trợ ngay cho bạn khi bạn liên hệ với chúng tôi và yêu cầu nâng cấp dung lượng.  ',
                'photo'=>'cauhoi.png',
                'status'=>1,
                'type'=>'cauhoi',
                'order'=>2
            ],
            [
                'title'=>'Cloud Storage được vận hành như thế nào?',
                'content'=>'Khách hàng sẽ gửi tập tin đến một máy chủ dữ liệu được duy trì bởi một nhà cung cấp thay vì lưu trữ nó trên ổ đĩa cứng của riêng họ. Hệ thống lưu trữ đám mây thường bao gồm hàng trăm máy chủ dữ liệu được liên kết với nhau bằng máy chủ điều khiển tổng, tuy nhiên, hệ thống đơn giản nhất có thể chỉ bao gồm một máy chủ mà thôi.',
                'photo'=>'cauhoi.png',
                'status'=>1,
                'type'=>'cauhoi',
                'order'=>3
            ],
            
        );
        DB::table('images')->where('type','slider')->delete();
        DB::table('images')->where('type','tinhchat')->delete();
        DB::table('images')->where('type','uudiem')->delete();
        DB::table('images')->where('type','tinhnang')->delete();
        DB::table('images')->where('type','cauhoi')->delete();
        DB::table('images')->insert($array_images_slider);
        DB::table('images')->insert($array_images_tinhchat);
        DB::table('images')->insert($array_images_uudiem);
        DB::table('images')->insert($array_images_tinhnang);
        DB::table('images')->insert($array_images_cauhoi);
    }
}
