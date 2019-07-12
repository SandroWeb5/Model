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
    <link rel="stylesheet" href="{{asset('public/fontawesome/css/all.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
    <div class="loader"><img src="{{asset('public/img/loading.gif')}}" alt="loading..."></div>
    <main class="fadeIn">
    <div class="login-box">
        <div class="login-logo">
            <img src="{{asset('public/adminlte/img/logo.png')}}" alt="">
        <a href=""><b>App</b>SyS</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required autocomplete="email" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" id="password" name="password"  class="form-control @error('password') is-invalid @enderror" placeholder="Senha" required autocomplete="Senha" placeholder="Senha">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block btn-lg bg3">Entrar</button>
                        </div>
                    </div>
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
    <script type="text/javascript" src="{{asset('public/js/sweetalert2.all.min.js')}}"></script>
</body>
</html>