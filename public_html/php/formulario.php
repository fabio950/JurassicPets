<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login o registrarse</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/login.css" rel="stylesheet" type="text/css"/>
        <link href="../css/registrar.css" rel="stylesheet" type="text/css"/>
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <!-- JS -->
        <script src="../js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js.descarga"></script>
        <script src="../js/login.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="active" id="login-form-link">Iniciar sesión</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="register-form-link">Regístrate</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="login-form" style="display: block;">
                                        <div class="form-group">
                                            <label for="nombre" class="cols-sm-2 control-label">Nombre</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="nombre" id="nombreLogin"  placeholder="Introduce tu nombre"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="cols-sm-2 control-label">Contraseña</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                    <input type="password" class="form-control" name="password" id="passwordLogin"  placeholder="Introduce tu contraseña"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input name="submit" type="button" id="btnLogin" class="btn btn-primary btn-lg btn-block login-button button" value="Iniciar sesión"/>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form id="register-form" style="display: none;">
                                        <div class="form-group">
                                            <label for="nombre" class="cols-sm-2 control-label">Nombre</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Introduce tu nombre"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="cols-sm-2 control-label">Contraseña</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                    <input type="password" class="form-control" name="password" id="password"  placeholder="Introduce tu contraseña"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="cols-sm-2 control-label">Email</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                    <input type="email" class="form-control" name="email" id="email"  placeholder="Introduce tu email"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input name="submit" type="button" id="btnRegistrar" class="btn btn-primary btn-lg btn-block login-button button" value="Registrarse"/>
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
        
        <!-- Modal ERROR -->
        <div id="modalErrorLogin" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div id="card-alert" class="modal-content alert alert-danger">
                    <div class="card-content white-text">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <p><i class="fa fa-warning"></i> Datos incorrectos</p>
                    </div>
                </div>
            </div>
        </div>  
        
        <!-- Modal ERROR -->
        <div id="modalErrorRegistro" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div id="card-alert" class="modal-content alert alert-danger">
                    <div class="card-content white-text">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <p><i class="fa fa-warning"></i> Usuario ya registrado</p>
                    </div>
                </div>
            </div>
        </div> 
        
    </body>
</html>