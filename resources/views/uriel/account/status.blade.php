@extends('uriel.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Resumen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Estado de Cuenta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">Información personal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="delivery-tab" data-toggle="tab" href="#delivery" role="tab"
                        aria-controls="delivery" aria-selected="false">Domicilio de entrega</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">Historial de compra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false">Abonar</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-left">
                                <h3>Tu cuenta</h3>
                                <ul class="list-group-item">
                                    <li class="list-group-item">
                                        {{
                                            $user->name.' '.$user->surnames
                                        }}
                                    </li>
                                    <li class="list-group-item">
                                        {{
                                                $user->gender
                                            }}
                                    </li>
                                    <li class="list-group-item">
                                        {{
                                                $user->phone_number
                                            }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3>Tu cuenta</h3>
                    <ul class="list-group-item">
                        <li class="list-group-item">
                            {{
                                    $user->client_number
                                }}
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="container">

                        <form class="form-horizontal" method="POST" action="{{ route('update_user_info',$user->id) }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12 text-left">
                                    <h3>Bienvenido</h3>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Nombre: </label>
                                    <input value="{{$user->name}}" type="text" name="name" placeholder="Nombre"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Apelldios: </label>
                                    <input type="text" value="{{$user->surnames}}" name="surnames"
                                        placeholder="Apelldios" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="">Correo: </label>
                                    <input value="{{$user->email}}" readonly type="email" name="email"
                                        placeholder="Correo" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Cambiar contraseña </label>
                                    <input type="password" name="new_password" placeholder="Contraseña"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Nueva contraseña</label>
                                    <input type="password" name="confirm_password" placeholder="Confirmar contraseña"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Sexo: </label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="MALE">Masculino</option>
                                        <option value="FEMALE">Femenenino</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Fecha de nacimiento</label>
                                    <input value="{{$user->birth_date}}" name="birth_date" type="date" name="" id=""
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Telefono fijo </label>
                                    <input type="text" value="{{$user->phone_number}}" placeholder="telefono fijo"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Telefono celular</label>
                                    <input type="text" name="phone_number" value="{{$user->phone_number}}"
                                        placeholder="Telefono celular" class="form-control">
                                </div>
                                <div class="col-12 text-right">
                                    <br>
                                    <button class="btn btn-primary mt-5">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="delivery" role="tabpanel" aria-labelledby="delivery-tab">
                    <div class="conatiner">
                        <div class="row">
                            <div class="col-md-12">

                            </div>
                            <div class="col-md-6">
                                <h1>Tus datos</h1>
                                <ul class="list-group-item">
                                    <li class="list-group-item">
                                        {{
                                                $user->email
                                            }}
                                    </li>
                                    <li class="list-group-item">
                                        {{
                                                    $user->phone_number
                                                }}
                                    </li>
                                    <li class="list-group-item">
                                        {{
                                                    $user->phone_number
                                                }}
                                    </li>
                                    <li class="list-group-item">
                                        {{
                                                        $user->name.' '.$user->surnames
                                                    }}
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <form class="form-horizontal" method="POST"
                                    action="{{ route('update_user_delivery',$user->id) }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-12 text-left">
                                            <h3>Domicilio de entrega</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Codigo postal </label>
                                            <input value="{{$user->postal_code}}" type="text" name="postal_code"
                                                placeholder="Codigo Postal" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Calle: </label>
                                            <input type="text" value="{{$user->street}}" name="street"
                                                placeholder="Calle" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Colonia </label>
                                            <input value="{{$user->suburb}}" type="text" name="suburb"
                                                placeholder="Colonia" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Estado </label>
                                            <input type="text" name="state" value="{{$user->state}}"
                                                placeholder="Estado" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Ciudad</label>
                                            <input value="{{$user->city}}" type="text" name="city" placeholder="Ciudad"
                                                class="form-control">
                                        </div>

                                        <div class="col-12 text-right">
                                            <br>
                                            <button class="btn btn-primary mt-5">
                                                Guardar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
        </div>
    </div>
</div>
@endsection