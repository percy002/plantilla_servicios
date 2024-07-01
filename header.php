<?php 
        $front_page_id = get_option('page_on_front');
        $campo_personalizado = get_field('colores', $front_page_id);

        $color_primario = $campo_personalizado['color_primario'];
        $color_secundario = $campo_personalizado['color_secundario'];
        $color_terciario = $campo_personalizado['color_terciario'];

        $logo = get_field('logo', $front_page_id);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php wp_head(); ?>

    <style>
        .navbar__menu li:hover {
            background-color: <?php echo $color_primario; ?>;
            border-radius: 10px;
            color: white;
        }
        .navbar__carrito{
            background-color: <?php echo $color_secundario; ?>;
        }

        .footer_empresa{ 
            background-color: <?php echo $color_primario; ?>;
        }   
        .footer-gob{
            background-color: <?php echo $color_secundario; ?>;
        }


    </style>
</head>
<body>
    
    <header class="header">
        <div class="navbar-info" style="background-color: <?php echo $color_primario; ?>;">            <div class="navbar-info__item"><i class="fab fa-facebook"></i>Plaza Tupac Amaru, Cusco, Peru</div>
            <div class="navbar-info__item">info@vidriosplanos.com</div>
            <div class="navbar-info__item">957515933</div>
            <div class="navbar-info__item">
                <div class="redes__iconos">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-tiktok"></i></a>                
                </div>
            </div>
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
    
