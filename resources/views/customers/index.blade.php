@extends('layouts.abm')
@section('content')
    <div class="page-wrapper p-t-45 p-b-50">
        <div class="columns is-marginless is-centered">
            <div class="column is-5">
                <a href="{{route('customers.create')}}" class="btn btn-info">Crear cliente</a>
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
                            <th scope="col">Apellido</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->lastname }}</td>
                                <td width="10%"><a href="{{route('customers.edit', ['id' => $customer->id])}}"
                                                   class="btn btn-warning">Editar</a></td>
                                <td width="10%">
                                    <form method="POST"
                                          action="{{route('customers.destroy', ['id' => $customer->id])}}">
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