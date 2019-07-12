@extends('layouts.admin')

@section('content')
@include('admin.components.nav')
@include('admin.components.sidebar')
    <div class="content-wrapper">
        <div class="content pt-3">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-6">
								<div class="small-box bg-info">
									<div class="inner">
										<h3>{{$users}}</h3>
										<p>Usuários</p>
									</div>
									<div class="icon">
										<i class="fas fa-user-friends"></i>
									</div>
									<a href="{{route('usuarios')}}" class="small-box-footer">
										Mains informação <i class="fas fa-arrow-circle-right"></i>
									</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="small-box bg-success">
									<div class="inner">
										<h3>{{$agendas}}</h3>
										<p>Agenda</p>
									</div>
									<div class="icon">
										<i class="fas fa-address-book"></i>
									</div>
									<a href="{{route('agenda')}}" class="small-box-footer">
										Mains informação <i class="fas fa-arrow-circle-right"></i>
									</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="small-box bg-warning">
									<div class="inner">
										<h3>{{$logs}}</h3>
										<p>Ações</p>
									</div>
									<div class="icon">
										<i class="fas fa-clipboard-check"></i>
									</div>
									<a href="{{route('logs')}}" class="small-box-footer">
										Mains informação <i class="fas fa-arrow-circle-right"></i>
									</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="small-box bg-danger">
									<div class="inner">
										<h3>{{$aviso}}</h3>
										<p>Avisos</p>
									</div>
									<div class="icon">
										<i class="fab fa-buffer"></i>
									</div>
									<a href="{{route('faq')}}" class="small-box-footer"> 
										Mains informação <i class="fas fa-arrow-circle-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="row">
							<div class="col-md-12">
								<div class="card bg-light">
									<div class="card-body pt-0">
										<div class="row">
											<div class="col-7 DD">
												<h1 class="lead mt-5">
													<b>{{ Auth::user()->name }}</b><br/>
													<small>{{ Auth::user()->perm }}</small>
												</h1>
												<p class="text-muted text-sm"><b>Ultimo Acesso:  </b></p>
												<ul class="ml-4 mb-1 fa-ul text-muted">
													<li class="small">{{date('d-m-Y H:i:s', strtotime($ultimo->created_at))}}</li>
												</ul>
												<p class="text-muted text-sm"><b>Ações Registradas:  </b></p>
												<ul class="ml-4 mb-1 fa-ul text-muted">
													<li class="small">{{$acoes}}</li>
												</ul>
											</div>
											<div class="col-5 text-center mt-5">
												<img src="{{asset('public/adminlte/img/uploads/'.Auth::user()->photo)}}" alt="" class="img-circle img-fluid">
											</div>
										</div>
									</div>
									<div class="card-footer text-right">
										<a href="{{route('dados')}}" class="nav-link" data-tooltip="tooltip" data-placement="left" title="Meus Dados">Atualizar Dados <i class="fa fa-user Anime"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<ul class="BoX">
							<li>	
								<div class="card card-default">
									<div class="card-body">
										
									</div>
								</div>
							</li>
							<li>	
								<div class="card card-default">
									<div class="card-body">

									</div>
								</div>
							</li>
							<li>	
								<div class="card card-default">
									<div class="card-body">

									</div>
								</div>
							</li>
							<li>	
								<div class="card card-default">
									<div class="card-body">

									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-md-5">
						<div class="card card-default CardS">
							<div class="card-header">
								<h3 class="card-title">
									<i class="fas fa-bullhorn"></i>
									Avisos Gerais
								</h3>
							</div>
							<div class="card-body">
								@foreach($avisos as $aviso)
								<div class="callout callout-info AviSO">
									<p>{{$aviso->pergunta}}</p>
									<span class="AvisOSS">{{date('d-m-Y H:i:s', strtotime($aviso->created_at))}}</span>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
@include('admin.components.aside')
@endsection

@section('styles')
@endsection

@section('scripts')
@endsection