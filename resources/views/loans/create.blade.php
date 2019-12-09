@extends('layouts.abm')
@section('content')
    <div class="page-wrapper p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Alta Prestamos</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('loans.store')}}">
                        @csrf
                        <div class="form-row">
                            <div class="name">Recurso</div>
                            <div class="value">
                                <div class="row row-space">
                                    <select name="resource_id" class="form-control">
                                        <option selected disabled>Seleccionar</option>
                                        @foreach($resources as $resource)
                                            <option value={{$resource->id}}>{{ucfirst($resource->name)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Cliente</div>
                            <div class="value">
                                <div class="row row-space">
                                    <select name="customer_id" class="form-control">
                                        <option selected disabled>Seleccionar</option>
                                        @foreach($customers as $customer)
                                            <option value={{$customer->id}}>{{ucfirst($customer->name)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Desde</div>
                            <div class="value">
                                <div class="row row-space">
                                    @php
                                        date_default_timezone_set('America/Argentina/Cordoba');
                                    $date = date('Y-m-d');
                                    @endphp
                                    <input name="since" class="form-control unstyled" type="date" min="{{$date}}" value="{{$date}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Hasta</div>
                            <div class="value">
                                <div class="row row-space">
                                    @php
                                        date_default_timezone_set('America/Argentina/Cordoba');
                                    $date = date('Y-m-d');
                                    @endphp
                                    <input name="until" class="form-control unstyled" type="date" min="{{$date}}">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">Crear Recurso</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection