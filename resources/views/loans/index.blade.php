@extends('layouts.abm')
@section('content')
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Prestamos TICs
                    </h1>
                </div>
            </div>
        </section>
        <div class="columns is-marginless is-centered">
            <div class="column is-5">
                <a href="create" class="btn btn-info">Crear Prestamo</a>
                <br><br>
                <div class="card">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Recurso</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($loans as $loan)
                            <tr>
                                <td>{{ $loan->id }}</td>
                                <td>{{ $loan->user_id }}</td>
                                <td>{{ $loan->resource_id }}</td>
                                <td><a href={{route('loans.edit', ['id' => $loan->id])}}>Editar</a></td>
                                <td>
                                    <form method="POST" action="/loans/{{$loan->id}}">
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