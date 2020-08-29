@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>lista de Fabricantes</h1>
@stop

@section('content')
    <a href="{{ route('fabricantes.create')}}">Cadastrar Novo</a>
   
@stop

@section('css')
    
@stop

@section('js')

@stop