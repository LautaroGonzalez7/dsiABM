@extends('layouts.abm')
@section('content')
    <div class="page-wrapper p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Modificar Categoría</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('categories.update',[$category->id])}}">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-row">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="text" name="name" value="{{$category->name}}">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">Modificar Categoría</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection