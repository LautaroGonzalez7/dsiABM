@extends('layouts.abm')
@section('content')
    <div class="page-wrapper p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Alta Clientes</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('customers.store')}}">
                        @csrf
                        <div class="form-row">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="text" name="name" placeholder="Ej. Juan">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Apellido</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="text" name="lastname" placeholder="Ej. Pérez">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">DNI</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="number" name="dni" placeholder="Ej. 40392543">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Legajo</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="number" name="legajo" placeholder="Ej. 15645">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Teléfono</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="number" name="phone" placeholder="Ej. 3564112233">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="email" name="email" placeholder="Ej. juanperez123@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Dirección</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="form-control" type="text" name="address" placeholder="Ej. 25 de Mayo 526">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit">Crear cliente</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection