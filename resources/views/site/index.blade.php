@extends('layouts.site')

@section('url', '***')
@section('subtitulo', '***')

@section('content')
    @include('site.section.header')
    <main>
        @include('site.section.bloco1')
        @include('site.section.bloco2')
        @include('site.section.bloco3')
        @include('site.section.bloco4')
        @include('site.section.bloco5')
        @include('site.section.contato')
        @include('site.section.footer')
    </main>
@endsection