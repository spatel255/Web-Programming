<?php
// LOAD THE PRODUCTS FROM DATABASE
require "products.php";

// HTML ?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Products Demo Page
    </title>
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
  </head>
  <body>
    <h1>OUR BOOKS</h1>
    <div id="our-books">
      <?php foreach ($products as $p) { ?>
      <div class="book_wrap" data-id="<?=$p['product_id']?>">
        <div class="book_title"><?=$p['product_name']?></div>
        <div class="book_desc"><?=$p['product_description']?></div>
      </div>
      <?php } ?>
    </div>
  </body>
</html>
