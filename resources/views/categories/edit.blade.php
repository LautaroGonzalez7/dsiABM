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
                    <h2 class="title">Edicion CategoriasTICs</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/categories/{{$category->id}}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @csrf
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="input--style-5" type="text" name="first_name">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn--radius-2 btn--red" type="submit">Actualizar categoria</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection