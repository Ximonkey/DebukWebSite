@extends('admin.plantilla.app')

@section('titulo')
Personajes
@endsection

@section('contenido')

@include('admin.characters.crear')
@include('admin.characters.data')

@endsection