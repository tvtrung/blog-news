<header>
	<section class="header-top only-pc">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="logo">
						<a href="/"><img src="/uploads/configs/{{isset($configs_data['header']['logo'])?$configs_data['header']['logo']:''}}" alt="logo"></a>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="banner-top">
						<img class="b-lazy"
							src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
							data-src="/uploads/configs/{{isset($configs_data['header']['banner-top'])?$configs_data['header']['banner-top']:''}}"
							data-src-small="/uploads/configs/{{isset($configs_data['header']['banner-top'])?$configs_data['header']['banner-top']:''}}"
							alt="Banner" />
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
					<div class="col-lg-12">
						<div class="wsmenucontainer clearfix">
							<div class="overlapblackbg"></div>
							<div class="wsmobileheader clearfix"> <a id="wsnavtoggle" class="animated-arrow"><span></span></a> </div>
							<div class="header">
								<!--Main Menu HTML Code-->
								<nav id="" class="wsmenu clearfix">
									<ul class="mobile-sub wsmenu-list ul-1">
										<li class="title icon-home @if(url()->current() == url('/')) active @endif""><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
										@foreach($get_cat as $item)
										<?php 
											$get_url = $item['url']; 
											$str = '*/'.$get_url.'*';
										?>
										<li class="title {{ setActive($str, 'active') }}"><a href="{{route('page.posts',['slug'=>$item['url']])}}">{{$item['title']}}</a></li>
										@endforeach
										<li class="title"><a href="{{url('lien-he')}}">Liên hệ</a></li>
										<li class="menu-search only-mobile">
	                                        <a href="#" class="last-menu"><i class="fa fa-search" aria-hidden="true"></i> <span class="only-mobile">Tìm kiếm</span></a>
	                                        <div class="megamenu halfdiv">
	                                            <form class="menu_form" method="get" action="{{route('page.search')}}">
	                                                <input type="text" name="q" placeholder="Nhập nội dung tìm kiếm..." autocomplete="off">
	                                                <button type="submit" class="btn btn-info pull-right" style="font-size: 13px;padding: 3px 10px;">Tìm kiếm</button>
	                                            </form>
	                                        </div>
	                                    </li>
									</ul>
									<ul class="mobile-sub wsmenu-list ul-2">
										<li class="menu-search">
	                                        <a href="#" class="last-menu"><i class="fa fa-search" aria-hidden="true"></i> <span class="only-mobile">Tìm kiếm</span></a>
	                                        <div class="megamenu halfdiv">
	                                            <form class="menu_form" method="get" action="{{route('page.search')}}">
	                                                <input type="text" name="q" placeholder="Nhập nội dung tìm kiếm..." autocomplete="off">
	                                                <button type="submit" class="btn btn-info pull-right" style="font-size: 13px;padding: 3px 10px;">Tìm kiếm</button>
	                                            </form>
	                                        </div>
	                                    </li>
										<!-- <li class="only-mobile"><a href="#">Ngôn ngữ</a>
											<ul class="wsmenu-submenu">
												<li><a href="#">Tiếng Việt</a></li>
												<li><a href="#">English</a></li>
											</ul>
										</li> -->
									</ul>
								</nav>
								<!--Menu HTML Code--> 
							</div>
						</div>
					</div>
					<div class="col-sm-12 only-mobile">
						<div class="logo text-center">
							<a href="/"><img src="/uploads/configs/{{isset($configs_data['header']['logo'])?$configs_data['header']['logo']:''}}" style="width: 140px;padding: 10px 0;"></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="header-menu-t2"></div>
	</div>
	<div class="banner-top text-center only-mobile">
		<img src="/uploads/configs/{{isset($configs_data['header']['banner-top'])?$configs_data['header']['banner-top']:''}}" alt="banner">
	</div>
</header>