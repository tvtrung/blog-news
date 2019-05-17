@if(count(json_decode( $list_post[5], true)) > 0)
<div class="row">
	<div class="col-md-12">
		<div class="box-posts-cat">
			<div class="bg-title-cat">
				<div class="title-category">
					<a href="{{route('page.posts',['slug'=>$row_cat[5]->slug])}}">{{$row_cat[5]->title}}</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="posts-carousel">
			<div class="row" style="margin-left: -5px;margin-right: -5px;">
				<div class="owl-carousel owl-carousel-1">
					@foreach($list_post[5] as $item)
					<div class="item">
						<div class="box-post-item-carousel">
							<div class="post-item-1">
								<div class="img">
									<a href="{{$url_post[$item->id]}}"><img src="{{url('uploads/posts'. '/' . img_size($item->photo, $item->photo_resize, 333, 187))}}" class="width100" alt=""></a>
								</div>
								<div class="title">
									<h3><a href="{{$url_post[$item->id]}}">{{$item->title}}</a></h3>
								</div>
								<div class="info">
									<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
									<i class="fa fa-calendar" aria-hidden="true"></i> Ngày {{date('d/m/Y',strtotime($item->created_at))}}<span style="margin: 0 5px;">|</span>
									<i class="fa fa-eye" aria-hidden="true"></i> {{$item->view}}
								</div>
								<div class="link">
									<a href="{{$url_post[$item->id]}}">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>
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