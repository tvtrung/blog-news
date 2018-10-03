@extends('page.index')
@section('title',isset($configs_data['seo']['title-trangchu'])?$configs_data['seo']['title-trangchu']:'')
@section('content')
<main>
	<section class="home-post-latest only-pc">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="item">
						<a href="#"><img src="style/images/news1.jpg" alt="" class="width100"></a>
						<div class="title">
							<a href="#">Lợi ích của việc lưu trữ dữ liệu trên mây</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="item">
						<a href="#"><img src="style/images/news1.jpg" alt="" class="width100"></a>
						<div class="title">
							<a href="#">Lợi ích của việc lưu trữ dữ liệu trên mây</a>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-4">
					<div class="item">
						<a href="#"><img src="style/images/news2.jpg" alt="" class="width100"></a>
						<div class="title">
							<a href="#">Lợi ích của việc lưu trữ dữ liệu trên mây</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<a href="#"><img src="style/images/news2.jpg" alt="" class="width100"></a>
						<div class="title">
							<a href="#">Lợi ích của việc lưu trữ dữ liệu trên mây</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item">
						<a href="#"><img src="style/images/news2.jpg" alt="" class="width100"></a>
						<div class="title">
							<a href="#">Lợi ích của việc lưu trữ dữ liệu trên mây</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="home-post-latest-for-mobile only-mobile">
		<div class="container-fluid">
			<div class="row">
				<?php for($i = 1; $i <= 5; $i++){ ?>
				<div class="col-md-12">
					<div class="item">
						<div class="row">
							<div class="col-4">
								<a href="#"><img src="style/images/news1.jpg" alt="" class="width100"></a>
							</div>
							<div class="col-8">
								<div class="title">
									<a href="#">Lợi ích của việc lưu trữ dữ liệu trên mây</a>
								</div>
								<div class="info">
									<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
									<i class="fa fa-calendar" aria-hidden="true"></i> Ngày 02/10/2018<span style="margin: 0 5px;">|</span>
									<i class="fa fa-eye" aria-hidden="true"></i> 18
								</div>
								<div class="des">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<section class="block-posts">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="block-1">
						<div class="row">
							<div class="col-md-6" style="padding-right: 0">
								<div class="box-posts-cat">
									<div class="bg-title-cat">
										<div class="title-category">
											Tutorial
										</div>
									</div>
									<div class="box-post-item">
										<div class="post-item-1">
											<div class="img">
												<a href="#"><img src="style/images/news3.jpg" class="width100" alt=""></a>
											</div>
											<div class="title">
												<a href="#">Tác động của điện toán đám mây trong kinh doanh</a>
											</div>
											<div class="info">
												<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
												<i class="fa fa-calendar" aria-hidden="true"></i> Ngày 02/10/2018<span style="margin: 0 5px;">|</span>
												<i class="fa fa-eye" aria-hidden="true"></i> 18
											</div>
											<div class="des">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											</div>
											<div class="link">
												<a href="#">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
									<div class="box-post-item">
										<div class="post-item-2">
											<div class="row">
												<div class="col-md-4">
													<div class="img">
														<a href="#"><img src="style/images/news3.jpg" class="width100" alt=""></a>
													</div>
												</div>
												<div class="col-md-8" style="padding-left: 0">
													<div class="title">
														<a href="#">Tác động của điện toán đám mây trong kinh doanh</a>
													</div>
													<div class="info">
														<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
														<i class="fa fa-calendar" aria-hidden="true"></i> Ngày 02/10/2018<span style="margin: 0 5px;">|</span>
														<i class="fa fa-eye" aria-hidden="true"></i> 18
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="box-post-item">
										<div class="post-item-2">
											<div class="row">
												<div class="col-md-4">
													<div class="img">
														<a href="#"><img src="style/images/news3.jpg" class="width100" alt=""></a>
													</div>
												</div>
												<div class="col-md-8" style="padding-left: 0">
													<div class="title">
														<a href="#">Tác động của điện toán đám mây trong kinh doanh</a>
													</div>
													<div class="info">
														<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
														<i class="fa fa-calendar" aria-hidden="true"></i> Ngày 02/10/2018<span style="margin: 0 5px;">|</span>
														<i class="fa fa-eye" aria-hidden="true"></i> 18
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6" style="padding-left: 0">
								<div class="box-posts-cat">
									<div class="bg-title-cat">
										<div class="title-category">
											Kiến thức
										</div>
									</div>
									<div class="box-post-item">
										<div class="post-item-1">
											<div class="img">
												<a href="#"><img src="style/images/news3.jpg" class="width100" alt=""></a>
											</div>
											<div class="title">
												<a href="#">Tác động của điện toán đám mây trong kinh doanh</a>
											</div>
											<div class="info">
												<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
												<i class="fa fa-calendar" aria-hidden="true"></i> Ngày 02/10/2018<span style="margin: 0 5px;">|</span>
												<i class="fa fa-eye" aria-hidden="true"></i> 18
											</div>
											<div class="des">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											</div>
											<div class="link">
												<a href="#">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
									<div class="box-post-item">
										<div class="post-item-2">
											<div class="row">
												<div class="col-md-4">
													<div class="img">
														<a href="#"><img src="style/images/news3.jpg" class="width100" alt=""></a>
													</div>
												</div>
												<div class="col-md-8" style="padding-left: 0">
													<div class="title">
														<a href="#">Tác động của điện toán đám mây trong kinh doanh</a>
													</div>
													<div class="info">
														<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
														<i class="fa fa-calendar" aria-hidden="true"></i> Ngày 02/10/2018<span style="margin: 0 5px;">|</span>
														<i class="fa fa-eye" aria-hidden="true"></i> 18
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="box-post-item">
										<div class="post-item-2">
											<div class="row">
												<div class="col-md-4">
													<div class="img">
														<a href="#"><img src="style/images/news3.jpg" class="width100" alt=""></a>
													</div>
												</div>
												<div class="col-md-8" style="padding-left: 0">
													<div class="title">
														<a href="#">Tác động của điện toán đám mây trong kinh doanh</a>
													</div>
													<div class="info">
														<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
														<i class="fa fa-calendar" aria-hidden="true"></i> Ngày 02/10/2018<span style="margin: 0 5px;">|</span>
														<i class="fa fa-eye" aria-hidden="true"></i> 18
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="border-bottom-orange"></div>
					</div>
					<div class="block-2">
						<div class="row">
							<div class="col-md-12">
								<div class="box-posts-cat">
									<div class="bg-title-cat">
										<div class="title-category">
											Khuyến mãi
										</div>
									</div>
									<div class="row">
										<div class="col-md-6" style="padding-right: 0">
											<div class="box-post-item">
												<div class="post-item-1">
													<div class="img">
														<a href="#"><img src="style/images/news3.jpg" class="width100" alt=""></a>
													</div>
													<div class="title">
														<a href="#">Tác động của điện toán đám mây trong kinh doanh</a>
													</div>
													<div class="info">
														<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
														<i class="fa fa-calendar" aria-hidden="true"></i> Ngày 02/10/2018<span style="margin: 0 5px;">|</span>
														<i class="fa fa-eye" aria-hidden="true"></i> 18
													</div>
													<div class="des">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													</div>
													<div class="link">
														<a href="#">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="box-post-item">
												<div class="post-item-1">
													<div class="img">
														<a href="#"><img src="style/images/news3.jpg" class="width100" alt=""></a>
													</div>
													<div class="title">
														<a href="#">Tác động của điện toán đám mây trong kinh doanh</a>
													</div>
													<div class="info">
														<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
														<i class="fa fa-calendar" aria-hidden="true"></i> Ngày 02/10/2018<span style="margin: 0 5px;">|</span>
														<i class="fa fa-eye" aria-hidden="true"></i> 18
													</div>
													<div class="des">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													</div>
													<div class="link">
														<a href="#">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="border-bottom-orange"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="block-3">
						<div class="box-posts-cat">
							<div class="bg-title-cat">
								<div class="title-category">
									High tech
								</div>
							</div>
							<div class="row">
								<div class="col-md-6" style="padding-right: 0">
									<div class="box-post-item" style="height: 100%; border-right: none;">
										<div class="post-item-1">
											<div class="img">
												<a href="#"><img src="style/images/news3.jpg" class="width100" alt=""></a>
											</div>
											<div class="title">
												<a href="#">Tác động của điện toán đám mây trong kinh doanh</a>
											</div>
											<div class="info">
												<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
												<i class="fa fa-calendar" aria-hidden="true"></i> Ngày 02/10/2018<span style="margin: 0 5px;">|</span>
												<i class="fa fa-eye" aria-hidden="true"></i> 18
											</div>
											<div class="des">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											</div>
											<div class="link">
												<a href="#">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6" style="padding-left: 0">
									<?php for($i = 1; $i <= 4; $i++){ ?>
									<div class="box-post-item">
										<div class="post-item-2">
											<div class="row">
												<div class="col-md-4">
													<div class="img">
														<a href="#"><img src="style/images/news3.jpg" class="width100" alt=""></a>
													</div>
												</div>
												<div class="col-md-8" style="padding-left: 0">
													<div class="title">
														<a href="#">Tác động của điện toán đám mây trong kinh doanh</a>
													</div>
													<div class="info">
														<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
														<i class="fa fa-calendar" aria-hidden="true"></i> Ngày 02/10/2018<span style="margin: 0 5px;">|</span>
														<i class="fa fa-eye" aria-hidden="true"></i> 18
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
							<div class="border-bottom-orange"></div>
						</div>
					</div>
					<br>
				</div>
				<div class="col-md-4">
					<div class="sidebar"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="box-posts-cat">
						<div class="bg-title-cat">
							<div class="title-category">
								App Game
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="owl-carousel owl-carousel-1">
						<div class="item">
							<img src="https://www.kdata.vn/uploads/partner/1526390342.png" alt="odin">
						</div>
						<div class="item">
							<img src="https://www.kdata.vn/uploads/partner/1526390341.png" alt="viettel">
						</div>
						<div class="item">
							<img src="https://www.kdata.vn/uploads/partner/1526390339.png" alt="dell">
						</div>
						<div class="item">
							<img src="https://www.kdata.vn/uploads/partner/1526390337.png" alt="hp">
						</div>
						<div class="item">
							<img src="https://www.kdata.vn/uploads/partner/1526390335.png" alt="vdc">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
@endsection
@section('style')
@endsection
@section('script')

@endsection