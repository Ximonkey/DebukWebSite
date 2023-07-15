@extends('admin.plantilla.app')

@section('titulo')
Bibliotecas
@endsection

@section('contenido')

@include('admin.bookstores.crear')
@include('admin.bookstores.data')

@endsection