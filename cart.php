<!doctype html>
<?php require 'core/includes/globalURLS.php'; ?>

<html lang="en">
  <head>
    <?php 
    $globalTitle = 'Cart'; 
    $globalKeywords = 'cart; user; products';
    $globalDescription = '';
    include 'core/includes/globalHeaders.php';
    ?>
  </head>

  <body>
    <div class="flex flex-col h-screen">

      <header class="py-5 bg-gray-700 text-white text-center"><?php //include sticky nav, basic ?></header>

      <main class="flex-1 overflow-y-auto p-5">

        <!-- Main Navbar Start --><?php include 'core/includes/globalNav.php'; ?><!-- Main Navbar End -->

        <p class="p-8"><?= $globalTitle; ?></p>
        <div class="max-w-6xl mx-auto flex flex-wrap items-start py-6 px-6 xl:px-0">
        <!-- Content Start: <?= $globalTitle; ?> -->

          <div class="w-1/2 overflow-hidden sm:w-full md:w-1/2">
            <table width="100%">
              <tr>
                <th width="60%">Product Details</th>
                <th width="20%">Quantity</th>
                <th width="20%">Price</th>
              </tr>
                <table class="show-cart" align="center"></table>
            </table>
          </div>

          <div class="w-1/2 overflow-hidden sm:w-full md:w-1/2">
            <div>Total price: $<b><span class="total-cart"></span></b></div>
            <a href="cart.php" class="clear-cart text-purple-500 cursor:pointer hover:text-purple-800">Clear Cart</a>
          </div>

        <!-- Content End: <?= $globalTitle; ?> -->
        </div>

      </main>

      <footer><?php include 'core/includes/globalFooter.php'; ?></footer>
      
    </div>

    <!-- Scripts Start --><?php include 'core/includes/globalScripts.php'; ?><!-- Scripts End -->

  </body>
</html>