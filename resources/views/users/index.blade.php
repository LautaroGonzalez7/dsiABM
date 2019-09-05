@extends('layouts.abm')
@section('content')
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Clientes TICs
                    </h1>
                </div>
            </div>
        </section>
        <div class="columns is-marginless is-centered">
            <div class="column is-5">
                <a href="create" class="btn btn-info">Crear Cliente</a>
                <br><br>
                <div class="card">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->email }}</td>
                                <td><a href={{route('users.edit', ['id' => $user->id])}}>Editar</a></td>
                                <td>
                                    <form method="POST" action="/users/{{$user->id}}">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection