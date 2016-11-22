<?php
/**
* Template name: Page Foresterie
*/
get_header();
 ?>
 <div class="section1" id="section1-foresterie">
   <div class="valign-wrapper">
     <div class="valign">
       <div class="container-fluid cf-custom-section1">
         <div class="text-section1 text-center col-xs-12">
           <h2><?php the_field('titolo_prima_sezione')?></h2>
           <?php the_field('testo_prima_sezione')?>
         </div>
         <div class="back-right">

         </div>
         <div class="title-section1-foresterie text-center">
           <p><?php the_field('titolo_prima_lista_icone')?><p>
         </div>
         <div class="col-md-3 col-xs-12 strutture-foresterie text-center">
           <p><?php the_field('testo_prima_icona_prima_lista')?><p>
           <img src="<?php the_field('prima_icona_prima_lista')?>" alt=""/>
         </div>
         <div class="col-md-3 col-xs-12 strutture-foresterie text-center">
           <p><?php the_field('testo_seconda_icona_prima_lista')?><p>
           <img src="<?php the_field('seconda_icona_prima_lista')?>" alt=""/>
         </div>
         <div class="col-md-3 col-xs-12 strutture-foresterie text-center">
           <p><?php the_field('testo_terza_icona_prima_lista')?><p>
           <img src="<?php the_field('terza_icona_prima_lista')?>" alt=""/>
         </div>
         <div class="col-md-3 col-xs-12 strutture-foresterie text-center">
           <p><?php the_field('testo_quarta_icona_prima_lista')?><p>
           <img src="<?php the_field('quarta_icona_prima_lista')?>" alt=""/>
         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="section1" id="section2-foresterie">
   <div class="valign-wrapper">
     <div class="valign">
       <div class="container-fluid cf-custom-section1">
         <div class="title-section2-foresterie text-center">
           <p><?php the_field('titolo_seconda_lista_icone')?><p>
         </div>
         <div class="col-md-2 col-md-offset-1 col-xs-12 strutture-foresterie text-center">
           <p><?php the_field('testo_prima_icona_seconda_lista')?><p>
           <img src="<?php the_field('prima_icona_seconda_lista')?>" alt=""/>
         </div>
         <div class="col-md-2 col-xs-12 strutture-foresterie text-center">
           <p><?php the_field('testo_seconda_icona_seconda_lista')?><p>
           <img src="<?php the_field('seconda_icona_seconda_lista')?>" alt=""/>
         </div>
         <div class="col-md-2 col-xs-12 strutture-foresterie text-center">
           <p><?php the_field('testo_terza_icona_seconda_lista')?><p>
           <img src="<?php the_field('terza_icona_seconda_lista')?>" alt=""/>
         </div>
         <div class="col-md-2 col-xs-12 strutture-foresterie text-center">
           <p><?php the_field('testo_quarta_icona_seconda_lista')?><p>
           <img src="<?php the_field('quarta_icona_seconda_lista')?>" alt=""/>
         </div>
         <div class="col-md-2 push-md-1 col-xs-12 strutture-foresterie text-center">
           <p><?php the_field('testo_quinta_icona_seconda_lista')?><p>
           <img src="<?php the_field('quinta_icona_seconda_lista')?>" alt=""/>
         </div>
         <div class="contact-info text-center">
           <a href="<?php the_field('link_informazioni')?>"><?php the_field('testo_link_informazioni')?></a>
         </div>
         <div class="back-left">

         </div>
       </div>
     </div>
   </div>
 </div>


 <div class="section1" id="section3-foresterie">
   <div class="valign-wrapper">
     <div class="valign">
       <div class="col-xs-12 foto-no-pad text-center">

         <?php
         $categorie = get_field('categorie');
         if($categorie):
           foreach ($categorie as $categoria):?>
           <?php $colore = get_field('colore', $categoria->taxonomy . '_' . $categoria->term_id); ?>
           <?php $icona = get_field('icona_categoria', $categoria->taxonomy . '_' . $categoria->term_id); ?>
           <div class="foto-wrapper col-md-4">
             <div class="foto foto1 col-md-4 col-xs-12">
               <div class="img-categoria1 col-xs-12" style="background-image: url('<?php echo $icona; ?>'); background-color: <?php echo $colore;?>;">
               </div>
               <div class="text-categoria col-xs-12">
                 <p style="color: <?php echo $colore; ?> !important">
                   <?php echo $categoria->name; ?>
                 </p>
               </div>
             </div>
           </div>
           <?php
           $args = array(
             'post_type' => 'foresterie',
             'category__in' => array($categoria->term_id)
                      );
           $posts = new WP_Query($args);
           while( $posts->have_posts() ) : $posts->the_post();
            ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single_post_thumbnail' ); ?>
            <div class="foto-wrapper col-md-4">
              <div class="col-md-4 col-xs-12 foto foto2" style="background-image: url('<?php echo $image[0]; ?>')">
              </div>
              <div class="overlay2-hover text-center">
                <div class="title-foto-hover col-xs-12" style="background-color: <?php echo $colore; ?> !important">
                  <h2 class="col-md-12 col-xs-9"><?php the_title(); ?></h2>
                  <div class="remove-foto-hover col-xs-3">
                    <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="text-foto-hover">
                  <p>
                    <?php the_content(); ?>
                  </p>
                </div>
                <div class="service-foto-hover">

                  <?php

                  if(have_rows('icone')):
                    while (have_rows('icone')): the_row();
                   ?>
                   <div class="col-xs-3">
                     <img src="<?php the_sub_field('immagine_icona')?>" alt="" />
                     <p>
                       <?php the_sub_field('testo_icona')?>
                     </p>
                   </div>
                 <?php  endwhile; ?>
               <?php endif; ?>
                  <div class="button-foto-hover text-center">
                    <?php if(get_field('book_link')): ?>
                    <div class="col-xs-4">
                      <a href="<?php the_field('book_link')?>"><?php the_field('testo_book_link')?></a>
                    </div>
                  <?php endif; ?>
                  <?php if(get_field('map_link')): ?>
                    <div class="col-xs-4">
                      <a href="<?php the_field('map_link')?>"><?php the_field('testo_map_link')?></a>
                    </div>
                    <?php endif; ?>
                    <?php if(get_field('map_link')): ?>
                    <div class="col-xs-4">
                      <a href="<?php the_field('explore_link')?>"><?php the_field('testo_expore_link')?></a>
                    </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="info-nascoste">
                <a href="#">Scopri di più</a>
              </div>
            </div>

          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
          <?php endforeach; ?>
          <?php endif; ?>


       </div>
     </div>
   </div>
  </div>

 <?php
get_footer();
 ?>
