<footer>
	<div class="container">
		<div class="row">
			<div class="col-xl-3 tt-col">
				<div class="logo">
					<a href="{{url('/')}}">
						<img class="b-lazy"
							src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
							data-src="/uploads/configs/{{isset($configs_data['header']['logo'])?$configs_data['header']['logo']:''}}"
							data-src-small="/uploads/configs/{{isset($configs_data['header']['logo'])?$configs_data['header']['logo']:''}}"
							alt="logo" />
					</a>
				</div>
				<div class="address">
					<ul>
						<li>Trụ sở chính</li>
						<li>{{isset($configs_data['footer']['addr-1'])?$configs_data['footer']['addr-1']:''}}</li>
						<li>{{isset($configs_data['footer']['phone-1'])?$configs_data['footer']['phone-1']:''}}</li>
					</ul>
				</div>
				<div class="address">
					<ul>
						<li>Văn phòng Hà Nội</li>
						<li>{{isset($configs_data['footer']['addr-2'])?$configs_data['footer']['addr-2']:''}}</li>
						<li>{{isset($configs_data['footer']['phone-2'])?$configs_data['footer']['phone-2']:''}}</li>
					</ul>
				</div>
				<div class="social">
					<ul>
						<li><a target="_blank" href="https://www.facebook.com/kdata.vn/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-3 tt-col">
				<div class="title">Dịch vụ</div>
				<div class="line-title" style="margin: 10px 0;height: 3px;width: 100%;padding-left: 0;">
					<div class="line-title-1" style="width: 30%;height: 3px;float: left;background-color:#f99833"></div>
					<div class="line-title-2" style="width: 70%;height: 2px;float: left;background-color:#a3a3a3"></div>
					{{-- <img src="/style/images/bg-line-footer.jpg"> --}}
				</div>
				<ul class="menu-footer">
					<li><a href="https://kdata.vn/product/dedicated-server" target="_blank">Máy chủ riêng</a></li>
					<li><a href="https://kdata.vn/product/colocation" target="_blank">Chỗ đặt máy chủ</a></li>
					<li><a href="https://kdata.vn/product/cloudvps" target="_blank">VPS</a></li>
					<li><a href="https://kdata.vn/product/hosting" target="_blank">Hosting</a></li>
				</ul>
				@if(isset($images_data['bocongthuong']))
				@foreach($images_data['bocongthuong'] as $item)
				<div class="bocongthuong">
					<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-original="/uploads/images/{{$item->photo}}" alt="{{$item->title}}" class="lazyload">
				</div>
				@endforeach
				@endif
			</div>
			<div class="col-xl-3 tt-col">
				<div class="title">Thông tin</div>
				<div class="line-title" style="margin: 10px 0;height: 3px;width: 100%;padding-left: 0;">
					<div class="line-title-1" style="width: 30%;height: 3px;float: left;background-color:#f99833"></div>
					<div class="line-title-2" style="width: 70%;height: 2px;float: left;background-color:#a3a3a3"></div>
					{{-- <img src="/style/images/bg-line-footer.jpg"> --}}
				</div>
				<ul class="menu-footer">
					<li><a href="#">Chính sách bảo mật</a></li>
					<li><a href="#">Quy định sử dụng</a></li>
					<li><a href="/lien-he">Liên hệ</a></li>
					@if(isset($images_data['thanhtoan']) &&count($images_data['thanhtoan']) > 0)
					<li>
						<a href="https://kdata.vn/guide-to-pay" target="_blank">Hướng dẫn thanh toán</a>
						<div class="clearfix"></div>
						<!--Show list pay-->
						@foreach($images_data['thanhtoan'] as $item)
						<a href="#" class="checkout-img"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-original="uploads/images/{{$item->photo}}" alt="{{$item->title}}" class="lazyload"></a>
						@endforeach
						<!--End show list pay-->
					</li>
					@endif
					<div class="clearfix"></div>
				</ul>
			</div>
			<div class="col-xl-3 tt-col">
				<div class="title">Liên hệ</div>
				<div class="line-title" style="margin: 10px 0;height: 3px;width: 100%;padding-left: 0;">
					<div class="line-title-1" style="width: 30%;height: 3px;float: left;background-color:#f99833"></div>
					<div class="line-title-2" style="width: 70%;height: 2px;float: left;background-color:#a3a3a3"></div>
					{{-- <img src="/style/images/bg-line-footer.jpg"> --}}
				</div>
				<div class="form-contact-footer">
					<form action="" method="post" id="form-footer">
						<input type="hidden" value="{{ csrf_token() }}" name="_token">
						<div class="form-group">
							<input type="email" id="newletter-email" class="form-control" placeholder="Nhập Email..." name="email" required="required">
						</div>
						<div class="form-group">
							<textarea class="form-control" id="newletter-content" rows="5" placeholder="Nhập tin nhắn..." name="content" required="required"></textarea>
						</div>
						<div class="form-group">
							<button id="newletter-submit" type="button">Gửi</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</footer>
<div class="modal fade" id="newletter-modal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Thông báo</div>
            </div>
            <div class="modal-body">
                <div id="alert-newletter"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>