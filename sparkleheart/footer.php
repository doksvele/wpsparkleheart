<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sparkleheart
 */

?>
<footer>
	<div class="footer">
		<div>
				<img class="icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon.png" alt="icon">
				<div class="footer-menu">
						<p>
								<a href="ideja">Ideja</a>
								<a href="piesaki-sapni">Piesaki Sapni</a>
								<a href="uznemejiem">Uzņēmējiem</a>
								<a href="sapnu-banka">Sapņu banka</a>
								<a href="sapnus-atbalsta">Sapņus atbalsta</a>
								<a href="99-iedvesmas-stasti">Iedvesmas stāsti</a>
						</p>
				</div>
				<div class="footer-details">
						<h4>Biedrība SparkleHeart</h4>
						<p>Reģistrācijas nr. 40008293119</p>
						<p>Banka: SWEDBANK A/S</p>
						<p>LV52HABA0551047652465</p>
				</div>
				<div class="footer-contacts">
						<h4>Juris Gogulis</h4>
						<p>juris.gogulis@sparkleheart.org</p>
						<p>+37126890034</p>
						<p>Biķernieku iela 24a - 5, LV-1006</p>
						<button class="show-details" onclick="showDetails()">Skatīt rekvizītus</button>
						<div id="footer-details">
								<h4>Biedrība SparkleHeart</h4>
								<p>Reģistrācijas nr. 40008293119</p>
								<p>Banka: SWEDBANK A/S</p>
								<p>LV52HABA0551047652465</p>
						</div>
						<div class="footer-social">
								<a href="https://www.facebook.com/sparkleheartLV/" target="_blank"><img class="facebook" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/facebook.png" alt="facebook"></a>
								<a href="https://www.instagram.com/sparkleheart_org/" target="_blank"><img class="instagram" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/instagram.png" alt="instagram"></a>
						</div>
				</div>
		</div>
		<div class="footer-permission">
				<h6>&copy; SparkleHeart 2020. <br>Visas tiesības aizsargātas.</h6>
				<h6>Privātuma politika</h6>
		</div>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
