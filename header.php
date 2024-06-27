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

    <style>
    .navbar__menu a,
    .navbar__carrito a {
        color: <?php echo $color_primario; ?>;
    }
</style>
</head>
<body>
    <?php 
            $front_page_id = get_option('page_on_front');
            $campo_personalizado = get_field('colores', $front_page_id);

            $color_primario = $campo_personalizado['color_primario'];
            $color_secundario = $campo_personalizado['color_secundario'];
            $color_terciario = $campo_personalizado['color_terciario'];

            $logo = get_field('logo', $front_page_id);
    ?>
    <header class="header">
        <div class="navbar-info" style="background-color: <?php echo $color_primario; ?>;">            <div class="navbar-info__item"><i class="fab fa-facebook"></i>Plaza Tupac Amaru, Cusco, Peru</div>
            <div class="navbar-info__item">info@vidriosplanos.com</div>
            <div class="navbar-info__item">957515933</div>
            <div class="navbar-info__item">F C</div>
        </div>
        <nav class="navbar">
        <div class="navbar__logo">
            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
        </div>
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
    
