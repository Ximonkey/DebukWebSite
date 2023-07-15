@extends('admin.plantilla.app')

@section('titulo')
Contactos
@endsection

@section('contenido')

@include('admin.contacts.crear')
@include('admin.contacts.data')

@endsection