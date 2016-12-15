<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CasaValdesiCorporate
 */

get_header(); ?>

<div class="sign-popup-blog-article col-xs-12">
  <div class="overlay2">
    <div class="sign-popup-blog-article col-xs-6 col-xs-offset-3">
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


<div class="section1" id="section1-blog-article">
 <div class="valign-wrapper">
   <div class="valign">
     <div class="container-fluid cf-custom-section1">
       <div class="col-md-6 col-xs-12 blog-article-left">
         <div class="share-article col-xs-4">
           <a href="#" class="fb-share-article col-xs-2"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
					 <a href="" class="col-xs-2"><i class="fa fa-share-alt fa-2x" aria-hidden="true"></i></a>
         </div>
				 <div class="content-article">
					 <h2><?php the_title();?></h2>
					 <h4><?php the_field('sottotitolo');?></h4>
						<?php
						while ( have_posts() ) : the_post();
						?>
						<p><?php the_content();?></p>
						<?php
						endwhile; // End of the loop.
						?>
				</div>
				<div class="share-article col-xs-4">
					<a href="#" class="fb-share-article col-xs-2"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
					<a href="" class="col-xs-2"><i class="fa fa-share-alt fa-2x" aria-hidden="true"></i></a>
				</div>
				</div>
				<div class="col-md-5 col-md-offset-1 col-xs-12 blog-right">
          <div class="about-blog">
            <h2>About the blog</h2>
            <img src="<?php echo get_template_directory_uri() . '/img/visual_contatti.jpg' ?>" alt="" />
            <p><?php the_field('about_the_blog');?></p>
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
              <p class="col-md-3 col-xs-5">
                Follow Us
              </p>
              <a href="#" class="col-md-1 col-xs-2 social-link-sidebar"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
    				  <a href="#" class="col-md-1 col-xs-2 social-link-sidebar"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
    					<a href="#" class="col-md-1 col-xs-2 social-link-sidebar"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
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
                <input type="submit" name="invia" value="Invia" class="submit-sidebar col-md-offset-1 col-md-3 col-xs-12">
              </form>
            </div>
            <div class="book-sidebar col-xs-12">
              <h2>Prenota ora</h2>
              <div class="col-md-4 col-xs-12 tag-link-sidebar">
                <a href="" class="book-prenotazione-blog-article">Book</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section2" id="section2-blog-article">
 <div class="valign-wrapper">
   <div class="valign">
     <div class="cf0pad">
       <div class="recent-article col-xs-12">
         <div class="arrow-previous-article col-xs-1 text-center">
           <a href=""><i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i></a>
         </div>
         <div class="previous-article col-md-3 col-xs-11">
           <h4>Previous Post</h4>
           <h2>"Titolo articolo"</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
         </div>
         <div class="next-article col-md-3 col-md-offset-4 col-xs-11">
           <h4>Next Post</h4>
           <h2>"Titolo articolo"</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
         </div>
         <div class="arrow-previous-article arrow-next-article col-xs-1 text-center">
           <a href=""><i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></a>
         </div>
         <div class="border-recent-article col-md-5 col-xs-4">

         </div>
         <div class="recent-article-or col-md-2 col-xs-4 text-center">
           <h2>Oppure</h2>
         </div>
         <div class="border-recent-article col-md-5 col-xs-4">

         </div>
         <div class="link-return-blog col-xs-12 text-center">
           <a href="#">Torna al blog di Case Valdesi</a>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>

<?php
get_footer();
?>
