@extends('page.index')
@section('title',isset($configs_data['seo']['title-hoidap'])?$configs_data['seo']['title-hoidap']:'')
@section('style')

@if(!isset($configs_data['optimize']['css-js-inpage']) || $configs_data['optimize']['css-js-inpage'] == 0 || $configs_data['optimize']['css-js-inpage'] == null)
	<link rel="stylesheet" type="text/css" href="style/uikit/uikit.css">
	<link rel="stylesheet" type="text/css" href="style/uikit/elements.css">
	<link rel="stylesheet" type="text/css" href="style/uikit/custom.css">
@else
	<style type="text/css">
		{!! file_get_contents(public_path('/style/uikit/uikit.css')); !!}
		{!! file_get_contents(public_path('/style/uikit/elements.css')); !!}
		{!! file_get_contents(public_path('/style/uikit/custom.css')); !!}
	</style>
@endif

@endsection
@section('content')
	<main class="page-sub page-faq">
	<div class="banner lazy" data-src="style/images/banner-banggia.png">
		<div class="container">
			<h1>- Hỏi đáp -</h1>
		</div>
	</div>
	<div class="content">
		@if(isset($data) && count($data) > 0)
		<div class="container">
			<div class="uk-accordion idz-accordion" data-uk-accordion>	
				@foreach($data as $item)
				<h3 class="uk-accordion-title idz-text-22px">{{$item->question}}</h3>
			    <div class="uk-accordion-content">
			    	<p class="idz-lineheight-1-8">{!!$item->content!!}</p>
			    </div>
			    @endforeach	
			</div>
		</div>
		@endif
		<br>
		<div class="form-question">
			<div class="container">
				@if(session('success'))
                <div class="alert alert-success update-alert">                           
                    <li>{{ session('success') }}</li>
                </div>
                @endif
                @if (count($errors) > 0)
	                <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
	                </div>
	            @endif
				<form action="{{route('faq.postquestion')}}" method="post" id="submit-form-faq">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							  	<label><strong>Đặt câu hỏi:</strong></label>
							  	<textarea name="question" class="form-control" rows="8"></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							  	<label><strong>Tên:</strong></label>
							  	<input type="text" class="form-control" name="fullname" required value="">
							</div>
							<div class="form-group">
							  	<label><strong>Email:</strong></label>
							  	<input type="email" class="form-control" name="email" required value="">
							</div>
							<div class="form-group">
							  	<label><strong>Website:</strong></label>
							  	<input type="text" class="form-control" name="website" required value="">
							</div>
						</div>
					</div>
					<input type="hidden" class="form-control" name="answer" value="0">
					<input type="hidden" value="{{ csrf_token() }}" name="_token">
					<div><a href="#" onclick="document.getElementById('submit-form-faq').submit();return false;" class="btn-gradient">Gửi câu hỏi <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
				</form>
			</div>
		</div>
	</div>
</main>
@endsection
@section('script')
@if(!isset($configs_data['optimize']['css-js-inpage']) || $configs_data['optimize']['css-js-inpage'] == 0 || $configs_data['optimize']['css-js-inpage'] == null)
<script src="style/uikit/uikit.min.js"></script>
<script src="style/uikit/accordion.js"></script>
@else
<script type="text/javascript">
	{!! file_get_contents(public_path('/style/uikit/uikit.min.js')); !!}
	{!! file_get_contents(public_path('/style/uikit/accordion.js')); !!}
</script>
@endif
@endsection