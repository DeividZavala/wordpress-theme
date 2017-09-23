<?php get_header();?>


    <section class="uk-section uk-section-muted">
            <div class="uk-container">
        
                <div>
                    <h4 class="uk-text-center uk-margin-small-bottom">¿Quieres estar al tanto de las nuevas noticias que PlanB tiene para ti?</h4>
                    <h3 class="uk-text-center">Suscibete a nuestro Newsletter</h3>
                </div>

                <div class="uk-flex">

                </div>
        
            </div>
        </section>

    <section class="uk-section uk-section-medium uk-section-muted uk-section-primary uk-margin-remove-top">
        <article class="uk-container">

            <?php
            $args = array(
                'post_type' => 'quienes_somos'
            );
            $post_query = new WP_Query($args);
            if($post_query->have_posts() ) {

                while($post_query->have_posts() ) {
                    $post_query->the_post();
                    ?>

            <h3 class="uk-margin-large uk-text-center" id="quienes"><?php the_title(); ?></h3>
    
            <div class="uk-text-center uk-padding-large uk-padding-remove-top uk-padding-remove-bottom uk-text-lead text-white">
                
                    <?php echo the_content();?>
                    <?php
                }
                }
                ?>
            </div>
    
        </article>
    </section>


    <section class="uk-section">
        <div class="uk-container">

            <div class="uk-child-width-1-2@m uk-grid-match" uk-grid>

                <div>
                    <div class="uk-cover-container">
                        <img src="<?php bloginfo('template_url')?>/images/pexels-photo-242492.jpeg" alt="">
                    </div>
                </div>
                <div>
                    <h2 class="uk-text-center">Descarga nuestra App</h2>
                    
                    <div class="uk-flex uk-flex-column uk-flex-center">
                        <div>
                            <div class="uk-width-1-4 uk-margin-auto uk-margin-small-top uk-margin-medium-bottom">
                                <img src="<?php bloginfo('template_url')?>/images/21244656_861780077314641_593729245_n.png" alt="">
                            </div>
                        </div>
                        <div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci, architecto, asperiores beatae dolores excepturi in labore minima molestiae molestias nemo nobis, nostrum quas repellat soluta tenetur ut voluptate voluptates.
                            </p>
                        </div>
                        <div class="uk-child-width-1-2 uk-flex">
                            <div>
                                <div>
                                    <img src="<?php bloginfo('template_url')?>/images/appstore.png" alt="">
                                </div>
                            </div>
                            <div>
                                <img src="<?php bloginfo('template_url')?>/images/es_badge_web_generic.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="uk-section uk-section-medium uk-section-muted">
        <article class="uk-container">
    
            <h3 class="uk-margin-large uk-text-center" id="servicios">Servicios</h3>
    
            <div class="uk-child-width-expand@s uk-text-center uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-card-hover uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right">
                        <div class="uk-card-media-top uk-cover-container">
                            <img src="<?php bloginfo('template_url')?>/images/people-woman-coffee-meeting.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Capacitación</h3>
                            <p>Centro de entrenamiento</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-card-hover uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right">
                        <div class="uk-card-media-top uk-cover-container">
                            <img src="<?php bloginfo('template_url')?>/images/pexels-photo-54284.jpeg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Desarrollo de aplicaciones</h3>
                            <p>Aplicaciones especializadas para el sector financiero</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-card-hover uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right">
                        <div class="uk-card-media-top uk-cover-container">
                            <img src="<?php bloginfo('template_url')?>/images/pexels-photo.jpg" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Servicio al cliente</h3>
                            <p>Desarrollo de aplicaciones especializadas en negociación y fedelización del cliente</p>
                        </div>
                    </div>
                </div>
            </div>
    
        </article>
    </section>

