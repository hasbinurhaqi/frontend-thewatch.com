<section id="breadcrumb" >
   <div class="container">
      <div class="row">
         <?php include 'layout/partials/module/all_product/section/breadcrumb.php'; ?>
         <!-- START MOBILE VIEW -->
         <div class="hidden-lg hidden-md col-sm-12 col-xs-12 clearleft clearright font-paging">
            <div class="col-sm-12 col-xs-12 talign-center clearleft-mobile clearright-mobile">
               <?php include 'layout/partials/module/all_product/section/mobile/filter_header.php'; ?>
               <?php include 'layout/partials/module/all_product/section/mobile/filter.php'; ?>
            </div>
         </div>
         <?php include 'layout/partials/module/all_product/section/mobile/breadcrumb.php'; ?>
         <?php include 'layout/partials/module/all_product/section/mobile/style.php'; ?>
         <!-- END -->
      </div>
   </div>
</section>

<section id="all-product">
   <div class="container product-box clearleft" style="padding-top:20px;">
      <div class="row">
         <?php include 'layout/partials/module/all_product/section/style.php'; ?>
         <!-- FILTER -->
         <?php include 'layout/partials/module/all_product/section/filter.php'; ?>
         <!-- LIST PRODUCT -->
         <?php include 'layout/partials/module/all_product/section/product_list.php'; ?>
         <?php include 'layout/partials/module/all_product/section/pagging.php'; ?>
      </div>
   </div>
</section>