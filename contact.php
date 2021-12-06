<!-- contact page -->
<?php
/*
Template Name: Contact
*/
get_header(); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset=UTF-8>
    <title>Contact Form</title>
  </head>
    <body>
      <section class="home" id="modulo">       
          <h1>Per contattarci</h1>
          <h2>Compilate il modulo qui sotto!</h2>
          <form action="/wp-content/themes/theme_WP_project/send.php" method="post">
            <ul>
              <li class="uno">
                <label for="name">Nome</label> <!--is the name field-->
                <input type="text" name="name" placeholder="Il tuo nome" class="testo" /><br>
              </li>
              <li class="due">
                <label for="email">Email</label><!--is the email field-->
                <input type="email" name="email" id="email" class="testo" placeholder="La tua email" required />
              </li>
              <li class="tre">
                <label for="testo">Messaggio</label><!--is the message field-->
                <textarea name="message" rows="8" cols="80" placeholder="Il tuo messaggio"></textarea><br>
              </li>
              <li class="quattro">
                <input type="submit" value="Invia" class="pulsante"><!--button to send the request-->
              </li>
            </ul>
          </form>
      </section>
      <!--below is the map with the location of the pizzeria-->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2906.952550113039!2d12.40804941486467!3d43.231454487618585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132c185ed87115f9%3A0xbffa894ee0539c61!2sTabacchi%20Jazz!5e0!3m2!1sit!2sit!4v1637830446409!5m2!1sit!2sit" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </body>
</html>
<?php get_footer(); ?>
