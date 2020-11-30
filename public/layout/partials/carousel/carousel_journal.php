<ul id="slider-content" style="display:none;">
   <li>
      <a href="/journal/detail/pilihan-tas-untuk-ke-pesta-kantor-dan-olahraga">
      <img src="https://www.thewatch.co/img/journal/312/small_cover_1062.jpg"
         alt="
         <div class='alt-category'>
         FASHION                 
         <div class='alt-title'>
         Pilihan Tas untuk ke Pesta, Kantor, dan Olahraga               
         </div>
         <a class='alt-read-more' href='/journal/detail/pilihan-tas-untuk-ke-pesta-kantor-dan-olahraga'>
         <img src='https://www.thewatch.co/img/icons/read-more-desktop.png'  alt='read-more'/>
         </a>
         </div>">
      </a>
   </li>
   <li>
      <a href="/journal/detail/pilihan-material-dan-jenis-perhiasan-untuk-wanita">
      <img src="https://www.thewatch.co/img/journal/311/small_cover_1059.jpg"
         alt="
         <div class='alt-category'>
         FASHION                 
         <div class='alt-title'>
         Pilihan Material Dan Jenis Perhiasan Untuk Wanita              
         </div>
         <a class='alt-read-more' href='/journal/detail/pilihan-material-dan-jenis-perhiasan-untuk-wanita'>
         <img src='https://www.thewatch.co/img/icons/read-more-desktop.png'  alt='read-more'/>
         </a>
         </div>">
      </a>
   </li>
   <li>
      <a href="/journal/detail/4-hal-yang-perlu-dipersiapkan-menjelang-harbolnas">
      <img src="https://www.thewatch.co/img/journal/310/small_cover_1056.jpg"
         alt="
         <div class='alt-category'>
         EVENTS                  
         <div class='alt-title'>
         4 Hal Yang Perlu Dipersiapkan Menjelang Harbolnas              
         </div>
         <a class='alt-read-more' href='/journal/detail/4-hal-yang-perlu-dipersiapkan-menjelang-harbolnas'>
         <img src='https://www.thewatch.co/img/icons/read-more-desktop.png'  alt='read-more'/>
         </a>
         </div>">
      </a>
   </li>
</ul>
<ul class="sy-controls"><li class="sy-prev"><a href="#prev">Previous</a></li><li class="sy-next"><a href="#next">Next</a></li></ul>
<script>

   window.onload = function() {
      
      $("#slider-content").css("display", "block");
      $(function() {
         $('#slider-content').slippry({

           // general elements & wrapper
           slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
           // options
           adaptiveHeight: false, // height of the sliders adapts to current slide
           useCSS: false, // true, false -> fallback to js if no browser support
           autoHover: false,
           transition: 'horizontal'
         });
      });
      
      setTimeout(function(){  
         
         let beforeItem = $(".show-before-slide");
         console.log(beforeItem.length)
         for(let a = 0; a < beforeItem.length; a++){
            console.log($(".show-before-slide")[a])
            $($(".show-before-slide")[a]).css("display", "none");
         }     

         let afterItem = $(".show-after-slide");
         for(let a = 0; a < beforeItem.length; a++){
            $($(".show-after-slide")[a]).css("display", "block");
         }  
      
      }, 3000);
   }

</script>