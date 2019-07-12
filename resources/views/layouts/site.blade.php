<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$s->titulo}} - @yield('subtitulo')</title>
    <meta name="title" content="{{$s->titulo}}" /> 
    <meta name="Keywords" content="{{$s->chaves}}" />
    <meta name="Description" content="{{$s->descricao}}" />
    <meta name="language" content="Portuguese" />
    <meta name="author" content="SandroWeb - www.sandroweb.com.br" /> 
    <meta name="copyright" content="© {{$s->slogan}} - By: SandroWeb" /> 
    <meta property="og:title" content="{{$s->titulo}}"/> 
    <meta property="og:url" content="@yield('url')"/> 
    <meta property="og:image" content="{{ asset('public/img/image_redes.png') }}"/> 
    <meta property="og:site_name" content="{{$s->slogan}}"/> 
    <meta property="og:description" content="{{$s->descricao}}"/>
    <link href="https://fonts.googleapis.com/css?family=Abel|BenchNine|Pacifico|Roboto|Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="shortcut icon" href="{{ asset('public/img/favicon.png') }}">
    <link href="{{asset('public/css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/app.css')}}" rel="stylesheet">
  </head>
  <body id="top-section">
	<div class="loader"><img src="{{asset('public/img/loading.gif')}}" alt="loading..."></div>
    <article class="fadeIn">
    @yield('content')
    </article>
    <script type="text/javascript" src="{{asset('public/js/jquery-3.4.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/all.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/app.js')}}"></script>
  </body>
</html>
  