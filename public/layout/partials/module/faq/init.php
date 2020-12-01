<section id="breadcrumb">
   <div class="container">
      <div class="row"></div>
   </div>
</section>
<section class="ptop2">
   <div class="container">
      <div class="row hidden-xs">
         <div class="hidden-xs col-lg-12 col-md-12 col-sm-12 shopping-bag title">FAQ</div>
         <div class="hidden-xs col-lg-3 col-md-3 col-sm-3 myaccount profile separator clearleft clearright"></div>
         <div class="hidden-xs col-lg-9 col-md-9 col-sm-9 shopping-bag product separator clearleft clearright"></div>
         <div class="hidden-xs col-lg-3 col-md-3 col-sm-3 myprofile menu-left box clearleft">
            <div id="ordering-menu" class="hidden-xs col-lg-12 col-md-12 col-sm-12 myprofile menu-left active clearleft clearright">
               <a href="#" onclick="menuFAQ('ordering')">ORDERING</a>
            </div>
            <div id="akulaku-menu" class="hidden-xs col-lg-12 col-md-12 col-sm-12 myprofile menu-left clearleft clearright">
               <a href="#" onclick="menuFAQ('akulaku')">AKULAKU</a>
            </div>
            <div class="hidden-xs col-lg-12 col-md-12 col-sm-12 myprofile menu-left separator last clearleft clearright"></div>
         </div>
         <?php include 'layout/partials/module/faq/section/ordering.php'; ?>
         <?php include 'layout/partials/module/faq/section/akulaku.php'; ?>
      </div>
   </div>
</section>