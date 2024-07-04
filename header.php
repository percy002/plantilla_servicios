<?php 
        $front_page_id = get_option('page_on_front');
        $campo_colores = get_field('colores', $front_page_id);
        $logo = get_field('logo', $front_page_id);

        $datosContacto = get_field('datos_contacto', $front_page_id);

        $direccion = $datosContacto['direccion'];
        $correo_electronico = $datosContacto['correo_electronico'];
        $celular = $datosContacto['celular'];

        $color_primario = $campo_colores['color_primario'];
        $color_secundario = $campo_colores['color_secundario'];
        $color_terciario = $campo_colores['color_terciario'];

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
        a:hover{
            text-decoration: none;
            color: <?php echo $color_secundario; ?>;
        }
        h1,h2{
            color: <?php echo $color_primario; ?>;
        }
        .menu-item a:hover{
            background-color: <?php echo $color_primario; ?>;
            color: white;
        }
        .navbar__menu li:hover {
            background-color: <?php echo $color_primario; ?>;
            border-radius: 10px;
            color: white;
        }
        .navbar__carrito button{
            background-color: <?php echo $color_secundario; ?>;
            border: 0px solid;
        }
        .navbar__carrito button:hover{
            background-color: <?php echo $color_primario; ?>;
            border: 0px solid;
        }
        .navbar__carrito-mobile button{
            background-color: <?php echo $color_secundario; ?>;
            border: 0px solid;

        }
        .navbar__carrito-mobile button:hover{
            background-color: <?php echo $color_primario; ?>;
            border: 0px solid;

        }

        .footer_empresa{ 
            background-color: <?php echo $color_primario; ?>;
        }   
        .footer-gob{
            background-color: <?php echo $color_secundario; ?>;
        }
        .servicio__card__button button{
            background-color: <?php echo $color_primario; ?>;
        }
        .bg-primario{
            background-color: <?php echo $color_primario; ?>;
        }
        .wpcf7-submit{
            width: 100%;
            padding: 10px;
            border: 0px solid;
            background-color: <?php echo $color_primario; ?>;
            color: white;
            border-radius: 20px;
            cursor: pointer;
            font-size: 20px;
        }


    </style>
</head>
<body>
    
    <header class="header">
        <div class="navbar-info" style="background-color: <?php echo $color_primario; ?>;">
            <div class="navbar-info__item"><i class="fas fa-map-marker-alt"></i><?php echo $direccion?></div>
            <div class="navbar-info__item"><i class="fas fa-envelope"></i><?php echo $correo_electronico?></div>
            <div class="navbar-info__item"><i class="fas fa-mobile-alt"></i><?php echo $celular?></div>
            <div class="navbar-info__item">
                <div class="redes__iconos">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-tiktok"></i></a>                
                </div>
            </div>
        </div>
        <!-- <nav class="navbar">
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
        </nav> -->
        <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container-fluid navbar__contenido">
            <a class="navbar-brand navbar__logo" href="#">
                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">

            </a>
            <div class="navbar__carrito-mobile">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
                
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
            <!-- <ul class="navbar-nav"> -->
                <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li> -->
                
            <?php 
                $args=array(
                    'theme_location' => 'menu-principal',
                    'container' => '',
                    'menu_id'=> '',
                    'menu_class' => 'navbar-nav'
                );
                wp_nav_menu($args);
            ?>
            
            
            </div>
            <div class="navbar__carrito">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    TIENDA ONLINE
                </button>
            </div>

            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
            </button> -->

            
        </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tienda Online</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id='modalBodyContent'>
                        <!-- servicios seleccionados -->
                         <div class="servicios-seleccionados">

                             <div class="">Nombre del Servicio</div>
                             <div class="">Cantidad</div>
                             <div class="">Opciones</div>
                         </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn buWhatsapp " onclick="comprar()"><i class="fa-brands fa-whatsapp"></i> Whatsapp</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
    </header>
    
