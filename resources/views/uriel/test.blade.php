<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:8000/css/styles.css">
</head>

<body class="b-status">
    <header></header>
    <main>
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-12 text-left">
                    <h3>Tu cuenta</h3>
                </div>
                <br>
                <div class="col-md-12 text-center">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Resumen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#resumen" role="tab" aria-controls="resumen" aria-selected="true"
                                id="resumen-tab">Resumen</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#estado" role="tab" aria-controls="estado"
                                aria-selected="false" id="estado-tab">Estado de cuenta</a></li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#perfil" role="tab" aria-controls="perfil"
                                aria-selected="false">
                                Información personal
                            </a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="#domicilio" role="tab" aria-controls="domicilio"
                                aria-selected="false">Domicilio de entrega</a></li>
                        <li class="nav-item"><a class="nav-link" href="#historial" role="tab" aria-controls="historial"
                                aria-selected="false">Historial de compra</a></li>
                        <li class="nav-item"><a class="nav-link" href="#abonar" role="tab" aria-controls="abonar"
                                aria-selected="false">Abonar</a></li>
                    </ul>
                    <div class="tab-content" id="tabContent">
                        <div class="tab-pane fade show" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-left">
                                        <h3>Tu cuenta</h3>
                                        <ul class="list-group-item">
                                            <li class="list-group-item">
                                                sdaasdasd
                                            </li>
                                            <li class="list-group-item">
                                                sadad
                                            </li>
                                            <li class="list-group-item">
                                                sdadasda
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="resumen" role="tabpanel" aria-labelledby="resumen-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-left p-2">
                                        <br>
                                        <h3>Hola, jesus uriel</h3>
                                        <h5>Información personal <button class="btn btn-link"
                                                type="button">Editar</button></h5>
                                        <h6 class="text-muted">Nombre:</h6>
                                        <label for="">jesus</label>
                                        <h6 class="text-muted">Dirección:</h6>
                                        <label for="">Calle H 43242</label>
                                        <h6 class="text-muted">Correo electrónico:</h6>
                                        <label for="">correo@dasdasd.casd</label>
                                        <h5 class="mt-2">Último pedidos</h5>
                                        <p class="p-2">Por el momento, no existen pedidos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="estado" role="tabpanel" aria-labelledby="estado-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 text-left p-2">
                                        <h5 class="mt-3 mb-3">Estado de cuenta/Crédito Coppel </h5>
                                        <p class="text-muted text-justify">Ser cliente puntual tiene beneficios
                                            exclusivos</p>
                                        <p class="text-muted text-justify">Sigue pagando puntualmente y descubrelos</p>
                                        <h5 class="mt-2 mb-2">Número de cliente:</h5>
                                        <label for="">2131231231</label>
                                    </div>
                                    <div class="col-md-6 text-left">
                                        <div class="mb-3 mt-5">
                                            <h5>Resumen</h5>
                                            <div class="card bg-yellow tarjeta">
                                                <div class="card-body bg-yellow">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <h6>Total a pagar:</h6>
                                                                <h2>$ 1323.00</h2>
                                                                <h6>Fecha de corte</h6>
                                                                <p>23 de Noviembre 2019</p>
                                                            </div>
                                                            <div class="col-7 mb-3">
                                                                <br>
                                                                <button class="btn btn-primary"
                                                                    type="button">Abonar</button>
                                                                <p>Favor de pagar antes de: 16 de Feb 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-3 text-left">
                                            <h5>Detalle de sus compras</h5>
                                            <table class="ui unstackable table">
                                                <thead>
                                                    <tr>
                                                        <th>Articulo</th>
                                                        <th>Fecha de compra</th>
                                                        <th>Usted debía</th>
                                                        <th>Menos Abonos</th>
                                                        <th>Más sus compras </th>
                                                        <th>Interes Adicional</th>
                                                        <th>Usted debe</th>
                                                        <th>Paguelo </th>
                                                        <th>Abono mensual</th>
                                                        <th>Atrasado</th>
                                                        <th>Pagar</th>
                                                        <th>Fecha</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Prestamo</td>
                                                        <td>20-ago-18</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>2278</td>
                                                        <td>11234</td>
                                                        <td>12345</td>
                                                        <td>1234</td>
                                                        <td>234</td>
                                                        <td>3412</td>
                                                        <td>19-mar-20</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot class="bg-dark text-white">
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Totales</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>2278</td>
                                                        <td>11234</td>
                                                        <td>12345</td>
                                                        <td>1234</td>
                                                        <td>234</td>
                                                        <td>3412</td>
                                                        <td></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="perfil" role="tabpanel" aria-labelledby="perfil-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-left mt-4 mb-2">
                                        <h4>Bienvenido</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <form action="" method="POST">
                                            <div class="container">
                                                <div class="row text-justify">
                                                    <div class="col-6">
                                                        <label for="name">Nombre(s):</label>
                                                        <input class="form-control" type="text" placeholder="Nombre(s)"
                                                            name="name">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="surnames">Apellidos:</label>
                                                        <input class="form-control" type="text" placeholder="Apellidos"
                                                            name="surnames">
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <label for="email">Apellidos:</label>
                                                        <input class="form-control read-only" type="email"
                                                            placeholder="Email" name="email" read-only="true">
                                                    </div>
                                                    <div class="col-6 mt-2">
                                                        <label for="password">Si deseas cambiar tu contraseña, hazlo
                                                            aqui:</label>
                                                        <input class="form-control" type="password"
                                                            placeholder="Contraseña" name="password">
                                                    </div>
                                                    <div class="col-6 mt-2">
                                                        <label for="confirm">Escribe tu nueva contraseña</label>
                                                        <input class="form-control" type="password"
                                                            placeholder="Contraseña" name="confirm">
                                                    </div>
                                                    <div class="col-6 mt-2">
                                                        <label for="gender">Sexo</label>
                                                        <select class="form-control" name="gender">
                                                            <option value="MALE">Masculino</option>
                                                            <option value="FEMALE">Femenino</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6 mt-2">
                                                        <label for="birthdate">Fecha de nacimiento</label>
                                                        <input class="form-control" type="date" placeholder="Fecha"
                                                            name="birthdate">
                                                    </div>
                                                    <div class="col-6 mt-2">
                                                        <label for="name">Telefono fijo:</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Telefono fijo" name="phone">
                                                    </div>
                                                    <div class="col-6 mt-2">
                                                        <label for="name">Telefono celular:</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Telefono celular" name="celular">
                                                    </div>
                                                    <div class="col-12 mt-4 text-right">
                                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>