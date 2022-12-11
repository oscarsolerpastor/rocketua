@extends('layouts.master')
@section('title', 'Productos')
@section('menu') @parent
<p>Este contenido es añadido al menú principal.</p>
@endsection
@section('content')
    <h1>Esta página contendrá una lista de productos</h1>
    <a href="{{ url('editproduct') }}">Editar producto</a>
    <br>
    <a href="{{ url('createproduct') }}">Crear producto</a>
@endsection
