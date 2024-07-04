<?php function listar_servicios($cantidad="3"){?>
        <?php 
            $args=array(
                "post_type"=>"servicio",
                'posts_per_page' => $cantidad,//cantidad de servicios recuperados
                'orderby' => 'modified',
            ) ;
            $servicios = new WP_Query($args);   

            // var_dump($servicios);
            
        ?>
        <div class="servicio">
            <?php while($servicios->have_posts()): $servicios->the_post(); ?>
                <?php 
                    $imagen=get_field("imagen");
                    $descripcion = get_the_content();
                ?>
                <div class="servicio__card">
                    <div class="servicio__card__imagen">
                        <a href="<?php echo get_permalink() ?>">
                            <img class="" src="<?php echo $imagen['url'] ?>" alt="">                        
                        </a>
                    </div>
                    <div class="servicio__card__descripcion">
                        <h4><?php the_title() ?></h4>
                        <p><?php echo $descripcion ?></p>
                    </div>
                    <div class="servicio__card__button" id="buAgregar">
                        <button onclick="agregarProducto('<?php echo esc_js(get_the_title()); ?>')">Agregar</button>
                    </div>
                </div>
                <?php endwhile ?>
                <?php wp_reset_postdata() ?>
        </div>


<?php } ?>