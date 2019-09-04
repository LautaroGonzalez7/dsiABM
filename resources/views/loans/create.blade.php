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
                            <div class="name">ID Recurso</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="input--style-5" type="text" name="resource_id">
                                </div>
                            </div>
                        </div>
                       <div class="form-row m-b-55">
                                                  <div class="name">ID Usuario</div>
                                                   <div class="value">
                                                       <div class="row row-space">
                                                           <input class="input--style-5" type="text" name="user_id">
                                                       </div>
                                                   </div>
                                               </div>

                        </div>
                        <button class="btn btn--radius-2 btn--red" type="submit">Cargar Prestamo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection