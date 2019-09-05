@extends('layouts.abm')
@section('content')
    <head>
        <title>Recursos TICs</title>
    </head>
    <body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Modificar Recurso de TICs</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/resources/{{$resource->id}}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @csrf
                        <div class="form-row m-b-55">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="input--style-5" type="text" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Categoria </div>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value={{$category->id}}>{{ucfirst($category->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn--radius-2 btn--red" type="submit">Actualizar Recurso</button>

                    </form>
                </div>

                </form>
            </div>
        </div>
    </div>
    </div>
    </body>
@endsection