<?php
/**
* Template name: Page Blog
*/
get_header();
 ?>
 <div class="sign-popup-blog col-xs-12">
   <div class="overlay2">
     <div class="form-signing-blog col-xs-6 col-xs-offset-3">
       <div class="close-form close-x">
         <i class="fa fa-times fa-2x" aria-hidden="true"></i>
       </div>
       <form class="" action="index.html" method="post">
         <div class="row">
           <div class="form-group col-md-6 col-xs-12">
             <input type="text" name="" value="" placeholder="Nome e cognome" class="form-control form-contact-input">
           </div>
           <div class="form-group col-md-6 col-xs-12">
             <input type="email" name="" value="" placeholder="Email" class="form-control form-contact-input">
           </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6 col-xs-12">
            <input type="text" name="" value="" placeholder="Città" class="form-control form-contact-input">
          </div>
          <div class="form-group col-md-6 col-xs-12">
            <input type="text" name="" value="" placeholder="Stato" class="form-control form-contact-input">
          </div>
        </div>
        <div class="row">
         <div class="form-group col-xs-12 col-md-6 text-center">
            <legend>Sei mai stato ospite in una delle nostre strutture?</legend>
            <div class="container-list-radio col-md-6 col-xs-12">
              <ul class="col-xs-3 col-xs-pull-1 radio-button-sign-ul">
                <li class="col-xs-6">
                  <input type="radio" id="f-option" name="selector">
                  <label for="f-option">Si</label>
                  <div class="check"></div>
                </li>
                <li class="col-xs-3 col-xs-pull-1">
                  <input type="radio" id="s-option" name="selector">
                  <label for="s-option">No</label>
                  <div class="check"></div>
                </li>
              </ul>
            </div>
          </div>
         <div class="form-group col-xs-12 col-md-6 text-center">
           <legend>Se sì quale?</legend>
           <select class="form-control">
             <option selected="true">Scegli la Casa Valdese</option>
             <option>Foresteria Valdese Firenze</option>
             <option>Foresteria Valdese Venezia</option>
             <option>Casa Valdese Roma</option>
             <option>Casa Cares Reggello (FI)</option>
             <option>Foresteria Valdese Torre Pellice (TO)</option>
             <option>Casa Valdese Rio Marina (LI)</option>
             <option>Casa Valdese Vallecrosia (IM)</option>
             <option>Casa Valdese PietraLigure (SV)</option>
             <option>Servizio Cristiano Riesi (CL)</option>
             <option>Foresteria Valdese Palermo</option>
             <option>Agape Centro Ecumenico (TO)</option>
          </select>
         </div>
         </div>
         <div class="row">
           <div class="form-group col-xs-12 col-md-6 text-center">
             <legend>Viaggiatore singolo o gruppi?</legend>
             <div class="container-list-radio col-md-6 col-xs-12">
               <ul class="col-xs-3 col-xs-pull-1">
                 <li class="col-xs-6">
                   <input type="radio" id="f1-option" name="selector">
                   <label for="f1-option" class="label-mleft">Singolo</label>

                   <div class="check"></div>
                 </li>
                 <li class="col-xs-3 col-xs-pull-1">
                   <input type="radio" id="s1-option" name="selector">
                   <label for="s1-option" class="label-mleft">Gruppo</label>

                   <div class="check"></div>

                 </li>
               </ul>
             </div>
           </div>
           <div class="col-xs-12 col-md-6 form-group text-center">
             <input type="submit" name="" value="Invia" class="submit-form-popup col-md-3 col-xs-12">
           </div>
         </div>
       </form>
     </div>
   </div>
 </div>


