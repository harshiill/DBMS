
<!-- mobile bottom navigation -->
<div class="mobile-bottom-navigation">
  <button class="action-btn" data-mobile-menu-open-btn>
    <ion-icon name="menu-outline"></ion-icon>
  </button>

  <button class="action-btn">
    <a href="./cart.php">
      <ion-icon name="bag-handle-outline"></ion-icon>
    </a>
    <span class="count"><?php echo $total_cart_items; ?></span>
  </button>

  <button class="action-btn">
    <a href="./index.php">
      <ion-icon name="home-outline"></ion-icon>
    </a>
  </button>

  <button class="action-btn">
    <ion-icon name="heart-outline"></ion-icon>
    <span class="count">0</span>
  </button>

  <button class="action-btn" data-mobile-menu-open-btn>
    <ion-icon name="grid-outline"></ion-icon>
  </button>
</div>

<nav class="mobile-navigation-menu has-scrollbar" data-mobile-menu>
  <div class="menu-top">
    <h2 class="menu-title">Menu</h2>
    <button class="menu-close-btn" data-mobile-menu-close-btn>
      <ion-icon name="close-outline"></ion-icon>
    </button>
  </div>

  <ul class="mobile-menu-category-list">
    <li class="menu-category">
      <a href="./index.php" class="menu-title">Home</a>
    </li>

    <!-- Technical Clubs -->
    <li class="menu-category">
      <button class="accordion-menu" data-accordion-btn>
        <p class="menu-title">Technical Clubs</p>
        <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
      </button>
      <ul class="submenu-category-list" data-accordion>
        <li><a href="./category.php?category=ers" class="submenu-title">ERS</a></li>
        <li><a href="./category.php?category=bmc" class="submenu-title">BMC</a></li>
        <li><a href="./category.php?category=tpc" class="submenu-title">TPC</a></li>
        <li><a href="./category.php?category=aps" class="submenu-title">APS</a></li>
        <li><a href="./category.php?category=cad" class="submenu-title">CAD</a></li>
        <li><a href="./category.php?category=racing" class="submenu-title">RACING</a></li>
        <li><a href="./category.php?category=afc" class="submenu-title">AFC</a></li>
      </ul>
    </li>

    <!-- Cultural Clubs -->
    <li class="menu-category">
      <button class="accordion-menu" data-accordion-btn>
        <p class="menu-title">Cultural Clubs</p>
        <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
      </button>
      <ul class="submenu-category-list" data-accordion>
        <li><a href="./category.php?category=saaz" class="submenu-title">SAAZ</a></li>
        <li><a href="./category.php?category=avartan" class="submenu-title">AVARTAN</a></li>
        <li><a href="./category.php?category=jazbaat" class="submenu-title">JAZBAAT</a></li>
        <li><a href="./category.php?category=abhivakyati" class="submenu-title">ABHIVAKYATI</a></li>
        <li><a href="./category.php?category=shutterbox" class="submenu-title">SHUTTERBOX</a></li>
        <li><a href="./category.php?category=samvaad" class="submenu-title">SAMVAAD</a></li>
      </ul>
    </li>

    <!-- Sports Clubs -->
    <li class="menu-category">
      <button class="accordion-menu" data-accordion-btn>
        <p class="menu-title">Sports Clubs</p>
        <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
      </button>
      <ul class="submenu-category-list" data-accordion>
        <li><a href="./category.php?category=football" class="submenu-title">FOOTBALL</a></li>
        <li><a href="./category.php?category=cricket" class="submenu-title">CRICKET</a></li>
        <li><a href="./category.php?category=basketball" class="submenu-title">BASKETBALL</a></li>
        <li><a href="./category.php?category=badminton" class="submenu-title">BADMINTON</a></li>
        <li><a href="./category.php?category=volleyball" class="submenu-title">VOLLEYBALL</a></li>
        <li><a href="./category.php?category=kabadi" class="submenu-title">KABADDI</a></li>
        <li><a href="./category.php?category=lawntennis" class="submenu-title">LAWN TENNIS</a></li>
        <li><a href="./category.php?category=tabletennis" class="submenu-title">TABLE TENNIS</a></li>
        <li><a href="./category.php?category=chess" class="submenu-title">CHESS</a></li>
        <li><a href="./category.php?category=carrom" class="submenu-title">CARROM</a></li>
        <li><a href="./category.php?category=atheletics" class="submenu-title">ATHLETICS</a></li>
      </ul>
    </li>

    <li class="menu-category">
      <a href="contact.php" class="menu-title">Contact</a>
    </li>

    <li class="menu-category">
      <a href="about.php" class="menu-title">About</a>
    </li>
  </ul>
</nav>
