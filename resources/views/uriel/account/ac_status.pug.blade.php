@extends('uriel.app')
@section('content')
doctype html
html
    head
        //link(rel="stylesheet", href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css")
        //link(rel="stylesheet", href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css") 
        //link(rel="stylesheet", href="http://localhost:8000/css/styles.css")
    body.b-status
        header
        main
            div.container
                br
                br
                div.row
                    div.col-12.text-left
                        h3 Tu cuenta
                    br
                    div.col-md-12.text-center
                        ul.nav.nav-tabs(id="tab",role="tablist")
                            li.nav-item
                                a.nav-link.active(href="#resumen",role="tab",aria-controls="resumen",data-toggle="tab",  aria-selected="true",id="resumen-tab") Resumen
                            li.nav-item
                                a.nav-link(href="#estado",role="tab",aria-controls="estado",data-toggle="tab",  aria-selected="false",id="estado-tab") Estado de cuenta
                            li.nav-item
                                a.nav-link(href="#perfil",role="tab",aria-controls="perfil", data-toggle="tab", aria-selected="false") Información personal
                            li.nav-item
                                a.nav-link(href="#domicilio",role="tab",aria-controls="domicilio", data-toggle="tab", aria-selected="false") Domicilio de entrega
                            li.nav-item
                                a.nav-link(href="#historial",role="tab",aria-controls="historial", data-toggle="tab", aria-selected="false") Historial de compra
                            li.nav-item
                                a.nav-link(href="#abonar",role="tab",aria-controls="abonar", data-toggle="tab", aria-selected="false") Abonar
                        div.tab-content(id="tabContent")
                            div.tab-pane.fade.show.active(id="resumen",role="tabpanel",aria-labelledby="resumen-tab")
                                div.container
                                    div.row
                                        div.col-md-12.text-left.p-2
                                            br
                                            h3 Hola, jesus uriel
                                            h5 Información personal 
                                                button.btn.btn-link(type='button') Editar
                                            h6.text-muted Nombre:
                                            label(for="") jesus
                                            h6.text-muted Dirección:
                                            label(for="") Calle H 43242
                                            h6.text-muted Correo electrónico:
                                            label(for="") correo@dasdasd.casd
                                            h5.mt-2 Último pedidos
                                            p.p-2 Por el momento, no existen pedidos.
                            div.tab-pane.fade.show(id="estado",role="tabpanel",aria-labelledby="estado-tab")
                                div.container
                                    div.row
                                        div.col-md-6.text-left.p-2
                                            h5.mt-3.mb-3 Estado de cuenta/Crédito Coppel                                                
                                            p.text-muted.text-justify Ser cliente puntual tiene beneficios exclusivos
                                            p.text-muted.text-justify Sigue pagando puntualmente y descubrelos
                                            h5.mt-2.mb-2 Número de cliente:
                                            label(for="") 2131231231
                                        div.col-md-6.text-left
                                            div.mb-3.mt-5
                                                h5 Resumen
                                                div.card.bg-yellow.tarjeta
                                                    div.card-body.bg-yellow
                                                        div.container
                                                            div.row
                                                                div.col-5
                                                                    h6 Total a pagar:
                                                                    h2 $ 1323.00
                                                                    h6 Fecha de corte
                                                                    p 23 de Noviembre 2019
                                                                div.col-7.mb-3
                                                                    br
                                                                    button.btn.btn-primary(type='button') Abonar
                                                                    p Favor de pagar antes de: 16 de Feb 2020
                                        div.row
                                            div.col-12.mb-3.text-left
                                                h5 Detalle de sus compras
                                                table.ui.unstackable.table
                                                    thead
                                                        tr
                                                            th Articulo
                                                            th Fecha de compra
                                                            th Usted debía
                                                            th Menos Abonos
                                                            th Más sus compras 
                                                            th Interes Adicional
                                                            th Usted debe
                                                            th Paguelo 
                                                            th Abono mensual
                                                            th Atrasado
                                                            th Pagar
                                                            th Fecha
                                                    tbody
                                                        tr
                                                            td Prestamo
                                                            td 20-ago-18
                                                            td 0
                                                            td 0
                                                            td 0
                                                            td 2278
                                                            td 11234
                                                            td 12345
                                                            td 1234
                                                            td 234
                                                            td 3412
                                                            td 19-mar-20
                                                    tfoot.bg-dark.text-white
                                                        tr
                                                            td 
                                                            td 
                                                            td Totales
                                                            td 0
                                                            td 0
                                                            td 2278
                                                            td 11234
                                                            td 12345
                                                            td 1234
                                                            td 234
                                                            td 3412
                                                            td 
                            div.tab-pane.fade.show(id="perfil",role="tabpanel",aria-labelledby="perfil-tab")
                                div.container
                                    div.row
                                        div.col-12.text-left.mt-4.mb-2
                                            h4 Bienvenido
                                        div.col-md-12
                                            form(action="" method="POST")
                                                div.container
                                                    div.row.text-justify
                                                        div.col-6
                                                            label(for="name") Nombre(s):
                                                            input.form-control(type="text",placeholder="Nombre(s)",name="name")
                                                        div.col-6
                                                            label(for="surnames") Apellidos:
                                                            input.form-control(type="text",placeholder="Apellidos",name="surnames")
                                                        div.col-12.mt-2
                                                            label(for="email") Apellidos:
                                                            input.form-control.read-only(type="email",placeholder="Email",name="email",read-only="true")
                                                        div.col-6.mt-2
                                                            label(for="password") Si deseas cambiar tu contraseña, hazlo aqui:
                                                            input.form-control(type="password",placeholder="Contraseña",name="password")
                                                        div.col-6.mt-2
                                                            label(for="confirm") Escribe tu nueva contraseña
                                                            input.form-control(type="password",placeholder="Contraseña",name="confirm")
                                                        div.col-6.mt-2
                                                            label(for="gender") Sexo
                                                            select.form-control(name="gender")
                                                                option(value="MALE") Masculino
                                                                option(value="FEMALE") Femenino
                                                        div.col-6.mt-2
                                                            label(for="birthdate") Fecha de nacimiento
                                                            input.form-control(type="date",placeholder="Fecha",name="birthdate")
                                                        div.col-6.mt-2
                                                            label(for="name") Telefono fijo:
                                                            input.form-control(type="text",placeholder="Telefono fijo",name="phone")
                                                        div.col-6.mt-2
                                                            label(for="name") Telefono celular:
                                                            input.form-control(type="text",placeholder="Telefono celular",name="celular")
                                                        div.col-12.mt-4.text-right
                                                            button.btn.btn-primary(type='submit') Guardar
                            div.tab-pane.fade.show(id="domicilio",role="tabpanel",aria-labelledby="domicilio-tab")
                                div.container
                                    div.row.text.left
                                        div.col-12.text-left.mt-4.mb-2
                                            h4 Tus domicilios de entrega                           
                                        div.col-6
                                            div.container-fluid
                                                div.row
                                                    div.col-12.text-left
                                                        label(for="main-address") Elige tu domicilio
                                                        select.form-control(name="main-address") 
                                                            option(value="MAIN") Domicilio Principal
                                                    div.col-12.text-left.mb-2
                                                        h3 Tus datos
                                                        label(for="") Correo electronico
                                                        input.form-control(type="text")
                                                    div.col-6.text.left
                                                        label(for="") Telefono
                                                        input.form-control(type="text")
                                                    div.col-6.text-left.mb-3
                                                        br
                                                        label(for="fijo") Fijo
                                                        input.mt-2.ml-2(type="radio", name="fijo")
                                                        label(for="celular") Celular
                                                        input.mt-2.ml-2(type="radio", name="celular")
                                                    div.col-6.text-left
                                                        label(for="") Nombre(s)
                                                        input.form-control(type="text")
                                                    div.col-6.text-left
                                                        label(for="") Apellido
                                                        input.form-control(type="text")
                                                    div.col-12.text-left.mt-3
                                                        input(type="checkbox",name="pedidio")
                                                        label(for="pedidio") Quiero que alguien más pueda recibir mi pedido
                                        div.col-6
                                            br
                                            br
                                            h4.text-left Domicilio de entrega
                                            form.form-horizontal(method='POST', action="{{ route('update_user_delivery',$user->id) }}")
                                                div.row.text-left
                                                    div.col-md-12.text-left
                                                    div.col-md-6
                                                        label(for='') Codigo postal 
                                                        input.form-control(value='{{$user->postal_code}}', type='text', name='postal_code', placeholder='Codigo Postal')
                                                    div.col-md-6
                                                        label(for='') Calle: 
                                                        input.form-control(type='text', value='{{$user->street}}', name='street', placeholder='Calle')
                                                    div.col-md-6
                                                        label(for='') Colonia 
                                                        input.form-control(value='{{$user->suburb}}', type='text', name='suburb', placeholder='Colonia')
                                                    div.col-md-6
                                                        label(for='') Estado 
                                                        input.form-control(type='text', name='state', value='{{$user->state}}', placeholder='Estado')
                                                    div.col-md-6
                                                        label(for='') Ciudad
                                                        input.form-control(value='{{$user->city}}', type='text', name='city', placeholder='Ciudad')
                                                    div.col-12.text-right
                                                        br
                                                        button.btn.btn-primary.mt-5  Guardar
    //script(src='https://code.jquery.com/jquery-3.3.1.slim.min.js')
    //script(src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')
    //script(src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')

@endsection