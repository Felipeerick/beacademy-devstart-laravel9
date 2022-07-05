@extends('template.users')
@section('title', 'Listagem de usuários')
@section('body')

                  <h1>Listagem de usuários </h1>
                  <a href="{{ route('users.created') }}" class="btn btn-warning mb-2">Adicionar Novo Usuário</a>

                 

            <table class="table table-striped table-dark">
      <thead>
            <tr>
            
            <th scope="col">Foto</th>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Data de Cadastro</th>
            <th scope="col">Ações</th>
            </tr>
      </thead>

      <tbody>
                  @foreach ($users as $user)
            <tr>
                  <th> <img src="{{ asset('storage/'. $user->image) }}" width="50px" height='50px' class='rounded-circle' > </th>
                  <th scope="row">{{ $user->id }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ date('d/m/Y h:i:s', strtotime($user->created_at)) }}</td>
                  <td> <a href="{{ route('users.idGet', $user->id) }}" class='btn btn-info text-white'>Visualizar</a> </td>
            </tr>
            @endforeach
      </tbody>

      </table>
@endsection      