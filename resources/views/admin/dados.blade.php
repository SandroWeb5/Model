@extends('layouts.admin')

@section('content')
@include('admin.components.nav')
@include('admin.components.sidebar')
	<div class="content-wrapper">
		<div class="content pt-3">
			<div class="card text-white bg-secondary mx-2 tb">
				<div class="card-header">
					<h4 class="">Dados <small>Meus Dados</small></h4>
				</div>
				<div class="card-body bg-white">
                    <!-- CONTEUDO -->
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('dados_update')}}" method="post" enctype="multipart/form-data" class="md-form">
                                {{ csrf_field() }}
								<div class="row">
									<div class="col-md-8 sm">
										<div class="row">
		                                    <div class="col-md-12">
		                                        <div class="form-group sm">
		                                            <label for="name">Nome</label>
		                                            <input type="text" class="form-control input-sm" id="name" name="name" value="{{$registro->name}}">
		                                        </div>
		                                        <input type="hidden" id="usuario" name="usuario" value="{{ Auth::user()->id }}">
		                                    </div>
		                                </div>
		                                <div class="row">
		                                    <div class="col-md-12">
		                                        <div class="form-group sm">
		                                            <label for="email">Email</label>
		                                            <input type="email" class="form-control input-sm" id="email" name="email" value="{{$registro->email}}" readonly>
		                                        </div>
		                                    </div>
		                                </div>
		                                <div class="row">
		                                	<div class="col-md-12">
				                                <div class="form-group sm">
		                                            <label for="password">Senha</label>
		                                            <input type="text" class="form-control input-sm" id="password" name="password" value="{{$registro->password}}" required minlength="5">
		                                        </div>
		                                	</div>
		                                </div>
		                                <div class="row">
		                                	<div class="col-md-12">
		                                		<div class="form-group sm">
		                                            <label for="photo">Atualizar Imagem - {{isset($registro->photo) ? $registro->photo : ''}}</label>
		                                            <input type="file" class="form-control-file input-sm" id="photo" name="photo">
		                                        </div>
		                                	</div>
		                                </div>
		                                <div class="row">
											<div class="col-md-12 mt-3">
												<input type="hidden" id="id" name="id" value="{{ Auth::user()->id }}">
		                                		<button type="submit" id="formEdit" class="btn btn-primary bg2 btn-block btn-lg">Atualizar Dados</button>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<img src="{{asset('public/adminlte/img/uploads/'.Auth::user()->photo)}}" class="img-fluid">
									</div>
								</div>
                            </form>
                            <br/>
                        </div>
                    </div>
                    <!-- FIM CONTEUDO -->
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