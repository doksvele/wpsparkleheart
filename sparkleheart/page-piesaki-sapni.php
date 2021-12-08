<?php
/*
Template Name: Piesaki Sapni
*/

get_header();
?>
<section>
  <h1>PIESAKI SAPNI</h1>
  <div class="item-2">
    <h4>Tev ir iespēja pieteikt personīgo vai profesionālo sapni.</h4>
  </div>
  <div class="choices-2">
    <div class="choice">
      <img class="foto-15" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_15.png" alt="foto_15">
      <h2>PERSONĪGAIS SAPNIS</h2>
      <p>Bērnības nepiepildītie sapņi... No sev piederoša svaigi spiestas sulas bāra uz Tērbatas ielas līdz iespējai satikties ar Džekiju Čanu.</p>
      <a href="#piesaki-sapni"><button class="button" type="submit">Piesaki sapni</button></a>
    </div>
    <div class="choice">
      <img class="foto-16" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_16.png" alt="foto_16">
      <h2>PROFESIONĀLAIS SAPNIS</h2>
      <p>Sapnis vai ideja, kura ir balstīta uz reģiona, pasaules vai cilvēku attīstību 4 virzienos - kultūra, izglītība, zinātne, ģimene jeb sociālā vide. Tā ir iespēja attīstīt ideju, kas uzlabotu ikdienas dzīves kvalitāti vai atrisinātu vietēja vai starptautiska līmeņa problēmu. Pastāsti, kāpēc Tev tas ir tik nozīmīgi?</p>
      <a href="#piesaki-sapni"><button class="button" type="submit">Piesaki sapni</button></a>
    </div>
  </div>
  <div class="ripped items">
    <table class="table-1">
      <tr>
        <td colspan="4"><img class="vector3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/vector1.png" alt="vector1"></td>
      </tr>
      <tr>
        <td class="foto-11"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_11.jpg" alt="foto_11"></td>
        <td class="foto-12"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_12.1.jpg" alt="foto_12.1"/><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_12.2.jpg" alt="foto_12.2"></td>
        <td class="foto-13"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_13.jpg" alt="foto_13"></td>
        <td class="foto-14"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_14.jpg" alt="foto_14"></td>
      </tr>
      <tr>
        <td colspan="4"><img class="vector4" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/vector1.png" alt="vector1"></td>
      </tr>
    </table>
  </div>
  <form class="items" action="">
    <span id="piesaki-sapni"></span>
    <h2>SAZINĀTIES AR MUMS</h2>
    <div class="row register-form">
      <div class="col-md-6">
        <div class="form-group mb-3">
          <input class="form-control" type="text" placeholder="Vārds, Uzvārds*" required>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group mb-3">
          <input class="form-control" type="email" placeholder="E-pasts*" required>
        </div>
      </div>
      <div class="mb-3">
        <input class="form-control" type="tel" placeholder="Telefons*" pattern="[0-9]{8,15}" required>
      </div>
      <div class="mb-3">
        <textarea class="form-control" placeholder="Jautājums, vai komentārs*" required></textarea>
      </div>
      <div class="form-text">* obligāti aizpildāmie lauki</div>
      <label class="container">Piekrītu, ka mani dati tiks izmantoti likumdošanā noteiktā kārtībā un tiks saglabāti līdz brīdim, kamēr tas būs nepieciešams.
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
    </div>
    <button class="button" type="submit">Sūtīt</button>
  </form>
</section>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/vector2.png" alt="vector2">
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
