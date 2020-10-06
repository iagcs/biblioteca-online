@extends('templates.template')

@section('content')
  
  <h1 class="display-1 text-white text-center">
    Biblioteca Online
     <small class="display-4 text-muted">(Crud with Laravel)</small>
  </h1>



	<div class="col-8 m-auto">
    <div class="text-center mt-6 mb-4">
      <a href="{{url("books/create")}}">
        <button class="btn btn-info">Cadastrar</button>
    </a>
    </div>
    @csrf
    <table class="table table-striped table-dark text-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th>
      <th scope="col">Preco</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    @foreach($book as $books)
    @php
      $user=$books->find($books->id)->relUser;
    @endphp
      <tr>
      <th scope="row">{{$books->id}}</th>
      <td>{{$books->titulo}}</td>
      <td>{{$user->name}}</td>
      <td>R${{$books->preco}}</td>
      <td>
        <a href="{{url("books/$books->id")}}">
          <button class="btn btn-secondary">Visualizar</button>
        </a>
        <a href="{{url("books/edit/$books->id")}}">
          <button class="btn btn-primary">Editar</button>
        </a>
        <a class="js-del" href="{{url("books/$books->id")}}">
          <button class="btn btn-danger">Deletar</button>
        </a>
      </td>
    </tr>
    @endforeach
    

  </tbody>
</table>
  </div>
@endsection