<!-- seccion de modulos -->
    <section class="uk-section">
        <article class="uk-container">

            <h3 class="uk-margin-large uk-text-center" id="modulos">Módulos de capacitación</h3>

                <div class="uk-grid-small uk-child-width-1-4@s uk-flex-center uk-text-center uk-grid-match" uk-grid>
                    <div>

                        <div class="uk-card uk-card-default uk-card-body uk-card-hover uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right">
                            <div class="uk-card-media-top uk-cover-container">
                                <img src="<?php bloginfo('template_url')?>/images/pexels-photo-428339.jpeg" alt="">
                                <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                                    <p class="uk-text-uppercase">autoestima e imagen profecional</p>
                                </div>
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem illo minima modi nam nisi quam rerum soluta. Cupiditate distinctio, est eum ex incidunt iste nesciunt odio provident quos similique tempora?</p>
                                <div>
                                    <button class="uk-button uk-button-primary" uk-toggle="target: #my-id">Incribirse</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="">
                        <div class="uk-card uk-card-default uk-card-body uk-card-hover uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right">
                            <div class="uk-card-media-top uk-cover-container">
                                <img src="<?php bloginfo('template_url')?>/images/pexels-photo-428339.jpeg" alt="">
                                <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                                    <p class="uk-text-uppercase">autoestima e imagen profecional</p>
                                </div>
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem illo minima modi nam nisi quam rerum soluta. Cupiditate distinctio, est eum ex incidunt iste nesciunt odio provident quos similique tempora?</p>
                                <div>
                                    <button class="uk-button uk-button-primary" uk-toggle="target: #my-id">Incribirse</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-card-hover uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right">
                            <div class="uk-card-media-top uk-cover-container">
                                <img src="<?php bloginfo('template_url')?>/images/pexels-photo-428339.jpeg" alt="">
                                <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                                    <p class="uk-text-uppercase">autoestima e imagen profecional</p>
                                    <div>
                                        <button class="uk-button uk-button-primary" uk-toggle="target: #my-id">Incribirse</button>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem illo minima modi nam nisi quam rerum soluta. Cupiditate distinctio, est eum ex incidunt iste nesciunt odio provident quos similique tempora?</p>
                                <div>
                                    <button class="uk-button uk-button-primary" uk-toggle="target: #my-id">Incribirse</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-card-hover uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right">
                            <div class="uk-card-media-top uk-cover-container">
                                <img src="<?php bloginfo('template_url')?>/images/pexels-photo-428339.jpeg" alt="">
                                <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                                    <p class="uk-text-uppercase">autoestima e imagen profecional</p>
                                </div>
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem illo minima modi nam nisi quam rerum soluta. Cupiditate distinctio, est eum ex incidunt iste nesciunt odio provident quos similique tempora?</p>
                                <div>
                                    <button class="uk-button uk-button-primary" uk-toggle="target: #my-id">Incribirse</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="uk-card uk-card-default uk-card-body uk-card-hover uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right">
                            <div class="uk-card-media-top uk-cover-container">
                                <img src="<?php bloginfo('template_url')?>/images/pexels-photo-428339.jpeg" alt="">
                                <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                                    <p class="uk-text-uppercase">autoestima e imagen profecional</p>
                                </div>
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem illo minima modi nam nisi quam rerum soluta. Cupiditate distinctio, est eum ex incidunt iste nesciunt odio provident quos similique tempora?</p>
                                <div>
                                    <button class="uk-button uk-button-primary" uk-toggle="target: #my-id">Incribirse</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-card-hover uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right">
                            <div class="uk-card-media-top uk-cover-container">
                                <img src="<?php bloginfo('template_url')?>/images/pexels-photo-428339.jpeg" alt="">
                                <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                                    <p class="uk-text-uppercase">autoestima e imagen profecional</p>
                                </div>
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem illo minima modi nam nisi quam rerum soluta. Cupiditate distinctio, est eum ex incidunt iste nesciunt odio provident quos similique tempora?</p>
                                <div>
                                    <button class="uk-button uk-button-primary" uk-toggle="target: #my-id">Incribirse</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-card-hover uk-padding-remove-top uk-padding-remove-left uk-padding-remove-right">
                            <div class="uk-card-media-top uk-cover-container">
                                <img src="<?php bloginfo('template_url')?>/images/pexels-photo-428339.jpeg" alt="">
                                <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                                    <p class="uk-text-uppercase">autoestima e imagen profecional</p>
                                </div>
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem illo minima modi nam nisi quam rerum soluta. Cupiditate distinctio, est eum ex incidunt iste nesciunt odio provident quos similique tempora?</p>
                                <div>
                                    <button class="uk-button uk-button-primary" uk-toggle="target: #my-id">Incribirse</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </article>
    </section>

    <!-- Fin seccion de modulos -->


    <!---<section class="uk-section uk-section-default uk-section-large">
        <article class="uk-container">
    
            <h3 class="uk-text-center" id="formacion">Formación Especializada</h3>
            <p class="uk-margin-large uk-text-center">La formación se divide en dos partes</p>   
    
            <div class="uk-grid-match uk-child-width-1-2@m uk-grid-match" uk-grid>
                <div>
                    <h4 class="uk-heading-bullet">Negociación y mediación de conflictos</h1>
                    <p class="uk-padding-small">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate vitae omnis optio suscipit corrupti veritatis soluta numquam molestiae quasi quia nostrum facilis dolore temporibus natus est quibusdam autem, blanditiis hic.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate vitae omnis optio suscipit corrupti veritatis soluta numquam molestiae quasi quia nostrum facilis dolore temporibus natus est quibusdam autem, blanditiis hic.
                    </p>
                    <p>Disponible en las siguientes modalidades</p>
                    <ul class="uk-list uk-list-bullet">
                        <li>A distancia por modulos, con posibilidad de especializarse con el diplomado en negociación y mediación de conflictos</li>
                        <li>In company</li>
                        <li>Presenciales con seminarios</li>
                    </ul>
                </div>
                <div>
                    <h4 class="uk-heading-bullet">Mediación Financiera</h1>
                    <p class="uk-padding-small">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate vitae omnis optio suscipit corrupti veritatis soluta numquam molestiae quasi quia nostrum facilis dolore temporibus natus est quibusdam autem, blanditiis hic.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate vitae omnis optio suscipit corrupti veritatis soluta numquam molestiae quasi quia nostrum facilis dolore temporibus natus est quibusdam autem, blanditiis hic.
                    </p>
                    <p>Disponible en las siguientes modalidades</p>
                    <ul class="uk-list uk-list-bullet">
                        <li>A distancia por modulos, con posibilidad de especializarse con el diplomado en negociación y mediación de conflictos</li>
                    </ul>
                </div>
            </div>
    
        </article>
    </section>-->

    <section class="uk-section uk-section-default uk-section-small uk-section-muted">
            <article class="uk-container">

                <h3 class="uk-margin-medium-bottom uk-margin-small-top uk-text-center" id="formacion">Modalidades de capacitación</h3>


                <div class="uk-child-width-1-2@m uk-grid-match" uk-grid>

                    <div>
                        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                            <div class="uk-card-media-left uk-cover-container">
                                <img src="<?php bloginfo('template_url')?>/images/space-desk-office-hero-7065.jpg" alt="" uk-cover>
                                <canvas width="600" height="400"></canvas>
                            </div>
                            <div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Capacitación a Empresas</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                            <div class="uk-card-media-left uk-cover-container">
                                <img src="<?php bloginfo('template_url')?>/images/pexels-photo-515168.jpeg" alt="" uk-cover>
                                <canvas width="600" height="400"></canvas>
                            </div>
                            <div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Capacitación a particulares</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </article>
    </section>

    <div class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: -200" style="background-image: url('<?php bloginfo('template_url')?>/images/WhatsApp Image 2017-08-15 at 1.43.36 PM.jpeg');">
        
        <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">Planb</h1>
    
    </div>

    <!-- Sección de blog -->
    <!--<section class="uk-section uk-section-large uk-section">

        <article class="uk-container">

            <h3 class="uk-text-center" id="blog">Nuestro Blog</h3>
            <div class="uk-margin-medium uk-divider-icon uk-margin-remove-top"></div>

            <div class="uk-child-width-1-2@s uk-grid-collapse uk-text-center" uk-grid>
                <div>
                    <div class="uk-tile uk-tile-muted">
                        <article class="uk-article uk-text-left">
                                
                            <h1 class="uk-article-title"><a class="uk-link-reset" href="">Heading</a></h1>
                        
                            <p class="uk-article-meta">Escrito por <a href="#">Carlos</a> el 12 April 2017. Posteado en <a href="#">Blog</a></p>
                        
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        
                            <div class="uk-grid-small uk-child-width-auto" uk-grid>
                                <div>
                                    <a class="uk-button uk-button-text" href="#">Leer más</a>
                                </div>
                                <div>
                                    <a class="uk-button uk-button-text" href="#">5 comentarios</a>
                                </div>
                            </div>
                        
                        </article>
                    </div>
                </div>
                <div>
                    <div class="uk-tile uk-tile-muted">
                        <article class="uk-article uk-text-left">
                                
                            <h1 class="uk-article-title"><a class="uk-link-reset" href="">Heading</a></h1>
                        
                            <p class="uk-article-meta">Escrito por <a href="#">Carlos</a> el 12 April 2017. Posteado en <a href="#">Blog</a></p>
                        
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        
                            <div class="uk-grid-small uk-child-width-auto" uk-grid>
                                <div>
                                    <a class="uk-button uk-button-text" href="#">Leer más</a>
                                </div>
                                <div>
                                    <a class="uk-button uk-button-text" href="#">5 comentarios</a>
                                </div>
                            </div>
                        
                        </article>
                    </div>
                </div>
                <div>
                    <div class="uk-tile uk-tile-muted">
                        <article class="uk-article uk-text-left">
                                
                            <h1 class="uk-article-title"><a class="uk-link-reset" href="">Heading</a></h1>
                        
                            <p class="uk-article-meta">Escrito por <a href="#">Carlos</a> el 12 April 2017. Posteado en <a href="#">Blog</a></p>
                        
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        
                            <div class="uk-grid-small uk-child-width-auto" uk-grid>
                                <div>
                                    <a class="uk-button uk-button-text" href="#">Leer más</a>
                                </div>
                                <div>
                                    <a class="uk-button uk-button-text" href="#">5 comentarios</a>
                                </div>
                            </div>
                        
                        </article>
                    </div>
                </div>
                <div>
                    <div class="uk-tile uk-tile-muted">
                        <article class="uk-article uk-text-left">
                                
                            <h1 class="uk-article-title"><a class="uk-link-reset" href="">Heading</a></h1>
                        
                            <p class="uk-article-meta">Escrito por <a href="#">Carlos</a> el 12 April 2017. Posteado en <a href="#">Blog</a></p>
                        
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        
                            <div class="uk-grid-small uk-child-width-auto" uk-grid>
                                <div>
                                    <a class="uk-button uk-button-text" href="#">Leer más</a>
                                </div>
                                <div>
                                    <a class="uk-button uk-button-text" href="#">5 comentarios</a>
                                </div>
                            </div>
                        
                        </article>
                    </div>
                </div>
            </div>
        </article>

    </section>-->

    <!-- Fin Sección de blog -->


    <section class="uk-section uk-section-large uk-section-muted">

        <article class="uk-container">

            <h3 class="uk-margin-medium-bottom uk-margin-small-top uk-text-center" id="contacto">Contactanos</h3>

            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
                <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                    <iframe
                    width="600"
                    height="450"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBXavOYZ0oPqkaGA6JOCagRqI1bM8XMR6w
                      &q=Exhacienda+de+la+Concepción+3,+42162+San+Agustín+tlaxiaca,+Hgo" allowfullscreen>
                  </iframe>
                </div>
                <div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Plan B</h3>
                        <p class="uk-text-large">Exhacienda de la Concepción 3, 42162 San Agustín tlaxiaca, Hgo.</p>
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-expand" uk-leader>Tel.</div>
                            <div>55 5555 5555</div>
                        </div>
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-expand" uk-leader>Email</div>
                            <div>contacto@planb.com.mx</div>
                        </div>
                    </div>
                </div>
            </div>

        </article>
        
    </section>
    


</main>

<?php get_footer();?>