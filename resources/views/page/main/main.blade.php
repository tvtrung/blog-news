@extends('page.index')
@section('title',isset($configs_data['seo']['title-trangchu'])?$configs_data['seo']['title-trangchu']:'')
@section('content')
<main>
	<div class="only-pc">@include('page.main.home-pc')</div>
	<div class="only-mobile">@include('page.main.home-mobile')</div>
</main>
@endsection
@section('style')
@endsection
@section('script')

@endsection