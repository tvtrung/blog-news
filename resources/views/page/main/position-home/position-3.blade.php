@if($row_cat[3] != null)
<div class="col-md-12">
	<div class="box-posts-cat">
		<div class="bg-title-cat">
			<div class="title-category">
				<a href="{{route('page.posts',['slug'=>$row_cat[3]->slug])}}">{{$row_cat[3]->title}}<a>
			</div>
		</div>
		<div class="row">
			<?php $i = 0; ?>
			@foreach($list_post[3] as $item)
			<?php $i++;?>
			<div class="col-md-6" @if($i == 1) style="padding-right: 0" @else style="padding-left: 0" @endif>
				<div class="box-post-item">
					<div class="post-item-1">
						<div class="img">
							<a href="{{$url_post[$item->id]}}"><img src="{{url('uploads/posts'. '/' . $item->photo)}}" class="width100" alt=""></a>
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
			</div>
			@endforeach
		</div>
		<div class="border-bottom-orange"></div>
	</div>
</div>
@endif