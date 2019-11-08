@extends('uriel.app')
@section('content')
doctype html
html
    head
        //link(rel="stylesheet", href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css")
        //link(rel="stylesheet", href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css") 
        //link(rel="stylesheet", href="http://localhost:8000/css/styles.css")
    body.b-confirm
        header
            br
            div.container
                div.row
                    div.col-2
                    div.col-3.text-center
                        img(src="http://localhost:8000/img/tarjeta_coppel_min.png", width="170" alt="alt")
                    div.col-5.text-center
                        h3.text-white ¡Listo, {{ $data->first_name.' '.$data->first_surname }}! Ya casi tienes tu crédito
                    div.col-2
                div.row.mt-2
                    div.col-2
                    div.col-8.text-center
                        div.card
                            div.card-body
                                h3 Te llamaremos en unos minutos
                                br
                                br
                                h5 Ten a la mano esta información
                                div.container.p-3
                                    ul.list-unstyled.text-center
                                        li INE/IFE
                                        li 2 referencias personales
                                    h6.text-muted (Nombre, dirección y telefono)
                            div.card-footer
                                h6 Tus datos están 100% seguros y encriptados
                    div.col-2
@endsection