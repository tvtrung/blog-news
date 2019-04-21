<section class="home-post-latest only-pc">
	@if($post_item_latest_1 != null || $post_item_latest_2 != null)
	<div class="container">
		@if($post_item_latest_1 != null)
		<div class="row">
			@foreach($post_item_latest_1 as $item)
			<div class="col-md-6">
				<div class="item">
					<a href="{{$item['url']}}"><img src="{{$item['photo']}}" alt="{{$item['title']}}" class="width100"></a>
					<div class="title">
						<a href="{{$item['url']}}"><h2>{{$item['title_limit']}}</h2></a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		@endif
		<br>
		@if($post_item_latest_2 != null)
		<div class="row">
			@foreach($post_item_latest_2 as $item)
			<div class="col-md-4">
				<div class="item">
					<a href="{{$item['url']}}"><img src="{{$item['photo']}}" alt="{{$item['title']}}" class="width100"></a>
					<div class="title">
						<a href="{{$item['url']}}"><h2>{{$item['title_limit']}}</h2></a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		@endif
	</div>
	@endif
</section>