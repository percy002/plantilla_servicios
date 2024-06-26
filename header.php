<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

</head>
<body>
    <header class="header">
        <div class="navbar-info">
            <div class="navbar-info__item">Plaza Tupac Amaru, Cusco, Peru</div>
            <div class="navbar-info__item">info@vidriosplanos.com</div>
            <div class="navbar-info__item">F C</div>
        </div>
        <nav class="navbar">
        <div class="navbar__logo">Logo</div>
        <div class="navbar__toggle" id="navbar-toggle">&#9776;</div>
        <?php 
            $args=array(
                'theme_location' => 'menu-principal',
                'container' => '',
                'menu_id'=> 'main-menu',
                'menu_class' => 'navbar__menu'
            );
            wp_nav_menu($args);
        ?>
        <div class="navbar__carrito">
            <li><a href="">TIENDA ONLINE</a></li>
        </div>
    </nav>
    </header>
    
