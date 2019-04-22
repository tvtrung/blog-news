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
						<h2><a href="{{$item['url']}}">{{$item['title_limit']}}</a></h2>
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
						<h3><a href="{{$item['url']}}">{{$item['title_limit']}}</a></h3>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		@endif
	</div>
	@endif
</section>