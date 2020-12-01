   <?php 

      $profile_active = "";
      $order_active = "";
      $shipping_active = "";
      $wishlist_active = "";
      $section = "shopping-bag";
      $section_class = "";

      if (isset($_GET['pages'])) 
      {

         if ($_GET['pages'] == "order") {
            $order_active = "active";
         }

         if ($_GET['pages'] == "shipping") {
            $shipping_active = "active";
         }

         if ($_GET['pages'] == "wishlist") {
            $wishlist_active = "active";
            $section = "wishlist-desktop";
            $section_class = "hidden-sm hidden-xs";

         }

         if ($_GET['pages'] == "change_password") {
            $profile_active = "active";
         }

         if ($_GET['pages'] == "create_shipping") {
            $shipping_active = "active";
         }


      }
      else {
         $profile_active = "active";
      }


   ?>
<section id="<?php echo $section ?>" style="padding-top: 0px;" class="<?php echo $section_class ?>">

   <div class="container">
      <div class="row">
         <div class="hidden-xs col-lg-4 col-md-4 col-sm-4 myaccount profile separator clearleft clearright"></div>
         <div class="hidden-xs col-lg-8 col-md-8 col-sm-8 shopping-bag product separator clearleft clearright" style="border-bottom: 0px solid;"></div>
         <div class=" col-lg-4 col-md-4 col-sm-4 myprofile menu-left box clearleft">
            <div class=" col-lg-12 col-md-12 col-sm-12 myprofile menu-left <?php echo $profile_active; ?> clearleft">
               <a  href="/profile.php">My Profile</a>
            </div>
            <div class=" col-lg-12 col-md-12 col-sm-12 myprofile menu-left <?php echo $order_active; ?> clearleft">
               <a href="/profile.php?pages=order">My Order / Confirm Payment</a>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 myprofile <?php echo $shipping_active; ?> menu-left clearleft">
               <a href="/profile.php?pages=shipping">Shipping Information</a>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 myprofile menu-left <?php echo $wishlist_active; ?> clearleft">
               <a href="/profile.php?pages=wishlist">My Wishlist</a>
            </div>
            <div class=" col-lg-12 col-md-12 col-sm-12 myprofile menu-left clearleft">
               <a style="color:red !important;" href="/user/sign-out">Sign Out</a>
            </div>
         </div>
         <?php 

            if (isset($_GET['pages'])) 
            {

               if ($_GET['pages'] == "order") {
                   include 'layout/partials/module/profile/section/order.php';

               }

               if ($_GET['pages'] == "shipping") {
                   include 'layout/partials/module/profile/section/shipping.php';
               }

               if ($_GET['pages'] == "wishlist") {
                   include 'layout/partials/module/profile/section/wishlist.php';

               }

               if ($_GET['pages'] == "change_password") {
                   include 'layout/partials/module/profile/section/change-password.php';
               }

               if ($_GET['pages'] == "create_shipping") {
                  include 'layout/partials/module/profile/section/create_shipping.php';
               }


            }
            else {
               include 'layout/partials/module/profile/section/myprofile.php';
            }


         ?>
      </div>
   </div>
</section>

<?php 

   if (isset($_GET['pages'])) 
   {

      if ($_GET['pages'] == "wishlist") {
          include 'layout/partials/module/profile/section/wishlist_mobile.php';
          include 'layout/partials/modal/wishlist.php';

      }
   }

?>