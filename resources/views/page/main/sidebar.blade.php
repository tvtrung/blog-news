<div class="sidebar">
	<div class="banner-sidebar">
		@if(isset($images_data['banner_sidebar_1']))
		@foreach($images_data['banner_sidebar_1'] as $item)
		<a href="{{$item->link}}"><img src="/uploads/images/{{$item->photo}}" alt="{{$item->title}}" class="width100"></a>
		@endforeach
		@endif
	</div>
	<div class="box-posts-cat">
		<div class="bg-title-cat">
			<div class="title-category">
				Social
			</div>
		</div>
	</div>
	<div>{!!$configs_data['fanpage']['iframe-fanpage']!!}</div>
	<div class="banner-sidebar">
		@if(isset($images_data['banner_sidebar_2']))
		@foreach($images_data['banner_sidebar_2'] as $item)
		<a href="{{$item->link}}"><img src="/uploads/images/{{$item->photo}}" alt="{{$item->title}}" class="width100"></a>
		@endforeach
		@endif
	</div>
</div>