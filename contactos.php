<?php 
/*
    Template Name: pagina contactos
*/

get_header(); ?>
<?php while(have_posts()): the_post(); ?>
    <div class="pagina-encabezado">
        <div class="">
            <h1>Contactanos</h1>
            <p>Ponte en contacto con nosotros para todas tus preguntas y proyectos.</p>
        </div>
    </div>
    <?php 
        if(get_field('mision')) $mision=get_field('mision');
        if(get_field('vision')) $vision=get_field('vision');
        $front_page_id = get_option('page_on_front');
        $logo = get_field('logo', $front_page_id);
    ?>
    <section class="contacto">
        <div class="contacto__info">
            <div class="contacto__info__mapa ratio ratio-1x1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.0192671465456!2d-71.96687441713988!3d-13.522299781273569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd5e2862253fd%3A0x2d351caeb2342469!2sPlaza%20T%C3%BApac%20Amaru!5e0!3m2!1ses!2spe!4v1719962769025!5m2!1ses!2spe" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contacto__info__formulario">
                <div class="">
                    <h2>Mensaje</h2>
                    <?php echo do_shortcode('[contact-form-7 id="f27f4f9" title="Formulario de contacto"]'); ?>

                </div>
            </div>
        </div>

        <div class="contacto__porque">
            <h2>¿Por qué contactarnos?</h2>
            <p>Porque somos los mejores en lo que hacemos, tenemos la mejor calidad y los mejores precios.</p>
        </div>
        
        
    </section>

<?php endwhile ?>
<?php get_footer() ?>