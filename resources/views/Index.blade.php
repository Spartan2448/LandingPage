<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Sofia');
        body {
            font-family: 'Sofia';
        }
        p {
            text-align: justify;
            padding-left: 30px;
            padding-right: 30px;
            font-size: 20px;
        }
        a {font-size: 25px;font-weight: bold;}
        iframe{
            margin-bottom: 20px;
        }
        html{
            scroll-behavior: smooth;
        }
        footer,input,list-group
        {
            background: #2d3748;
            color: #edf2f7;
        }
        nav{
            background:#2d3748 ;
            color:white ;
        }
        section{
            background:#2d3748; color: #f7fafc;
        }

    </style>

    <title>Atributos de calidad</title>

</head>
<body>

    <nav class="navbar navbar-expand-lg py-4 px-5">
            <a class="navbar-brand text-white me-auto " style="font-size: 25px;" href="">Atributos de calidad de software</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav"  >
                   <ul class="navbar-nav ms-auto">
                       <li class="nav-item ">
                            <a class="nav-link text-white" aria-current="page" href="#definicion">Inicio</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link text-white" href="#contactanos">Contacto</a>
                       </li>
                   </ul>
            </div>
        </nav>
    </nav>

    <section class="container-fluid pt-sm-1 my-lg-4 border border-dark rounded-3" id="definicion" style="background:#2d3748; color: #f7fafc">
        <div class="container-sm text-center mx-auto" >
            <div class="col-12 align-middle">
                <table class="col-12 text-center">
                    <tbody class="align-middle">
                    <tr>
                        <td class="text-center align-middle">
                            <H4 style="font-weight: bold;">Definici??n</H4>
                            <hr class="border border-white border-2 w-25 m-lg-auto">
                            <p style="padding-top: 15px">Es una propiedad cuantificable la cual mide la calidad del software desarrollado,
                            tambi??n nos brinda la capacidad de evaluar la manera en c??mo se desarrollo el sistema.
                            </p>
                            <p style="text-align: center">Son conocidos como requerimientos no funcionales o caracter??sticas de arquitectura.</p>
                            <iframe width="600" height="400" src="https://www.youtube.com/embed/NmRuhzyKCWM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p style="text-align: center">Los mas relevantes que seran explicados con su respectivo escenario son:</p>

                            <div class="list-group list-group-horizontal-sm border border-0 pb-3 ">
                                <a href="#Disponibilidad" class="list-group-item list-group-item-action bg-transparent border border-0" tabindex="1" style="font-size: 20px;color: white">Disponibilidad</a>
                                <a href="#Interoperatividad" class="list-group-item list-group-item-action bg-transparent border border-0" tabindex="2" style="font-size: 20px;color: white">Interoperatividad</a>
                                <a href="#Modificalidad" class="list-group-item list-group-item-action bg-transparent border border-0" tabindex="3" style="font-size: 20px;color: white">Modificalidad</a>
                                <a href="#Rendimiento" class="list-group-item list-group-item-action bg-transparent border border-0" tabindex="4" style="font-size: 20px;color: white">Rendimiento</a>
                                <a href="#Seguridad" class="list-group-item list-group-item-action bg-transparent border border-0" tabindex="5" style="font-size: 20px;color: white">Seguridad</a>
                                <a href="#Testeabilidad" class="list-group-item list-group-item-action bg-transparent border border-0" tabindex="6" style="font-size: 20px;color: white">Testeabilidad</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>


            </div>

        </div>
    </section>
    <hr class="border border-2 border-dark">
    <!--Disponibilidad-->
    <section class="container-fluid pt-sm-1 my-auto border border-0 rounded-3 mb-3" id="Disponibilidad" ">
        <div class="container-sm text-center mx-auto" >
            <div class="row justify-content-center py-5">
                <div class="row justify-content-center ">
                    <H4 style="font-weight: bold;">Disponibilidad</H4>
                    <hr class="border border-white border-2 w-25 m-lg-auto">
                    <p style="padding-top: 15px; text-align: center">Propiedad del software que garantiza la correcta funionalidad del sistema, cuando requiere ser usado.
                    </p>
                    <p style="padding-top: 15px; text-align: center">Debe garantizar la respuesta ante una detenci??n o provocaci??n de falla.</p>
                    <H5 style="font-weight: bold;">Escenario</H5>
                    <hr class="border border-white border-2 w-auto m-lg-auto">
                    <p>En este escenario se tendr?? un monitoreo parcial al trafico de red, el cual entra al sistema/servidor monitoreado.
                        El monitor registra que en lapso de dos horas para la fecha, que el trafico de red tiene un  incremento elevado produciendo
                        una lentiud en la red fuera del margen normal establecido durante 5 minutos , afectando en cierta medida
                        la operaci??n del sistema para el env??o de informaci??n desde el servidor hacia el aplicativo en la red suministrada.
                        El monitor notifica al operador, realiza la tarea de optimizaci??n del canal de tr??fico de la red y permite continuar con total normalidad la operaci??n.
                    </p>
                    <img src="{{asset('images/Escenario Disponibilidad.png')}}" class="img-fluid w-75"  alt="disponibilidad">
                </div>
            </div>
        </div>
    </section>
    <hr class="border border-2 border-dark">
   <!-- Interoperatividad-->
    <section class="container-fluid pt-sm-1 my-auto border border-0 rounded-3 mb-3" id="Interoperatividad" ">
    <div class="container-sm text-center mx-auto" >
        <div class="row justify-content-center py-2">
            <div class="row justify-content-center ">
                <H4 style="font-weight: bold;">Interoperatividad</H4>
                <hr class="border border-white border-2 w-25 m-lg-auto">
                <p style="padding-top: 15px;">Es la capacidad de los sistemas para intercambiar informacion entre si.
                    Se basa en dos conceptos los cuales son: la capacidad de intercambiar datos (interoperatividad sint??ctica) y tambien la capacidad
                    de interprestar correctamente la informacion que se suministra o intercambia (interoperatividad sem??ntica).
                </p>
                <H5 style="font-weight: bold;">Escenario</H5>
                <hr class="border border-white border-2 w-auto m-lg-auto">
                <p>El escenario planteado es el de una aplicaci??n que utiliza servicio de GPS, el cual es usado por el usuario que
                    solicita la ubicaci??n actual de donde se encuentra. La aplicaci??n a trav??s del servicio de GPS env??a la informaci??n de ubicaci??n
                    actual al sistema de monitoreo de tr??fico . El sistema de monitoreo de tr??fico combina nuestra ubicaci??n
                    con la informaci??n proporcionada por la aplicaci??n de geolocalizaci??n, la cual es google maps y la difunde.
                    Nuestra informaci??n de la ubicaci??n actual retornada, esta incluida con una probabilidad del 99.9%.
                </p>
                <img src="{{asset('images/Escenario Interoperatividad.png')}}" class="img-fluid w-75 mb-3"  alt="Interoperatividad">
            </div>
        </div>
    </div>
    </section>
    <hr class="border border-2 border-dark">
    <!--Modificalidad-->
    <section class="container-fluid pt-sm-1 my-auto border border-0 rounded-3 mb-3" id="Modificalidad" ">
    <div class="container-sm text-center mx-auto" >
        <div class="row justify-content-center py-4">
            <div class="row justify-content-center ">
                <H4 style="font-weight: bold;">Modificalidad</H4>
                <hr class="border border-white border-2 w-25 m-lg-auto">
                <p style="padding-top: 15px;">
                    Es la propiedad que brinda al arquitecto de software, las t??cticas que se deben tener
                    para adecuar un ??ptimo cambio y costo en el desarrollo del sistema a implementar.
                    Influye en el desarrollo de software, ya que nos brinda medidas de como se debe crear software
                    para el constante cambio que tendra en la vida util del mismo.
                </p>
                <H5 style="font-weight: bold;">Escenario</H5>
                <hr class="border border-white border-2 w-auto m-lg-auto">
                <p>El escenario planteado es en el desarrollo de un sistema en la cual el desarrollador desea cambiar
                    la interfaz de usuario modificando el c??digo fuente en el momento del dise??o e implementaci??n. Esta modificaci??n se efectua sin efectos
                    secundarios dentro de las 3 horas ya pactadas para tal fin.
                </p>
                <img src="{{asset('images/Escenario Modificalidad.png')}}" class="img-fluid w-75"  alt="Modificalidad">
            </div>
        </div>
    </div>
    </section>
    <hr class="border border-2 border-dark">
    <!--Rendimiento-->
    <section class="container-fluid pt-sm-1 my-auto border border-0 rounded-3 mb-3" id="Rendimiento" ">
    <div class="container-sm text-center mx-auto" >
        <div class="row justify-content-center py-4">
            <div class="row justify-content-center ">
                <H4 style="font-weight: bold;">Rendimiento</H4>
                <hr class="border border-white border-2 w-25 m-lg-auto">
                <p style="padding-top: 15px; ">
                    Esta propiedad nos indica la capacidad de respuesta del sistema para ejecutar ciertos eventos en un intervalo de tiempo,
                    su escencia se basa en medir en tiempo, la respuesta que puede tener el sistema en la ejecuci??n
                    de ciertos eventos o funcionalidad que lo incluyan.
                    Tambien debe asegurar la optima gestion de recursos de sistema donde se aloja la aplicaci??n segun la demanda que tenga este, para una eficiente
                    respuesta a las solicitudes enviadas.
                </p>

                <H5 style="font-weight: bold;">Escenario</H5>
                <hr class="border border-white border-2 w-auto m-lg-auto">
                <p>El escenario planteado es en la ejecucion de una prueba de rendimiento actual a un sistema transaccional, donde el usuario
                    inician el env??o de transaccicones a traves de la aplicaci??n con una operaci??n normal. El sistema procesa dicha solicitud con una
                    latencia promedio de 2 segundos.
                </p>
                <img src="{{asset('images/Escenario Rendimiento.png')}}" class="img-fluid w-75"  alt="Rendimiento">
            </div>
        </div>
    </div>
    </section>
    <hr class="border border-2 border-dark">
    <!--Seguridad-->
    <section class="container-fluid pt-sm-1 my-auto border border-0 rounded-3 mb-3" id="Seguridad" ">
    <div class="container-sm text-center mx-auto" >
        <div class="row justify-content-center py-4">
            <div class="row justify-content-center ">
                <H4 style="font-weight: bold;">Seguridad</H4>
                <hr class="border border-white border-2 w-25 m-lg-auto">
                <p style="padding-top: 15px; text-align: center">
                    Es la capacidad en la cual un sistema garantiza la protecci??n de los datos y el acceso a la informaci??n solo a las personas autorizadas.
                    Se caracteriza a trav??s de 3 enfoques: confidencialidad, integridad y disponibilidad.
                    Las cuales todas tienen un fin en com??n que es mantener el sistema seguro de tal manera que solo est?? disponible y permita interactuar
                    a las personas autorizadas para su adecuado uso.
                </p>

                <H5 style="font-weight: bold;">Escenario</H5>
                <hr class="border border-white border-2 w-auto m-lg-auto">
                <p>El escenario planteado consta de que un empleado descontento remotamente intenta realizar la manipulaci??n de las tasas de pago del
                    sistema en operaci??n normal. Este sistema registra en su log de auditoria esta modificaci??n.
                    Un d??a despu??s, se analiza la causa del cambio a trav??s de la verificaci??n de este log y se encuentra
                    el registro manipulado, se toma un punto de restauraci??n y as?? se restablece a la normalidad en la operaci??n.

                </p>
                <img src="{{asset('images/Escenario Seguridad.png')}}" class="img-fluid w-75"  alt="Seguridad">
            </div>
        </div>
    </div>
    </section>
    <hr class="border border-2 border-dark">
    <!--Seguridad-->
    <section class="container-fluid pt-sm-1 my-auto border border-0 rounded-3 mb-3" id="Testeabilidad" ">
    <div class="container-sm text-center mx-auto" >
        <div class="row justify-content-center py-4">
            <div class="row justify-content-center ">
                <H4 style="font-weight: bold;">Testeabilidad</H4>
                <hr class="border border-white border-2 w-25 m-lg-auto">
                <p style="padding-top: 15px; text-align: center">
                    Es la propiedad que tiene un sistema en facilitar la ejecuci??n de validaciones y pruebas para as?? grantizar el correcto
                    funcionamiento del mismo.
                    Se basa en la facilidad que tiene el software de demostrar sus fallas a traves de las pruebas implementadas.

                </p>
                <img src="{{asset('images/Modelo de prueba.png')}}" class="img-fluid w-75 pb-3"  alt="ModeloPrueba">
                <H5 style="font-weight: bold;">Escenario</H5>
                <hr class="border border-white border-2 w-auto m-lg-auto">
                <p>El escenario planteado establece que el probador "tester" funcional, completar en cierta medida
                    su deck de pruebas seg??n las historias de usuario entregadas para dicha ejecuci??n de pruebas en la
                    construcci??n del m??dulo del sistema entregado en un tiempo pactado de aproximadamente 3 horas.
                    Los resultados se obtienen y proporcionan una cobertura de ruta del 85 % dentro del tiempo acordado.
                </p>
                <img src="{{asset('images/Escenario Testeabilidad.png')}}" class="img-fluid w-75"  alt="Testeabilidad">
            </div>
        </div>
    </div>
    </section>
    <hr class="border border-2 border-dark">
    <!--footer pie de pagina-->
    <footer class="container-fluid" id="contactanos">
            <div class="container-sm text-center mx-auto pt-2" >
                <div class="row justify-content-center py-3">
                    <div class="col-14 text-center mt-3">
                        <h4 style="font-weight: bold; font-size: xx-large">Informaci??n de Contacto</h4>
                        <hr class="border border-white border-2 w-25 m-lg-auto">
                    </div>
                    <div class="col-4 mb-4 mt-4">
                        <H5 >Carlos Andr??s Ram??rez L??pez</H5>
                        <H5 >Caramirez579@misena.edu.co</H5>
                        <H5 >ADSI SENA</H5>
                        <h5><input class="border-0 text-center" type="datetime" name="fecha"  value="<?php echo date("Y-m-d");?>"></h5>
                        <!--<div class="col-12 text-center mt-4">
                            <small>&copy; Copyright 2021, Servicio Nacional de Aprendizaje</small>
                        </div>-->
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-auto text-center">
                        <small>&copy; Copyright 2021, Servicio Nacional de Aprendizaje, todos los derechos reservados</small>
                    </div>
                </div>
            </div>

    </footer>

</body>

</html>
