@extends('templates.template')

@section('content')
    <h1 class="display-1 text-white text-center mt-4 mb-4">Visualizar</h1> 

	<div class="col-8 m-auto">

    <table class="table table-striped table-dark text-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th>
      <th scope="col">Preco</th>
    </tr>
  </thead>
  <tbody>
    @php
      $user=$book->find($book->id)->relUser;
    @endphp
      <tr>
      <th scope="row">{{$book->id}}</th>
      <td>{{$book->titulo}}</td>
      <td>{{$user->name}}</td>
      <td>R${{$book->preco}}</td>
    </tr>

  </tbody>
</table>
  <a href="{{url("books")}}">
      <button class="btn btn-secondary">Voltar</button>
  </a>
  <a href="{{url("books/edit/$book->id")}}">
    <button class="btn btn-primary">Editar</button>
  </a>

  </div>
@endsection