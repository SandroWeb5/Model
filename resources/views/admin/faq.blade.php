@extends('layouts.admin')

@section('content')
@include('admin.components.nav')
@include('admin.components.sidebar')
	<div class="content-wrapper">
		<div class="row mt-4 ml-4">
			<nav aria-label="breadcrumb" class="submenu mx-2">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Avisos e Faqs</li>
				</ol>
			</nav>
		</div>
		<div class="row m-4">
			<div class="col-md-6">
				@if(Auth::user()->perm != 'User')
				<div class="card text-white bg-secondary mx-2 tb">
					<div class="card-header">
						<h4>Avisos Gerais <small>Para Todos</small></h4>
						<div class="card-tools">
							<button class="btn btn-dark btn-sm"data-toggle="modal" data-target="#Criar">Criar <i class="fas fa-bullhorn fa-fw"></i></button>
						</div>
					</div>
					<div class="card-body bg-white">
						<ul class="AvisoS">
							@foreach($registros as $registro)
							<li>
								<p>{{$registro->pergunta}}</p>
								<span>{{date('d-m-Y H:i:s', strtotime($registro->created_at))}}</span>
								<a href="{{url('admin/faq/delete')}}/{{$registro->id}}" class="delete"><i class="fas fa-times red"></i></a>
								<hr/>
							</li>
							@endforeach
						</ul>
					</div>
					<div class="card-footer"></div>
				</div>
				@endif
			</div>
			<div class="col-md-6">
				<div class="card text-white bg-secondary mx-2 tb">
					<div class="card-header">
						<h4>Faqs <small>Perguntas e Respostas</small></h4>
						<div class="card-tools">
							<button class="btn btn-dark btn-sm"data-toggle="modal" data-target="#Criar">Cadastrar <i class="fas fa-users fa-fw"></i></button>
						</div>
					</div>
					<div class="card-body bg-white"></div>
					<div class="card-footer"></div>
				</div>
			</div>
		</div>
	</div>
@include('admin.components.aside')
@include('admin.modal.modalFaqs')
@endsection

@section('scripts')
	@if(session('sucesso'))
		<script>
			Swal.fire({
			    title: 'Sucesso!!',
			    text: 'Aviso Criado com Sucesso!!',
			    type: 'success',
			    showConfirmButton: false,
			    timer: 1500
			});
		</script>
	@endif
	@if(session('delete'))
		<script>
			Swal.fire({
			    title: 'Deletado!!',
			    text: 'Aviso Deletado com Sucesso!!',
			    type: 'success',
			    showConfirmButton: false,
			    timer: 1500
			});
		</script>
	@endif
@endsection