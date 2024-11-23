<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once('./includes/headerNav.php'); 
?>

<div class="overlay" data-overlay></div>

<header>
  <?php 
  require_once './includes/topheadactions.php'; 
  require_once './includes/desktopnav.php'; 
  require_once './includes/mobilenav.php'; 
  ?>
  <style>
    :root {
      --main-maroon: #CE5959;
      --deep-maroon: #89375F;
      --bittersweet: #FF6F61;
    }
    td, th {
      text-align: center;
    }
    td img {
      margin-left: auto;
      margin-right: auto;
    }
    .delete-icon {
      color: var(--bittersweet);
      cursor: pointer;
    }
    .child-register-btn {
      margin-top: 20px;
      width: 85%;
      margin-left: auto;
      margin-right: auto;
    }
    .child-register-btn p {
      width: 350px;
      height: 60px;
      background-color: var(--main-maroon);
      box-shadow: 0px 0px 4px #615f5f;
      line-height: 60px;
      color: #FFFFFF;
      margin-left: auto;
      border-radius: 8px;
      text-align: center;
      cursor: pointer;
      font-size: 19px;
      font-weight: 600;
    }
    @media screen and (max-width: 794px) {
      .child-register-btn {
        margin-top: 30px;
      }
      .child-register-btn p {
        width: 100%;
      }
    }
    .total-container {
      text-align: right;
      font-size: 18px;
      font-weight: bold;
      margin-top: 20px;
    }
  </style>
</header>

<main>
  <div class="product-container">
    <div class="container">
      <table>
        <thead>
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $totalAmount = 0;
          if (isset($_SESSION['mycart']) && count($_SESSION['mycart']) > 0) {
            foreach ($_SESSION['mycart'] as $key => $value) {
              $subtotal = $value['price'] * $value['product_qty'];
              $totalAmount += $subtotal;
              ?>
              <tr>
                <td>
                  <img class="cart-product-image" src="./admin/upload/<?php echo htmlspecialchars($value['product_img']); ?>" alt="Product Image">
                </td>
                <td><?php echo htmlspecialchars($value['name']); ?></td>
                <td><?php echo "$" . number_format($value['price'], 2); ?></td>
                <td><?php echo htmlspecialchars($value['product_qty']); ?></td>
                <td><?php echo "$" . number_format($subtotal, 2); ?></td>
                <td>
                  <a href="cart.php?action=delete&key=<?php echo $key; ?>" class="delete-icon" title="Remove Item">&#x1F5D1;</a>
                </td>
              </tr>
              <?php
            }
          } else {
            ?>
            <tr>
              <td colspan="6">No items available in cart</td>
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>

      <?php if (isset($_SESSION['mycart']) && count($_SESSION['mycart']) > 0): ?>
        <div class="total-container">
          Total Amount: <?php echo "$" . number_format($totalAmount, 2); ?>
        </div>
      <?php endif; ?>

      <?php if (isset($_SESSION['mycart']) && count($_SESSION['mycart']) > 0): ?>
        <div class="child-register-btn">
          <p>
            <a href="checkout.php" style="color:#FFFFFF; text-decoration: none;">Proceed To CheckOut</a>
          </p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php require_once './includes/footer.php'; ?>

<?php
// Handle delete action
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['key'])) {
    $key = $_GET['key'];
    if (isset($_SESSION['mycart'][$key])) {
        unset($_SESSION['mycart'][$key]); // Remove item from cart
        header('Location: cart.php'); // Redirect to refresh the cart
        exit();
    }
}
?>
