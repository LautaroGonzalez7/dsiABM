@extends('layouts.abm')
@section('content')
    <div class="page-wrapper p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Alta Recursos</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('resources.store')}}">
                        @csrf
                        <div class="form-row">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="text" name="name"
                                           placeholder="Ej. Proyector Sony">
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
                                            <option value={{$category->id}}>{{ucfirst($category->name)}}</option>
                                        @endforeach
                                    </select>
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