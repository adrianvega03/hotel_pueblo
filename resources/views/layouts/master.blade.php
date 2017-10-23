 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Hotel El Pueblo</title>
    
    <link rel="stylesheet" href="/css/master.css"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.css"> 
    <link rel="stylesheet" href="/css/ionicons.css"> 
    @yield('head')

</head>
<body>

    <header class="header-page gradient-black">
        <a href="/"><img src="/img/logo-pueblo.png" alt="Hotel el Pueblo" /></a>
        <li class="ion-drag white icon-menu pointer" id="icon-menu"></li>
    </header>

    
    <nav class="nav-menu text-center hidden" id="nav-menu">
        <div class="menu-item gradient-black">
        <a href="/" class="box-sizing">
        <span> Pagina Principal </span>
        </a> 
        </div>

        <div class="menu-item gradient-black">
        <a href="/reservaciones/" class="box-sizing">
            <span>Reservaciones</span>
        </a>
        </div>

        
        <div class="menu-item gradient-black">
        <a href="/galeria/" class="box-sizing">
        <span>Fotos del Hotel</span>
        </a>
        </div>


        <div class="menu-item gradient-black">
        <a href="/como-llegar/" class="box-sizing">
        <span>Direccion/Como llegar</span> 
        </a>
        </div>

        <div class="menu-item gradient-black">
        <a href="/contacto/" class="box-sizing">
        <span>Contactos</span>
        </a>
        </div>


    </nav>

    @yield('content')
    
    <footer class="footer-page">
        <div class="footer-content text-center">
            <p class="footer-border-bottom">Informacion de Contacto</p>
            <p class="footer-item">
            <i class="fa fa-phone" aria-hidden="true"></i> 2470 2514</p>
            <p class="footer-item"> 
            <i class="fa fa-envelope"></i> info@hotelpuebloupala.com</p>
            <p class="footer-item">
            <i class="fa fa-code" aria-hidden="true"></i> Desarrollado por: <a href="#" class="link">Manuel Montero</a></p>

        </div>

        <div class="footer-copy text-center"> 
        © Hotel Pueblo Upala 2017, todos los derechos reservados

        </div>
    </footer>

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/code.min.js"></script>
</body>
</html>