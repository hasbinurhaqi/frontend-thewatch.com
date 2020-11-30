<!--
'########:'##::::'##:'########:'##:::::'##::::'###::::'########::'######::'##::::'##:::::::'######:::'#######::
... ##..:: ##:::: ##: ##.....:: ##:'##: ##:::'## ##:::... ##..::'##... ##: ##:::: ##::::::'##... ##:'##.... ##:
::: ##:::: ##:::: ##: ##::::::: ##: ##: ##::'##:. ##::::: ##:::: ##:::..:: ##:::: ##:::::: ##:::..:: ##:::: ##:
::: ##:::: #########: ######::: ##: ##: ##:'##:::. ##:::: ##:::: ##::::::: #########:::::: ##::::::: ##:::: ##:
::: ##:::: ##.... ##: ##...:::: ##: ##: ##: #########:::: ##:::: ##::::::: ##.... ##:::::: ##::::::: ##:::: ##:
::: ##:::: ##:::: ##: ##::::::: ##: ##: ##: ##.... ##:::: ##:::: ##::: ##: ##:::: ##:'###: ##::: ##: ##:::: ##:
::: ##:::: ##:::: ##: ########:. ###. ###:: ##:::: ##:::: ##::::. ######:: ##:::: ##: ###:. ######::. #######::
:::..:::::..:::::..::........:::...::...:::..:::::..:::::..::::::......:::..:::::..::...:::......::::.......:::

Welcome to our family in here http://kgbgroup.co.id/jobs

TWC Engineering Team
-->
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <?php include 'layout/partials/header/meta.php'; ?>
      <?php include 'layout/partials/header/style.php'; ?>
      <?php include 'layout/partials/header/script.php'; ?>
      <link href="assets/img/icons/favicon.ico" rel="shortcut icon" type="image/x-icon" />
   </head>
   <body id="page-top" class="index">
      <?php include 'layout/partials/navbar/desktop/nav-tab-mobile.php'; ?>
      <!-- Navigation -->
      <nav id="navbar-mobile" class="navbar navbar-default navbar-custom navbar-static-top navbar-default-scroll">
         <div class="col-lg-12 hidden-xs clearright clearleft clearright-mobile clearleft-mobile snow-header" id="snow-header" style="position: absolute;overflow: hidden;height: 90px;bottom:0;"></div>
         <!-- revisibaru -->
         <?php include 'layout/partials/navbar/desktop/nav-top.php'; ?>
         <?php include 'layout/partials/navbar/desktop/nav-main-menu.php'; ?>
         <?php include 'layout/partials/navbar/mobile/nav-header.php'; ?>
         <!-- /.container-fluid -->
         <!-- menu list desktop -->
         <?php include 'layout/partials/navbar/desktop/list/jam_tangan.php'; ?>
         <?php include 'layout/partials/navbar/desktop/list/strap.php'; ?>
         <?php include 'layout/partials/navbar/desktop/list/aksesories.php'; ?>
         <?php include 'layout/partials/navbar/desktop/list/jurnal.php'; ?>
         <?php include 'layout/partials/navbar/desktop/list/perhiasan.php'; ?>
         <?php include 'layout/partials/navbar/desktop/list/brand.php'; ?>
      </nav>
      <!-- close mobile menu -->
      <?php include 'layout/partials/navbar/mobile/nav-close.php'; ?>
      <!-- mobile menu -->
      <nav id="c-menu--push-left" class="hidden-lg c-menu c-menu--push-left">
         <?php include 'layout/partials/navbar/mobile/nav-top.php'; ?>
         <div class="col-xs-12 clearright-mobile clearleft-mobile clearright clearleft">
         <div class="menu-mobile-wrap">
         <?php include 'layout/partials/navbar/mobile/nav-main-menu.php'; ?>
         <div class="menu-child">
         <?php include 'layout/partials/navbar/mobile/list/jam_tangan.php'; ?>
         <?php include 'layout/partials/navbar/mobile/list/strap.php'; ?>
         <?php include 'layout/partials/navbar/mobile/list/aksesories.php'; ?>
         <?php include 'layout/partials/navbar/mobile/list/perhiasan.php'; ?>
         <?php include 'layout/partials/navbar/mobile/list/brand.php'; ?>
         <?php include 'layout/partials/navbar/mobile/list/jurnal.php'; ?>
         </div>
         </div>
         </div>
         <?php include 'layout/partials/navbar/mobile/login_signup.php'; ?>
      </nav>
      <!-- /c-menu push-left -->
      <?php include 'layout/partials/navbar/mobile/account.php'; ?>
      <!-- /c-menu push-left -->
      <?php include 'layout/partials/navbar/mobile/profile.php'; ?>
      <!-- /c-menu push-left -->
      <div class="sub-menu-"></div>
      <?php include 'layout/partials/navbar/mobile/keranjang.php'; ?>
      <!-- /c-menu push-right -->
      <div id="c-mask" class="c-mask"></div>
      <!-- /c-mask -->
      <?php include 'layout/partials/modal/lifetime_battery.php'; ?>
      <!-- /.modal -->
      <!-- Installment -->
      <?php include 'layout/partials/modal/installment.php'; ?>
      <!-- ./modal -->
      <!-- Free Shipping -->
      <?php include 'layout/partials/modal/free_shipping.php'; ?>

      <div class="hidden-xs hidden-md hidden-sm ptop90"></div>
      <div class="hidden-lg menu-header-gap" id="nav-gap"></div>
      <?php include 'layout/partials/scripts/mobile-behaviour.php'; ?>
      <!-- Page Header -->
      <?php// include 'layout/partials/carousel/desktop/carousel.php'; ?>
      <?php// include 'layout/partials/carousel/mobile/carousel.php'; ?>
      <div id="o-wrapper" class="o-wrapper">
         <main class="o-content">
            <div class="o-container">
               <!--- HOMEPAGE SECTION -->
               <?php include 'layout/partials/module/brand/init.php'; ?>
               <hr>
               <a href="#" class="scrolls btn-top hidden-xs"><i class="button-top-scroll"></i></a>
               <!-- FOOTER -->
               <section class="hidden-xs footer-top"></section>
               <?php include 'layout/partials/footer.php'; ?>

               <!-- MODAL -->
               <div class="modal fade" id="loadingScreen" tabindex="-1" role="dialog" aria-hidden="true"></div>
               <?php include 'layout/partials/modal/subscribe.php'; ?>
               <?php include 'layout/partials/modal/login_warranty.php'; ?>
            </div>
         </main>
      </div>
      <?php include 'layout/partials/scripts/libscripts.php'; ?>   
      <?php include 'layout/partials/scripts/allproduct_scripts.php'; ?>

      
   </body>
</html>