<?php use App\Models\Konfigurasi_model;

$konfigurasi = new Konfigurasi_model();
$site        = $konfigurasi->listing();
// Menu
use App\Models\Menu_model;

$menu         = new Menu_model();
$site         = $konfigurasi->listing();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan = $menu->layanan();
?>
<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3><?= $site['namaweb'] ?></h3>
              <p>
                <?= nl2br(strip_tags($site['alamat'])) ?>
                <br>
                <strong>Phone:</strong> <?= $site['telepon'] ?><br>
                <strong>Email:</strong> <?= $site['email'] ?><br>
              </p>
              <div class="social-links mt-3">
                <a href="<?= $site['twitter'] ?>" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="<?= $site['facebook'] ?>" class="facebook"><i class="fab fa-facebook"></i></a>
                <a href="<?= $site['instagram'] ?>" class="instagram"><i class="fab fa-instagram"></i></a>
                <a href="<?= $site['youtube'] ?>" class="google-plus"><i class="fab fa-youtube"></i></a>

              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>About Us</h4>
            <ul>
              <?php foreach ($menu_profil as $menu_profil) { ?>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('berita/profil/' . $menu_profil['slug_berita']) ?>"><?= $menu_profil['judul_berita'] ?></a></li>
              <?php } ?>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="base_url('staff') ?>">Staff &amp; Team Kami</a></li> -->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <?php foreach ($menu_layanan as $menu_layanan) { ?>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('berita/layanan/' . $menu_layanan['slug_berita']) ?>"><?= $menu_layanan['judul_berita'] ?></a></li>
              <?php } ?>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Find Us on Map</h4>
            <style type="text/css" media="screen">
              iframe {
                width: 100%;
                height: 200px;
              }
            </style>
            <?= $site['google_map'] ?>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Java Web Media</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="wa" class="wa__widget_container"><div class="wa__btn_popup" style="left: unset; right: 30px; bottom: 84px;"><div class="wa__btn_popup_txt" style="display: block; left: unset; right: 100%; margin-right: 7px; margin-left: 0px; width: 196px;"><span>Whatsapp CS +62 81367990490 Hubungi kami untuk informasi lebih lanjut</span></div><div class="wa__btn_popup_icon" style="background: #fd7e14;"></div></div><div class="wa__popup_chat_box" style="left: unset; right: 30px; bottom: 156px;"><div class="wa__popup_heading" style="background: #2db742;"><div class="wa__popup_title" style="color: rgb(255, 255, 255);">Ada Yang Dapat Kami Bantu?</div><div class="wa__popup_intro" style="color: rgb(217, 235, 198);"><span style="font-size: 16px;font-style: normal;font-weight: 400">Klik kontak dibawah ini untuk chat melalui&nbsp;</span><strong style="font-size: 16px;font-style: normal">WhatsApp</strong></div></div><div class="wa__popup_content wa__popup_content_left"><div class="wa__popup_notice"></div><div class="wa__popup_content_list"><div class="wa__popup_content_item"><a target="_blank" href="https://api.whatsapp.com/send?phone=6281367990490&amp;text=Saya ingin informasi produk General Grosir " rel="nofollow noopener noreferrer" class="wa__stt wa__stt_online"><div class="wa__popup_avatar nta-default-avt"><svg width="48px" height="48px" class="nta-whatsapp-default-avatar" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path style="fill:#EDEDED;" d="M0,512l35.31-128C12.359,344.276,0,300.138,0,254.234C0,114.759,114.759,0,255.117,0
            S512,114.759,512,254.234S395.476,512,255.117,512c-44.138,0-86.51-14.124-124.469-35.31L0,512z"></path>
            <path style="fill:#55CD6C;" d="M137.71,430.786l7.945,4.414c32.662,20.303,70.621,32.662,110.345,32.662
            c115.641,0,211.862-96.221,211.862-213.628S371.641,44.138,255.117,44.138S44.138,137.71,44.138,254.234
            c0,40.607,11.476,80.331,32.662,113.876l5.297,7.945l-20.303,74.152L137.71,430.786z"></path>
            <path style="fill:#FEFEFE;" d="M187.145,135.945l-16.772-0.883c-5.297,0-10.593,1.766-14.124,5.297
            c-7.945,7.062-21.186,20.303-24.717,37.959c-6.179,26.483,3.531,58.262,26.483,90.041s67.09,82.979,144.772,105.048
            c24.717,7.062,44.138,2.648,60.028-7.062c12.359-7.945,20.303-20.303,22.952-33.545l2.648-12.359
            c0.883-3.531-0.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-0.883-10.593,2.648l-22.069,28.248
            c-1.766,1.766-4.414,2.648-7.062,1.766c-15.007-5.297-65.324-26.483-92.69-79.448c-0.883-2.648-0.883-5.297,0.883-7.062
            l21.186-23.834c1.766-2.648,2.648-6.179,1.766-8.828l-25.6-57.379C193.324,138.593,190.676,135.945,187.145,135.945"></path>
        </svg></div><div class="wa__popup_txt"><div class="wa__member_name">Admin General Grosir</div><div class="wa__member_duty"></div></div></a></div><div class="wa__popup_content_item"><a target="_blank" href="https://api.whatsapp.com/send?phone=6281367990490&amp;text=Saya ingin informasi produk General Grosir " rel="nofollow noopener noreferrer" class="wa__stt wa__stt_online"><div class="wa__popup_avatar nta-default-avt"><svg width="48px" height="48px" class="nta-whatsapp-default-avatar" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path style="fill:#EDEDED;" d="M0,512l35.31-128C12.359,344.276,0,300.138,0,254.234C0,114.759,114.759,0,255.117,0
            S512,114.759,512,254.234S395.476,512,255.117,512c-44.138,0-86.51-14.124-124.469-35.31L0,512z"></path>
            <path style="fill:#55CD6C;" d="M137.71,430.786l7.945,4.414c32.662,20.303,70.621,32.662,110.345,32.662
            c115.641,0,211.862-96.221,211.862-213.628S371.641,44.138,255.117,44.138S44.138,137.71,44.138,254.234
            c0,40.607,11.476,80.331,32.662,113.876l5.297,7.945l-20.303,74.152L137.71,430.786z"></path>
            <path style="fill:#FEFEFE;" d="M187.145,135.945l-16.772-0.883c-5.297,0-10.593,1.766-14.124,5.297
            c-7.945,7.062-21.186,20.303-24.717,37.959c-6.179,26.483,3.531,58.262,26.483,90.041s67.09,82.979,144.772,105.048
            c24.717,7.062,44.138,2.648,60.028-7.062c12.359-7.945,20.303-20.303,22.952-33.545l2.648-12.359
            c0.883-3.531-0.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-0.883-10.593,2.648l-22.069,28.248
            c-1.766,1.766-4.414,2.648-7.062,1.766c-15.007-5.297-65.324-26.483-92.69-79.448c-0.883-2.648-0.883-5.297,0.883-7.062
            l21.186-23.834c1.766-2.648,2.648-6.179,1.766-8.828l-25.6-57.379C193.324,138.593,190.676,135.945,187.145,135.945"></path>
        </svg></div><div class="wa__popup_txt"><div class="wa__member_name">Admin 2 General Grosir</div><div class="wa__member_duty"></div></div></a></div></div><div class="wa__popup_powered_mb"><span class="wa__popup_tooltiptext_mb"> POWERED BY<a target="_blank" href="https://ninjateam.org/whatsapp-chat-wordpress/"><svg class="wa__popup_icon-ninja" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve"><g> <path class="st0" fill="#a9a9a9" d="M286.3,67C238,67,194,85.3,160.8,115.2l0-0.1l-13.2-27.8L84.9,49.2l8.5,66.4l27.1,21.1l-31.8-19.9l-60,8.9   l40.2,46.1l48.9,0.3C105.6,197,98.7,225,98.7,254.6c0,103.6,84,187.6,187.6,187.6s187.6-84,187.6-187.6S389.9,67,286.3,67z    M285.8,346.3c-111,0-171.9-63.2-171.9-92.5s62.2-91.5,171.9-91.5c109.5,0,172.8,62.1,172.8,91.5   C458.6,283.2,398.4,346.3,285.8,346.3z"></path> <ellipse fill="#a9a9a9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -77.6656 328.6796)" class="st1" cx="357.9" cy="258.1" rx="20.6" ry="20.6"></ellipse> <ellipse fill="#a9a9a9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -119.8129 226.9269)" class="st1" cx="214" cy="258.1" rx="20.6" ry="20.6"></ellipse></g></svg></a><span class="wa__popup_tooltiptext-ninja-mb">NINJATEAM</span></span></div></div></div></div>
  <!-- Vendor JS Files -->
  <script src="https://generalgrosir.com/wp-content/plugins/wp-whatsapp/assets/dist/js/njt-whatsapp.js?ver=3.4.2" id="nta-wa-libs-js"></script>
  <script id="nta-js-global-js-extra">
    var njt_wa_global = {"ajax_url":"https:\/\/generalgrosir.com\/wp-admin\/admin-ajax.php","nonce":"fbed8c66cd","defaultAvatarSVG":"<svg width=\"48px\" height=\"48px\" class=\"nta-whatsapp-default-avatar\" version=\"1.1\" id=\"Layer_1\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\"\n            viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">\n            <path style=\"fill:#EDEDED;\" d=\"M0,512l35.31-128C12.359,344.276,0,300.138,0,254.234C0,114.759,114.759,0,255.117,0\n            S512,114.759,512,254.234S395.476,512,255.117,512c-44.138,0-86.51-14.124-124.469-35.31L0,512z\"\/>\n            <path style=\"fill:#55CD6C;\" d=\"M137.71,430.786l7.945,4.414c32.662,20.303,70.621,32.662,110.345,32.662\n            c115.641,0,211.862-96.221,211.862-213.628S371.641,44.138,255.117,44.138S44.138,137.71,44.138,254.234\n            c0,40.607,11.476,80.331,32.662,113.876l5.297,7.945l-20.303,74.152L137.71,430.786z\"\/>\n            <path style=\"fill:#FEFEFE;\" d=\"M187.145,135.945l-16.772-0.883c-5.297,0-10.593,1.766-14.124,5.297\n            c-7.945,7.062-21.186,20.303-24.717,37.959c-6.179,26.483,3.531,58.262,26.483,90.041s67.09,82.979,144.772,105.048\n            c24.717,7.062,44.138,2.648,60.028-7.062c12.359-7.945,20.303-20.303,22.952-33.545l2.648-12.359\n            c0.883-3.531-0.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-0.883-10.593,2.648l-22.069,28.248\n            c-1.766,1.766-4.414,2.648-7.062,1.766c-15.007-5.297-65.324-26.483-92.69-79.448c-0.883-2.648-0.883-5.297,0.883-7.062\n            l21.186-23.834c1.766-2.648,2.648-6.179,1.766-8.828l-25.6-57.379C193.324,138.593,190.676,135.945,187.145,135.945\"\/>\n        <\/svg>","defaultAvatarUrl":"https:\/\/generalgrosir.com\/wp-content\/plugins\/wp-whatsapp\/assets\/img\/whatsapp_logo.svg","timezone":"Asia\/Jakarta","i18n":{"online":"Online","offline":"Offline"},"urlSettings":{"onDesktop":"api","onMobile":"api","openInNewTab":"ON"}};
  </script>
  <script src="https://generalgrosir.com/wp-content/plugins/wp-whatsapp/assets/js/whatsapp-button.js?ver=3.4.2" id="nta-js-global-js"></script>
  <script id="nta-js-popup-js-extra">
  var njt_wa = {"gdprStatus":"","accounts":[{"accountId":1255,"accountName":"Admin General Grosir","avatar":"","number":"+6281367990490","title":"","predefinedText":"Saya ingin informasi produk General Grosir ","willBeBackText":"I will be back in [njwa_time_work]","dayOffsText":"I will be back soon","isAlwaysAvailable":"ON","daysOfWeekWorking":{"sunday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"monday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"tuesday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"wednesday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"thursday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"friday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"saturday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]}}},{"accountId":2176,"accountName":"Admin 2 General Grosir","avatar":"","number":"+6281367990490","title":"","predefinedText":"Saya ingin informasi produk General Grosir ","willBeBackText":"I will be back in [njwa_time_work]","dayOffsText":"I will be back soon","isAlwaysAvailable":"ON","daysOfWeekWorking":{"sunday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"monday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"tuesday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"wednesday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"thursday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"friday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]},"saturday":{"isWorkingOnDay":"OFF","workHours":[{"startTime":"08:00","endTime":"17:30"}]}}}],"options":{"display":{"displayCondition":"excludePages","includePages":[],"excludePages":[],"includePosts":[],"showOnDesktop":"ON","showOnMobile":"ON","time_symbols":"h:m"},"styles":{"title":"Ada Yang Dapat Kami Bantu?","responseText":"","description":"<span style=\"font-size: 16px;font-style: normal;font-weight: 400\">Klik kontak dibawah ini untuk chat melalui\u00a0<\/span><strong style=\"font-size: 16px;font-style: normal\">WhatsApp<\/strong>","backgroundColor":"#fd7e14","textColor":"#fff","scrollHeight":"500","isShowScroll":"OFF","isShowResponseText":"OFF","isShowPoweredBy":"ON","btnLabel":"Whatsapp CS +62 813 6799 0490 Hubungi kami untuk informasi lebih lanjut","btnLabelWidth":"196","btnPosition":"right","btnLeftDistance":"30","btnRightDistance":"30","btnBottomDistance":"84","isShowBtnLabel":"ON","isShowGDPR":"OFF","gdprContent":"Please accept our <a href=\"https:\/\/ninjateam.org\/privacy-policy\/\">privacy policy<\/a> first to start a conversation."},"analytics":{"enabledGoogle":"OFF","enabledFacebook":"OFF","enabledGoogleGA4":"OFF"}}};
  </script>
  <script src="https://generalgrosir.com/wp-content/plugins/wp-whatsapp/assets/js/whatsapp-popup.js?ver=6.7.1" id="nta-js-popup-js"></script>
  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>/assets/template/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>/assets/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/assets/template/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>/assets/template/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>/assets/template/assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url() ?>/assets/template/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>/assets/template/assets/js/main.js"></script>
  <!-- DataTables  & Plugins -->

<script src="<?= base_url() ?>/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable();
  });
  </script>
</body>

</html>