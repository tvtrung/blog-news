<header>
	<section class="header-top only-pc">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="logo">
						<a href="/"><img src="uploads/configs/{{isset($configs_data['header']['logo'])?$configs_data['header']['logo']:''}}"></a>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="text">
						<span><i class="fa fa-phone" aria-hidden="true"></i> {{isset($configs_data['header']['hotline-1'])?$configs_data['header']['hotline-1']:''}}</span><span class="space"></span>
						<span><i class="fa fa-phone" aria-hidden="true"></i> {{isset($configs_data['header']['hotline-2'])?$configs_data['header']['hotline-2']:''}}</span><span class="space"></span>
						<span><i class="fa fa-phone" aria-hidden="true"></i> {{isset($configs_data['header']['hotline-3'])?$configs_data['header']['hotline-3']:''}}</span><span class="space"></span>
						<span onclick="javascript:void(Tawk_API.toggle())" style="cursor: pointer;"><i class="fa fa-commenting" aria-hidden="true"></i> LiveChat</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="menu-main">
		<div class="header-menu-t1"></div>
		<section class="header-menu">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="wsmenucontainer clearfix">
							<div class="overlapblackbg"></div>
							<div class="wsmobileheader clearfix"> <a id="wsnavtoggle" class="animated-arrow"><span></span></a> </div>
							<div class="header">
								<!--Main Menu HTML Code-->
								<nav id="" class="wsmenu clearfix">
									<ul class="mobile-sub wsmenu-list">
										<li class="title" ><a class="{{isActive('page.home','active')}}" href="{{route('page.home')}}">Trang chủ</a></li>
										<li class="title" ><a class="{{isActive('page.introduce','active')}}" href="{{route('page.introduce')}}">Giới thiệu</a></li>
										<li class="title" ><a class="{{isActive('page.price','active')}}" href="{{route('page.price')}}">Bảng giá</a></li>
										<li class="title" ><a class="{{isActive('page.guide','active')}}" href="{{route('page.guide')}}">Hướng dẫn</a></li>
										<li class="title" ><a class="{{isActive('page.faq','active')}}" href="{{route('page.faq')}}">Hỏi đáp</a></li>
										<li class="title last" ><a class="{{isActive('page.contact','active')}}" href="{{route('page.contact')}}">Liên hệ</a></li>
										<!-- <li class="only-mobile"><a href="#">Ngôn ngữ</a>
											<ul class="wsmenu-submenu">
												<li><a href="#">Tiếng Việt</a></li>
												<li><a href="#">English</a></li>
											</ul>
										</li> -->
										<li class="only-mobile"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> {{isset($configs_data['header']['hotline-1'])?$configs_data['header']['hotline-1']:''}}</a></li>
										<li class="only-mobile"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> {{isset($configs_data['header']['hotline-2'])?$configs_data['header']['hotline-2']:''}}</a></li>
										<li class="only-mobile"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> {{isset($configs_data['header']['hotline-3'])?$configs_data['header']['hotline-3']:''}}</a></li>
										<li class="only-mobile"><a href="javascript:void(Tawk_API.toggle())"><i class="fa fa-commenting" aria-hidden="true"></i>LiveChat</a></li>
										<li class="only-mobile button-login-mobile">
											<span onclick="location.href='{{isset($configs_data['header']['link-register'])?$configs_data['header']['link-register']:''}}'"><i class="fa fa-user" aria-hidden="true"></i> Đăng ký</span>
											<span onclick="location.href='{{isset($configs_data['header']['link-login'])?$configs_data['header']['link-login']:''}}'"><i class="fa fa-user" aria-hidden="true"></i> Đăng nhập</span>
										</li>
									</ul>
								</nav>
								<!--Menu HTML Code--> 
							</div>
						</div>
					</div>
					<div class="col-lg-3 only-pc">
						<div class="button-login text-right">
							<a href="{{isset($configs_data['header']['link-register'])?$configs_data['header']['link-register']:''}}"><button type="button" class="btn"><i class="fa fa-user" aria-hidden="true"></i> Đăng ký</button></a>
							<a href="{{isset($configs_data['header']['link-login'])?$configs_data['header']['link-login']:''}}"><button type="button" class="btn"><i class="fa fa-user" aria-hidden="true"></i> Đăng nhập</button></a>
						</div>
					</div>
					<div class="col-sm-12 only-mobile">
						<div class="logo text-center">
							<a href="#"><img src="style/images/logo.png" style="width: 140px;padding: 10px 0;"></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="header-menu-t2"></div>
	</div>
</header>