<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 myprofile">
   <div class="profile-head">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 my-profile title clearleft clearright">
         Wish List
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 section-right center-blue-btn ">
         <a data-toggle="modal" data-target="#addCategoryModal">
         <img class="round-btn-blue btn_new_list" src="//thewatch.imgix.net/wishlist/desktop/btn_new_list.png"/>
         </a>
      </div>
   </div>
   <div style="font-weight:bold;font-size:14px;margin-bottom:10px;">Wish List Category</div>
   <div class="wishlist-category">
      <a class="list_wishlist" href="/user/wishlist/">
         <div class="btn_wishlist btn_wishlist_active btn_wishlist_desktop" style="left:0px;">All Wish List</div>
      </a>
      <a href="/user/wishlist/2415" class="list_wishlist">
         <div class="btn_wishlist btn_wishlist_desktop btn_wishlist" style="left:170px;">My Wishlist</div>
      </a>
   </div>
   <div class="wishlist-content-wrap-desktop">
      <div class="wishlist-area-wrap-desktop">
         <!--(header wishlist) NAMA WISHLIST DAN BUTTON EDIT-->
         <div style="margin-bottom:10px;margin-top:30px;" >
            <div class="row">
               <div class="col-md-6">
                  <div style="font-weight:bold;font-size:14px;width:200px;margin-top:20px;" >My Wishlist</div>
               </div>
               <div class="col-md-6">
                  <button data-id="0" class="btn round-btn-gold pull-right btnCloseModeSelect" style="font-weight:bold;font-size:14px;width:100px;margin-left:10px;">Cancel </button>
                  <button data-id="0" class="btn round-btn-transparent pull-right dropdown-toggle btnOpenModeSelect" data-toggle="dropdown" style="font-weight:bold;font-size:14px;width:100px;">Tandai 
                  <span class="fa fa-angle-down"/>
                  </button>
                  <ul class="dropdown-menu pull-right" style="margin-right:100px;">
                     <li>
                        <a class="btnCheckAll" data-id="0" style="cursor:pointer;">Tandai Semua</a>
                     </li>
                     <li>
                        <a class="btnUncheckAll" data-id="0" style="cursor:pointer;">Hapus Tanda</a>
                     </li>
                     <li></li>
                  </ul>
               </div>
            </div>
         </div>
         <!--(content wishlist) ISI WISHLIST DAN BUTTON HAPUS PINDAHKAN BELI-->
         <div class="wishlist-area" data-detail="4494" style="margin-bottom:20px;">
            <div class="wrap-wishlist">
               <div class="row">
                  <div class="col-md-3">
                     <div style="position:relative;">
                        <img src="//thewatch.imgix.net/product/12445/12445_medium.jpg" class="img-responsive"/>
                     </div>
                  </div>
                  <div class="col-md-9">
                     <div class="row">
                        <div class="col-md-12 col-lg-12">
                           <div class="row">
                              <div class="col-md-5">
                                 <p style="font-weight:bold;margin:0;font-size:20px;text-transform: uppercase;">
                                    <a href="/brand/2">Daniel Wellington</a>
                                 </p>
                                 <p style="margin:0;">
                                    <a href="/product/iconic-link-36-rg-black">Iconic Link 36 RG Black</a>
                                 </p>
                                 <input type="hidden" class="productAttribute" data-id="0" name="productattribute" value="0">
                                 <p style="font-weight:bold;margin:0;font-size:15px;">IDR 3.550.000</p>
                              </div>
                              <div class="col-md-2">
                                 <p>01/12/2020</p>
                              </div>
                              <div class="col-md-5 text-right">
                                 <input style="margin-top:50%;" data-id="0" data-product="4390" data-attribute="0" data-detail="4494" class="checkboxSelectWishlist" type="checkbox" name="wishlistproduk" value="4494"/>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-12" style="padding-top:100px;">
                           <div class="row">
                              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3" style="padding-left:10px;padding-right:10px;">
                                 <a class="btn round-btn-red btnHapusWishlist" onclick="openModalDeleteDetail(4494)"  data-id="0">Hapus</a>
                              </div>
                              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3" style="padding-left:10px;padding-right:10px;">
                                 <a class="btn round-btn-gold btnPindahWishlist" onclick="openModalMoveWishlist(4494)"  data-id="0">Pindahkan</a>
                              </div>
                              <div class="col-sm-12 col-xs-12 col-md-3 col-lg-3" style="padding-left:10px;padding-right:10px;">
                                 <a class="btn round-btn-blue btnBeliWishlist" data-id="0" onclick="beliDetailWishlist(4390, 0, 4494, this)">Beli</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--BUTTTON HAPUS PINDAHKAN BELI DIBAWAH KETIKA MODE SELECT ON-->
         <div class="controllmodeSelect" data-id="0" style="margin-bottom:20px;">
            <div class="row">
               <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3" style="padding-left:10px;padding-right:10px;">
                  <a data-id="0" onclick="openModalMassalDeleteDetail(this)" class="btn round-btn-red btncontrollmodeSelect">Hapus</a>
               </div>
               <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3" style="padding-left:10px;padding-right:10px;">
                  <a data-id="0" onclick="openModalMassalMoveWishlist(this)" class="btn round-btn-gold btncontrollmodeSelect">Pindahkan</a>
               </div>
               <div class="col-sm-3 col-xs-3 col-md-3 col-lg-3" style="padding-left:10px;padding-right:10px;">
                  <a data-id="0" onclick="beliMassalDetailWishlist(this)" class="btn round-btn-blue btncontrollmodeSelect">Beli</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>