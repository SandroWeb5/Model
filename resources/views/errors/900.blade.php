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
	<link rel="stylesheet" href="{{asset('public/fontawesome/css/all.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
    <main class="fadeIn">
    <div class="login-box">
        <div class="login-logo">
            <img src="{{asset('public/adminlte/img/logo.png')}}" alt="">
        	<a><b>App</b>SyS</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body text-center">
				<h3 style="font-family: Nunito;">Login Suspenso!<br/><small>Entre em contato com o Administrador.</small></h3>
				<a class="btn btn-primary btn-block btn-lg bg3" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Voltar p/ site</a>
	            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
	                @csrf
	            </form>
            </div>
        </div>
    </div>
	</main>
	<script type="text/javascript" src="{{asset('public/js/jquery-3.4.0.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/adminlte/js/adminlte.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/adminlte/js/all.js')}}"></script>
</body>
</html>