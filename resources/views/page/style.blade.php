<meta charset="UTF-8">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="robots" content="{{isset($configs_data['seo']['seo-robots'])?$configs_data['seo']['seo-robots']:''}}" />
<meta name="keywords" content="{{isset($configs_data['seo']['seo-keywords'])?$configs_data['seo']['seo-keywords']:''}}" />
<meta name="description" content="{{isset($configs_data['seo']['seo-description'])?$configs_data['seo']['seo-description']:''}}" />
<meta name="language" content="{{isset($configs_data['seo']['seo-language'])?$configs_data['seo']['seo-language']:''}}" />
<meta name="copyright" content="{{isset($configs_data['seo']['seo-copyright'])?$configs_data['seo']['seo-copyright']:''}}" />
<meta name="distribution" content="{{isset($configs_data['seo']['seo-distribution'])?$configs_data['seo']['seo-distribution']:''}}" />
<meta name="author" content="{{isset($configs_data['seo']['seo-author'])?$configs_data['seo']['seo-author']:''}}" />
<meta name="REVISIT-AFTER" content="{{isset($configs_data['seo']['seo-revisit-after'])?$configs_data['seo']['seo-revisit-after']:''}}" />
<meta name="RATING" content="{{isset($configs_data['seo']['seo-rating'])?$configs_data['seo']['seo-rating']:''}}" />
<meta property="og:title" content="{{isset($configs_data['seo']['seo-og-title'])?$configs_data['seo']['seo-og-title']:''}}">
<meta property="og:description" content="{{isset($configs_data['seo']['seo-og-description'])?$configs_data['seo']['seo-og-description']:''}}r">
<meta property="og:image" content="{{isset($configs_data['seo']['seo-og-image'])?$configs_data['seo']['seo-og-image']:''}}">
<meta property="og:url" content="{{isset($configs_data['seo']['seo-og-url'])?$configs_data['seo']['seo-og-url']:''}}">
<meta property="og:type" content="{{isset($configs_data['seo']['seo-og-type'])?$configs_data['seo']['seo-og-type']:''}}"> 

@if(!isset($configs_data['optimize']['css-js-inpage']) || $configs_data['optimize']['css-js-inpage'] == 0 || $configs_data['optimize']['css-js-inpage'] == null)
<link rel="stylesheet" type="text/css" href="style/bootstrap-4.0.0/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style/font-family/Roboto/font.css" >
<link rel="stylesheet" type="text/css" href="style/menu-mobile/css/webslidemenu.css">
<link rel="stylesheet" type="text/css" href="style/menu-mobile/css/tree-menu.css">
<link rel="stylesheet" type="text/css" href="style/menu-mobile/css/style.css">
<link rel="stylesheet" type="text/css" href="style/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="style/slick/slick.css" >
<link rel="stylesheet" type="text/css" href="style/css/mystyle.css">
@else
<style>
{!! file_get_contents(public_path('/style/bootstrap-4.0.0/bootstrap.min.css')) !!}
{!! str_replace('../', '/style/font-awesome-4.7.0/', file_get_contents(public_path('/style/font-awesome-4.7.0/css/font-awesome.min.css'))) !!}
{!! str_replace('font/', '/style/font-family/Roboto/font/', file_get_contents(public_path('/style/font-family/Roboto/font.css'))) !!}
{!! str_replace('../', '/style/menu-mobile/', file_get_contents(public_path('/style/menu-mobile/css/webslidemenu.css'))) !!}
{!! str_replace('../', '/style/menu-mobile/', file_get_contents(public_path('/style/menu-mobile/css/tree-menu.css'))) !!}
{!! str_replace('../', '/style/menu-mobile/', file_get_contents(public_path('/style/menu-mobile/css/style.css'))) !!}
{!! str_replace('fonts/', '/style/slick/fonts/', file_get_contents(public_path('style/slick/slick-theme.css'))) !!}
{!! file_get_contents(public_path('style/slick/slick.css')) !!}
{!! str_replace('../', '/style/', file_get_contents(public_path('/style/css/mystyle.css'))) !!}
</style>
@endif
@yield('style')
{!!isset($configs_data['seo']['google-analytics'])?$configs_data['seo']['google-analytics']:''!!}