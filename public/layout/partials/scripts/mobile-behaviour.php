<script>
   window.onload = function(){
   
      const catParent     = document.getElementById('c-button--push-left');
      const closeParent       = document.getElementById('c-menu-close-right');
      const watchMobile       = document.getElementById('watches-mobile-custom');
      const strapsMobile      = document.getElementById('straps-mobile-custom');
      const accessoriesMobile = document.getElementById('accessories-mobile-custom');
      const jewelryMobile     = document.getElementById('jewelry-mobile-custom');
      const brandsMobile     = document.getElementById('brands-mobile-custom');
      const jurnalMobile     = document.getElementById('jurnal-mobile-custom');
      
      const listWatch      = document.getElementById('list-watches-custom');
      const listStrap      = document.getElementById('list-straps-custom');
      const listAcc          = document.getElementById('list-accessories-custom');
      const listJewel        = document.getElementById('list-jewelry-custom');
      const listBrands       = document.getElementById('list-brands-custom');
      const listJurnal       = document.getElementById('list-jurnal-custom');
      const menus          = document.getElementsByClassName('menu-sidebar-item');
      const wrapMenu          = document.getElementsByClassName('menu-mobile-wrap')[0];
      
      
      closeParent.onclick = function() {
         clear();
         wrapMenu.style.display = 'none';
      }
      
      catParent.onclick = function() {
         wrapMenu.style.display = 'flex';
         watchMobile.classList.add('active');
         setTimeout(function(){
            listWatch.style.display = 'block';
         }, 300)
      }
      
      
      watchMobile.onclick = function(){
         clear();
         watchMobile.classList.add('active');
         listWatch.style.display = 'block';
      }
      
      strapsMobile.onclick = function(){
         clear();
         strapsMobile.classList.add('active');
         listStrap.style.display = 'block';
      }
      
      jewelryMobile.onclick = function(){
         clear();
         jewelryMobile.classList.add('active');
         listJewel.style.display = 'block';
      }
      
      accessoriesMobile.onclick = function(){
         clear();
         accessoriesMobile.classList.add('active');
         listAcc.style.display = 'block';
      }
      
      brandsMobile.onclick = function(){
         clear();
         brandsMobile.classList.add('active');
         listBrands.style.display = 'block';
      }
      
      jurnalMobile.onclick = function(){
         clear();
         jurnalMobile.classList.add('active');
         listJurnal.style.display = 'block';
      }
      
      function clear() {
         listWatch.style.display = 'none';
         listStrap.style.display = 'none';
         listAcc.style.display = 'none';
         listBrands.style.display = 'none';
         listJewel.style.display = 'none';
         listJurnal.style.display = 'none';
         
         for(let i = 0; i<menus.length; i++){
            menus[i].classList.remove('active');
         }
      }
      
      const theURL = window.location.href.split('/')[3];

      // document.getElementById('watches-mobile').click();
      
      if($(window).width() < 640) {
         if( theURL == 'product' || theURL == 'cart'){
            $('#navbar-wrap').css('display', 'none');
            $('#navbar-main').css('display', 'none');    
            $('#navbar-mobile').css('display', 'none');     
            $('#nav-gap').css('display', 'none');      
         }
         else {
            window.onscroll = function() {
               if($(window).scrollTop() > 80) {
                  $('#navbar-main').css('display', 'none');
               }else{
                  $('#navbar-main').css('display', 'block');
               }
            };
         }
      }
      
      let a = document.getElementById('runtext');
      const achild = a.children;
      let aactive = 0;
      
      setInterval(function() {
         if(aactive == achild.length){
            aactive = 0;
         }
         for(let i = 0; i<achild.length; i++){
            
            let div = document.getElementById('item_'+i);
            
            if(i == aactive){
               div.classList.add('active')
            }else{
               div.classList.remove('active')
            }
         }
         aactive++;
      }, 3000)
   };
   
   
</script>