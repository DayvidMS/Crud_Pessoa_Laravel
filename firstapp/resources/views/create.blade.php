@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar</h1><hr>

    <div class="col-8 m-auto">
        <form name="formCad" id="formCad" method="POST" action="{{url('Pessoa')}}">
            @csrf 
            <input class="form-control mb-2" type="text" name="Nome" id="Nome" placeholder="Nome">            
            <input class="form-control mb-2" type="text" name="Telefone" id="Telefone" placeholder="Telefone">
            <input class="form-control mb-2" type="text" name="Email" id="Email" placeholder="Email">            
            <input class="btn btn-primary " type="submit" value="Cadastrar">
        </form>
    </div>
@endsection