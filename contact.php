<?php include_once('./includes/headerNav.php'); ?>



<div class="overlay" data-overlay></div>
<!--
    - HEADER
  -->

<!-- get tables data from db -->

<header>
  <!-- top head action, search etc in php -->
  <!-- inc/topheadactions.php -->
  <?php require_once './includes/topheadactions.php'; ?>
  <!-- desktop navigation -->
  <!-- inc/desktopnav.php -->
  <?php require_once './includes/desktopnav.php' ?>
  <!-- mobile nav in php -->
  <!-- inc/mobilenav.php -->
  <?php require_once './includes/mobilenav.php'; ?>

</header>

<!--
    - MAIN
  -->

<main>

  <div class="product-container">
    <div class="container">
      <!--
          - SIDEBAR
        -->
      <!-- CATEGORY SIDE BAR MOBILE MENU -->
      <?php require_once './includes/categorysidebar.php' ?>
      <!-- ############################# -->

      <div class="product-box">
        <!-- get id and url for each category and display its dat from table her in this secton -->
        <div class="product-main">

          <!-- contact cards -->
          <!-- MAIL -->
          <div class="contact-card-container mail">
            <div class="contact-icon">
              <a href="#">
                <ion-icon class="contact-icons mail-icon" name="mail-outline"></ion-icon>
              </a>
            </div>
            <div class="contact-details">
              <contact-title>
                <h2>Mail</h2>
              </contact-title>
              <p>
                <a href="mailto:<?php echo($site_info_email) ?>"><?php echo($site_info_email) ?></a>
              </p>
            </div>
          </div>
          <!--  -->

          <!-- Whatsapp -->
          <div class="contact-card-container whatsapp">
            <div class="contact-icon">
              <a href="#">
                <ion-icon class="contact-icons whatsapp-icon" name="logo-whatsapp"></ion-icon>
              </a>
            </div>
            <div class="contact-details">
              <contact-title>
                <h2>Whatsapp</h2>
              </contact-title>
              <p>
                <a href="#"><?php echo($site_contact_num) ?></a>
              </p>
            </div>
          </div>
          <!--  -->

          <!-- Location -->
          <div class="contact-card-container location">
            <div class="contact-icon">
              <a href="#">
                <ion-icon class="contact-icons location-icon" name="location-outline"></ion-icon>
              </a>
            </div>
            <div class="contact-details">
              <contact-title>
                <h2>Location</h2>
              </contact-title>
              <p>
              <?php echo($site_address) ?>
              </p>
            </div>
          </div>
          <!--  -->


        </div>

            <!-- Map -->
    	<div class="row">
	<div class="span12">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3706.0358047387213!2d80.02273867536219!3d23.17643127906623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3981a94397365dd3%3A0x5f9aeb812c2678c9!2sIIITDM%20Jabalpur!5e1!3m2!1sen!2sin!4v1731921732183!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  </iframe>
    <br />
	<small>
    <a href="https://maps.app.goo.gl/gz7SypyCJ6V47jej8" style="color:#0000FF;text-align:left">
    View Larger Map
    </a>
  </small>
	</div>
	</div>


      </div>
    </div>





  </div>

  <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

  <!--
      - BLOG
    -->

<script src="./js/jquery.js" type="text/javascript"></script>
<script src="./js/bootstrap.min.js" type="text/javascript"></script>

</main>

<?php require_once './includes/footer.php'; ?>