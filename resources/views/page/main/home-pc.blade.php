{{-- @include('page.main.position-home.position-latest') --}}
{{-- <section class="block-posts">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				@if($row_cat != null)
				<div class="block-1">
					<div class="row">
						@include('page.main.position-home.position-1')
						@include('page.main.position-home.position-2')
					</div>
				</div>
				<div class="block-2">
					<div class="row">
						@include('page.main.position-home.position-3')
					</div>
				</div>
				<div class="block-3">
					@include('page.main.position-home.position-4')
				</div>
				@endif
			</div>
			<div class="col-md-4">
				@include('page.main.sidebar')
			</div>
		</div>
		@if($row_cat != null)
		@include('page.main.position-home.position-5')
		@endif
	</div>
</section> --}}
<section class="block-posts">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="box-posts-cat">
					@if(isset($data_cat) && is_array($data_cat) && !empty($data_cat))
					@foreach($data_cat as $item)
						@php 
							if(empty($item['post'])){
								continue;
							}
						@endphp
						<div class="bg-title-cat">
							<div class="title-category">
								<a href="{{ route('page.posts',['slug'=>$item['slug']]) }}">{{$item['title']}}</a>
							</div>
						</div>
						@if(isset($item['post']) && is_array($item['post']) && !empty($item['post']))
						<div class="row">
							@foreach($item['post'] as $post)
								<div class="col-md-6 col-lg-4 col-xl-3">
									<div class="box-post-item">
										<div class="post-item-1">
											<div class="img">
												<a href="{{route('page.posts',['slug'=>$item['slug'] . '/' . $post['slug']])}}">
													<img class="b-lazy img-home-page"
														src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
														data-src="{{url('uploads/posts'. '/' . img_size($post['photo'], $post['photo_resize'], 251, 140))}}"
														data-src-small="{{url('uploads/posts'. '/' . img_size($post['photo'], $post['photo_resize'], 251, 140))}}"
														alt="{{$post['title']}}" />
												</a>
											</div>
											<div class="item-text">
												<div class="title">
													<h3 style="line-height: 20px;"><a href="{{route('page.posts',['slug'=>$item['slug'] . '/' . $post['slug']])}}">{{$post['title']}}</a></h3>
												</div>
												<div class="info">
													<span>(<i>Ngày: {{date('d/m/Y',strtotime($post['created_at']))}}</i>)</span>
													{{-- <span style="margin: 0 5px;">|</span>
													<i class="fa fa-eye" aria-hidden="true"></i> {{$post['view']}} --}}
												</div>
												<div class="des">
													{!!strip_tags($post['description'])!!}
												</div>
												<div class="link">
													<a href="{{route('page.posts',['slug'=>$item['slug'] . '/' . $post['slug']])}}">Xem thêm &#xbb;</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
						@endif
						<div class="border-bottom-orange"></div>
					@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>
</section>