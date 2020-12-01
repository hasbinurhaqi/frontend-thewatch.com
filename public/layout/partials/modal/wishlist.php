<!-- Modal -->
<div class="modal fade" id="moveCategoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img id="iconCloseModal" src="//thewatch.imgix.net/icons/close-round.png" alt="icon"/>
            </button>
            <p class="modal-title" id="myModalLabel" style="font-weight:bold;">Choose list</p>
         </div>
         <div class="modal-body">
            <ul class="list-group move-list-wishlist" style="margin:-15px -15px 0px -15px;">
               <a class="moveWishlistItem" onclick="moveDetailWishlist(2415)">
                  <li class="list-group-item" style="min-width:300px;">My Wishlist</li>
               </a>
            </ul>
            <ul class="list-group" style="margin:0px -15px 0px -15px;"></ul>
            <div style="margin-top:20px;">
               <input type="hidden" name="idDetailWishlist" id="move-detail-wishlist" value=""/>
               <a class="moveWishlistItem btn round-btn-blue" data-toggle="modal" data-target="#addCategoryModal">Add Wishlist</a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="moveMassalCategoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img id="iconCloseModal" src="//thewatch.imgix.net/icons/close-round.png" alt="icon"/>
            </button>
            <p class="modal-title" id="myModalLabel" style="font-weight:bold;">Choose list</p>
         </div>
         <div class="modal-body">
            <ul class="list-group move-list-massal-wishlist" style="margin:-15px -15px 0px -15px;">
               <a class="moveWishlistItem" onclick="moveMassalDetailWishlist(2415)">
                  <li class="list-group-item">My Wishlist</li>
               </a>
            </ul>
            <div style="margin-top:20px;">
               <input type="hidden" name="idDetailWishlist" id="move-multiple-detail-wishlist" value=""/>
               <a class="moveWishlistItem btn round-btn-blue" data-toggle="modal" data-target="#addCategoryModal">Add Wishlist</a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="deleteCategoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img id="iconCloseModal" src="//thewatch.imgix.net/icons/close-round.png" alt="icon"/>
            </button>
            <p class="modal-title" id="myModalLabel" style="font-weight:bold;">Are you sure want to delete this category wishlist?</p>
         </div>
         <div class="modal-body">
            <input type="hidden" name="idwishlist" id="delete-category-wishlist" value=""/>
            <button class="btn round-btn-blue" id="submit-delete-category-wishlist" onclick="deleteCategoryWishlist()">Yes</button>
            <br/>
            <button class="btn round-btn-blue">No</button>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="deleteDetailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img id="iconCloseModal" src="//thewatch.imgix.net/icons/close-round.png" alt="icon"/>
            </button>
            <p class="modal-title" id="myModalLabel" style="font-weight:bold;">Are you sure want to delete this product in the current wishlist?</p>
         </div>
         <div class="modal-body">
            <input type="hidden" name="idwishlistdetail" id="delete-detail-wishlist" value=""/>
            <button class="btn round-btn-blue" id="submit-delete-category-wishlist" onclick="deleteDetailWishlist()">Yes</button>
            <br/>
            <button class="btn round-btn-blue">No</button>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="deleteMassalDetailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img id="iconCloseModal" src="//thewatch.imgix.net/icons/close-round.png" alt="icon"/>
            </button>
            <p class="modal-title" id="myModalLabel" style="font-weight:bold;">Are you sure want to delete this product in the current wishlist?</p>
         </div>
         <div class="modal-body">
            <input type="hidden" name="idwishlistdetail" id="delete-multiple-detail-wishlist" value=""/>
            <button class="btn round-btn-blue" id="submit-delete-category-wishlist" onclick="deleteMassalDetailWishlist()">Yes</button>
            <br/>
            <button class="btn round-btn-blue">No</button>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<div class="modal" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document" style="width:350px;">
      <div class="modal-content">
         <div class="modal-header" style="border:0px;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img id="iconCloseModal" src="//thewatch.imgix.net/icons/close-round.png" alt="icon"/>
            </button>
         </div>
         <div class="modal-body  text-center">
            <p class="text-center" style="font-weight:bold;font-size:14px;">Wish List Category</p>
            <img src="//thewatch.imgix.net/product/6671/6671_medium.jpg" width="100px"/>
            <input id="input-category-wishlist" class="rounded-input text-center" type="text" name="category" placeholder="Category" required/>
            <button id="submit-category-wishlist" class="btn round-btn-blue" onclick="addCategoryWishlist()">Oke</button>
         </div>
      </div>
   </div>
</div>