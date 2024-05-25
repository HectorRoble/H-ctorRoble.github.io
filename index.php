<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <!-- Script de Fontawesome -->
    <script src="https://kit.fontawesome.com/f7fb471b65.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./static/css/style_index.css">

    <!-- Favicon -->
    <link rel="icon" href="./static/img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <title>Aliveve</title>
</head>

<body>
    <!-- Encabezado -->
    <header class="header">

        <nav>
            <!-- Logo -->
            <div id="logo">
                <a href="index.html">
                    <!-- Más adelante se aplicarán estilos específicos al texto y se agregará un ícono -->
                    <i class="fas fa-film"></i>
                    <span class="logo-text">ALI - Veve</span>
                </a>
            </div>

            <!-- Hipervínculos del Menú -->
            <ul class="nav-links">

               4456 <a href="./templates/register.html">Registrate</a>
                </li>

                
                <li>
                    <a class="btn-cac" href="#">
                        <!-- Más adelante se aplicarán estilos específicos al texto y se agregará un ícono -->
                        <i class="fas fa-sign-in-alt"></i>
                        <span class="login-text">Iniciar Sesión</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Contenido -->
    <main>
        
        <!-- banner: una sección prominente en la parte superior de
        una página que puede contener información destacada, como anuncios,
        mensajes importantes, o un diseño gráfico distintivo. -->
        <section id="banner">
            
            <div class="container card-banner">
                <h1>TU TECNOLOGIA PARA CADA MOMENTO</h1>
                <h2 class="h2" >ENCONTRÁ LOS MEJORES SMARTPHONES, PARLANTES, MEMORIAS, CARGADORES PORTATILES Y MAS.
                    </h2>
                <a href="./templates/register.html" class="btn-cac">Registrate</a>
            </div>
        </section>

        <!-- search: para implementar una barra de búsqueda en la página web -->
        <!-- <section id="search" class="container">
            <h4 class="search-title">¿Qué estás buscando para ver?</h4>
            <input type="text" class="input-search" placeholder="Buscar...">
        </section> -->
        <section id="search" class="container">
            <i class="fas fa-search" style="color:#ffff52f2;"></i>
            <input type="text" class="input-search" placeholder="Buscar Productos...">
        </section>
        <!-- seccion de ofertas -->
         <!-- top-rated: mostrar las películas más aclamadas-->
         <section id="of">
            <h2 class="soloPorHoy">¡OFERTAS SOLO X HOY!</h2>
        </section>
        <div class="ofertas-container">
            <!-- <img src="./static/img/imagenes/1.png" alt=""> -->


        </div>
        <section id="of">
            <h2>Celulares</h2>
        </section>
        <!-- popular: mostrar imágenes de las peliculas con tendencia hoy -->
        <div class="grid-container productojs">

                
                    <!-- División contenedora del título e imágenes -->
        </div> 
        <section id="of">
            <h2>Cargadores Portatiles</h2>
        </section>
        <!-- popular: mostrar imágenes de las peliculas con tendencia hoy -->
        <div class="caradorPortatilesjs grid-container">

                
                    <!-- División contenedora del título e imágenes -->
        </div>        
        <!-- Seccion de parlantes -->       
        <!-- Seccion de parlantes -->

        <section id="of">
            <h2>Parlantes</h2>
        </section>
        <div class="parlantesjs ofertas-container">
            <!-- <img src="./static/img/imagenes/1.png" alt=""> -->

        </div>
        
        <section id="of">
            <h2>Memorias RAM</h2>
        </section>

        <div class="memoriasjs ofertas-container">
            <!-- <img src="./static/img/imagenes/1.png" alt=""> -->          

        </div>

        <section id="of">
            <h2>Pendrive</h2>
        </section>

        <div class="pendrivesjs ofertas-container">
            <!-- <img src="./static/img/imagenes/1.png" alt=""> -->          

        </div>
        
        <section id="of">
            <h2>Variados</h2>
        </section>

        <div class="variadosjs ofertas-container">
            <!-- <img src="./static/img/imagenes/1.png" alt=""> -->          

        </div>

       
    </main>

    <!-- Pie -->
    <footer id="footer">
            <a href="" > <i class="fab fa-facebook-f"></i> Facebook</a>
            <a href=""> <i class="fab fa-instagram"></i> Instagram</a>
            <a href=""> <i class="fab fa-twitter"></i> X </a>
            <a href=""> <i class="fab fa-tiktok"></i>Tik Tok</a>
            <a href="">Términos y condiciones</a>
        
    </footer>
     <!-- /* scripts*/ -->
    <script src="./static/CSS/datos.js"></script>
    <script src="./static/JS/index.js"></script>
    
    
</body>


</html>