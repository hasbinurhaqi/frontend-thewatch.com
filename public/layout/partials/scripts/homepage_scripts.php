<script>

   $('.carousel').carousel({
      interval: 5000 //changes the speed
   });

   $("a#filter").click(function (e) {
      var $t = $("#arrow-filter");

      if ($t.is(':visible')) {
         $("#arrow-filter").slideUp();
         $("#box-filter").slideUp();
         $("a#filter").removeClass('hover-filter');
         $('img#down-white').show();
         $('img#down-black').hide();
      } else {
         $("#arrow-filter").slideDown();
         $("#box-filter").slideDown();
         $("a#filter").addClass('hover-filter');
         $('img#down-white').hide();
         $('img#down-black').show();
      }

      e.preventDefault();
   });



   $("a#filter").not("#box-filter").focusout(function () {
      setTimeout(function () {
         $("#arrow-filter").slideUp();
         $("#box-filter").slideUp();
      }, 200);
   });



   //snippet for countdown

   var austDay = new Date();
   austDay = new Date(Date.UTC(2016, 12, 13, 13, 0, 0));

</script> 

<!-- Google Tag Manager (noscript) -->
<noscript>
   <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T35B3Z&gtm_auth=cskdfuOs0xrn87GL3I1MLQ&gtm_preview=env-1&gtm_cookies_win=x"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<!-- End Google Tag Manager (noscript) -->
<!-- begin prism-widget --> 
<script type="text/javascript"> 
if ('serviceWorker' in navigator) {
console.log("Will the service worker register?");
   navigator.serviceWorker.register('service-worker.js')
.then(function(reg){
   console.log("Yes, it did.");
}).catch(function(err) {
   console.log("No it didn't. This happened:", err)
});
}

</script> 
<!-- end prism-widget -->
<!-- start webpushr code --> 
<script>(function(w,d, s, id) {if(typeof(w.webpushr)!=='undefined') return;w.webpushr=w.webpushr||function(){(w.webpushr.q=w.webpushr.q||[]).push(arguments)};var js, fjs = d.getElementsByTagName(s)[0];js = d.createElement(s); js.id = id;js.async=1;js.src = "https://cdn.webpushr.com/app.min.js";fjs.parentNode.appendChild(js);}(window,document, 'script', 'webpushr-jssdk'));webpushr('setup',{'key':'BOIyZRlV1Coe3zSvLd5oO2qKLei9QYkNUEhqBApVdbU2bWXUygn8VmqcR6V9hWYig4QB_0A1YIYrarGG9C6IucI' });</script>