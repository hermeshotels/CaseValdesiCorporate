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
         <h2>Case Valdesi Italia: Ospitalità in Hotel e in Foresterie</h2>
         <p>
           Case Valdesi Italia offrono accoglienza turistica  in hotel e foresterie nelle più belle località della penisola aperte a tutti, dove è possibile trovare ospitalità di qualità a prezzi contenuti.<br>
           Appassionati di arte e cultura? Voglia di mare? Amanti della natura? Gli alberghi e le case per vacanze offrono la soluzione giusta per ogni preferenza ed esigenza, nel nome del turismo responsabile
           e della solidarietà.<br>
           Le Case Valdesi sono inoltre strutture no profit: attraverso il soggiorno gli ospiti contribuiscono a sostenere attività e progetti a favore di anziani, minori, migranti,
           rifugiati e persone diversamente abili,
           senza distinzioni di aspetto fisico e tradizioni culturali di genere, di lingua, di religione, di opinioni politiche, di condizioni personali e sociali.
         </p>
       </div>
       <div class="back-right">

       </div>
     </div>
   </div>
 </div>
</div>
<div class="section1" id="section2-sostenibilita">
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
				        	<p><?php the_excerpt(); ?></p>
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
