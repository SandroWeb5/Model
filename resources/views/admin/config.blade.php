@extends('layouts.admin')

@section('content')
@include('admin.components.nav')
@include('admin.components.sidebar')
	<div class="content-wrapper">
		<div class="content pt-3">
			<nav aria-label="breadcrumb" class="submenu mx-2">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Config</li>
				</ol>
			</nav>

		<form action="{{route('config_update')}}" method="post" enctype="multipart/form-data" class="md-form">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-md-6">
					<div class="card text-white bg-secondary mx-2 tb">
						<div class="card-header">
							<h4 class="">Dados Gerais <small></small></h4>
							<div class="card-tools">
								<button class="btn btn-dark btn-sm">Atualizar Dados <i class="fas fa-cloud-upload-alt"></i></button>
							</div>
						</div>
						<div class="card-body bg-white">
							<div class="form-group sm">
		                        <label for="titulo">Titulo do Site</label>
		                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{$registro->titulo}}">
		                    </div>
		                    <div class="form-group sm">
		                        <label for="descricao">Descrição do Site</label>
		                        <input type="text" class="form-control" id="descricao" name="descricao" value="{{$registro->descricao}}">
		                    </div>
		                    <div class="form-group sm">
		                        <label for="chaves">Palavras Chaves</label>
		                        <input type="text" class="form-control" id="chaves" name="chaves" value="{{$registro->chaves}}">
		                    </div>
		                    <div class="form-group sm">
		                        <label for="slogan">Nome da Empresa</label>
		                        <input type="text" class="form-control" id="slogan" name="slogan" value="{{$registro->slogan}}">
		                    </div>
		                    <div class="form-group sm">
		                        <label for="email">Email</label>
		                        <input type="text" class="form-control" id="email" name="email" value="{{$registro->email}}">
		                    </div>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card text-white bg-secondary mx-2 tb">
						<div class="card-header">
							<h4 class="">Redes Sociais <small></small></h4>
							<div class="card-tools">
								<button class="btn btn-dark btn-sm">Atualizar Dados <i class="fas fa-cloud-upload-alt"></i></button>
							</div>
						</div>
						<div class="card-body bg-white">
							<div class="form-group sm">
		                        <label for="facebook">Facebook</label>
		                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{$registro->facebook}}">
		                    </div>
		                    <div class="form-group sm">
		                        <label for="youtube">Youtube</label>
		                        <input type="text" class="form-control" id="youtube" name="youtube" value="{{$registro->youtube}}">
		                    </div>
		                    <div class="form-group sm">
		                        <label for="twitter">Twitter</label>
		                        <input type="text" class="form-control" id="twitter" name="twitter" value="{{$registro->twitter}}">
		                    </div>
		                    <div class="form-group sm">
		                        <label for="instagram">Instagram</label>
		                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{$registro->instagram}}">
		                    </div>
		                    <div class="form-group sm">
		                        <label for="google">GooglePlus</label>
		                        <input type="text" class="form-control" id="google" name="google" value="{{$registro->google}}">
		                    </div>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="card text-white bg-secondary mx-2 tb">
						<div class="card-header">
							<h4 class="">Endereço <small></small></h4>
							<div class="card-tools">
								<button class="btn btn-dark btn-sm">Atualizar Dados <i class="fas fa-cloud-upload-alt"></i></button>
							</div>
						</div>
						<div class="card-body bg-white">
							<div class="row">
								<div class="form-group col-md-12 sm">
			                        <label for="endereço">Endereço</label>
			                        <input type="text" class="form-control" id="endereço" name="endereço" value="{{$registro->endereço}}">
			                    </div>
			                    <div class="form-group col-md-6 sm">
			                        <label for="fone1">Fone Principal</label>
			                        <input type="text" class="form-control" id="fone1" name="fone1" value="{{$registro->fone1}}">
			                    </div>
			                    <div class="form-group col-md-6 sm">
			                        <label for="fone2">Fone Secundário</label>
			                        <input type="text" class="form-control" id="fone2" name="fone2" value="{{$registro->fone2}}">
			                    </div>
			                    <div class="form-group col-md-6 sm">
			                        <label for="whatsapp1">Whatsapp Principal</label>
			                        <input type="text" class="form-control" id="whatsapp1" name="whatsapp1" value="{{$registro->whatsapp1}}">
			                    </div>
			                    <div class="form-group col-md-6 sm">
			                        <label for="whatsapp2">Whatsapp Secundário</label>
			                        <input type="text" class="form-control" id="whatsapp2" name="whatsapp2" value="{{$registro->whatsapp2}}">
			                    </div>
			                    <div class="form-group col-md-6 sm">
			                        <label for="contato">Email de Contato</label>
			                        <input type="text" class="form-control" id="contato" name="contato" value="{{$registro->contato}}">
			                    </div>
			                    <div class="form-group col-md-6 sm">
			                        <label for="cnpj">CNPJ</label>
			                        <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{$registro->cnpj}}">
			                    </div>
		                    </div>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card text-white bg-secondary mx-2 tb">
						<div class="card-header">
							<h4 class="">Slogan <small></small></h4>
							<div class="card-tools">
								<button class="btn btn-dark btn-sm">Atualizar Dados <i class="fas fa-cloud-upload-alt"></i></button>
							</div>
						</div>
						<div class="card-body bg-white">
							<div class="form-group sm pt-2">
		                        <label for="dest1">Detalhes 01</label>
		                        <input type="text" class="form-control" id="dest1" name="dest1" value="{{$registro->dest1}}">
		                    </div>
		                    <div class="form-group sm">
		                        <label for="dest2">Detalhes 02</label>
		                        <input type="text" class="form-control" id="dest2" name="dest2" value="{{$registro->dest2}}">
		                    </div>
		                    <div class="form-group sm">
		                        <label for="dest3">Detalhes 03</label>
		                        <input type="text" class="form-control" id="dest3" name="dest3" value="{{$registro->dest3}}">
		                    </div>
		                    <div class="form-group sm">
		                        <label for="dest4">Detalhes 04</label>
		                        <input type="text" class="form-control" id="dest4" name="dest4" value="{{$registro->dest4}}">
		                    </div>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
			</div>
		</form>
	</div>
@include('admin.components.aside')
@endsection

@section('styles')
@endsection

@section('scripts')
<script>
	$(document).ready(function() {
        /*Mask*/
        $("#fone1").mask("(99) 9999-9999#");
        $("#fone2").mask("(99) 9999-9999#");
        /**/
    });
</script>
	@if(session('sucesso'))
		<script>
			Swal.fire({
			    title: 'Sucesso!!',
			    text: 'Dados Atualizados com Sucesso!!',
			    type: 'success',
			    showConfirmButton: false,
			    timer: 1500
			});
		</script>
	@endif
@endsection