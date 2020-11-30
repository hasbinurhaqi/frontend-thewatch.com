<section id="breadcrumb" >
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 hidden-sm hidden-xs clearleft clearright mbottom-5-mobile gotham-white fsize-14">
            <div class="col-lg-12 col-md-12 col-sm-12 clearleft clearright">
               <div class="col-lg-2 hidden-md col-sm-2 clearleft clearright"></div>
               <div class="col-lg-4 col-md-4 col-sm-4 clearleft clearright talign-left line-height40 fsize-14">
                  <a style="line-height: 32px;" href="#" class="hidden-xs hidden-sm fcolorblue">Watches</a>
                  <span class="hidden-xs hidden-sm fcolorblue">/</span>
                  <a style="line-height: 32px;" href="#" class="hidden-xs hidden-sm fcolorblue">All Product</a>
               </div>
               <div class="col-lg-6 col-md-8 col-sm-6 clearleft clearright">
                  <div class="col-lg-6 col-md-6 col-sm-6 clearleft clearright talign-right">
                     <span class="fcolorblue">View : </span>
                     <a class="circle-fill-sprites fcolorfff talign-center" href="#"><span class="lheight-paging">20</span></a>
                     <a class="circle-sprites fcolorblue talign-center" href="#"><span class="lheight-paging">40</span></a>
                     <a class="circle-sprites fcolorblue talign-center" href="#"><span class="lheight-paging">60</span></a>
                     <a class="circle-sprites fcolorblue talign-center" href="#"><span class="lheight-paging">100</span></a> 
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 clearleft clearright line-height40 talign-right">
                     <div class="clearleft clearright hidden-xs hidden-sm hidden-lg-4 fcolorblue lspace0-5" style="display: inline;">Sort by:</div>
                     <div class="clearleft clearright hidden-xs hidden-sm hidden-lg-4" style="display: inline;">
                        <a href="#" class="hidden-xs hidden-sm bradius20 bgcolorprimary pleft15 pright15 ptop5p pbottom5p" id="sorting">
                        <span class="text-sorting fcolorfff">Brands Name<span class="glyphicon glyphicon-menu-down" style="    padding-left: 5px;display: inline;"></span></span>
                        </a>
                        <div class="" id="arrow-sorting"></div>
                        <div class="hidden-xs sorting-box talign-left" id="box-sorting">
                           <a class="sorting-list top" href="#">Brands Name</a>
                           <a class="sorting-list" id="sorting-none" href="#">Price Low to High</a>
                           <a class="sorting-list bottom" href="#">Price High to Low</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <div>
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