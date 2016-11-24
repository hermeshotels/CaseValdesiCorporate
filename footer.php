<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CasaValdesiCorporate
 */

?>
<div class="footer text-center">
  <div class="valign-wrapper">
    <div class="valign">
      <div class="container-fluid">
        <div class="col-xs-12 loghi-footer">
          <div class="first-div-logo-footer col-xs-6">
            <img src="<?php echo get_template_directory_uri() . '/img/homepage/logodiaconia-footer.png'?>" alt=""/>
          </div>
          <div class="second-div-logo-footer col-xs-6">
            <img src="<?php echo get_template_directory_uri() . '/img/homepage/logoforesteria-footer.png'?>" alt="" class="second-logo-footer col-xs-6"/>
          </div>
        </div>
        <div class="col-xs-12 menu-footer">
          <?php wp_nav_menu(array('menu_class' => 'menu-list-footer col-xs-12'));?>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 membri-footer">
        <h2>Membro di</h2>
        <img src="<?php echo get_template_directory_uri() . '/img/homepage/logofooter.png'?>" alt="" width="73px" height="auto"/>
      </div>
      <div class="col-md-4 col-xs-12 social-footer">
        <h2>Social e Contatti</h2>
        <ul class="col-xs-12">
          <li class="col-xs-4"><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
					<li class="col-xs-4"><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
					<li class="col-xs-4"><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
        </ul>
        <p class="cb"></p>
        <span class="mail-footer">Email: </span><a href="mailto:accoglienza@diaconiavaldese.com" class="mail-link">accoglienza@diaconiavaldese.com</a>
      </div>
      <div class="col-md-4 col-xs-12 newsletter-footer">
        <h2>Newsletter</h2>
        <p>
          Iscriviti alla <span class="newsletter">Newsletter</span>
        </p>
        <form class="" action="index.html" method="post">
          <input type="mail" name="email" value="" class="input-mail" placeholder="your mail">
          <input type="submit" name="invia" value="Invia" class="submit-newsletter">
        </form>
      </div>
    </div>
  </div>
</div>
<div class="bottom-footer text-center">
  <div class="valign-wrapper">
    <div class="valign">
      <div class="container-fluid cf-footer">
        <div class="col-md-offset-1 col-md-2 col-xs-12 category-bottom-footer">
          <p>
            © 2016 Commissione Sinodale per la Diaconia
          </p>
        </div>
        <div class="col-md-2 col-xs-12 category-bottom-footer">
          <p>
            P.IVA/C.Fiscale 07639750012
          </p>
        </div>
        <div class="col-md-2 col-xs-12 category-bottom-footer">
          <p>
            <a href="http://www.verne-sas.it/">Web & Com ®</a>
          </p>
        </div>
        <div class="col-md-2 col-xs-12 category-bottom-footer">
          <p>
            Powered by WEBJ
          </p>
        </div>
        <div class="col-md-2 col-xs-12 category-bottom-footer">
          <p class="no-border">
            Privacy & Cookie
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
function ismobile(){
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
   return true;
  }else{
    return false;
  }
}

var $navbar = jQuery('.navbar-wrapper');
var $menuicon = jQuery('.navbar-wrapper .mob-menu-trigger');

if(!ismobile()){
  jQuery(window).on('scroll', function(){
    var scrollTrigger = 100;
    var scrollPos = jQuery(document).scrollTop();

    if (scrollPos > scrollTrigger) {
      $navbar.addClass('scrolled');
    } else {
      $navbar.removeClass('scrolled');
    }
  });
}else{
  $navbar.addClass('scrolled');
}

jQuery('.moblang-trigger').on('click', function(){
    jQuery('.mob-lang').css('display', 'block');
});

jQuery('.mob-lang .close').on('click', function(){
  jQuery('.mob-lang').css('display', 'none');
});

