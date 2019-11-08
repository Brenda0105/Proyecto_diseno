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
                                            h3 Hola, {{ $user->name.' '.$user->surnames }}
                                            h5 Información personal 
                                                button.btn.btn-link(type='button') Editar
                                            h6.text-muted Nombre:
                                            label(for="") {{ $user->name }}
                                            h6.text-muted Dirección:
                                            label(for="") {{ $user->street.' '.$user->suburb.' '.$user->postal_code.' '.$user->state }}
                                            h6.text-muted Correo electrónico:
                                            label(for="") {{ $user->email }}
                                            h5.mt-2 Último pedidos
                                            p.p-2 Por el momento, no existen pedidos.
                            div.tab-pane.fade(id="estado",role="tabpanel",aria-labelledby="estado-tab")
                                div.container
                                    div.row
                                        div.col-md-6.text-left.p-2
                                            h5.mt-3.mb-3 Estado de cuenta/Crédito Coppel                                                
                                            p.text-muted.text-justify Ser cliente puntual tiene beneficios exclusivos
                                            p.text-muted.text-justify Sigue pagando puntualmente y descubrelos
                                            h5.mt-2.mb-2 Número de cliente:
                                            label(for="") {{ $user->client_number }}
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
                            div.tab-pane.fade(id="perfil",role="tabpanel",aria-labelledby="perfil-tab")
                                div.container
                                    div.row
                                        div.col-12.text-left.mt-4.mb-2
                                            h4 Bienvenido
                                        div.col-md-12
                                                div.container
                                                    div.row.text-justify.debe-estar
                                                        form(action="",name="profileForm", , method="POST")
                                                        form(method='POST' action='/register',id="profileForm")
                                                            div.conatiner
                                                                div.row
                                                                    div.col-6
                                                                        label(for="name") Nombre(s):
                                                                        input.form-control(value='', type="text",placeholder="Nombre(s)",name="name",id="pname")
                                                                    div.col-6
                                                                        label(for="surnames") Apellidos:
                                                                        input.form-control(value="",type="text",placeholder="Apellidos",name="surnames",id="psurname")
                                                                    div.col-12.mt-2
                                                                        label(for="email") Correo electrónico:
                                                                        input.form-control.read-only(value="",type="email",placeholder="Email",name="email",read-only="true")
                                                                    div.col-6.mt-2
                                                                        label(for="password") Si deseas cambiar tu contraseña, hazlo aqui:
                                                                        input.form-control(type="password",placeholder="Contraseña",name="new_password")
                                                                    div.col-6.mt-2
                                                                        label(for="confirm") Escribe tu nueva contraseña
                                                                        input.form-control(type="password",placeholder="Contraseña",name="confirm_password")
                                                                    div.col-6.mt-2
                                                                        label(for="gender" id="pgender") Sexo
                                                                        select.form-control(name="gender")
                                                                            option(value="MALE") Masculino
                                                                            option(value="FEMALE") Femenino
                                                                    div.col-6.mt-2
                                                                        label(for="birthdate") Fecha de nacimiento
                                                                        input.form-control(type="date",placeholder="Fecha",name="birth_date" id="pbirth")
                                                                    div.col-6.mt-2
                                                                        label(for="name") Telefono fijo:
                                                                        input.form-control(type="text",placeholder="Telefono fijo",name="phone" id="pphone")
                                                                    div.col-6.mt-2
                                                                        label(for="name") Telefono celular:
                                                                        input.form-control(type="text",placeholder="Telefono celular",name="phone_number" id="ptel")
                                                                    div.col-12.mt-4.text-right
                                                                        button.btn.btn-primary(type='button',onclick="updateProfile()") Guardar
                            div.tab-pane.fade(id="domicilio",role="tabpanel",aria-labelledby="domicilio-tab")
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
                                                        input.form-control(type="text",id="email_de")
                                                    div.col-6.text.left
                                                        label(for="") Telefono
                                                        input.form-control(type="text",id="tel_de")
                                                    div.col-6.text-left.mb-3
                                                        br
                                                        label(for="fijo") Fijo
                                                        input.mt-2.ml-2(type="radio", name="fijo",id="tel_fij")
                                                        label(for="celular") Celular
                                                        input.mt-2.ml-2(type="radio", name="celular")
                                                    div.col-6.text-left
                                                        label(for="") Nombre(s)
                                                        input.form-control(type="text",id="nam_de")
                                                    div.col-6.text-left
                                                        label(for="") Apellido
                                                        input.form-control(type="text",id="sur_de")
                                                    div.col-12.text-left.mt-3
                                                        input(type="checkbox",name="pedidio")
                                                        label(for="pedidio") Quiero que alguien más pueda recibir mi pedido
                                        div.col-6
                                            br
                                            br
                                            h4.text-left Domicilio de entrega
                                            form(method="post")
                                            form.form-horizontal(method='POST', id="addressForm" action="{{ route('update_user_delivery',$user->id) }}")
                                                div.row.text-left
                                                    div.col-md-12.text-left
                                                    div.col-md-6
                                                        label(for='') Codigo postal 
                                                        input.form-control(type='text', id='postal_code',name='postal_code', placeholder='Codigo Postal')
                                                    div.col-md-6
                                                        label(for='') Calle: 
                                                        input.form-control(type='text', id='street',name='street', placeholder='Calle')
                                                    div.col-md-6
                                                        label(for='') Colonia 
                                                        input.form-control( type='text', id='suburb',name='suburb', placeholder='Colonia')
                                                    div.col-md-6
                                                        label(for='') Estado 
                                                        input.form-control(type='text', id='state',name='state', placeholder='Estado')
                                                    div.col-md-6
                                                        label(for='') Ciudad
                                                        input.form-control(type='text', id='city',name='city', placeholder='Ciudad')
                                                    div.col-12.text-right
                                                        br
                                                        button.btn.btn-primary.mt-5(type="button", onclick="updateAdress()")  Guardar
    script(src='https://code.jquery.com/jquery-3.3.1.slim.min.js')
    script.
        user = JSON.parse('<?php echo $user; ?>')
        console.log(user)
        $('#pname').val(user.name)
        $('.email').val(user.email)
        $('#psurname').val(user.surnames)
        $('#pgender').val(user.gender)
        $('#pbirth').val(user.birth_date)
        $('#ptel').val(user.phone_number)
        $('#pphone').val(user.phone_number)

        
        $('#email_de').val(user.email)
        $('#tel_de').val(user.phone_number)
        $('#nam_de').val(user.name)
        $('#sur_de').val(user.surnames)


        $('#postal_code').val(user.postal_code)
        $('#street').val(user.street)
        $('#suburb').val(user.suburb)
        $('#state').val(user.state)
        $('#city').val(user.city)


        function updateAdress(){
            $('#addressForm').attr('action',`http://localhost:8000/actualizar-domicilios/`+user.id)
            $('#addressForm').submit()
        }

        function updateProfile(){
            $('#profileForm').attr('action',`http://localhost:8000/actualizar-informacion/`+user.id)
            $('#profileForm').submit()
        }

@endsection