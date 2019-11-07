@extends('layouts.plantilla02')
@section('titulo')
Seccion docentes
Pagina02
@endsection
@section('contenido')
<div class="container">
  <h1 class="text-center">Seccion docentes</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero consequatur, reprehenderit praesentium quis adipisci nulla nisi est provident dolorem facilis, nam consequuntur a voluptate nemo blanditiis iure! Eveniet, vel voluptates velit, iste praesentium facilis quis aliquam quae cumque, qui laudantium? </p>
  <div class="text-center">

    <a class="btn btn-outline-success mb-4" href="/">Ir al inicio</a>
  </div>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Direccion</th>
        <th scope="col">Ciudad</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $item)
      <tr>
        <th scope="row">{{ $item['id'] }}</th>
        <td>{{ $item['nombre'] }}</td>
        <td>{{ $item['direccion'] }}</td>
        <td>{{ $item['ciudad'] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection