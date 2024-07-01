<?php 
        $front_page_id = get_option('page_on_front');
        $campo_personalizado = get_field('colores', $front_page_id);

        $color_primario = $campo_personalizado['color_primario'];
        $color_secundario = $campo_personalizado['color_secundario'];
        $color_terciario = $campo_personalizado['color_terciario'];

        $logo = get_field('logo', $front_page_id);
        $logo_blanco = get_field('logo_blanco', $front_page_id);
?>
<footer>
    <!-- footer de la empresa -->
    <section>
        <div class="footer_empresa">
            <div class="footer_empresa__logo">
                <img src="<?php echo esc_url($logo_blanco['url']); ?>" alt="<?php echo esc_attr($logo_blanco['alt']); ?>">
            </div>
            <div class="footer_empresa__nosotros">
                <div class="">
                    <h4>Sobre Nosotros</h4>
                    <ul>
                        <li><a href="">vidriosplanos@gmail.com</a></li>
                        <li><a href="">avenida</a></li>
                        <li><a href="">+51 585695844</a></li>
                    </ul>
                </div>
            </div>
            <div class="">
                <div class="">
                    <h4>Siguenos</h4>
                    <div class="footer_empresa__redes">
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer gobierno regional -->
     <section>
        <div class="footer-gob">
            <div class="footer-gob__logos">
                <img src="<?php echo get_template_directory_uri().'/assets/img/logos/logo_gore.png'?>" alt="Gobierno Regional Cusco">
                <img src="<?php echo get_template_directory_uri().'/assets/img/logos/logo_mypes.png'?>" alt="logo proyecto mypes">
                <img src="<?php echo get_template_directory_uri().'/assets/img/logos/logo_gerepro.png'?>" alt="logo GEREPRO">
            </div>
            <div class="">
                <h4>Hagamos Historia</h4>
            </div>
            <div class="">
                © 2024 MYPEs Digitales - Todos los Derechos Reservados.
            </div>
        </div>
     </section>
</footer>
<?php wp_footer(); ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>