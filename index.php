<!doctype html>
<?php require 'core/includes/globalURLS.php'; ?>

<html lang="en">
  <head>
    <?php 
    $globalTitle = 'Frontpage'; 
    $globalKeywords = 'hi; frontpage; home';
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
    
          <!-- Error Message Start -->
          <?php if(isset($_SESSION['message'])) { ?>
          <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong>Hey!</strong> <?= $_SESSION['message']; ?>
          </div>
          <?php unset($_SESSION['message']); } ?>
          <!-- Error Message End -->



        <!-- Content End: <?= $globalTitle; ?> -->
        </div>

      </main>

      <footer><?php include 'core/includes/globalFooter.php'; ?></footer>
      
    </div>

    <!-- Scripts Start --><?php include 'core/includes/globalScripts.php'; ?><!-- Scripts End -->

  </body>
</html>