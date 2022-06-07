<!doctype html>
<?php require 'core/includes/globalURLS.php'; ?>

<html lang="en">
  <head>
    <?php 
    $globalTitle = 'Login'; 
    $globalKeywords = 'user; login; sign; in';
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

          <form class="w-full max-w-lg" action="core/functions/authcode.php" method="POST">

            <!-- Error Message Start -->
            <?php if(isset($_SESSION['message'])) { ?>
            <div class="alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
              <strong>Hey!</strong> <?= $_SESSION['message']; ?>
            </div>
            <?php unset($_SESSION['message']); } ?>
            <!-- Error Message End -->

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="formEmail">Email</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="formEmail" name="email" type="email" placeholder="example@dnr.co.nz">
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="formPassword">Password</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="formPassword" name="password" type="password" placeholder="******************">
              </div>
            </div>

            <button name="login_btn" type="submit">Submit</button>

          </form>

        <!-- Content End: <?= $globalTitle; ?> -->
        </div>

      </main>

      <footer><?php include 'core/includes/globalFooter.php'; ?></footer>
      
    </div>

    <!-- Scripts Start --><?php include 'core/includes/globalScripts.php'; ?><!-- Scripts End -->

  </body>
</html>