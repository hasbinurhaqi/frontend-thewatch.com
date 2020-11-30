<div class="hidden-lg hidden-md hidden-sm container">
   <div class="row">
      <div class="padding-homebanner"></div>
      <div id="" class="swiper-container-homeban">
         <div class="swiper-wrapper clearleft clearright">
            <script>
               promotions.push({
               "id": "EOS",
               "name": "EOS",
               "creative": "Homebanner1",
               "position": "slot1"
               });
            </script>
            <!-- Set the first background image using inline CSS below. -->
            <div class="swiper-slide">
               <a id="homeBannerClick" href="https://www.thewatch.co/endyear-sale">
                  <picture alt="EOS">
                     <!-- <source srcset="https://thewatch.imgix.net/homebanner/20201115_e102af5dced9c6841640baf6bea87efdm.jpg?auto=compress,format&fit=max&lossless=true&w=414" media="
                        (max-width: 767px) and (-webkit-min-device-pixel-ratio: 2),
                        (max-width: 767px) and (min-resolution: 192dpi)
                        "> -->
                     <source srcset="https://thewatch.imgix.net/homebanner/20200220_8fbfd8edf6e8ee75758d16a18b8bc602.jpg" media="
                        (max-width: 767px) and (-webkit-min-device-pixel-ratio: 2),
                        (max-width: 767px) and (min-resolution: 192dpi)
                        ">
                     <!-- <source srcset="https://thewatch.imgix.net/homebanner/20201115_e102af5dced9c6841640baf6bea87efdm.jpg?auto=compress,format&fit=max&lossless=true&w=414" media="(max-width: 767px)"> -->
                     <source srcset="https://thewatch.imgix.net/homebanner/20200220_8fbfd8edf6e8ee75758d16a18b8bc602.jpg" media="(max-width: 767px)">
                     <img alt="https://www.thewatch.co/endyear-sale" class="img-responsive initial loading" src="https://thewatch.imgix.net/homebanner/20200220_8fbfd8edf6e8ee75758d16a18b8bc602.jpg?auto=compress,format&fm=jpg&lossless=true" data-was-processed="true">
                  </picture>
               </a>
            </div>
            <!--<div class="fill img-responsive" style="background-image:url('/img/homebanner/');"></div>-->
            <script>
               promotions.push({
               "id": "OB Pearly Queen",
               "name": "OB Pearly Queen",
               "creative": "Homebanner2",
               "position": "slot2"
               });
            </script>
            <!-- Set the first background image using inline CSS below. -->
            <div class="swiper-slide">
               <a id="homeBannerClick" href="https://thewatch.co/watches/brand/olivia-burton">
                  <picture alt="OB Pearly Queen">
                     <!-- <source srcset="https://thewatch.imgix.net/homebanner/20201125_11586c5416b33babbf27166f34184ecfm.jpg?auto=compress,format&fit=max&lossless=true&w=414" media="
                        (max-width: 767px) and (-webkit-min-device-pixel-ratio: 2),
                        (max-width: 767px) and (min-resolution: 192dpi)
                        "> -->
                     <source srcset="https://thewatch.imgix.net/homebanner/20200605_0d96440dd91b4aed54877d2ae8848c17.jpg" media="
                        (max-width: 767px) and (-webkit-min-device-pixel-ratio: 2),
                        (max-width: 767px) and (min-resolution: 192dpi)
                        ">
                     <!-- <source srcset="https://thewatch.imgix.net/homebanner/20201125_11586c5416b33babbf27166f34184ecfm.jpg?auto=compress,format&fit=max&lossless=true&w=414" media="(max-width: 767px)"> -->
                     <source srcset="https://thewatch.imgix.net/homebanner/20200605_0d96440dd91b4aed54877d2ae8848c17.jpg" media="(max-width: 767px)">
                     <img alt="https://thewatch.co/watches/brand/olivia-burton" class="img-responsive initial loading" src="https://thewatch.imgix.net/homebanner/20200605_0d96440dd91b4aed54877d2ae8848c17.jpg?auto=compress,format&fm=jpg&lossless=true" data-was-processed="true">
                  </picture>
               </a>
            </div>
            <!--<div class="fill img-responsive" style="background-image:url('/img/homebanner/');"></div>-->
         </div>
         <div class="homebanner-pagination mobile"></div>
         <!-- Add Arrows -->
         <div class="swiper-button-next homebanner-mobile"><img src="/frontend/web/img/icons/next_slide_gold.png" width="45"></div>
         <div class="swiper-button-prev homebanner-mobile"><img src="/frontend/web/img/icons/prev_slide_gold.png" width="45"></div>
         <script>
            sendPromotionView = function(items){
            
            dataLayer.push({
            "ecommerce": {
            "promoView": {
            "promotions": items
            }
            },
            //"event": "impressionsHomebanner"
            });
            
            return dataLayer;
            }
            
            sendPromotionView(promotions);
         </script>
      </div>
   </div>
</div>