<?php include 'layout/partials/module/detil_product/section/breadcrumb.php'; ?>
<?php include 'layout/partials/module/detil_product/section/product_detil.php'; ?>
<?php include 'layout/partials/module/detil_product/section/related_product.php'; ?>
<style>
    #owl-demo .item{
        margin: 3px 3px 3px 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }

    .owl-theme .owl-controls .owl-buttons div {
        padding: 5px 9px;
    }

    .owl-theme .owl-buttons i{
        margin-top: 2px;
    }

    /*To move navigation buttons outside use these settings:*/

    .owl-theme .owl-controls .owl-buttons div {
        position: absolute;
    }

    .owl-theme .owl-controls .owl-buttons .owl-prev{
        left: -60px;
        top: 125px; 
    }

    .owl-theme .owl-controls .owl-buttons .owl-next{
        right: -53px;
        top: 125px;
    }

    .owl-theme .owl-controls .owl-buttons div {
        background: transparent;
    }

    .owl-pagination{
        display: none;
    }
</style>
<script type="text/javascript">
    function video_play_product(){
	  $('div.image-thumb').css("display","none");
	  $('div.video-thumb').css("display","block");
	  $('div.zoomContainer').css("display","none");
	  $('video').trigger('play');
	  
    }
    function video_stop_product(){
	  $('div.image-thumb').css("display","block");
	  $('div.video-thumb').css("display","none");
	  $('div.flash-thumb').css("display","none");
	  $('div.zoomContainer').css("display","block");
	  $('video').trigger('pause');
    }

    function flash_play_product(){
	  $('div.image-thumb').css("display","none");
	  $('div.flash-thumb').css("display","block");
	  $('div.zoomContainer').css("display","none");
    }
</script>