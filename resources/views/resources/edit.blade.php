@extends('layouts.abm')
@section('content')
    <div class="page-wrapper p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Modificar Recurso</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('resources.update',[$resource->id])}}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @csrf
                        <div class="form-row">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="text" name="name" value="{{$resource->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Categoría</div>
                            <div class="value">
                                <div class="row row-space">
                                    <select name="category_id" class="form-control">
                                        <option selected disabled>Seleccionar</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{$category->id == $resource->category_id ? 'selected' : ''}}>{{ucfirst($category->name)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">Modificar Recurso</button>

                    </form>
                </div>

                </form>
            </div>
        </div>
    </div>
    </div>
    </body>
@endsection