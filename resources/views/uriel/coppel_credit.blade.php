@extends('uriel.layout')

@section('content')
<div class="container">
    <br>
    <br>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="panel panel-default">
                <div class="panel-heading">Credito Coppel</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('store_credit_request') }}">
                        {{ csrf_field() }}
                        <h5>Datos personales</h5>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <input placeholder="Primer nombre" type="text" name="first_name"
                                            class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <input placeholder="Segundo nombre" type="text" name="second_name"
                                            class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <input placeholder="Primer apelldio" type="text" name="first_surname"
                                            class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <input placeholder="Segundo apellido" type="text" name="second_surname"
                                            class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="birth_date">Fecha de nacimiento</label>
                                        <input placeholder="" type="date" name="birth_date" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <strong><label for="rfc">Con tu RFC revisaremos si ya tienes
                                                crédito</label></strong>
                                        <input placeholder="RFC" type="text" name="rfc" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <h5>Datos de contacto</h5>
                                <div class="row">
                                    <div class="col-6">
                                        <input placeholder="Correo electrónico" type="email" name="email"
                                            class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <input placeholder="Telefono celular" type="text" name="phone_number"
                                            class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <input placeholder="Telefono fijo" type="tel" name="home_phone"
                                            class="form-control">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">

                                        <input placeholder="Telefono fijo" type="checkbox" name="terms" class="">
                                        <label for="terms">He leidoy acepto los Terminos y Condiciones y el aviso de
                                            privacidad</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">
                                    Continuar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
@endsection