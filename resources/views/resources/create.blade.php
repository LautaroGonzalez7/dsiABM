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
                    <h2 class="title">Alta Recursos TICs</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/resources">
                        @csrf
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="input--style-5" type="text" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Categoria</div>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value={{$category->id}}>{{ucfirst($category->name)}}</option>
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