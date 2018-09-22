@extends('page.index')
@section('title',isset($configs_data['seo']['title-banggia'])?$configs_data['seo']['title-banggia']:'')
@section('content')
	<main class="page-sub page-price">
	<div class="banner lazy" data-src="style/images/banner-banggia.png">
		<div class="container">
			<h1>- Bảng giá -</h1>
		</div>
	</div>
	@if(isset($product_data) && count($product_data) > 0)
	<section class="block block-4">
		<div class="container">
			<div class="block-title-head">
				<div class="tt-title-head">Bảng giá</div>
				<div class="tt-line"></div>
			</div>
			<div class="clearfix"></div><br><br>
			<div class="list-product">
				<div class="row">
					@foreach($product_data as $item)
					<div class="col-lg-3 col-md-6 col-sm-12 list-product-col">
						<div class="list-product-item">
							<h3><img class="lazy" data-src="style/images/icon-store.png">{!! $item->title !!}</h3>
							<div class="rectangle_border"></div>
							<div class="triangle_down_border"></div>
							<div class="triangle_down"></div>
							<div class="detail">
								<div class="price">{!! $item->price !!}</div>
								<div class="line-1"></div><div class="cleafix"></div>
								<div class="line-2"></div><div class="cleafix"></div>
								<div class="line-1"></div><div class="cleafix"></div>
								<div class="cleafix"></div><p></p>
								{!! $item->content !!}
								<li class="register"><a href="{!! $item->link !!}">Đăng ký</a></li>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	@endif
</main>
@endsection