@extends('layouts.admin')

@section('content')
@include('admin.components.nav')
@include('admin.components.sidebar')
    <div class="content-wrapper">
        <div class="content pt-3">
			<div class="container-fluid">
				<div class="BOX">
					<img src="{{asset('public/adminlte/img/403.png')}}" alt="">
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
