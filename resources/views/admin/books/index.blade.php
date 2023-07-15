@extends('admin.plantilla.app')

@section('titulo')
Libros
@endsection

@section('contenido')

@include('admin.books.crear')
@include('admin.books.data')

@endsection