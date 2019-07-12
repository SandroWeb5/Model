<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>AppSys</title>
	<link rel="shortcut icon" href="{{ asset('public/adminlte/img/favicon.png') }}">
	<link rel="stylesheet" href="{{asset('public/css/all.css')}}">
	<link rel="stylesheet" href="{{asset('public/adminlte/css/all.css')}}">
	<link rel="stylesheet" href="{{asset('public/adminlte/css/adminlte.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/sweetalert2.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/fontawesome/css/all.min.css')}}">
@yield('styles')
</head>
<body class="hold-transition sidebar-mini">
	<div class="loader"><img src="{{asset('public/img/loading.gif')}}" alt="loading..."></div>
    <main class="fadeIn">
@yield('content')
	</main>
	<script type="text/javascript" src="{{asset('public/js/jquery-3.4.0.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/adminlte/js/adminlte.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/adminlte/js/all.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/dataTables.bootstrap4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/sweetalert2.all.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/adminlte/js/jquery.mask.min.js')}}"></script>
@yield('scripts')
@if(Auth::user()->status != 'S')
	<script>window.location = "{{route('error_900')}}";</script>
@endif
</body>
</html>