<div class="section1" id="section1-blog">
 <div class="valign-wrapper">
   <div class="valign">
     <div class="container-fluid cf-custom-section1">
        <div class="row">
          <div class="col-md-7 col-xs-12 blog-left">
            <?php
            $args = array(
              'post_type' => 'post'
            );
            $posts = new WP_Query($args);
            while( $posts->have_posts() ) : $posts->the_post();
             ?>
             <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single_post_thumbnail' ); ?>
             <div class="article-wrapper">
               <div class="article-image" style="background-image: url('<?php echo $image[0]; ?>')">
               </div>
               <div class="article-title">
                 <h2><?php the_title(); ?></h2>
               </div>
               <div class="article-text">
                 <p>
                   <?php the_excerpt(); ?>
                 </p>
               </div>
               <div class="article-more">
                 <a href="<?php the_permalink(); ?>">Read More...</a>
               </div>
               <div class="article-reactions col-md-6 col-xs-12">
                 <div class="col-xs-4 icon-reactions">
                   <a href=""><i class="fa fa-heart fa-2x" aria-hidden="true"></i></a>
                   <p>
                     2
                   </p>
                 </div>
                 <div class="col-xs-4 icon-reactions">
                   <a href=""><i class="fa fa-share-alt fa-2x" aria-hidden="true"></i></a>
                   <p>
                     7
                   </p>
                 </div>
               </div>
             </div>
           <?php endwhile; ?>
           <?php wp_reset_query(); ?>
       </div>
          <div class="col-md-5 col-xs-12 blog-right">
            <div class="list-blog">
              <a href="#"><i class="fa fa-list fa-2x list-article-icon" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-list-alt fa-2x" aria-hidden="true"></i></a>
            </div>
            <div class="about-blog">
              <h2>About the blog</h2>
              <img src="<?php echo get_template_directory_uri() . '/img/visual_contatti.jpg' ?>" alt="" />
              <?php the_field('about_the_blog'); ?>
            </div>
            <div class="last-comment-fb">
              <h2>Last comment on Facebook</h2>
              <div class="avatar-comment-fb col-xs-3">
                <img src="<?php echo get_template_directory_uri() . '/img/visual_contatti.jpg' ?>" alt="" />
              </div>
              <div class="comment-fb col-xs-9">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus rhoncus elementum. Nunc pulvinar
                </p>
                <p class="firma">Mario Rossi</p>
              </div>
              <div class="avatar-comment-fb col-xs-3">
                <img src="<?php echo get_template_directory_uri() . '/img/visual_contatti.jpg' ?>" alt="" />
              </div>
              <div class="comment-fb col-xs-9">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus rhoncus elementum. Nunc pulvinar
                </p>
                <p class="firma">Mario Rossi</p>
              </div>
              <div class="social-sidebar col-xs-12">
                <p class="col-md-4 col-xs-5">
                  Follow Us
                </p>
                <a href="#" class="col-md-2 col-xs-2 social-link-sidebar"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                <a href="#" class="col-offset-md-1 col-md-2 col-xs-2 social-link-sidebar"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                <a href="#" class="col-offset-md-1 col-md-2 col-xs-2 social-link-sidebar"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                <p class="col-md-offset-1 col-md-3 col-xs-5 rss">
                 Rss
               </p>
               <a href="#" class="col-md-1 col-xs-2 social-link-sidebar rss"><i class="fa fa-rss fa-2x" aria-hidden="true"></i></a>
              </div>
              <div class="tag-sidebar col-xs-12">
                <h2>Tag</h2>
                <div class="col-xs-4 tag-link-sidebar">
                  <a href="#">Tag1</a>
                </div>
                <div class="col-xs-4 tag-link-sidebar">
                  <a href="#">Tag1</a>
                </div>
                <div class="col-xs-4 tag-link-sidebar">
                  <a href="#">Tag1</a>
                </div>
                <div class="col-xs-4 tag-link-sidebar">
                  <a href="#">Tag1</a>
                </div>
                <div class="col-xs-4 tag-link-sidebar">
                  <a href="#">Tag1</a>
                </div>
                <div class="col-xs-4 tag-link-sidebar">
                  <a href="#">Tag1</a>
                </div>
              </div>
              <div class="newsletter-sidebar col-xs-12">
                <h2>Iscriviti alla nostra newsletter</h2>
                <form class="" action="index.html" method="post">
                  <input type="mail" name="email" value="" class="input-mail-sidebar col-md-7 col-xs-12" placeholder="your mail">
                  <input type="submit" name="invia" value="Invia" class="submit-sidebar col-md-3 col-xs-12">
                </form>
              </div>
              <div class="book-sidebar col-xs-12">
                <h2>Prenota ora</h2>
                <div class="col-md-4 col-xs-12 tag-link-sidebar">
                  <a href="" class="book-prenotazione-blog">Book</a>
                </div>
              </div>
            </div>
          </div>
          <div class="pagination-link col-xs-12 text-center">
            <div class="pagination-number">
              <div class="row">
                <div class="pagination-number-container">
                  <ul>
                    <li><a href="#" class="pagination-single-number">1</a></li>
                    <li><a href="#" class="pagination-single-number">2</a></li>
                    <li><a href="#" class="pagination-single-number">3</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
     </div>
   </div>
 </div>
</div>
 <?php
get_footer();
 ?>
