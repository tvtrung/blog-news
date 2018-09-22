@extends('page.index')
@section('title',isset($configs_data['seo']['title-huongdan'])?$configs_data['seo']['title-huongdan']:'')
@section('content')
<main class="page-sub page-guide">
	<div class="banner lazy" data-src="style/images/banner-huongdan.png">
		<div class="container">
			<h1>- Hướng dẫn -</h1>
		</div>
	</div>
	<section class="guide-block">
		<div class="container">
			<!-- ---BLOCK-- -->
			<div class="block-title-head">
				<div class="tt-title-head">I. giới thiệu chung</div>
				<div class="tt-line"></div>
			</div>
			<div class="clearfix"></div><br>
			<div class="row">
				<div class="col-md-6">
					<h3>1. Giới thiệu về Kdata Storage API</h3>
					<li>
						Chào mừng bạn đến với dịch vụ lưu trữ Kdata Storage API của chúng tôi.
					</li>
					<li>
						Storages cung cấp một API RESTful XML để lưu trữ dữ liệu người dùng thông qua việc sử dụng các giao thức HTTP. API của chúng tôi tương thích với API AWS S3 của Amazon cho phép người dùng tương tác với dịch vụ gần giống với các công cụ mà người dùng đã biết trên S3 của Amazon.
					</li>
					<li>
						Tài liệu API này sẽ hướng dẫn cụ thể cho các bạn trong việc sử dụng các chức năng trên hệ thống Storage.
					</li>
					<h3>2. Giới thiệu tổng quan</h3>
					<li>
						Chào mừng bạn đến với dịch vụ lưu trữ Kdata Storage API của chúng tôi.
					</li>
					<li>
						Trang quản lý người dùng cung cấp cái nhìn tổng quan cho người sử dụng qua các thông số cơ bản về: số lượng bucket đang sử dụng; lịch sử nạp tiền của người dùng; dung lượng sử dụng của tháng hiện tại; băng thông sử dụng của tháng hiện tại và dung lượng tối đa người dùng có thể lưu trữ trên hệ thống Storage. 
					</li>
				</div>
				<div class="col-md-6 text-center">
					<img class="lazy" data-src="style/images/guide-1.png" alt="" style="width: 80%;">
				</div>
				<div class="col-md-12">
					<br>
					<img class="lazy" data-src="style/images/guide-1-2.png" alt="" class="width100">
				</div>
				<div class="col-md-12">
					<div class="title-img">Hình 1: Thông tin tổng quát của giao diện người dùng</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<br><br class="only-pc">
			<!-- ---BLOCK-- -->
			<div class="block-title-head">
				<div class="tt-title-head">II.CÁC TÍNH NĂNG CHÍNH</div>
				<div class="tt-line"></div>
			</div>
			<div class="clearfix"></div><br>
			<div class="row">
				<div class="col-md-8">
					<h3>1. Đăng ký tài khoản người dùng</h3>
					<li>
						Bất kỳ người dùng nào cũng đều có thể đăng ký sử dụng dịch vụ Storage của chúng tôi thông qua địa chỉ: <b><i>https://s3.kstorage.vn/register​</i></b>. 
					</li>
					<li>
						Tuy nhiên, mỗi địa chỉ email chỉ được đăng ký duy nhất một tài khoản Storage. 
					</li>
					<li>
						Sau khi đăng ký thành công, hệ thống sẽ tự động gửi một email kích hoạt tài khoản đến người dùng thông qua email đã đăng ký. Nếu kích hoạt thành công, người dùng có thể đăng nhập vào hệ thống, nạp tiền và có thể bắt đầu sử dụng dịch vụ Storage thông qua địa chỉ https://s3.kstorage.vn/login​.
					</li>
					<li>
						Tuy nhiên, trong trường hợp người dùng chưa kích hoạt tài khoản và cũng không nhận được email kích hoạt tài khoản, người dùng có thể đăng nhập vào hệ thống như thông tin đã đăng ký, sau đó có thể tùy chọn một trong số các chức năng như sau: <br>
						- <b><i>Nhận lại mã kích hoạt:</i></b> Đối với chức năng này, hệ thống sẽ gửi email kích hoạt về địa chỉ email của người dùng, mã kích hoạt này chỉ có thể sử dụng duy nhất một lần. <br>
						- <b><i>Gửi liên hệ:</i></b> Đối với trường hợp người dùng vẫn không nhận được email kích hoạt hoặc có vấn đề gì về tài khoản mà người dùng không thể đăng nhập được, người dùng có thể sử dụng tính năng này để gửi thông tin cho chúng tôi biết. Chúng tôi sẽ tiếp nhận, kiểm tra và sẽ sớm phản hồi trở lại.   
					</li>
				</div>
				<div class="col-md-4">
					<img class="lazy" data-src="style/images/guide-2-1.png" alt="" class="" style="border:2px solid #00aced">
					<div class="title-img">Hình 2: Đăng ký sử dụng dịch vụ Storage </div>
				</div>
				<div class="col-md-12">
					<br>
					<img class="lazy" data-src="style/images/guide-2-2.png" alt="" class="width100">
				</div>
				<div class="col-md-12">
					<div class="title-img">Hình 3: Hệ thống yêu cầu người dùng kích hoạt tài khoản khi người dùng <br class="only-pc"> đăng nhập vào hệ thống nhưng tài khoản chưa được kích hoạt</div>
				</div>
				<div class="col-md-12">
					<h3>2. Quản lý Bucket</h3>
				</div>
				<div class="col-md-6">
					<li class="normal">
						Trang quản lý bucket cho phép người dùng quản lý các thông tin liên quan đến bucket của mình bao gồm các tính năng như sau:
					</li>
					<li>
						<b><i>Thêm bucket mới:</i></b> Người dùng có thể thêm mới bucket để lưu trữ nhưng không được trùng tên với những bucket đã tồn tại trong hệ thống.
					</li>
					<li>
						<b><i>Xóa bucket:</i></b> Cho phép người dùng xóa bucket hiện tại, khi đó tất cả các dữ liệu trong bucket đó cũng sẽ được xóa hết.
					</li>
				</div>
				<div class="col-md-6">
					<li>
						<b><i>Thêm object hoặc tập tin vào bucket</i></b> Hệ thống cho phép người dùng thêm mới các tập tin hoặc folder để chứa dữ liệu với kích thước tối đa mà hệ thống đã cung cấp. 
					</li>
					<li>
						<b><i>Tìm kiếm:</i></b> Hệ thống cung cấp tính năng tìm kiếm dữ liệu, giúp cho việc tìm kiếm thông tin của người dùng được thuận tiện và nhanh chóng hơn. 
					</li>
					<li class="normal">
						Ngoài ra, dữ liệu trong Storage được giữ ở chế độ bảo mật. Khi đường link dữ liệu chưa được thay đổi sang chế độ <b>“​Public​”</b>, thì người sử dụng cũng vẫn không truy cập được file dữ liệu đó. 
					</li>
				</div>
				<div class="col-md-12">
					<br><img class="lazy" data-src="style/images/guide-2-3.png" alt="">
				</div>
				<div class="col-md-12">
					<div class="title-img">Hình 4: Trang quản lý thông tin các bucket của người dùng</div>
				</div>
				<div class="col-md-12">
					<h3>3. Thống kê báo cáo</h3>
				</div>
				<div class="col-md-6">
					<li class="normal">
						Hệ thống cho phép người dùng có thể thống kê các dữ liệu liên quan đến băng thông, dung lượng cá nhân đang sử dụng trên từng móc thời gian cố định trong ngày. Thông qua đó, người dùng biết được các dữ liệu bao gồm: thời gian, dung lượng, số tiền được thanh toán, giá trị cao nhất, thấp nhất và trung bình. Hệ thống cho phép người dùng thống kê thông qua 4 tiêu chí:
					</li>
				</div>
				<div class="col-md-6">
					<li>
						<b><i>Trong ngày​:</i></b> hiển thị thống kê dữ liệu trong ngày hiện tại 
					</li>
					<li>
						<b><i>Trong tháng​:</i></b> hiển thị thống kê dữ liệu trong tháng hiện tại 
					</li>
					<li>
						<b><i>Trong năm​:</i></b> hiển thị thống kê dữ liệu trong năm hiện tại 
					</li>
					<li>
						<b><i>Tùy chọn thời gian:</i></b> hiển thị thống kê dữ liệu theo ngày mà người dùng đã chọn 
					</li>
					<li class="normal">
						Dữ liệu thống kê được hiển thị dưới dạng biểu đồ và số liệu chi tiết, người dùng có thể lưu về dưới dạng hình ảnh, PDF, file Excel hoặc in trực tiếp trên trình duyệt đang sử dụng. 
					</li>
				</div>
				<div class="col-md-12">
					<br><img class="lazy" data-src="style/images/guide-2-4.png" alt="">
				</div>
				<div class="col-md-12">
					<div class="title-img">Hình 5: Trang thống kê báo cáo dữ liệu người dùng </div>
				</div>
				<div class="col-md-12">
					<h3>4. Nạp tiền</h3>
				</div>
				<div class="col-md-12">
					<li>
						Người dùng có thể sử dụng hệ thống Storage khi tài khoản đang được <b>“​Active​”</b> và số tiền trong tài khoản lớn hơn 100.000 VNĐ. Khi đó, người dùng có thể thông qua chức năng này để nạp tiền trực tiếp vào hệ thống thông qua <b><i>cổng thanh toán ​Onepay</i></b> với hai phương thức: thanh toán quốc tế và thanh toán nội địa. Nếu thành công, hệ thống sẽ kích hoạt tài khoản và người dùng có thể sử dụng lại bình thường. 
					</li>
				</div>
				<div class="col-md-12">
					<br><img class="lazy" data-src="style/images/guide-2-5.png" alt="">
				</div>
				<div class="col-md-12">
					<div class="title-img">Hình 6: Trang nạp tiền vào hệ thống </div>
				</div>
				<div class="col-md-12">
					<li>
						<b><i>Thanh toán nội địa:</i></b> ​Sau khi người dùng nhập thông tin đầy đủ, chọn “Nạp tiền”, hệ thống sẽ chuyển đến trang lựa chọn ngân hàng để thanh toán trên website của Onepay. Tiếp theo, người dùng phải điền đầy đủ thông tin mà ngân hàng của mình đang sử dụng, ngân hàng sẽ gửi mã giao dịch sau khi xác nhận thao tác thành công. Sau khi thanh toán hoàn tất, hệ thống sẽ tự động trả về trang thanh toán của Storage kèm theo thông báo giao dịch.
					</li>
				</div>
				<div class="col-md-5">
					<br><img class="lazy" data-src="style/images/guide-2-6.png" alt="">
					<div class="title-img">Hình 7: Trang thanh toán tại <br class="only-pc">ngân hàng nội địa trên trang chủ của Onepay </div>
				</div>
				<div class="col-md-7">
					<br><img class="lazy" data-src="style/images/guide-2-7.png" alt="">
					<div class="title-img">Hình 8: Xác nhận thông tin giao dịch</div>
				</div>
				<div class="col-md-12">
					<h3>5. Quản lý hồ sơ cá nhân</h3>
				</div>
				<div class="col-md-12">
					<li>
						Hệ thống cho phép người dùng cập nhật một số thông tin cơ bản như: tên hiển thị của tài khoản, thay đổi mật khẩu và lấy API Key mới để sử dụng. 
					</li>
				</div>
				<div class="col-md-12">
					<br><img class="lazy" data-src="style/images/guide-2-8.png" alt="">
				</div>
			</div>
			<!-- ---BLOCK-- -->
			<br><br>
			<div class="block-title-head">
				<div class="tt-title-head">III.MỘT SỐ LƯU Ý </div>
				<div class="tt-line"></div>
			</div>
			<div class="clearfix"></div><br>
			<div class="row">
				<div class="col-md-6">
					<li>
						Trong quá trình vận hành hệ thống trên website ​https://s3.kstorage.vn​, nếu người dùng cảm thấy khó khăn trong việc xử lý dữ liệu, cũng như phát hiện ra phần nào hiển thị dữ liệu chưa chính xác hoặc cần hỗ trợ bất cứ vấn đề gì liên quan đến Storage, vui lòng liên hệ với chúng tôi để được hỗ trợ kịp thời, thông tin chi tiết như sau: 
					</li>
				</div>
				<div class="col-md-6">
					<div class="box-info">
						<div class="title">Công ty TNHH Kdata</div>
						<div class="box-support">
							<li>
								 Email hỗ trợ kỹ thuật:  support@kdata.vn 
							</li>
							<li>
								Tổng đài hỗ trợ kỹ thuật : 1-900-6413 (24/7) 
							</li>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
@endsection