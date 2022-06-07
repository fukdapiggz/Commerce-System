<!doctype html>
<?php require 'core/includes/globalURLS.php'; ?>

<html lang="en">
  <head>
    <?php 
    $globalTitle = 'Products'; 
    $globalKeywords = 'all; information; products';
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

          <div class="products flex items-center flex-wrap">

            <!-- Product01 Start -->
            <div class="w-full md:w-1/3 xl:w-1/4 p-6">
              <a href="#producturl"><img src="$productImg" class="w-full rounded-xl hover:shadow-lg"></a>

              <div class="pt-3 flex items-center justify-between">
                  <a href="#producturl">$productName1</a>

                  <a class="add-to-cart text-purple-500 hover:text-purple-800" data-name="Product1" data-price="40.0"><?= $svgCart; ?></a>
              </div>

              <p class="pt-1 text-gray-400">$productPrice</p>
            </div>
            <!-- Product01 End -->

            <!-- Product02 Start -->
            <div class="w-full md:w-1/3 xl:w-1/4 p-6">
              <a href="#producturl"><img src="$productImg" class="w-full rounded-xl hover:shadow-lg"></a>

              <div class="pt-3 flex items-center justify-between">
                  <a href="#producturl">$productName2</a>

                  <a class="add-to-cart text-purple-500 hover:text-purple-800" data-name="Product2" data-price="40.0"><?= $svgCart; ?></a>
              </div>

              <p class="pt-1 text-gray-400">$productPrice</p>
            </div>
            <!-- Product02 End -->

            <!-- Product03 Start -->
            <div class="w-full md:w-1/3 xl:w-1/4 p-6">
              <a href="#producturl"><img src="$productImg" class="w-full rounded-xl hover:shadow-lg"></a>

              <div class="pt-3 flex items-center justify-between">
                  <a href="#producturl">$productName3</a>

                  <a class="add-to-cart text-purple-500 hover:text-purple-800" data-name="Product3" data-price="40.0"><?= $svgCart; ?></a>
              </div>

              <p class="pt-1 text-gray-400">$productPrice</p>
            </div>
            <!-- Product03 End -->

            <!-- Product04 Start -->
            <div class="w-full md:w-1/3 xl:w-1/4 p-6">
              <a href="#producturl"><img src="$productImg" class="w-full rounded-xl hover:shadow-lg"></a>

              <div class="pt-3 flex items-center justify-between">
                  <a href="#producturl">$productName4</a>

                  <a class="add-to-cart text-purple-500 hover:text-purple-800" data-name="Product4" data-price="40.0"><?= $svgCart; ?></a>
              </div>

              <p class="pt-1 text-gray-400">$productPrice</p>
            </div>
            <!-- Product04 End -->

          </div>

        <!-- Content End: <?= $globalTitle; ?> -->
        </div>

      </main>

      <footer><?php include 'core/includes/globalFooter.php'; ?></footer>
      
    </div>

    <!-- Scripts Start --><?php include 'core/includes/globalScripts.php'; ?><!-- Scripts End -->

  </body>
</html>