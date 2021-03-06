<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="{{URL::asset('lib/html5shiv.js')}}"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/page.css')}}" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('static/h-ui/css/H-ui.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('static/h-ui.admin/css/H-ui.admin.css')}}" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('lib/Hui-iconfont/1.0.8/iconfont.css')}}" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('static/h-ui.admin/skin/default/skin.css')}}" id="skin" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('static/h-ui.admin/css/style.css')}}" />
<link rel="stylesheet" href="{{URL::asset('static/layui/css/layui.css')}}" media="all">
@section('css')
@show
<title>我的桌面</title>
</head>
@section('common')

@show

<!--[if IE 6]>
<script type="text/javascript" src="{{URL::asset('lib/DD_belatedPNG_0.0.8a-min.js')}}" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<script type="text/javascript" src="{{URL::asset('lib/jquery/1.9.1/jquery.min.js')}}"></script> 
<script type="text/javascript" src="{{URL::asset('static/h-ui/js/H-ui.min.js')}}"></script> 
<script type="text/javascript" src="{{URL::asset('static/layui/layui.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('static/h-ui.admin/js/H-ui.admin.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('lib/layer/2.4/layer.js')}}"></script>
<script>
$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
</script>
@section('js')

@show
</body>
</html>