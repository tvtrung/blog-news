@extends('page.index')
@section('title','Kết quả tìm kiếm-'.$q)
{{-- @section('title',isset($configs_data['seo']['title-trangchu'])?$configs_data['seo']['title-trangchu']:'') --}}
@section('keywords',isset($configs_data['seo']['seo-keywords'])?$configs_data['seo']['seo-keywords']:'')
@section('description',isset($configs_data['seo']['seo-description'])?$configs_data['seo']['seo-description']:'')
@section('style')
<style type="text/css">
	.pagination{
		display: inline-flex;
    	margin-top: 20px;
	}
	.list-posts h1{
		margin-top: 0;
	    color: #f68b1e;
	    font-weight: bold;
	    font-size: 15px;
	}
</style>
@endsection
@section('content')
<section class="list-posts">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>Kết quả tìm kiếm cho từ khóa "{{$q}}"</h1>
				@if(isset($data_search) && $data_search->count() >= 1)
					@foreach($data_search as $item)
					<div class="box-post-item">
						<div class="post-item-2">
							<div class="row">
								<div class="col-4">
									<div class="img">
										<a href="{{$url_post[$item->id]}}"><img src="{{url('/')}}/uploads/posts/{{$item->photo}}" class="width100" alt=""></a>
									</div>
								</div>
								<div class="col-8" style="padding-left: 0">
									<div class="title">
										<a href="{{$url_post[$item->id]}}"><h3>{!!$item->title!!}</h3></a>
									</div>
									<div class="info">
										<i class="fa fa-user" aria-hidden="true"></i> Admin<span style="margin: 0 5px;">|</span>
										<i class="fa fa-calendar" aria-hidden="true"></i> Ngày {{date('d/m/Y', strtotime($item->created_at))}}<span style="margin: 0 5px;">|</span>
										<i class="fa fa-eye" aria-hidden="true"></i> {!!$item->view!!}
									</div>
									<div class="des only-pc">
										{!!$item->description!!}
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					<div class="border-bottom-orange"></div>
					<div class="text-center">
						{{ $data_search->links() }}
					</div>
				@else
					<div style="font-size: 13px;">Không có kết quả!</div>
				@endif
			</div>
			<div class="col-md-4">
				@include('page.main.sidebar')
			</div>
		</div>
	</div>
</section>
@endsection