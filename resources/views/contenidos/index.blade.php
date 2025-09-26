
@extends('layouts.app')

@section('contenido1')
    @include('beneficios.beneficio')
@endsection

@section('contenido2')
    @include('como.funciona')
@endsection

@section('contenido3')
    @include('testimonios.testimonio')
@endsection

@section('contenido4')
    @include('contactos.contacto')
@endsection

@section('contenido5')
    @include('footers.footer')
@endsection