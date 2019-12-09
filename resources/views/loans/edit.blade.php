@extends('layouts.abm')
@section('content')
    <div class="page-wrapper p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Modificar Préstamo</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('loans.update',[$loan->id])}}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @csrf
                        <div class="form-row">
                            <div class="name">Recurso</div>
                            <div class="value">
                                <div class="row row-space">
                                    <select name="resource_id" class="form-control">
                                        <option selected disabled>Seleccionar</option>
                                        @foreach($resources as $resource)
                                            <option value="{{$resource->id}}" {{$resource->id == $loan->resource_id ? 'selected' : ''}}>{{ucfirst($resource->name)}}</option>
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
                                            <option value="{{$customer->id}}" {{$customer->id == $loan->customer_id ? 'selected' : ''}}>{{ucfirst($customer->name)}}</option>
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
                                    $since = date( "Y-m-d", strtotime($loan->since));
                                    @endphp
                                    <input name="since" class="form-control unstyled" type="date" min="{{$date}}" value="{{$since}}">
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
                                    $until = date( "Y-m-d", strtotime($loan->until));
                                    @endphp
                                    <input name="until" class="form-control unstyled" type="date" min="{{$date}}" value="{{$until}}">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">Modificar Préstamo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection