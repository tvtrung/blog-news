@if($row_cat[2] != null)
	<div class="col-md-6" @if($row_cat[1] != null) style="padding-left: 0" @else style="padding-right:0" @endif>
		<div class="box-posts-cat">
			<div class="bg-title-cat">
				<div class="title-category">
					<a href="{{route('page.posts',['slug'=>$row_cat[2]->slug])}}">{{$row_cat[2]->title}}</a>
				</div>
			</div>
			@if(isset($list_post[2]) && $list_post[2] != null)
			<?php $i = 0; ?>
			@foreach($list_post[2] as $item)
			<?php $i++;if($i == 2) break; ?>
			<div class="box-post-item">
				<div class="post-item-1">
					<div class="img">
						<a href="{{$url_post[$item->id]}}"><img src="{{url('uploads/posts'. '/' . $item->photo)}}" class="width100" alt="{{$item->title}}"></a>
					</div>
					<div class="title">
						<a href="{{$url_post[$item->id]}}">{{$item->title}}</a>
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
			@endforeach
			<?php $i = 0; ?>
			@foreach($list_post[2] as $item)
			<?php $i++;if($i == 1) continue; ?>
			<div class="box-post-item">
				<div class="post-item-2">
					<div class="row">
						<div class="col-md-4">
							<div class="img">
								<a href="{{$url_post[$item->id]}}"><img src="{{url('uploads/posts'. '/' . $item->photo)}}" class="width100" alt="{{$item->title}}"></a>
							</div>
						</div>
						<div class="col-md-8" style="padding-left: 0">
							<div class="title">
								<a href="{{$url_post[$item->id]}}">{{$item->title}}</a>
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
			@endif
		</div>
		<div class="border-bottom-orange"></div>
	</div>
@endif