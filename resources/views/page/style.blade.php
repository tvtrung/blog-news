<meta charset="UTF-8">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="canonical" href="{{URL::current()}}" />
<meta name="robots" content="{{isset($configs_data['seo']['seo-robots'])?$configs_data['seo']['seo-robots']:''}}" />
<meta name="keywords" content="@yield('keywords')" />
<meta name="description" content="@yield('description')" />
<meta name="language" content="{{isset($configs_data['seo']['seo-language'])?$configs_data['seo']['seo-language']:''}}" />
<meta name="copyright" content="{{isset($configs_data['seo']['seo-copyright'])?$configs_data['seo']['seo-copyright']:''}}" />
<meta name="distribution" content="{{isset($configs_data['seo']['seo-distribution'])?$configs_data['seo']['seo-distribution']:''}}" />
<meta name="author" content="{{isset($configs_data['seo']['seo-author'])?$configs_data['seo']['seo-author']:''}}" />
<meta name="REVISIT-AFTER" content="{{isset($configs_data['seo']['seo-revisit-after'])?$configs_data['seo']['seo-revisit-after']:''}}" />
<meta name="RATING" content="{{isset($configs_data['seo']['seo-rating'])?$configs_data['seo']['seo-rating']:''}}" />
{{--Facebook Comment--}}
@if(isset($configs_data['fb_social']['fb_app_id']) && isset($configs_data['fb_social']['fb_app_id']) != null)
@if(isset($configs_data['fb_social']['fb_admins']) && isset($configs_data['fb_social']['fb_admins']) != null)
<meta property="fb:admins" content="{{isset($configs_data['fb_social']['fb_admins'])?$configs_data['fb_social']['fb_admins']:''}}"/>
@else
<meta property="fb:app_id" content="{{isset($configs_data['fb_social']['fb_app_id'])?$configs_data['fb_social']['fb_app_id']:''}}"/>
@endif
@endif
{{--Facebook Like / Share--}}
<meta property="og:title" content="@yield('og_title')">
<meta property="og:description" content="@yield('og_description')">
<meta property="og:image" content="@yield('og_image')">
<meta property="og:url" content="@yield('og_url')">
<meta property="og:type" content="@yield('og_type')">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
@if(!isset($configs_data['optimize']['css-js-inpage']) || $configs_data['optimize']['css-js-inpage'] == 0 || $configs_data['optimize']['css-js-inpage'] == null)
<link rel="stylesheet" type="text/css" href="/style/bootstrap-4.0.0/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/style/font-awesome-4.7.0/css/font-awesome.min.css">
{{-- <link rel="stylesheet" type="text/css" href="/style/font-family/Roboto/font.css" > --}}
<link rel="stylesheet" type="text/css" href="/style/menu-mobile/css/webslidemenu.css">
<link rel="stylesheet" type="text/css" href="/style/menu-mobile/css/tree-menu.css">
<link rel="stylesheet" type="text/css" href="/style/menu-mobile/css/style.css">
<link rel="stylesheet" href="/style/owl-carousel/custom.css" >
<link rel="stylesheet" href="/style/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="/style/owl-carousel/owl.theme.css">
{{--
<link rel="stylesheet" type="text/css" href="/style/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="/style/slick/slick.css" >
--}}
<link rel="stylesheet" type="text/css" href="/style/css/mystyle.css">
@else
<style>
{!! file_get_contents(public_path('/style/bootstrap-4.0.0/bootstrap.min.css')) !!}
{!! str_replace('../', '/style/font-awesome-4.7.0/', file_get_contents(public_path('/style/font-awesome-4.7.0/css/font-awesome.min.css'))) !!}
{{-- {!! str_replace('font/', '/style/font-family/Roboto/font/', file_get_contents(public_path('/style/font-family/Roboto/font.css'))) !!} --}}
{!! str_replace('../', '/style/menu-mobile/', file_get_contents(public_path('/style/menu-mobile/css/webslidemenu.css'))) !!}
{!! str_replace('../', '/style/menu-mobile/', file_get_contents(public_path('/style/menu-mobile/css/tree-menu.css'))) !!}
{!! str_replace('../', '/style/menu-mobile/', file_get_contents(public_path('/style/menu-mobile/css/style.css'))) !!}
{!! file_get_contents(public_path('/style/owl-carousel/custom.css')) !!}
{!! file_get_contents(public_path('/style/owl-carousel/owl.carousel.css')) !!}
{!! file_get_contents(public_path('/style/owl-carousel/owl.theme.css')) !!}
{{--
{!! str_replace('fonts/', '/style/slick/fonts/', file_get_contents(public_path('style/slick/slick-theme.css'))) !!}
{!! file_get_contents(public_path('style/slick/slick.css')) !!}
--}}
{!! str_replace('../', '/style/', file_get_contents(public_path('/style/css/mystyle.css'))) !!}
</style>
@endif
@yield('style')
{!!isset($configs_data['seo']['google-analytics'])?$configs_data['seo']['google-analytics']:''!!}