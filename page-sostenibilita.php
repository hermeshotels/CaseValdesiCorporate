<?php
/**
* Template name: Page Sostenibilità
*/
get_header();
 ?>

<div class="section1" id="section1-sostenibilita">
 <div class="valign-wrapper">
   <div class="valign">
     <div class="container-fluid cf-custom-section1">
       <div class="text-section1 text-center col-xs-12">
         <h1><?php the_field('titolo_prima_sezione')?></h1>
         <?php the_field('testo_prima_sezione')?>
       </div>
       <div class="back-right">

       </div>
     </div>
   </div>
 </div>
</div>
<div class="section2" id="section2-sostenibilita">
 <div class="valign-wrapper">
   <div class="valign">
     <div class="cf0pad">
       <div class="text-section1 text-center col-xs-12">
         <div class="ms-partialview-template" id="partial-view-1">
           <div class="master-slider ms-skin-default" id="masterslider">
             <?php
             $args = array(
               'post_type' => 'sostenibilita'
             );
             $posts = new WP_Query($args);
             while( $posts->have_posts() ) : $posts->the_post();
              ?>
              <div class="ms-slide">
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single_post_thumbnail' ); ?>
			          <img src="img/slider/blank.gif" data-src="<?php echo $image[0]; ?>" alt="lorem ipsum dolor sit"/>
				        <div class="ms-info">
                  <div class="container">
                    <?php the_excerpt(); ?>
                  </div>
			        	</div>
			        </div>
              <?php endwhile; ?>
            </div>
         </div>
       </div>
       <div class="back-left">
       </div>
     </div>
   </div>
 </div>
</div>

<?php
get_footer();
?>
