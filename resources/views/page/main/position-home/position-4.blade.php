@if(count(json_decode( $list_post[4], true)) > 0)
<div class="box-posts-cat">
	<div class="bg-title-cat">
		<div class="title-category">
			<a href="{{route('page.posts',['slug'=>$row_cat[4]->slug])}}">{{$row_cat[4]->title}}</a>
		</div>
	</div>
	<div class="row">
		<?php $i = 0; ?>
		@foreach($list_post[4] as $item)
		<?php $i++;if($i == 2) break;?>
		<div class="col-md-6" style="padding-right: 0">
			<div class="box-post-item" style="height: 100%; border-right: none;">
				<div class="post-item-1">
					<div class="img">
						<a href="{{$url_post[$item->id]}}">
							<img class="b-lazy"
								src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
								data-src="{{url('uploads/posts'. '/' . img_size($item->photo, $item->photo_resize, 333, 187))}}"
								data-src-small="{{url('uploads/posts'. '/' . img_size($item->photo, $item->photo_resize, 333, 187))}}"
								alt="{{$item->title}}" />
						</a>
					</div>
					<div class="title">
						<h3><a href="{{$url_post[$item->id]}}">{{$item->title}}</a></h3>
					</div>
					<div class="info">
						<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
						<i class="fa fa-calendar" aria-hidden="true"></i> Ngày {{date('d/m/Y',strtotime($item->created_at))}}<span style="margin: 0 5px;">|</span>
						<i class="fa fa-eye" aria-hidden="true"></i> {{$item->view}}
					</div>
					<div class="des">
						{!!strip_tags($item->description)!!}
					</div>
					<div class="link">
						<a href="{{$url_post[$item->id]}}">Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		<div class="col-md-6" style="padding-left: 0">
			<?php $i = 0; ?>
			@foreach($list_post[4] as $item)
			<?php $i++;if($i == 1) continue;?>
			<div class="box-post-item">
				<div class="post-item-2">
					<div class="row">
						<div class="col-md-4">
							<div class="img">
								<a href="{{$url_post[$item->id]}}">
									<img class="b-lazy"
										src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
										data-src="{{url('uploads/posts'. '/' . img_size($item->photo, $item->photo_resize, 90, 50))}}"
										data-src-small="{{url('uploads/posts'. '/' . img_size($item->photo, $item->photo_resize, 90, 50))}}"
										alt="{{$item->title}}" />
								</a>
							</div>
						</div>
						<div class="col-md-8" style="padding-left: 0">
							<div class="title">
								<h3><a href="{{$url_post[$item->id]}}">{{$item->title}}</a></h3>
							</div>
							<div class="info">
								<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
								<i class="fa fa-calendar" aria-hidden="true"></i> Ngày {{date('d/m/Y',strtotime($item->created_at))}}<span style="margin: 0 5px;">|</span>
								<i class="fa fa-eye" aria-hidden="true"></i> {{$item->view}}
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div class="border-bottom-orange"></div>
</div>
<br>
@endif