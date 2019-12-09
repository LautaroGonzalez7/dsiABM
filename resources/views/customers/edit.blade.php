@extends('layouts.abm')
@section('content')
    <div class="page-wrapper p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Modificar Cliente</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('customers.update',[$customer->id])}}">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-row">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="text" name="name" value="{{$customer->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Apellido</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="text" name="lastname" value="{{$customer->lastname}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">DNI</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="number" name="dni" value="{{$customer->dni}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Teléfono</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="number" name="phone" value="{{$customer->phone}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="email" name="email" value="{{$customer->email}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Dirección</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="text" name="address" value="{{$customer->address}}">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">Modificar Cliente</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection