@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    <div class="card card-primary">
        <div class="card-body">
            {!! $datatable->table()!!}
        </div>    
    </div>
@stop

@section('css')
@stop

@section('js')
    {!!$datatable->scripts!!}
@stop