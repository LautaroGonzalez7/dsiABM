@extends('layouts.abm')
@section('content')
    <div class="page-wrapper p-t-45 p-b-50">
        <div class="columns is-marginless is-centered">
            <div class="column is-5">
                <a href="{{route('categories.create')}}" class="btn btn-info">Crear categoría</a>
                <br><br>
                @if (Session::has('message'))
                    <div class="alert alert-danger">{{Session::get('message')}}</div>
                @endif
                <div class="card">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td width="10%"><a href="{{route('categories.edit', ['id' => $category->id])}}" class="btn btn-warning">Editar</a></td>
                                <td width="10%">
                                    <form method="POST" action="{{route('categories.destroy', ['id' => $category->id])}}">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
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