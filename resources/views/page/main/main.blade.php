@extends('page.index')
@section('title',isset($configs_data['seo']['title-trangchu'])?$configs_data['seo']['title-trangchu']:'')
@section('content')
<main>
	@if(isset($images_data['slider']) && count($images_data['slider']) > 0)
	<section class="regular slider">
		@foreach($images_data['slider'] as $item)
	    <div><a href="{{$item->link}}"><img data-lazy="uploads/images/{{$item->photo}}" alt="slide"></a></div>
	    @endforeach
	</section>
	@endif
	@if(isset($images_data['tinhchat']) && count($images_data['tinhchat']) > 0)
	<section class="block block-1">
		<div class="container">
			<div class="row">
				@foreach($images_data['tinhchat'] as $item)
				<div class="col-md-4 col-sm-12">
					<div class="item">
						<div class="row">
							<div class="col-md-12 col-3">
								<img class="lazy" data-src="uploads/images/{{$item->photo}}">
							</div>
							<div class="col-md-12 col-9">
								<div class="title">
									{!!$item->title!!}
								</div>
								<div class="detail">
									{!!$item->content!!}
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<section class="block-oval only-pc">
		<div class="oval-bottom"></div>
	</section>
	@endif
	@if(isset($images_data['uudiem']) && count($images_data['uudiem']) > 0)
	<section class="block-2">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-6">
					<div class="lazy bg only-pc" data-src="style/images/img-cloud-2.png">
						<img class="lazy" data-src="style/images/circle.png">
					</div>
				</div>
				<div class="col-xl-4 col-lg-6">
					@foreach($images_data['uudiem'] as $item)
					<li>
						<div class="title">{{$item->title}}</div>
						<div class="detail">{{$item->content}}</div>
					</li>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	@endif
	<section class="block block-3 lazy" data-src="style/images/bg-tinhnang.png">
		<div class="container">
			<div class="row">
				@if(isset($images_data['tinhnang']) &&count($images_data['tinhnang']) > 0)
				<div class="col-lg-7">
					<div class="title-head">Tính năng</div>
					<div class="line"></div><br><br>
					@foreach($images_data['tinhnang'] as $item)
					<div class="item">
						<div class="row">
							<div class="col-2">
								<img class="lazy" data-src="uploads/images/{{$item->photo}}">
							</div>
							<div class="col-10">
								<div class="title-item">
									{!!$item->title!!}
								</div>
								<div class="content-item">
									{!!$item->content!!}
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div><br>
					@endforeach
				</div>
				@endif
				<div class="col-lg-5">
					<div class="img-cloud">
						<img class="lazy" data-src="uploads/configs/{{isset($configs_data['home-tinhnang']['image'])?$configs_data['home-tinhnang']['image']:''}}" class="width100">
					</div>
				</div>
			</div>
		</div>
	</section>
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
	@if(isset($images_data['cauhoi']) &&count($images_data['cauhoi']) > 0)
	<section class="block block-5 lazy" data-src="style/images/bg-cauhoi.png">
		<div class="container">
			<div class="block-title-head-2">
				<div class="tt-title-head">Câu hỏi</div>
				<div class="tt-line"></div>
			</div>
			<div class="clearfix"></div><br><br>
			<div class="row">
				@foreach($images_data['cauhoi'] as $item)
				<div class="col-md-6">
					<div class="row">
						<div class="col-2">
							<img class="lazy" data-src="uploads/images/{{$item->photo}}">
						</div>
						<div class="col-10">
							<div class="item">
								<div class="title">{{$item->title}}</div>
								<div class="detail">
									{{$item->content}}
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	@endif
</main>
@endsection
@section('style')
@endsection
@section('script')
<script type="text/javascript">
	$(document).on('ready', function() {
      $(".regular").slick({
        lazyLoad: 'ondemand',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
  		autoplaySpeed: 5000,
      });
    });
</script>
@endsection