<?php
    session_start();
    if ($_SESSION["usuario"]==""){
        header('Location: index.html');
    }

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesone/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Blog Musica</title>
</head>
<body>

<div class="contenedor" id="inicio">
    <header v-if="NombreUsuario !== null">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between">
            <div class="col-1">
                <i class="fas fa-music"></i>
            </div>
            <div class="col-4">
                <div class="input-group ">
                    <div class="input-group-prepend flex-fill">
                        <input type="search" class="form-control" name="txtbuscador" id="txtbuscador" placeholder="Buscar">
                        <span class="input-group-text" >
                            <i class="fas fa-search-plus"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-4 mr-auto">
                <div class="row d-flex justify-content-end">
                    <div class="col-2">
                        <div class="img-fake flex-fill" style="border: 1px solid white;border-radius: 30px;width: 40px;height: 40px">

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="nav-item active">
                            <a href="" class="p-0 pt-2 nav-link" style="color: white;">{{NombreUsuario}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a href="" class="nav-link">Cuenta</a>
                    </li>
                    <li class="nav-item active">
                        <button class="btn btn-primary" @click="cerrarsession">
                            Cerrar session
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row pt-4">
            <div class="col-8" >
                <h5><i class="fab fa-usps"></i>&emsp; Nuevo Post</h5>
                <div class="row">
                    <div class="col-1">
                        <div class="img-fake flex-fill" style="border: 1px solid black;border-radius: 30px;width: 40px;height: 40px">
                        </div>
                    </div>
                    <div class="col-9">
                        <form >
                            <div class="form-group">
                                <label for="MensajePost">Mensaje del Post</label>
                                <textarea class="form-control bordes" id="MensajePost" rows="3" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="filemusica">Seleccione el archivo que va a posteart</label>
                                <input type="file" class="form-control-file  btn btn-primary" id="filemusica">
                            </div>
                        </form>
                    </div>
                    <div class="col-2 d-flex align-items-center">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary">
                                Postear
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5><i class="fas fa-plus-circle"></i>&emsp; Posts</h5>
                        <div class="row">
                            <div class="col d-flex flex-row align-items-center">
                                <div>
                                    <div class="img-fake flex-fill" style="border: 1px solid black;border-radius: 30px;width: 40px;height: 40px">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p>&emsp; Usuario</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col ">
                                <div class="text-info pt-2 ml-5 mr-5">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, alias?
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, alias?
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, alias?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <h5><i class="fas fa-compact-disc"></i>&emsp;Top Musica</h5>
                        <div class="row">
                            <div class="col pt-4">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <i class="fas fa-play"></i>
                                    <p>Nombre Musica</p>
                                    <p>Nombre Usuario</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <i class="fas fa-play"></i>
                                    <p>Nombre Musica</p>
                                    <p>Nombre Usuario</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <i class="fas fa-play"></i>
                                    <p>Nombre Musica</p>
                                    <p>Nombre Usuario</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <i class="fas fa-play"></i>
                                    <p>Nombre Musica</p>
                                    <p>Nombre Usuario</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <i class="fas fa-play"></i>
                                    <p>Nombre Musica</p>
                                    <p>Nombre Usuario</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <i class="fas fa-play"></i>
                                    <p>Nombre Musica</p>
                                    <p>Nombre Usuario</p>
                                </div>
                            </div>
                        </div>
                        <h5><i class="fas fa-user-friends"></i>&emsp;Amigos</h5>
                        <div class="row">
                            <div class="col pt-4 m-2">
                                <div class="d-flex justify-content-around align-items-baseline">
                                    <i class="fas fa-comment-dots"></i>
                                    <p class="mr-5">Contacto nombre</p>
                                    <i class="fas fa-check-circle verde"></i>
                                </div>
                                <div class="d-flex justify-content-around align-items-baseline">
                                    <i class="fas fa-comment-dots"></i>
                                    <p class="mr-5">Contacto nombre</p>
                                    <i class="fas fa-check-circle verde"></i>
                                </div>
                                <div class="d-flex justify-content-around align-items-baseline">
                                    <i class="fas fa-comment-dots"></i>
                                    <p class="mr-5">Contacto nombre</p>
                                    <i class="fas fa-check-circle verde"></i>
                                </div>
                                <div class="d-flex justify-content-around align-items-baseline">
                                    <i class="fas fa-comment-dots"></i>
                                    <p class="mr-5">Contacto nombre</p>
                                    <i class="fas fa-check-circle verde"></i>
                                </div>
                                <div class="d-flex justify-content-around align-items-baseline">
                                    <i class="fas fa-comment-dots"></i>
                                    <p class="mr-5">Contacto nombre</p>
                                    <i class="fas fa-check-circle verde"></i>
                                </div>
                                <div class="d-flex justify-content-around align-items-baseline">
                                    <i class="fas fa-comment-dots"></i>
                                    <p class="mr-5">Contacto nombre</p>
                                    <i class="fas fa-check-circle verde"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
        </div>
    </main>
</div>
<script src="js/vue.js"></script>
<script src="js/vue-resource.js"></script>
<script src="js/inicio.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>

</body>
</html>