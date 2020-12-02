<?php include 'layout/partials/module/brand_all_product/section/script.php'; ?>
<div class="hidden-lg hidden-xs" style="padding-top:160px;"></div>
<div class="container">
	<div class="row">
		<?php include 'layout/partials/carousel/carousel_brand_all_product.php'; ?>
	</div>
</div>
<?php include 'layout/partials/module/brand_all_product/section/brand_description.php'; ?>
<section id="breadcrumb" style="padding-top:20px;">
   <div class="container">
      <div class="row">
      	<?php include 'layout/partials/module/brand_all_product/section/breadcrumb.php'; ?>
      	<!-- START MOBILE VIEW -->
      	<div class="hidden-lg hidden-md col-sm-12 col-xs-12 clearleft clearright font-paging">
            <div class="col-sm-12 col-xs-12 talign-center clearleft-mobile clearright-mobile">
            	<?php include 'layout/partials/module/brand_all_product/section/mobile/filter_header.php'; ?>
            	<?php include 'layout/partials/module/brand_all_product/section/mobile/filter.php'; ?>
         	</div>
      	</div>
      	<?php include 'layout/partials/module/brand_all_product/section/mobile/breadcrumb.php'; ?>
      	<?php include 'layout/partials/module/brand_all_product/section/mobile/style.php'; ?>
      	<!-- END -->
      </div>
 	</div>
</section>
<section id="all-product">
	<div class="container product-box clearleft" style="padding-top:20px;">
  		<div class="row">
  			<?php include 'layout/partials/module/brand_all_product/section/style.php'; ?>
  			<?php include 'layout/partials/module/brand_all_product/section/filter.php'; ?>
  			<?php include 'layout/partials/module/brand_all_product/section/product_list.php'; ?>
  		</div>
  	</div>
</section>