jQuery('.mob-menu-trigger').on('click', function(){
  if ($navbar.hasClass('mob-active')) {
    $navbar.removeClass('mob-active');
    jQuery('html, body').css('overflow', 'scroll');
    $menuicon.html('<i class="fa fa-bars" aria-hidden="true"></i>');
  }else{
    $navbar.addClass('mob-active');
    jQuery('html, body').css('overflow', 'hidden');
    $menuicon.html('<i class="fa fa-times" aria-hidden="true"></i>');
  }
});


    jQuery('.remove-foto-hover').on('click', function(){
      jQuery('.foto2').next('.overlay2-hover').removeClass('active');
    });
    jQuery('.remove-foto-hover').on('click', function(){
      jQuery('.foto3').next('.overlay2-hover').removeClass('active');
    });
    jQuery('.remove-foto-hover').on('click', function(){
      jQuery('.foto4').next('.overlay2-hover').removeClass('active');
    });
    jQuery('.remove-foto-hover').on('click', function(){
      jQuery('.foto5').next('.overlay2-hover').removeClass('active');
    });
    jQuery('.remove-foto-hover').on('click', function(){
      jQuery('.foto7').next('.overlay2-hover').removeClass('active');
    });
    jQuery('.remove-foto-hover').on('click', function(){
      jQuery('.foto8').next('.overlay2-hover').removeClass('active');
    });
    jQuery('.remove-foto-hover').on('click', function(){
      jQuery('.foto9').next('.overlay2-hover').removeClass('active');
    });
    jQuery('.remove-foto-hover').on('click', function(){
      jQuery('.foto10').next('.overlay2-hover').removeClass('active');
    });
    jQuery('.remove-foto-hover').on('click', function(){
      jQuery('.foto3').next('.overlay2-hover').removeClass('active');
    });
    jQuery('.remove-foto-hover').on('click', function(){
      jQuery('.foto12').next('.overlay2-hover').removeClass('active');
    });
    jQuery('.remove-foto-hover').on('click', function(){
      jQuery('.foto13').next('.overlay2-hover').removeClass('active');
    });
    jQuery('.remove-foto-hover').on('click', function(){
      jQuery('.foto13').next('.overlay2-hover').removeClass('active');
    });
</script>
<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('.foto2').hover(function(){
      jQuery(this).next('.overlay2-hover').addClass('active');
    });
    jQuery('.overlay2-hover').mouseleave(function(){
      jQuery('.overlay2-hover').removeClass('active');
    });
    jQuery('.foto3').hover(function(){
      jQuery(this).next('.overlay2-hover').addClass('active');
    });
    jQuery('.overlay2-hover').mouseleave(function(){
      jQuery('.overlay2-hover').removeClass('active');
    });
    jQuery('.foto4').hover(function(){
      jQuery(this).next('.overlay2-hover').addClass('active');
    });
    jQuery('.overlay2-hover').mouseleave(function(){
      jQuery('.overlay2-hover').removeClass('active');
    });
    jQuery('.foto5').hover(function(){
      jQuery(this).next('.overlay2-hover').addClass('active');
    });
    jQuery('.overlay2-hover').mouseleave(function(){
      jQuery('.overlay2-hover').removeClass('active');
    });
    jQuery('.overlay2-hover').mouseleave(function(){
      jQuery('.overlay2-hover').removeClass('active');
    });
    jQuery('.foto7').hover(function(){
      jQuery(this).next('.overlay2-hover').addClass('active');
    });
    jQuery('.overlay2-hover').mouseleave(function(){
      jQuery('.overlay2-hover').removeClass('active');
    });
    jQuery('.foto8').hover(function(){
      jQuery(this).next('.overlay2-hover').addClass('active');
    });
    jQuery('.overlay2-hover').mouseleave(function(){
      jQuery('.overlay2-hover').removeClass('active');
    });
    jQuery('.foto9').hover(function(){
      jQuery(this).next('.overlay2-hover').addClass('active');
    });
    jQuery('.overlay2-hover').mouseleave(function(){
      jQuery('.overlay2-hover').removeClass('active');
    });
    jQuery('.foto10').hover(function(){
      jQuery(this).next('.overlay2-hover').addClass('active');
    });
    jQuery('.overlay2-hover').mouseleave(function(){
      jQuery('.overlay2-hover').removeClass('active');
    });
    jQuery('.foto12').hover(function(){
      jQuery(this).next('.overlay2-hover').addClass('active');
    });
    jQuery('.overlay2-hover').mouseleave(function(){
      jQuery('.overlay2-hover').removeClass('active');
    });
    jQuery('.foto13').hover(function(){
      jQuery(this).next('.overlay2-hover').addClass('active');
    });
    jQuery('.overlay2-hover').mouseleave(function(){
      jQuery('.overlay2-hover').removeClass('active');
    });
    jQuery('.foto14').hover(function(){
      jQuery(this).next('.overlay2-hover').addClass('active');
    });
    jQuery('.overlay2-hover').mouseleave(function(){
      jQuery('.overlay2-hover').removeClass('active');
    });
  });
</script>
<script type="text/javascript">
var slider = new MasterSlider();

slider.setup('masterslider' , {
  width:1200,
  height:550,
  space:10,
  loop:true,
  view:'fadeWave',
  layout:'partialview'
})

slider.control('arrows');
slider.control('slideinfo',{insertTo:"#partial-view-1" , autohide:false, align:'bottom', size:160});


	</script>
</body>
</html>
