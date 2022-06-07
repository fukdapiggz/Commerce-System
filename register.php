<!doctype html>
<?php require 'core/includes/globalURLS.php'; ?>

<html lang="en">
  <head>
    <?php 
    $globalTitle = 'Register'; 
    $globalKeywords = 'user; register; sign; up';
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
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="formFirstName">First Name</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="formFirstnName" name="firstName" type="text" placeholder="Jane">
                <!-- Error Field? <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane"> -->
                <!-- Error Text? <p class="text-red-600 text-xs italic">*Please enter this field</p> -->
                <!-- Tooltip Text? <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
              </div>

              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="formLastName">Last Name</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="formLastName" name="lastName" type="text" placeholder="Doe">
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="formUserName">Username</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="formUserName" name="inputUsername" type="text" placeholder="WonderfulMember201">
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="formEmail">Email</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="formEmail" name="email" type="email" placeholder="example@dnr.co.nz">
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="formConfirmEmail">Confirm Email</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="formConfirmEmail" name="confirmEmail" type="email" placeholder="example@dnr.co.nz">
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="formPassword">Password</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="formPassword" name="password" type="password" placeholder="******************">
              </div>

              <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="formConfirmPassword">Confirm Password</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="formConfirmPassword" name="confirmPassword" type="password" placeholder="******************">
              </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="formCity">City/State</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="formCity" name="city" type="text" placeholder="Wellington">
              </div>

              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="formCountry">Country</label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="formCountry" name="country">
                    <option>New Zealand</option>
                    <option>Australia</option>
                    <option>America</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"><?= $svgDropdown; ?></div>
                </div>
              </div>

              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="formPostalCode">Postal Code/Zip</label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="formPostalCode" name="postalCode" type="text" placeholder="5018">
              </div>
            </div>

            <button name="register_btn" type="submit">Submit</button>

          </form>

        <!-- Content End: <?= $globalTitle; ?> -->
        </div>

      </main>

      <footer><?php include 'core/includes/globalFooter.php'; ?></footer>
      
    </div>

    <!-- Scripts Start --><?php include 'core/includes/globalScripts.php'; ?><!-- Scripts End -->

  </body>
</html>