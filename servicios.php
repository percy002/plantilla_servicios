<?php 
/*
    Template Name: pagina servicios
*/

get_header(); ?>
<?php while(have_posts()): the_post(); ?>
    <div class="pagina-encabezado">
        <div class="">
            <h1>Nuestros Servicios</h1>
            <p>Realizamos instalaciones profesionales ya sea en obra o domicilio.</p>
        </div>
    </div>
    
    <section>              
        <div class="servicios">
            <?php listar_servicios() ?>
        </div>
    </section>

<?php endwhile ?>
<?php get_footer() ?>