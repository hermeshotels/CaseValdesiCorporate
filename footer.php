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
          <img src="<?php echo get_template_directory_uri() . '/img/homepage/logodiaconia-footer.png'?>" alt="" width="105px" height="auto"/>
          <img src="<?php echo get_template_directory_uri() . '/img/homepage/logoforesteria-footer.png'?>" alt="" width="204px" height="auto" class="second-logo-footer"/>
        </div>
        <div class="col-xs-12 menu-footer">
          <ul>
            <li><a href="#">Homepage</a></li>
            <li><a href="#">Foresterie</a></li>
            <li><a href="#">Solidarietà</a></li>
						<li><a href="#">Sostenibilità</a></li>
						<li><a href="#">Il Blog</a></li>
						<li><a href="#">Contatti</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 membri-footer">
        <h2>Membro di</h2>
        <img src="<?php echo get_template_directory_uri() . '/img/homepage/logofooter.png'?>" alt="" width="73px" height="auto"/>
      </div>
      <div class="col-md-4 col-xs-12 social-footer">
        <h2>Social e Contatti</h2>
        <ul>
          <li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
					<li><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
					<li><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
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
          <input type="mail" name="email" value="your mail" class="input-mail">
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
        <div class="col-md-3 col-xs-12 category-bottom-footer">
          <p>
            © 2016 Commissione Sinodale per la Diaconia
          </p>
        </div>
        <div class="col-md-3 col-xs-12 category-bottom-footer">
          <p>
            P.IVA/C.Fiscale 07639750012
          </p>
        </div>
        <div class="col-md-3 col-xs-12 category-bottom-footer">
          <p>
            Powered by WEBJ
          </p>
        </div>
        <div class="col-md-3 col-xs-12 category-bottom-footer">
          <p class="no-border">
            Privacy & Cookie
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>

</body>
</html>
