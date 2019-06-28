@extends('page.index')
@section('title',isset($configs_data['seo']['title-trangchu'])?$configs_data['seo']['title-trangchu']:'Trang chủ')
@section('keywords',isset($configs_data['seo']['seo-keywords'])?$configs_data['seo']['seo-keywords']:'')
@section('description',isset($configs_data['seo']['seo-description'])?$configs_data['seo']['seo-description']:'')
@section('content')
<main>
	@include('page.main.home-pc')
</main>
@endsection
@section('style')
@endsection
@section('script')

@endsection