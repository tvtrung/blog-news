{{--Meta SEO--}}
@extends('page.index')
@section('title',strip_tags($post_item['title']))
@section('keywords',strip_tags($post_item['seo_keyword']))
@section('description',strip_tags($post_item['seo_description']))
{{--Facebook Like/share--}}
@section('og_title', strip_tags($post_item['title']))
@section('og_description',strip_tags($post_item['description']))
@section('og_image', url('/') .'/uploads/posts/'.$post_item['photo'])
@section('og_url',URL::current())
@section('og_type','article')
{{--Style--}}
@section('style')
<style>
	.detail-posts img{
		width: initial!important;
		height: initial!important;
		max-width: 100%!important;
	}
</style>
@endsection
@section('content')
<section class="detail-posts">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>{!!$post_item['title']!!}</h1>
				<div class="info">
					<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
					<i class="fa fa-calendar" aria-hidden="true"></i> Ngày {{date('d/m/Y', strtotime($post_item['created_at']))}}<span style="margin: 0 5px;">|</span>
					<i class="fa fa-eye" aria-hidden="true"></i> {!!$post_item['view']!!}
				</div>
				<div class="content-posts">
					{!!$post_item['content']!!}
				</div>
				<hr>
				{{--Like/Share--}}
				@if(isset($configs_data['fb_social']['btn_like']) && isset($configs_data['fb_social']['btn_like']) == 'on')
				<div class="fb-like only-pc" data-href="{{URL::current()}}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

				<div class="fb-like only-mobile" data-href="{{URL::current()}}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
				@endif
				<div class="clearfix"></div>
				{{--Comment Facebook--}}
				@if(isset($configs_data['fb_social']['fb_app_id']) && isset($configs_data['fb_social']['fb_app_id']) != null)
				<div class="fb-comments" data-href="{{URL::current()}}" data-numposts="5" data-order-by="reverse_time"></div>
				@endif
				@if(isset($row_relative_post) && $row_relative_post != null)
				<div class="clearfix"></div><hr>
				<div class="row">
					<div class="col-md-12">
						<div class="box-posts-cat">
							<div class="bg-title-cat">
								<div class="title-category">
									<a href="#">Bài viết liên quan</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="posts-carousel">
							<div class="row" style="margin-left: -5px;margin-right: -5px;">
								<div class="owl-carousel owl-carousel-1">
								@foreach($row_relative_post as $item)
								<div class="item">
									<div class="box-post-item-carousel">
										<div class="post-item-1">
											<div class="img">
												<a href="{{$url_post[$item->id]}}"><img src="{{url('uploads/posts'. '/' . img_size($item->photo, $item->photo_resize, 207, 116))}}" class="width100" alt=""></a>
											</div>
											<div class="title" style="height: 62px">
												<h3 style="line-height: 20px"><a href="{{$url_post[$item->id]}}">{!!$item->title!!}</a></h3>
											</div>
											<div class="info">
												<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
												<i class="fa fa-calendar" aria-hidden="true"></i> Ngày {{date('d/m/Y',strtotime($item->created_at))}}<span style="margin: 0 5px;">|</span>
												<i class="fa fa-eye" aria-hidden="true"></i> {{$item->view}}
											</div>
											{{-- <div class="link">
												<a href="{{$url_post[$item->id]}}">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
											</div> --}}
										</div>
									</div>
								</div>
								@endforeach
								</div>
							</div>
							<div class="pre-next text-center">
								<span class="btn-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
								<span class="btn-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
							</div>
						</div>
					</div>
				</div>
				@endif
			</div>
			<div class="col-md-4">
				@include('page.main.sidebar')
			</div>
		</div>
	</div>
</section>
@endsection