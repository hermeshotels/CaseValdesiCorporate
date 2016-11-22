<?php
/**
* Template name: Page Home
*/
get_header();
 ?>
<div class="section1">
  <div class="valign-wrapper">
    <div class="valign">
      <div class="container-fluid cf-custom-section1">
        <div class="text-section1 text-center">
          <h2><?php the_field('titolo_prima_sezione')?></h2>
          <?php the_field('testo_prima_sezione') ?>
        </div>
        <div class="back-right">

        </div>
        <div class="back-left">

        </div>
        <div class="button-section1 text-center">
          <a href="<?php the_field('link_prima_sezione')?>"><?php the_field('testo_link_prima_sezione')?></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section2">
  <div class="valign-wrapper">
    <div class="valign">
      <div class="container-fluid">
        <div class="col-md-3 col-xs-12 category-map">
          <div class="img-categoria" style="background-image: url('<?php the_field('immagine_prima_categoria')?>'); background-color: <?php the_field('colore_di_sfondo_immagine_prima_categoria')?>;">
          </div>
          <div class="text-categoria">
            <p><?php the_field('testo_prima_categoria')?></p>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 category-map">
          <div class="img-categoria1" style="background-image: url('<?php the_field('immagine_seconda_categoria')?>'); background-color: <?php the_field('colore_di_sfondo_immagine_seconda_categoria')?>;">
          </div>
          <div class="text-categoria">
            <p><?php the_field('testo_seconda_categoria')?></p>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 category-map">
          <div class="img-categoria2" style="background-image: url('<?php the_field('immagine_terza_categoria')?>'); background-color: <?php the_field('colore_di_sfondo_immagine_terza_categoria')?>;">
          </div>
          <div class="text-categoria">
            <p><?php the_field('testo_terza_categoria')?></p>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 category-map">
          <div class="img-categoria3" style="background-image: url('<?php the_field('immagine_quarta_categoria')?>'); background-color: <?php the_field('colore_di_sfondo_immagine_quarta_categoria')?>;">
          </div>
          <div class="text-categoria">
            <p><?php the_field('testo_quarta_categoria')?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section3">
  <div class="valign-wrapper">
    <div class="valign">

    </div>
  </div>
</div>
<div class="section4">
  <div class="col-md-6 col-xs-12 first-image-section4 text-center" style="background-image: url('<?php the_field('sfondo_primo_box')?>');">
    <div class="overlay2">
      <h2><?php the_field('titolo_primo_box')?></h2>
      <?php the_field('testo_primo_box')?>
      <a href="<?php the_field('link_primo_box')?>"><?php the_field('testo_link_primo_box')?></a>
    </div>
  </div>
  <div class="col-md-6 col-xs-12 first-image-section4 second-image-section4 text-center" style="background-image: url('<?php the_field('sfondo_secondo_box')?>');">
    <div class="overlay2">
      <h2><?php the_field('titolo_secondo_box')?></h2>
      <?php the_field('testo_secondo_box')?>
      <a href="<?php the_field('primo_link_secondo_box')?>" class="img-allineate-left"><?php the_field('testo_primo_link_secondo_box')?></a>
      <a href="<?php the_field('secondo_link_secondo_box')?>" class="img-allineate-right"><?php the_field('testo_secondo_link_secondo_box')?></a>
    </div>
  </div>
  <div class="col-xs-12 first-image-section4 second-image-section4 third-image-section4 text-center" style="background-image: url('<?php the_field('sfondo_ultimo_box')?>');">
    <div class="overlay2">
      <div class="image-buono" style="background-image: url('<?php the_field('immagine_ultimo_box')?>'); border: 3px solid <?php the_field('colore_traccia_immagine_ultimo_box')?>;">

      </div>
      <h2 class="text-buono"><?php the_field('titolo_ultimo_box')?></h2>
      <div class="container-fluid cf-custom-third-image-section4">
      <?php the_field('testo_ultimo_box')?>
      </div>
      <a href="<?php the_field('link_ultimo_box')?>"><?php the_field('testo_link_ultimo_box')?></a>
    </div>
  </div>
</div>
 <?php
get_footer();
 ?>
