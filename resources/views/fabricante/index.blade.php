@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Fabricantes</h1>
    
@stop

@section('content')
    <a href="{{ route('fabricantes.create')}}">Cadastrar Novo</a>
    <div class="card card-primary">
        <div class="card-body">
            {!! $dataTable->table() !!}
        </div>
    </div>
    
   
@stop

@section('css')
    
@stop

@section('js')
{!! $dataTable->scripts() !!}

@stop