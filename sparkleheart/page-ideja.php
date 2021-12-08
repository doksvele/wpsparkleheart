<?php
/*
Template Name: Ideja
*/

get_header();
?>
<section>
  <h1>IDEJA</h1>
  <div class="slideshow">
    <p>Juris Gogulis ir pasaules iedvesmots mākslinieks–horeogrāfs un režisors, kura ikdiena aizrit radot aizkustinošus un iedvesmojošus radošus projektus. Juris ir pārliecināts, ka ir vērts ticēt katram savam sapnim un censties to īstenot. Kā smejas pats - daudzu draugu sapņiem viņš tic vairāk, nekā viņi paši!</p>
  </div>
  <div class="item-7">
    <img class="vector5" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/vector1.png" alt="vector1">
    <h3 class="item-2">“Kopš 3 gadu vecuma mani ir audzinājusi mamma, pēc viņas piemēra esmu sapratis, cik sieviete ir spēcīga un varoša. Vēlos atlīdzināt un izveidot platformu, kurā satikties un palīdzēt cilvēkiem piepildīt savus sapņus.”</h3>
    <img class="vector4" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/vector1.png" alt="vector1">
  </div>
  <div class="slideshow items">
    <div class="slide">
      <h3>Ken Ludden</h3>
      <p>Director, Margot Fonteyn Academy of Ballet</p>
      <h4>For it is Juris work that is the<br>light the human race needs so badly these days. His vision is inspired and talent is beyond measure.</h4>
    </div>
    <div class="slide">
      <h3>Elon Musk</h3>
      <p>CEO, Founder of SpaceX and Tesla Inc.</p>
      <h4>People work better when they know what the goal is and why. It is important that people look forward to coming to work in the morning and enjoy working.</h4>
    </div>
    <div class="slide">
      <h3>Steve Jobs</h3>
      <p>CEO, Co-Founder, Chairman of Apple Inc.</p>
      <h4>My favorite things in life don't cost any money. It's really clear that the most precious resource we all have is time.</h4>
    </div>
    <a class="prev" onclick="plusSlides(-1)"></a>
    <a class="next" onclick="plusSlides(1)"></a>
  </div>
</section>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/vector2.png" alt="vector2">
<?php get_footer(); ?>
<script>
  var slideIndex = 1;
  showSlides(slideIndex);
  function plusSlides(n) { showSlides(slideIndex += n); }
  function currentSlide(n) { showSlides(slideIndex = n); }
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName('slide');
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) { slides[i].style.display = 'none'; }
    slides[slideIndex-1].style.display = 'block';
  }
</script>
<?php wp_footer(); ?>
</body>
</html>
