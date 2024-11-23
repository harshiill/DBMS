
   <!--
    - FOOTER
  -->

    <footer style="margin-top:70px">
      <div class="footer-category">
        <div class="container">
          <h2 class="footer-category-title">Brand directory</h2>

          <div class="footer-category-box">
            <h3 class="category-box-title">Fashion :</h3>

            <a href="#" class="footer-category-link">T-shirt</a>
            <a href="#" class="footer-category-link">Hoodie</a>
            <a href="#" class="footer-category-link">Jacket</a>
          </div>

      

        

         

      <div class="footer-nav">
        <div class="container">
          <ul class="footer-nav-list">
            <li class="footer-nav-item">
              <h2 class="nav-title">Popular Categories</h2>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Hoodies</a>
            </li>
            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">T-Shirts</a>
            </li>
            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Jackets</a>
            </li>

           

            

           
          </ul>

          <ul class="footer-nav-list">
            <li class="footer-nav-item">
              <h2 class="nav-title">Products</h2>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Prices drop</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">New products</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Best sales</a>
            </li>

            <li class="footer-nav-item">
              <a href="./contact.php" class="footer-nav-link">Contact us</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Sitemap</a>
            </li>
          </ul>

          <ul class="footer-nav-list">
            <li class="footer-nav-item">
              <h2 class="nav-title">Our Company</h2>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Delivery</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Legal Notice</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Terms and conditions</a>
            </li>

            <li class="footer-nav-item">
              <a href="./about.php" class="footer-nav-link">About us</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Secure payment</a>
            </li>
          </ul>

          <ul class="footer-nav-list">
            <li class="footer-nav-item">
              <h2 class="nav-title">Services</h2>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Prices drop</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">New products</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Best sales</a>
            </li>

            <li class="footer-nav-item">
              <a href="./contact.php" class="footer-nav-link">Contact us</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Sitemap</a>
            </li>
          </ul>

          <ul class="footer-nav-list">
            <li class="footer-nav-item">
              <h2 class="nav-title">Contact</h2>
            </li>

            <li class="footer-nav-item flex">
              <div class="icon-box">
                <ion-icon name="location-outline"></ion-icon>
              </div>
              <!-- Adress -->
              <address class="content">
                <?php echo ($site_address); ?>
              </address>
            </li>

            <li class="footer-nav-item flex">
              <div class="icon-box">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <a href="tel:+607936-8058" class="footer-nav-link"><?php echo ($site_contact_num); ?></a>
            </li>

            <li class="footer-nav-item flex">
              <div class="icon-box">
                <ion-icon name="mail-outline"></ion-icon>
              </div>

              <a href="mailto:<?php echo($site_info_email); ?>" class="footer-nav-link"><?php echo($site_info_email); ?></a>
            </li>
          </ul>

          <ul class="footer-nav-list">
            <li class="footer-nav-item">
              <h2 class="nav-title">Follow Us</h2>
            </li>

            <li>
              <ul class="social-link">
                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-linkedin"></ion-icon>
                  </a>
                </li>

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <img src="./images/payment.png" alt="payment method" class="payment-img" />

          <p class="copyright">
            Copyright &copy; <a href="#"><?php echo $_SESSION['web-footer']; ?></a> all rights reserved.
          </p>
        </div>
      </div>
    </footer>

    <!--
    - custom js link
  -->
    <!-- <script src="./assets/js/script.js"></script> -->
    <script src="./js/notification.js"></script>
    <script src="./js/mobilemenu.js"></script>
    <script src="./js/datamodal.js"></script>
    <script src="./js/dataaccordion.js"></script>
    <script src="./ajax/I.js"></script>
    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
	<script src="./js/jquery.js" type="text/javascript"></script>
	<script src="./js/bootstrap.min.js" type="text/javascript"></script>
	<script src="./js/electricshop.js"></script>
	<script src="./js/main.js"></script>

    </body>

    </html>