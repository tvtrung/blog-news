<section class="html-mobile">
	<div class="container-fluid">
		<div class="box-posts-cat">
			<div class="bg-title-cat">
				<div class="title-category">
					Tin mới nhất
				</div>
			</div>
		</div>
		<?php for($i = 1; $i <= 5; $i++){ ?>
		<div class="box-post-item">
			<div class="post-item-2">
				<div class="row">
					<div class="col-4">
						<div class="img">
							<a href="#"><img src="/style/images/news3.jpg" class="width100" alt=""></a>
						</div>
					</div>
					<div class="col-8" style="padding-left: 0">
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
		<div class="border-bottom-orange"></div>
		<div class="box-posts-cat">
			<div class="bg-title-cat">
				<div class="title-category">
					<a href="#">Kiến thức</a>
				</div>
			</div>
		</div>
		<?php for($i = 1; $i <= 5; $i++){ ?>
		<div class="box-post-item">
			<div class="post-item-2">
				<div class="row">
					<div class="col-4">
						<div class="img">
							<a href="#"><img src="/style/images/news3.jpg" class="width100" alt=""></a>
						</div>
					</div>
					<div class="col-8" style="padding-left: 0">
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
		<div class="border-bottom-orange"></div>
	</div>
	<div class="clearfix"></div><br>
	<div class="container-fluid">
		@include('page.main.sidebar')
	</div>
</section>