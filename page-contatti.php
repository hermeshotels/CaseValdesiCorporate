<?php
/**
* Template name: Page Contatti
*/
get_header();
 ?>
<div class="section1" id="section1-contatti">
 <div class="valign-wrapper">
   <div class="valign">
     <div class="container-fluid cf-custom-section1">
       <div class="text-section1 text-center">
         <h2>Contattaci</h2>
         <p>
           Per informazioni sulle prenotazioni e foresterie completa il form
         </p>
        </div>
      </div>
     <div class="container-fluid cf0">
       <div class="col-md-6 col-xs-12 contact-left">
         <form class="col-xs-12" action="index.html" method="post">
           <div class="form-group">
             <input type="text" name="nome" value="" placeholder="Nome e Cognome" class="form-control form-contact-input">
           </div>
           <div class="form-group">
            <input type="text" name="citta" value="" placeholder="Città o stato estero" class=" form-control form-contact-input">
           </div>
           <div class="form-group">
             <input type="email" name="email" placeholder="Email" class="form-control form-contact-input">
           </div>
           <div class="form-group">
             <textarea name="name" rows="8" cols="40" value="" class="form-control form-contact-input" placeholder="Messaggio"></textarea>
           </div>
           <div class="form-group">
             <input type="submit" name="invia" value="Invia" class="col-md-2 col-xs-12 btn button-form-contact-input">
           </div>
         </form>
         <p>
           Cliccando su invia acconsento al trattamento dei miei dati personali
         </p>
       </div>
       <div class="contact-right col-md-6 col-xs-12 text-center">
         <div class="overlay2 col-md-6 col-xs-12">
         <div class="icon-contact">

         </div>
         <h2 class="col-xs-12">Iscriviti alla newsletter!</h2>
         <p class="col-xs-12">
           Per essere sempre informato sulle ultime novità iscriviti alla newsletter!
         </p>
         <div class="contact-newsletter col-xs-12">
           <form class="" action="index.html" method="post">
             <input type="mail" name="email" value="" class="input-mail col-md-9 col-xs-12" placeholder="your email address">
             <input type="submit" name="invia" value="Invia" class="submit-newsletter col-md-3 col-xs-12">
           </form>
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