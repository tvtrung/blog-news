@extends('page.index')
@section('title',$title_cat)
{{-- @section('title',isset($configs_data['seo']['title-trangchu'])?$configs_data['seo']['title-trangchu']:'') --}}
@section('keywords',isset($configs_data['seo']['seo-keywords'])?$configs_data['seo']['seo-keywords']:'')
@section('description',isset($configs_data['seo']['seo-description'])?$configs_data['seo']['seo-description']:'')
@section('style')
<style type="text/css">
	.pagination{
		display: inline-flex;
    	margin-top: 20px;
	}
	.list-posts h1{
		margin-top: 0;
	    color: #f68b1e;
	    font-weight: bold;
	    font-size: 30px;
	}
</style>
@endsection
@section('content')
<section class="list-posts">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>{!!$title_cat!!}</h1>
				@if(isset($post_item))
					@foreach($post_item as $item)
					<div class="box-post-item">
						<div class="post-item-2">
							<div class="row">
								<div class="col-4">
									<div class="img">
										<a href="{{$item['url']}}">
											<img class="b-lazy"
												src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
												data-src="{{url('uploads/posts'. '/' . img_size($item['photo'], $item['photo_resize'], 212, 118))}}"
												data-src-small="{{url('uploads/posts'. '/' . img_size($item['photo'], $item['photo_resize'], 212, 118))}}"
												alt="{{$item['title']}}" />
										</a>
									</div>
								</div>
								<div class="col-8" style="padding-left: 0">
									<div class="title">
										<h3><a href="{{$item['url']}}">{!!$item['title']!!}</a></h3>
									</div>
									<div class="info">
										<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
										<i class="fa fa-calendar" aria-hidden="true"></i> Ngày {{date('d/m/Y', strtotime($item['created_at']))}}<span style="margin: 0 5px;">|</span>
										<i class="fa fa-eye" aria-hidden="true"></i> {!!$item['view']!!}
									</div>
									<div class="des only-pc">
										{!!$item['description']!!}
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					<div class="border-bottom-orange"></div>
					<div class="text-center">
						{{ $data_post->links() }}
					</div>
				@else
					<div style="font-size: 13px;">Chưa có bài viết nào!</div>
				@endif
			</div>
			<div class="col-md-4">
				@include('page.main.sidebar')
			</div>
		</div>
	</div>
</section>
@endsection