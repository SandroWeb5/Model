@extends('layouts.admin')

@section('content')
@include('admin.components.nav')
@include('admin.components.sidebar')
	<div class="content-wrapper">
		<div class="content pt-3">
			<nav aria-label="breadcrumb" class="submenu mx-2">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Usuários</li>
				</ol>
			</nav>
			<div class="card text-white bg-secondary mx-2 tb">
				<div class="card-header">
					<h4 class="">Usuarios <small>Acessos</small></h4>
					<div class="card-tools">
						<button class="btn btn-dark btn-sm"data-toggle="modal" data-target="#Criar">Cadastrar <i class="fas fa-users fa-fw"></i></button>
					</div>
				</div>
				<div class="card-body bg-white">
                    @if(Auth::user()->perm == 'Gerente' || Auth::user()->perm == 'User')
                    <style>a.delete{display: none !important;}</style>
                    @endif
					<table id="dt" class="table table-bordered table-hover table-sm table-responsive-md" cellspacing="0" width="100%">
					    <thead>
					        <tr>
					            <th>Id</th>
					            <th>Nome</th>
					            <th>Email</th>
					            <th>Permissão</th>
					            <th>Ações</th>
					        </tr>
					    </thead>
					</table>
				</div>
				<div class="card-footer"></div>
			</div>
		</div>
	</div>
@include('admin.components.aside')
@include('admin.modal.modalUsuarios')
@endsection

@section('styles')
@endsection

@section('scripts')
@include('admin.ajax.ajaxUsuarios')
@endsection