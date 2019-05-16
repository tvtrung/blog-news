{{-- @include('page.main.position-home.position-latest') --}}
<section class="block-posts">
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
</section>