<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CasaValdesiCorporate
 */

get_header(); ?>
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
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus rhoncus elementum. Nunc pulvinar
              ultrices purus nec gravida. Donec dolor risus, convallis quis euismod quis, ultricies sed arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
              per inceptos himenaeos.
            </p>
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
              <p class="col-md-3 col-xs-6">
                Follow Us
              </p>
             <a href="#" class="col-md-1 col-xs-2 social-link-sidebar"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
    				  <a href="#" class="col-md-1 col-xs-2 social-link-sidebar"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
    					<a href="#" class="col-md-1 col-xs-2 social-link-sidebar"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
             <p class="col-md-offset-1 col-md-3 col-xs-6 rss">
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
                <a href="#">Book</a>
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
