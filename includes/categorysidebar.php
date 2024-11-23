<?php
// get best sellers
$best_sellers = get_best_sellers();
$categories = get_categories();
$clothes = get_clothes_category();
?>

<!-- Sidebar -->
<div class="sidebar has-scrollbar" data-mobile-menu>
  <div class="sidebar-category">
    <div class="sidebar-top">
      <h2 class="sidebar-title">Category</h2>
      <button class="sidebar-close-btn" data-mobile-menu-close-btn>
        <ion-icon name="close-outline"></ion-icon>
      </button>
    </div>

    <ul class="sidebar-menu-category-list">
      <?php
      if ($categories) {
        while ($row = mysqli_fetch_assoc($categories)) {
      ?>
          <li class="sidebar-menu-category">
            <button class="sidebar-accordion-menu" data-accordion-btn>
              <div class="menu-title-flex">
                <img src="./images/icons/<?php echo htmlspecialchars($row['img']); ?>" alt="category-icon" width="20" height="20" class="menu-title-img" />
                <p class="menu-title"><?php echo htmlspecialchars($row['name']); ?></p>
              </div>
              <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
              </div>
            </button>

            <ul class="sidebar-submenu-category-list" data-accordion>
              <?php
              if (strcasecmp($row['name'], "Clothes") === 0 && $clothes) {
                while ($clothrow = mysqli_fetch_assoc($clothes)) {
              ?>
                  <li class="sidebar-submenu-category">
                    <form class="search-form" method="post" action="./search.php">
                      <input type="hidden" name="search" value="<?php echo htmlspecialchars($clothrow['cloth_category_name']); ?>" />
                      <button type="submit" name="submit" class="sidebar-submenu-title">
                        <p class="product-name"><?php echo htmlspecialchars($clothrow['cloth_category_name']); ?></p>
                      </button>
                    </form>
                  </li>
              <?php
                }
              }
              ?>
            </ul>
          </li>
      <?php
        }
      } else {
        echo "<p>No categories available.</p>";
      }
      ?>
    </ul>
  </div>

  <!-- Best Sellers -->
  <div class="product-showcase">
    <h3 class="showcase-heading">Best Sellers</h3>
    <div class="showcase-wrapper">
      <div class="showcase-container">
        <?php
        if ($best_sellers) {
          while ($row = mysqli_fetch_assoc($best_sellers)) {
        ?>
            <div class="showcase">
              <a href="./viewdetail.php?id=<?php echo htmlspecialchars($row['product_id']); ?>&category=<?php echo htmlspecialchars($row['category_id']); ?>" class="showcase-img-box">
                <img src="./admin/upload/<?php echo htmlspecialchars($row['product_img']); ?>" alt="Best seller product" width="75" height="75" class="showcase-img" />
              </a>
              <div class="showcase-content">
                <a href="./viewdetail.php?id=<?php echo htmlspecialchars($row['product_id']); ?>&category=<?php echo htmlspecialchars($row['category_id']); ?>">
                  <h4 class="showcase-title"><?php echo htmlspecialchars($row['product_title']); ?></h4>
                </a>
                <div class="showcase-rating">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>
                <div class="price-box">
                  <del>$<?php echo htmlspecialchars($row['product_price']); ?></del>
                  <p class="price">$<?php echo htmlspecialchars($row['product_price']); ?></p>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "<p>No best sellers available.</p>";
        }
        ?>
      </div>
    </div>
  </div>
</div>
