<?php session_start() ?>
<!DOCTYPE html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <title>Contactopm</title>
        <!--<meta name="author" content="Oscar Larriega <larriega@gmail.com>">-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="row">
            <div class="container">
                <header>
                    <div id="socials">
                        <img src="img/redes.png" alt="">
                        <ul class="list-unstyled">
                            <li class="pull-left"><a href="https://www.linkedin.com/company/contacto-personnel-management" target="_blank" id="in">L</a></li>
                            <li class="pull-left"><a href="https://www.facebook.com/ContactoPM" target="_blank" id="fb">F</a></li>
                            <li class="pull-left"><a href="https://twitter.com/ContactoPm" target="_blank" id="tw">T</a></li>
                        </ul>
                    </div>
                    <img src="img/logo.png" alt="Logo contactopm" id="logo" class="center-block">
                    <nav class="col-sm-8 col-sm-offset-2">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="nosotros.php">NOSOTROS</a></li>
                            <li><a href="servicio.php">SERVICIOS</a></li>
                            <li><a href="postula.php" style="white-space:nowrap">¿BUSCAS TRABAJO?</a></li>
                            <li><a href="contacto.php">CONTACTANOS</a></li>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                </header>
                <section id="banners">
                    <div id="content-form-top" class="hidden-xs">
                        <form action="send.php" method="post">
                            <input type="hidden" name="fast_message" value="on">
                            <h3 class="text-center">SOLICITAR MAS<br>INFORMACIÓN</h3>
                            <div class="form-group">
                                <input type="text" name="nombres" class="form-control" placeholder="NOMBRES">
                            </div>
                            <div class="form-group">
                                <input type="text" name="telefono" class="form-control" placeholder="TELÉFONO">
                            </div>
                            <div class="form-group">
                                <input type="email" name="correo" class="form-control" placeholder="EMAIL">
                            </div>
                            <div class="form-group">
                                <input type="text" name="dni" class="form-control" placeholder="DNI">
                            </div>
                            <div class="form-group">
                                <textarea name="mensaje" class="form-control" placeholder="MENSAJE"></textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-danger">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <div id="home-slider" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#home-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#home-slider" data-slide-to="1"></li>
                            <li data-target="#home-slider" data-slide-to="2"></li>
                            <li data-target="#home-slider" data-slide-to="3"></li>
                            <li data-target="#home-slider" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="img/banner/BANNER1.jpg" alt="...">
                            </div>
                            <div class="item">
                                <img src="img/banner/BANNER2.jpg" alt="...">
                            </div>
                            <div class="item">
                                <img src="img/banner/BANNER3.jpg" alt="...">
                            </div>
                            <div class="item">
                                <img src="img/banner/BANNER4.jpg" alt="...">
                            </div>
                            <div class="item">
                                <img src="img/banner/banner5.jpg" alt="...">
                            </div>
                        </div>
                    </div>
                </section>