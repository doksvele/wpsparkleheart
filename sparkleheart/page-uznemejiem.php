<?php
/*
Template Name: Uzņēmējiem
*/

get_header();
?>
<section>
  <h1>UZŅĒMĒJIEM</h1>
  <div class="item-2">
    <p>Ja ticat labākas pasaules attīstībai un vēlaties piedalīties starptautisku ideju realizēšanā, tad priecāsimies ar Jums iepazīties.</p>
  </div>
  <form class="items" action="">
    <span id="uzņēmējiem"></span>
    <h2>PALĪDZI ĪSTENOT SAPNI!</h2>
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
        <input class="form-control" type="text" placeholder="Uzņēmuma nosaukums*" required>
      </div>
      <div class="mb-3">
        <input class="form-control" type="tel" placeholder="Telefons*" pattern="[0-9]{8,15}" required>
      </div>
      <div class="mb-3">
        <textarea class="form-control" placeholder="Jautājums, vai komentārs"></textarea>
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
