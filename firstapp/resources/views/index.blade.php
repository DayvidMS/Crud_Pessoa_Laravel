@extends('templates.template')

@section('content')
    <h1 class="text-center">CRUD</h1><hr>

    <div class="text-center mb-3">
        <a href="{{url('Pessoa/create')}}">
            <button class="btn btn-success mb-3" >Cadastrar</button>
        </a>
    <div>

    <div class="col-12 mt-4 m-auto">
        <table class="table text-center">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Pessoa as $Pessoas)
            <tr>
                <td>{{$Pessoas->nome}}</td>
                <td>{{$Pessoas->Telefone}}</td>
                <td>{{$Pessoas->email}}</td>
                <td>    
                    <a href="">
                        <button class="btn btn-dark">Editar</button>
                    </a>
                    <a href="">
                        <button class="btn btn-danger">Excluir</button>
                    </a>
                </td>

            </tr>
            @endforeach           
        </tbody>
        </table>
        </section>
    </div>
@endsection