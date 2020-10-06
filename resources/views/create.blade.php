@extends('templates.template')

@section('content')
  
  <h1 class="display-1 text-white text-center">@if(isset($book))Editar @else Cadastrar @endif</h1>

	<div class="col-8 m-auto ">
    
    @if(isset($errors) && count($errors)>0)
      <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
          {{$erro}}<br>
        @endforeach
      </div>    
    @endif
    
    @if(isset($book))
      <form name="formEdit" id="formEdit" method="post" action="{{url("books/edit/$book->id")}}">
    @else
      <form name="formCad" id="formCad" method="post" action="{{url("books/create")}}">

    @endif
      @csrf
      <input class="form-control mt-4 mb-4 p-2" type="text" name="titulo" id="titulo" placeholder="Titulo" value="{{$book->titulo ?? ''}}" required>
      <select class="form-control mt-4 p-2" name="id_user" id="id_user" value="{{$book->id_user ?? ''}}"  required>
        <option value="{{$book->relUser->id ?? ''}}">{{$book->relUser->name ?? 'Autor'}}</option>
        @foreach($users as $user)
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
      </select>
      <input class="form-control mt-4 p-2" type="text" name="paginas" id="paginas" placeholder="Paginas" value="{{$book->paginas ?? ''}}" required>
      <input class="form-control mt-4 p-2" type="text" name="preco" id="preco" placeholder="Preco" value="{{$book->preco ?? ''}}" required>
      <input class="btn btn-primary mt-4  p-2" type="submit" value="@if(isset($book))Editar @else Cadastrar @endif">
    </form>
    <a href="{{url("books")}}">
      <button class="btn btn-secondary">Voltar</button>
  </a>

  </div>
@endsection