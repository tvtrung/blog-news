<div class="sidebar">
	<div class="banner-sidebar">
		@if(isset($images_data['banner_sidebar_1']))
		@foreach($images_data['banner_sidebar_1'] as $item)
		<a href="{{$item->link}}">
			<img class="b-lazy"
				src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
				data-src="/uploads/images/{{$item->photo}}"
				data-src-small="/uploads/images/{{$item->photo}}"
				alt="{{$item->title}}" />
		</a>
		@endforeach
		@endif
	</div>
	@if(isset($configs_data['fanpage']['iframe-fanpage']))
		<div class="box-posts-cat">
			<div class="bg-title-cat">
				<div class="title-category">
					Social
				</div>
			</div>
		</div>
	@endif
	<div>{!!isset($configs_data['fanpage']['iframe-fanpage'])?$configs_data['fanpage']['iframe-fanpage']:''!!}</div>
	<div class="banner-sidebar">
		@if(isset($images_data['banner_sidebar_2']))
		@foreach($images_data['banner_sidebar_2'] as $item)
		<a href="{{$item->link}}">
			<img class="b-lazy"
				src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
				data-src="/uploads/images/{{$item->photo}}"
				data-src-small="/uploads/images/{{$item->photo}}"
				alt="{{$item->title}}" />
		</a>
		@endforeach
		@endif
	</div>
</div>