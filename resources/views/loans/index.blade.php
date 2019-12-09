@extends('layouts.abm')
@section('content')
    <div class="page-wrapper p-t-45 p-b-50">
        <div class="columns is-marginless is-centered">
            <div class="column is-5">
                @if(isset($resources[0]) && isset($customers[0]))
                    <a href="{{route('loans.create')}}" class="btn btn-info">Crear Prestamo</a>
                    <br><br>
                @endif
                @if(!isset($resources[0]))
                    <div class="alert alert-warning">
                        <p>Antes de agregar un préstamo es necesario crear al menos un recurso.</p>
                        <a href="{{route('resources.create')}}" class="btn btn-info">Crear Recurso</a>
                    </div>
                @endif
                @if(!isset($customers[0]))
                    <div class="alert alert-warning">
                        <p>Antes de agregar un préstamo es necesario crear al menos un cliente.</p>
                        <a href="{{route('customers.create')}}" class="btn btn-info">Crear Cliente</a>
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
                            <th scope="col">Recurso</th>
                            <th scope="col">Cliente</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($loans as $loan)
                            <tr>
                                <td>{{ $loan->id }}</td>
                                <td>
                                    @foreach($resources as $resource)
                                        {{$resource->id == $loan->resource_id ? $resource->name : ''}}
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($customers as $customer)
                                        {{$customer->id == $loan->customer_id ? $customer->name : ''}}
                                    @endforeach
                                </td>
                                <td width="10%"><a href="{{route('loans.edit', ['id' => $loan->id])}}"
                                                   class="btn btn-warning">Editar</a></td>
                                <td width="10%">
                                    <form method="POST" action="{{route('loans.destroy', ['id' => $loan->id])}}">
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