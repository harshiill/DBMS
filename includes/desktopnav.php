<link rel="stylesheet" href="/E-Commerce/css/desktopvav.css">
<!-- desktop navigation -->
<nav class="desktop-navigation-menu">
  <div class="container">
    <ul class="desktop-menu-category-list">

      <li class="menu-category">
        <a href="index.php?id=<?php echo (isset( $_SESSION['customer_name']))? $_SESSION['id']: 'unknown';?>" class="menu-title">
          Home
        </a>
      </li>

      <!-- Technical Clubs Dropdown -->
      <li class="menu-category dropdown">
        <a href="#" class="menu-title">Technical Clubs</a>
        <ul class="dropdown-menu scrollable-menu">
          <li><a href="./category.php?category=ers">ERS</a></li>
          <li><a href="./category.php?category=bmc">BMC</a></li>
          <li><a href="./category.php?category=tpc">TPC</a></li>
          <li><a href="./category.php?category=aps">APS</a></li>
          <li><a href="./category.php?category=cad">CAD</a></li>
          <li><a href="./category.php?category=racing">RACING</a></li>
          <li><a href="./category.php?category=afc">AFC</a></li>
          <!-- Add more clubs as needed -->
        </ul>
      </li>

      <!-- Cultural Clubs Dropdown -->
      <li class="menu-category dropdown">
        <a href="#" class="menu-title">Cultural Clubs</a>
        <ul class="dropdown-menu scrollable-menu">
          <li><a href="./category.php?category=saaz">SAAZ</a></li>
          <li><a href="./category.php?category=avartan">AVARTAN</a></li>
          <li><a href="./category.php?category=jazbaat">JAZBAAT</a></li>
          <li><a href="./category.php?category=abhivakyati">ABHIVAKYATI</a></li>
          <li><a href="./category.php?category=shutterbox">SHUTTERBOX</a></li>
          <li><a href="./category.php?category=samvaad">SAMVAAD</a></li>
          <!-- Add more clubs as needed -->
        </ul>
      </li>
      <!-- Sports Clubs Dropdown -->
      <li class="menu-category dropdown">
        <a href="#" class="menu-title">Sports Clubs</a>
        <ul class="dropdown-menu scrollable-menu">
          <li><a href="./category.php?category=football">FOOTBALL</a></li>
          <li><a href="./category.php?category=cricket">CRICKET</a></li>
          <li><a href="./category.php?category=basketball">BASKETBALL</a></li>
          <li><a href="./category.php?category=badminton">BADMINTON</a></li>
          <li><a href="./category.php?category=volleyball">VOLLEYBALL</a></li>
          <li><a href="./category.php?category=kabadi">KABDADI</a></li>
          <li><a href="./category.php?category=lawntennis">LAWN TENNIS</a></li>
          <li><a href="./category.php?category=tabletennis">TABLE TENNIS</a></li>
          <li><a href="./category.php?category=chess">CHESS</a></li>
          <li><a href="./category.php?category=carrom">CARROM</a></li>
          <li><a href="./category.php?category=atheletics">ATHELETICS</a></li>
          <!-- Add more clubs as needed -->
        </ul>
      </li>

      <li class="menu-category">
        <a href="contact.php?id=<?php echo (isset( $_SESSION['customer_name']))? $_SESSION['id']: 'unknown';?>" class="menu-title">
          Contact
        </a>
      </li>

      <li class="menu-category">
        <a href="about.php?id=<?php echo (isset( $_SESSION['customer_name']))? $_SESSION['id']: 'unknown';?>" class="menu-title">About</a>
      </li>

      <!-- Profile Link Setup -->
      <?php if(isset($_SESSION['id'])) { ?>
        <li class="menu-category" style="opacity:1">
          <a href="profile.php?id=<?php echo (isset( $_SESSION['customer_name']))? $_SESSION['id']: 'unknown';?>" class="menu-title">
            Profile
          </a>
        </li>
      <?php } else { ?>
        <li class="menu-category" style="opacity:0.5">
          <a style="cursor: not-allowed;" href="#?loginfirst" class="menu-title">
            Profile(Signin Plz)
          </a>
        </li>
      <?php } ?> 

      <!-- Visit Admin Panel After Login -->
      <?php  if(isset($_SESSION['logged-in'])) { ?>
        <li class="menu-category">
          <a href="admin/post.php" class="menu-title">
            Admin Panel
          </a>
        </li> 
      <?php } ?>
      
    </ul>
  </div>
</nav>
