<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>JurassicPets</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- Material Design Icons -->
        <link href="css/icon" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="css/mdb.css" rel="stylesheet">

        <!-- Template style -->
        <link href="css/style.css" rel="stylesheet">

        <!-- SCRIPTS -->


        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery.min.js.descarga"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js.descarga"></script>

        <!-- Material Design Bootstrap -->
        <script type="text/javascript" src="js/mdb.js.descarga"></script>

        <script type="text/javascript" src="js/myscript.js"></script>

        <script src="js/clases.js" type="text/javascript"></script>

        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    </head>

    <body cz-shortcut-listen="true" class="animated fadeIn">
        <!-- Navigation -->
        <nav class="navbar z-depth-2 primary-color">
            <div class="container ">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php"><img height="60" width="300" src="img/logo-pag.gif" /></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form navbar-right waves-effect waves-light" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <div class="btn" id="btn_carrito" data-toggle='modal' data-target='#modalCarrito'><img src="img/cart.png" alt="" style="height: 20px; width: 20px;"/>
                        </div>
                        <?php
                        session_start();
                        if (isset($_SESSION['usuario'])) {
                            if($_SESSION['role'] == 'administrador'){
                                ?>
                                <a href="jqgrid.php" class="white-text"><i class="fa fa-cog"> </i></a>
                                <?php
                            }
                            ?>
                            <a href="php/logout.php" class="white-text"><i class="fa fa-sign-out fa-fw"></i></a>
                            <?php
                        } else {
                            ?>
                            <a href="php/formulario.php" class="white-text"><i class="fa fa-sign-in fa-fw"></i></a>
                            <?php
                        }
                        ?>
                    </form>

                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">
            <div class="row page-content">
                <!-- Blog Sidebar Widgets Column -->
                <div class="col-md-3">
                    <div class="sidebar">
                        <!-- Category widget -->
                        <div id="listaCategorias" class="collection">

                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <!-- carousel -->
                    <div class="row carousel-holder">

                        <div class="col-md-12">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>
                                <div id="carrusel" class="carousel-inner">

                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="fa fa fa-angle-left waves-effect waves-light"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="fa fa fa-angle-right waves-effect waves-light"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- /.carousel -->
                    <hr>
                    <!-- Page Features -->
                    <div id="contenedor" class="row text-center">
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
        <!-- /.container -->
        <hr>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="page-footer primary-color darken-1" if="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <p class="white-text center-on-small-only">GET STARTED</p>
                        <p class="white-text center-on-small-only">Register for free and start to create amazing things.</p>
                    </div>
                    <hr class="hidden-lg hidden-md">
                    <div class="col-md-2">
                        <p class="white-text center-on-small-only">USEFUL LINKS</p>
                        <ul>
                            <li><a href="http://mdbootstrap.com/MDB/live/Simple%20ecommerce%20homepage/index.html#" data-toggle="modal" data-target="#myModal" class="grey-text text-lighten-3">Contact us</a>
                            </li>
                            <li><a class="grey-text text-lighten-3" href="http://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">About MDB</a>
                            </li>
                            <li><a class="grey-text text-lighten-3" href="http://mdbootstrap.com/forums/forum/support/" target="_blank">Support</a>
                            </li>
                            <li><a class="grey-text text-lighten-3" href="http://mdbootstrap.com/forums/forum/bugs/" target="_blank">Bug report</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="hidden-lg hidden-md">
                    <div class="col-md-3 text-center">
                        <p class="white-text text-center"> GITHUB </p>
                        <a href="http://www.github.com/maria303" target="_blank" class="btn-floating btn-large black waves-effect waves-light"><i class="fa fa-github"> </i></a>
                        <a href="http://www.github.com/miikorz" target="_blank" class="btn-floating btn-large black waves-effect waves-light"><i class="fa fa-github"> </i></a>
                        <a href="http://www.github.com/fabio950" target="_blank" class="btn-floating btn-large black waves-effect waves-light"><i class="fa fa-github"> </i></a>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1"> © 2016 Copyright 
                    </div>
                </div>
            </div>
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ventana Modal</h4>
                    </div>
                    <div class="modal-body">
                        <p class="modalDescripcion">Some text in the modal.</p>
                        <span id="modalId" class="hiddendiv">Some text in the modal.</span>
                        <h6 class="modalPrecio"></h6>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-default" id="btn_comprar" data-dismiss="modal">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCarrito" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="modal-title">Ventana Modal</h4>
                    </div>
                    <div class="modal-body" id="modalCarritoBody">
                        <!--
                        <p class="modalDescripcion" id="modalDescripcion">Some text in the modal.</p>
                        <h6 class="modalPrecio" id="modalPrecio"></h6>
                        -->
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-default" id="btn_comprarCarrito" data-dismiss="modal" >Finalizar compra</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hiddendiv common"></div></body></html>