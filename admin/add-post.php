<?php 
    include_once('./includes/headerNav.php');
    include_once('./includes/restriction.php');
 ?>
 <head>
     <style>
        .content-box-post {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
         .addpost{
            border: 1px solid black;
            width: 80%;
            padding: 25px;
            border-radius: 16px;
            background-color: #f1f1f1;
         }

     </style>
 </head>
<div class="content-box-post">
    
 <div class="addpost">
 <h1>Add post here</h1>

  <!-- Form -->
    <form
      action="save-post.php"
      method="POST"
      enctype="multipart/form-data"
      class="row g-3"
    >
      <div class="col-12">
        <label for="inputAddress" class="form-label">Title</label>
        <input
          name="prod-title"
          type="text"
          class="form-control"
          placeholder="Product Name..."
          required="required"
        />
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Price</label>
        <input
          name="prod-price"
          type="number"
          class="form-control"
          value=""
          required="required"
        />
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Discount</label>
        <input
          name="prod-discount"
          type="number"
          class="form-control"
          required="required"
        />
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"
          >Description</label
        >
        <textarea
          class="form-control"
          rows="3"
          name="prod-desc"
          required="required"
        ></textarea>
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">No. of Items</label>
        <input
          type="number"
          class="form-control"
          name="noofitem"
          value=""
          required="required"
        />
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label">Category</label>
        <select name="post-category" class="form-select" required>
  <option value="" disabled selected>Select Category</option>
  <option value="ers">ERS</option>
  <option value="bmc">BMC</option>
  <option value="tpc">TPC</option>
  <option value="aps">APS</option>
  <option value="cad">CAD</option>
  <option value="racing">RACING</option>
  <option value="afc">AFC</option>
  <option value="saaz">SAAZ</option>
  <option value="avartan">AVARTAN</option>
  <option value="jazbaat">JAZBAAT</option>
  <option value="abhivakyati">ABHIVAKYATI</option>
  <option value="shutterbox">SHUTTERBOX</option>
  <option value="samvaad">SAMVAAD</option>
  <option value="football">FOOTBALL</option>
  <option value="cricket">CRICKET</option>
  <option value="basketball">BASKETBALL</option>
  <option value="badminton">BADMINTON</option>
  <option value="volleyball">VOLLEYBALL</option>
  <option value="kabadi">KABADI</option>
  <option value="lawntennis">LAWN TENNIS</option>
  <option value="tabletennis">TABLE TENNIS</option>
  <option value="chess">CHESS</option>
  <option value="carrom">CARROM</option>
  <option value="atheletics">ATHELETICS</option>
</select>

      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Image</label>
        <input
          type="file"
          name="prod-img"
          class="form-control"
          required="required"
        />
      </div>
      <div class="form-check">
        <input
          class="form-check-input"
          type="radio"
          name="flexRadioDefault"
          id="flexRadioDefault2"
        />
        <label class="form-check-label" for="flexRadioDefault2">
          Available
        </label>
      </div>
      <div class="col-12">
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
      </div>
    </form>
                  <!--/Form -->
 </div>
</div>




