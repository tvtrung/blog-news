<section class="html-mobile">
	<br>
	<div class="container-fluid">
		{{-- @if($post_item_latest_1 != null || $post_item_latest_2 != null)
		<div class="box-posts-cat">
			<div class="bg-title-cat">
				<div class="title-category">
					Tin mới nhất
				</div>
			</div>
		</div>
		@if($post_item_latest_1 != null)
		@foreach($post_item_latest_1 as $item)
		<div class="box-post-item">
			<div class="post-item-2">
				<div class="row">
					<div class="col-4">
						<div class="img">
							<a href="{{$item['url']}}">
								<img class="b-lazy"
									src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
									data-src="{{$item['photo']}}"
									data-src-small="{{$item['photo']}}"
									alt="{{$item['title']}}" />
							</a>
						</div>
					</div>
					<div class="col-8" style="padding-left: 0">
						<div class="title">
							<a href="{{$item['url']}}"><h3>{{$item['title']}}</h3></a>
						</div>
						<div class="info">
							<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
							<i class="fa fa-calendar" aria-hidden="true"></i> Ngày {{date('d/m/Y',strtotime($item['created_at']))}}<span style="margin: 0 5px;">|</span>
							<i class="fa fa-eye" aria-hidden="true"></i> {{$item['view']}}
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		@endif
		@if($post_item_latest_2 != null)
		@foreach($post_item_latest_2 as $item)
		<div class="box-post-item">
			<div class="post-item-2">
				<div class="row">
					<div class="col-4">
						<div class="img">
							<a href="{{$item['url']}}">
								<img class="b-lazy"
									src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
									data-src="{{$item['photo']}}"
									data-src-small="{{$item['photo']}}"
									alt="{{$item['title']}}" />
							</a>
						</div>
					</div>
					<div class="col-8" style="padding-left: 0">
						<div class="title">
							<a href="{{$item['url']}}"><h3>{{$item['title']}}</h3></a>
						</div>
						<div class="info">
							<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
							<i class="fa fa-calendar" aria-hidden="true"></i> Ngày {{date('d/m/Y',strtotime($item['created_at']))}}<span style="margin: 0 5px;">|</span>
							<i class="fa fa-eye" aria-hidden="true"></i> {{$item['view']}}
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		@endif
		@endif --}}

		@for($i = 1; $i <= 5; $i++)
		@if($row_cat[$i] != null)
		<div class="box-posts-cat">
			<div class="bg-title-cat">
				<div class="title-category">
					<a href="{{route('page.posts',['slug'=>$row_cat[$i]->slug])}}">{{$row_cat[$i]->title}}</a>
				</div>
			</div>
		</div>
		@foreach($list_post[$i] as $item)
		<div class="box-post-item">
			<div class="post-item-2">
				<div class="row">
					<div class="col-4">
						<div class="img">
							<a href="{{$url_post[$item->id]}}">
								<img class="b-lazy"
									src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
									data-src="{{url('uploads/posts'. '/' . $item->photo)}}"
									data-src-small="{{url('uploads/posts'. '/' . $item->photo)}}"
									alt="{{$item->title}}" />
							</a>
						</div>
					</div>
					<div class="col-8" style="padding-left: 0">
						<div class="title">
							<a href="{{$url_post[$item->id]}}"><h3>{{$item->title}}</h3></a>
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
		<div class="border-bottom-orange"></div>
		@endif
		@endfor
	</div>
	<div class="clearfix"></div><br>
	<div class="container-fluid">
		@include('page.main.sidebar')
	</div>
</section>