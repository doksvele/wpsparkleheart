<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sparkleheart
 */

get_header(); ?>
<section>
    <div class="item-1 circle Video1" data-video-id="8Z1eMy2FoX4">
        <div class="triangle">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Video1.png" alt="Video1">
        </div>
    </div>
    <div class="text-1 items">
        <p>SparkleHeart ir biedrība, kas radīta, lai palīdzētu cilvēkiem piepildīt pat pārdrošākos sapņus. Šeit satiekas sapņotāji un viņu atbalstītāji - uzņēmumi, kas sniedz palīdzīgu roku, lai kopā pasauli padarītu par labāku vietu mums visiem.Mēs esam gatavi palīdzēt Tev piepildīt sapni. Kā pamats iedvesmai - tiek radīti arī 99 stāsti par Latvijas sievietēm.</p>
    </div>
    <div class="ripped">
        <table class="table-1">
            <tr>
                <img class="vector3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/vector1.png" alt="vector1">
            </tr>
            <tr>
                <td class="foto-1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_1.jpg" alt="foto_1"></td>
                <td class="foto-2"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_2.jpg" alt="foto_2"></td>
                <td class="foto-3"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_3.1.jpg" alt="foto_3.1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_3.2.jpg" alt="foto_3.2"></td>
                <td class="foto-4"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_4.jpg" alt="foto_4"></td>
            </tr>
            <tr>
                <img class="vector4" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/vector1.png" alt="vector1">
            </tr>
        </table>
    </div>
    <div class="choices-1 items">
        <div class="choice">
            <h3>VĒLIES PIEPILDĪT SAVU SAPNI?</h3>
            <a href="#sapņotājiem"><button class="button" type="submit">Sapņotājiem</button></a>
        </div>
        <div class="choice">
            <h3>VĒLIES PALĪDZĒT KĀDĀM PIEPILDĪT SAPNI?</h3>
            <a href="uznemejiem#uzņēmējiem"><button class="button" type="submit">Uzņēmējiem</button></a>
        </div>
    </div>
    <form class="items" action="">
        <span id="sapņotājiem"></span>
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
    <div class="item-4">
        <img class="vector5" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/vector1.png" alt="vector1">
        <h3>ATBALSTĪTĀJI</h3>
        <table class="table-2">
            <tr>
                <td class="foto-5"><a href="https://teikums.lv/lv" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_5.png" alt="foto_5"></a></td>
                <td class="foto-6"><a href="https://sem.lv/lv/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_6.png" alt="foto_6"></a></td>
                <td class="foto-7"><a href="https://www.citybee.lv/lv" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_7.png" alt="foto_7"></a></td>
                <td class="foto-8"><a href="https://linearistranslations.com/lv/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/foto_8.png" alt="foto_8"></a></td>
            </tr>
        </table>
    </div>
</section>
<img class="vector2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/vector2.png" alt="vector2">
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
