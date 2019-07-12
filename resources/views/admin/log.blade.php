@extends('layouts.admin')

@section('content')
@include('admin.components.nav')
@include('admin.components.sidebar')
	<div class="content-wrapper">
		<div class="content pt-3">
			<nav aria-label="breadcrumb" class="submenu mx-2">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Logs</li>
				</ol>
			</nav>

			<div class="card text-white bg-secondary mx-2 tb">
				<div class="card-header">
					<h4 class="">Logs <small>Eventos</small></h4>
				</div>
				<div class="card-body bg-white">
					<table id="dt" class="table table-striped table-bordered table-hover table-sm" cellspacing="0" width="100%">
					    <thead>
					        <tr>
					            <th>Nº</th>
					            <th>Usuário</th>
					            <th>Email</th>
					            <th>Evento</th>
					            <th>Data</th>
					        </tr>
					    </thead>
					</table>
				</div>
				<div class="card-footer"></div>
			</div>
		</div>
	</div>
@include('admin.components.aside')
@endsection

@section('styles')
@endsection

@section('scripts')
<script>
/*Exibir*/
    $(document).ready(function() {
        $('#dt').DataTable({
            processing: true,
            serverSide: true,
            order: [[0, "desc"]],
            ajax: "{{ url('admin/logs/get') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'usuario', name: 'usuario'},
                {data: 'email', name: 'email'},
                {data: 'evento', name: 'evento'},
                {data: 'created_at', name: 'created_at'},
            ],
            language: {
                "url": "{{asset('public/adminlte/Json/Traducao_datatables.json')}}"
            }
        });
    });
</script>
@endsection