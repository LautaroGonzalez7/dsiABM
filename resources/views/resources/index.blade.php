@extends('layouts.abm')
@section('content')

    <div class="page-wrapper p-t-45 p-b-50">
        <div class="columns is-marginless is-centered">
            <div class="column is-5">
                @if(isset($categories[0]))
                    <a href="{{route('resources.create')}}" class="btn btn-info">Crear Recurso</a>
                    <br><br>
                @else
                    <div class="alert alert-warning">
                        <p>Antes de agregar un recurso es necesario crear al menos una categoría</p>
                        <a href="{{route('categories.create')}}" class="btn btn-info">Crear Categoría</a>
                    </div>
                @endif
                @if (Session::has('message'))
                    <div class="alert alert-danger">{{Session::get('message')}}</div>
                @endif
                <div class="card">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Categoría</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($resources as $resource)
                            <tr>
                                <td>{{ $resource->id }}</td>
                                <td>{{ $resource->name }}</td>
                                <td>
                                    @foreach($categories as $category)
                                        {{$category->id == $resource->category_id ? $category->name : ''}}
                                    @endforeach
                                </td>
                                <td width="10%"><a href="{{route('resources.edit', ['id' => $resource->id])}}"
                                                   class="btn btn-warning">Editar</a></td>
                                <td width="10%">
                                    <form method="POST"
                                          action="{{route('resources.destroy', ['id' => $resource->id])}}">
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