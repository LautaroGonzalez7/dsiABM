@extends('layouts.abm')
@section('content')
    <head>
        <title>Prestamos TICs</title>
    </head>
    <body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Alta Prestamos TICs</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/loans">
                        @csrf
                        <div class="form-row m-b-55">
                            <div class="name">Cliente</div>
                            <select name="user_id" class="form-control">
                                @foreach($users as $user)
                                    <option value={{$user->id}}>{{ucfirst($user->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Recurso</div>
                            <select name="resource_id" class="form-control">
                                @foreach($resources as $resource)
                                    <option value={{$resource->id}}>{{ucfirst($resource->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <button class="btn btn--radius-2 btn--red" type="submit">Cargar Recurso</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection