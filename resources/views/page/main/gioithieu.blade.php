@extends('page.index')
@section('title',isset($configs_data['seo']['title-gioithieu'])?$configs_data['seo']['title-gioithieu']:'')
@section('content')
	<main class="page-sub page-introduce">
	<div class="banner lazy" data-src="style/images/banner-gioithieu.png">
		<div class="container">
			<h1>- Giới thiệu -</h1>
		</div>
	</div>
	@if(isset($images_data['gioithieu']) && count($images_data['gioithieu']) > 0)
	<section class="gioithieu-block-1">
		<div class="container">
			@foreach($images_data['gioithieu'] as $item)

			<div class="block-title-head">
				<div class="tt-title-head">{{$item->title}}</div>
				<div class="tt-line"></div>
			</div>
			<div class="clearfix"></div><br>
			<div class="row">
				<div class="col-md-6">
					{!!$item->content!!}
				</div>
				<div class="col-md-6">
					<img class="lazy" data-src="uploads/images/{{$item->photo}}" alt="logo" class="only-gt-768">
				</div>
			</div>
			<br>
			@endforeach
		</div>
	</section>
	@endif
	<section class="gioithieu-block-2">
		<div class="container">
			<div class="box-title">
				{{isset($configs_data['gioithieu']['title'])?$configs_data['gioithieu']['title']:''}}
			</div>
			<br><br clear="only-pc">
			<div class="row">
				<div class="col-md-4 tt-col tt-col-1">
					<div class="item item-1">
						<div class="head">
							<div class="line-1">{!!isset($configs_data['gioithieu']['stt1'])?$configs_data['gioithieu']['stt1']:''!!}</div>
							<div class="line"></div>
							<div class="line-2">{!!isset($configs_data['gioithieu']['title-line-one-1'])?$configs_data['gioithieu']['title-line-one-1']:''!!}</div>
							<div class="line-3">{!!isset($configs_data['gioithieu']['title-line-two-1'])?$configs_data['gioithieu']['title-line-two-1']:''!!}</div>
						</div>
						<div class="triangle"></div>
						<div class="body">
							<div class="img">
								<img class="lazy" data-src="uploads/configs/{{isset($configs_data['gioithieu']['icon-1'])?$configs_data['gioithieu']['icon-1']:''}}" alt="">
							</div>
							<div class="detail">
								{!!isset($configs_data['gioithieu']['content-1'])?$configs_data['gioithieu']['content-1']:''!!}
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 tt-col tt-col-2">
					<div class="item item-2">
						<div class="head">
							<div class="line-1">{!!isset($configs_data['gioithieu']['stt2'])?$configs_data['gioithieu']['stt2']:''!!}</div>
							<div class="line"></div>
							<div class="line-2">{!!isset($configs_data['gioithieu']['title-line-one-2'])?$configs_data['gioithieu']['title-line-one-2']:''!!}</div>
							<div class="line-3">{!!isset($configs_data['gioithieu']['title-line-two-2'])?$configs_data['gioithieu']['title-line-two-2']:''!!}</div>
						</div>
						<div class="triangle"></div>
						<div class="body">
							<div class="img">
								<img class="lazy" data-src="uploads/configs/{{isset($configs_data['gioithieu']['icon-2'])?$configs_data['gioithieu']['icon-2']:''}}" alt="">
							</div>
							<div class="detail">
								{!!isset($configs_data['gioithieu']['content-2'])?$configs_data['gioithieu']['content-2']:''!!}
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 tt-col tt-col-3">
					<div class="item item-3">
						<div class="head">
							<div class="line-1">{!!isset($configs_data['gioithieu']['stt3'])?$configs_data['gioithieu']['stt3']:''!!}</div>
							<div class="line"></div>
							<div class="line-2">{!!isset($configs_data['gioithieu']['title-line-one-3'])?$configs_data['gioithieu']['title-line-one-3']:''!!}</div>
							<div class="line-3">{!!isset($configs_data['gioithieu']['title-line-two-3'])?$configs_data['gioithieu']['title-line-two-3']:''!!}</div>
						</div>
						<div class="triangle"></div>
						<div class="body">
							<div class="img">
								<img class="lazy" data-src="uploads/configs/{{isset($configs_data['gioithieu']['icon-3'])?$configs_data['gioithieu']['icon-3']:''}}" alt="">
							</div>
							<div class="detail">
								{!!isset($configs_data['gioithieu']['content-3'])?$configs_data['gioithieu']['content-3']:''!!}
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="v-width" style="width: 100%;height: 0px;"></div>
			</div>
		</div>
		<div class="img-tieuchi">
			<img class="lazy" data-src="style/images/gioithieu-tieuchi.png" alt="">
		</div>
	</section>
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
</main>
@endsection