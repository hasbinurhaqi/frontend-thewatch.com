<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script type="text/javascript">
var vospay_env = "production" // vospay env
var vospay_mrchnt = "d9a16f7e5731b79230e35f27a4faab4d" // vospay merchant_key
function slideDetail(event) {
     
    if (event != null) {
        if ($('#detail-hide-' + event).hasClass("non-active")) {
            $('#detail-hide-' + event).slideDown();
            $('#detail-hide-' + event).removeClass("non-active");
            $('#detail-hide-' + event).addClass("active");
            document.getElementById("see-detail-"+ event).innerHTML = " (HIDE DETAILS)";
            // $('.arrow-down-' + event).replaceWith('<img class="arrow-down-' + event + '" src="/img/icons/top-spec.png">');
        }
        else {
            $('#detail-hide-' + event).slideUp();
            $('#detail-hide-' + event).removeClass("active");
            $('#detail-hide-' + event).addClass("non-active");
            document.getElementById("see-detail-"+ event).innerHTML = " (SEE DETAILS)";
            // $('.arrow-down-' + event).replaceWith('<img class="arrow-down-' + event + '" src="/img/icons/down-spec.png">');
        }
    }
}

function payVosPay(orderId){
	
	$.ajax({
        type: "POST",
        url: baseUrl + '/api/orders/check',
        beforeSend: function () {
            $('#loadingScreen').modal('show');
        },
		dataType: 'json',
		contentType: "application/json; charset=utf-8",
        data: JSON.stringify({ orderId: orderId }),
        success: function (data) {
            var d = data;
			console.log(data);
            if (d.success) {
				
				vospayConfig = {
                    merchantKey: vospay_mrchnt,
                    apiHost: vospay_env,
					transactionDetails: {
						orderID: d.data.vospayOrderId,
						orderDescription: 'The Watch Co. - Order Information',
						items: d.data.products,
						currency: 'IDR',
						shipping: d.data.shipping,
						grossAmount: d.data.grossAmount,
						customerDetails: d.data.customerDetails
					},
					onDone: (result) => {
						var status = result.status;
						
						//if(status == "Success"){
							window.location = 'https://www.thewatch.co/user/orders';
						//}
					},
					onError: (error) => {
						console.log('Payment error:', error);
					},
					logoURL: 'https://www.thewatch.co/img/logos/logo.png',
					notifyEndpoint: 'https://thewatch.co/api/payment'
				}
				
                $('#loadingScreen').modal('hide');
				
				vospay.payNow(vospayConfig);
            } else {
				$('#loadingScreen').modal('hide');
				return;
            }
        }
    });
	
}
</script>

<div class="clear"></div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 clearleft clearright clearright-mobile clearleft-mobile">
   <div class="profile-head">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 my-profile title clearleft clearright" style="">
         Daftar Transaksi
      </div>
   </div>
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearleft-mobile clearright-mobile gotham-light new-line"></div>
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearleft clearright" id="search-warranty">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearleft clearright clearleft-mobile clearright-mobile gotham-light">
         <select id="filter-warranty-card" onchange="filter_order(this)" style="width: 100%;cursor: pointer;border-radius: 20px;padding-left: 12px;outline:0;padding-right: 12px;letter-spacing: 1.5px;height:33px;">
            <option value="all">Cari Berdasarkan : Semua Order</option>
            <!-- <option value="status">Cari Berdasarkan : Semua Status</option> -->
            <option value="date">Cari Berdasarkan : Periode Tanggal</option>
            <option value="transaction" >Cari Berdasarkan : Nomor Transaksi</option>
         </select>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearleft-mobile clearright-mobile gotham-light new-line"></div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearleft clearright clearleft-mobile clearright-mobile gotham-light dnone" id="status-section">
         <a class="blue-round paging">Semua</a>
         <a class="white-round paging">Proses Packing</a>
         <a class="blue-round paging">Sedang Dikirim</a>
         <a class="blue-round paging">Sampai Tujuan</a>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearleft-mobile clearright-mobile gotham-light new-line"></div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearleft-mobile clearright-mobile clearleft clearright gotham-light dnone" id="date-section">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearleft clearleft-mobile gotham-light">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 clearleft-mobile clearleft gotham-light">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearleft-mobile clearright-mobile gotham-light talign-center mbottom5p">Dari</div>
               <input type="text" name="date-from" value="2020-12-01" class="width100 bradius20 pleft15 pright15 height33 talign-center fcolorblue input-default" / >
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 clearleft-mobile clearleft gotham-light">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearright-mobile gotham-light talign-center mbottom5p">Hingga</div>
               <input type="text" name="date-to" value="2020-12-01" class="width100 bradius20 pleft15 pright15 height33 talign-center fcolorblue input-default" / >
            </div>
            <a id="tanggal-order" style="position: absolute;top: 30px;cursor:pointer;">
            <i class="sprite-search-blue-19"></i>
            </a>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearleft-mobile clearright-mobile gotham-light new-line"></div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearleft-mobile clearright-mobile gotham-light new-line"></div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearleft-mobile clearright-mobile clearleft clearright gotham-light dnone" id="transaction-section">
         <div class="col-lg-12 clearleft-mobile clearleft clearright clearright-mobile gotham-light">
            <input type="text" name="tr" class="width100 bradius20 pleft15 pright15 height33 input-default" placeholder="nomor transaksi" value="" / >
            <a id="tr-order" style="position: absolute;top: 7px;right: 22px;width: 20px;cursor:pointer;">
            <i class="sprite-search-blue-19"></i>
            </a>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearleft-mobile clearright-mobile gotham-light new-line"></div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearleft-mobile clearright-mobile gotham-light new-line"></div>
      </div>
   </div>
   <div class="col-lg-12 col-md-12 hidden-sm hidden-xs clearleft clearright ptop20">
      <div class="talign-center width100 col-lg-12 col-md-12 col-sm-12 col-xs-12 remove-padding col-lg-offset-2 clearright pleftpage0 clearrightcopy pleftpagemobilepag1"></div>
   </div>
   <div class="hidden-lg hidden-md col-sm-12 col-xs-12 clearleft clearright ptop20">
      <div class="talign-center width100 col-lg-12 col-md-12 col-sm-12 col-xs-12 remove-padding col-lg-offset-2 clearright pleftpage0 clearrightcopy pleftpagemobilepag1"></div>
   </div>
   <div class="hidden-lg col-sm-12 hidden-md hidden-xs new-line" style="padding-top: 98px;"></div>
  <?php include 'layout/partials/module/profile/section/list_order.php'; ?>
</div>
<style type="text/css">
   .non-active{
		display: none;
   }
   .active{
		display: block;
   }
</style>