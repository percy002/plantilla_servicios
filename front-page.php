<?php 
        $front_page_id = get_option('page_on_front');
        $campo_personalizado = get_field('colores', $front_page_id);

        $color_primario = $campo_personalizado['color_primario'];
        $color_secundario = $campo_personalizado['color_secundario'];
        $color_terciario = $campo_personalizado['color_terciario'];

        $logo = get_field('logo', $front_page_id);
?>
<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>
    <?php
        $imagenes_carrusel = get_field('carrusel');
    ?>
    <section>
        <!-- Seccion Carrusel -->
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="<?php echo esc_url($imagenes_carrusel['imagen1']['url']); ?>" class="d-block w-100" alt="<?php echo esc_attr($imagenes_carrusel[0]['alt']); ?>">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="<?php echo esc_url($imagenes_carrusel['imagen2']['url']); ?>" class="d-block w-100" alt="<?php echo esc_attr($imagenes_carrusel[1]['alt']); ?>">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="<?php echo esc_url($imagenes_carrusel['imagen3']['url']); ?>" class="d-block w-100" alt="<?php echo esc_attr($imagenes_carrusel[2]['alt']); ?>">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Seccion Historia -->
     <section>
        <div class="historia">
            <div class="historia__contenido">
                <h2>Nuestra Historia</h2>
                <p><?php the_content()?></p>
            </div>
            <div class="historia__logo">
                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
            </div>
        </div>
     </section>

    <!-- Seccion Nuestros Servicios  -->
    <section>
        <div class="servicios">
            <?php listar_servicios() ?>
        </div>
    </section>

    <!-- Seccion Contacto -->
    <section class="contacto">
        <div class="contacto__info">
            <div class="contacto__info__mapa ratio ratio-1x1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.0192671465456!2d-71.96687441713988!3d-13.522299781273569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd5e2862253fd%3A0x2d351caeb2342469!2sPlaza%20T%C3%BApac%20Amaru!5e0!3m2!1ses!2spe!4v1719962769025!5m2!1ses!2spe" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contacto__info__formulario">
                <div class="">
                    <h2>Mensaje</h2>
                    <div class="separador"></div>
                    <?php echo do_shortcode('[contact-form-7 id="f27f4f9" title="Formulario de contacto"]'); ?>

                </div>
            </div>
        </div>       
        
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>
