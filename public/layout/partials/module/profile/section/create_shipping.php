<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 myprofile" style="">
   <div class="profile-head">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 my-profile title clearleft clearright" style="">
         Shipping Information
      </div>
   </div>
   <form method="post" action="../createaddress/">
      <div class="form-input-wrap col-md-12 col-sm-12 remove-padding">
         <div class="rounded-input-wrap">
            <input class="rounded-input remove-margin-top" type="text" name="firstname" placeholder="First Name" pattern="[a-zA-Z0-9\s]+" required/>
            <span class="dnone gotham-light error-input-message">* First Name Required</span>
         </div>
         <div class="rounded-input-wrap">
            <input class="rounded-input" type="text" name="lastname" placeholder="Last Name" pattern="[a-zA-Z0-9\s]+" required/>
            <span class="dnone gotham-light error-input-message">* Last Name Required</span>
         </div>
         <div class="rounded-input-wrap">
            <input class="rounded-input" type="email" name="email" placeholder="Email Address" required/>
            <span class="dnone gotham-light error-input-message">* Email Address Required</span>
         </div>
         <div class="rounded-input-wrap">
            <input class="rounded-input" type="text" name="address_label" placeholder="Save address as ( Ex: Home, work, etc )" required>
            <span class="dnone gotham-light error-input-message">* Address Name Required</span>
         </div>
         <div class="rounded-input-wrap">
            <textarea rows="4" class="rounded-input" name="address1" placeholder="Address" required></textarea>
            <span class="dnone gotham-light error-input-message">* Address Required</span>
         </div>
         <div class="rounded-input-wrap">
            <input class="rounded-input" type="number" name="phone" placeholder="Mobile Phone" required/>
            <span class="dnone gotham-light error-input-message">* Mobile Phone Required </span>
         </div>
         <div class="rounded-input-wrap">
            <input class="rounded-input" type="number" name="postcode" placeholder="Zip Code" pattern="[0-9]{5}" maxlength="5" required/>
            <span class="dnone gotham-light error-input-message">* Zip Code Required </span>
         </div>
         <div class="rounded-input-wrap">
            <select class="rounded-input-select rounded-input" id="province-profile" name="province_id" required>
               <option value="0" selected="selected">Province</option>
               <option value="1">Bali</option>
               <option value="2">Bangka Belitung</option>
               <option value="3">Banten</option>
               <option value="4">Bengkulu</option>
               <option value="5">DKI Jakarta</option>
               <option value="6">Gorontalo</option>
               <option value="7">Jambi</option>
               <option value="8">Jawa Barat</option>
               <option value="9">Jawa Tengah</option>
               <option value="10">Jawa Timur</option>
               <option value="11">Kalimantan Barat</option>
               <option value="12">Kalimantan Selatan</option>
               <option value="13">Kalimantan Tengah</option>
               <option value="14">Kalimantan Timur</option>
               <option value="15">Kepulauan Riau</option>
               <option value="16">Lampung</option>
               <option value="17">Maluku</option>
               <option value="18">Maluku Utara</option>
               <option value="19">NAD</option>
               <option value="20">NTB</option>
               <option value="21">NTT</option>
               <option value="22">Papua</option>
               <option value="23">Papua Barat</option>
               <option value="24">Riau</option>
               <option value="25">Sulawesi Selatan</option>
               <option value="26">Sulawesi Tengah</option>
               <option value="27">Sulawesi Tenggara</option>
               <option value="28">Sulawesi Utara</option>
               <option value="29">Sumatera Barat</option>
               <option value="31">Sumatera Selatan</option>
               <option value="32">Sumatera Utara</option>
               <option value="33">Sulawesi Barat</option>
               <option value="34">D.I Yogyakarta</option>
            </select>
            <span class="dnone gotham-light error-input-message">* Province Required</span>
         </div>
         <div class="rounded-input-wrap state">
            <select class="rounded-input-select rounded-input" id="state-profile" name="state_id" onchange="checkDistrict()" required>
               <option value="0" selected="selected">State</option>
            </select>
            <span class="dnone gotham-light error-input-message">* State Required </span>
         </div>
         <div class="rounded-input-wrap district">
            <select class="rounded-input-select rounded-input" id="district-profile" name="district_id" required>
               <option value="0" selected="selected">District</option>
            </select>
            <span class="dnone gotham-light error-input-message">* District Required </span>
         </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 myprofile customer-info clearleft clearright" style="padding-top: 30px;"></div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearright clearleft">
         <a href="#" class="round-btn-blue" onclick="submit()">save</a>
         <button id="btn-submit" style="display: none;">save</button>
      </div>
   </form>
</div>
<script>
   function submit() {

      if($('input[name="firstname"]').val() == ''){
         $('span#error-firstname').css('display','inline-block');
         return;
      }
      if($('textarea[name="address1"]').val() == ''){
         $('span#error-address').css('display','inline-block');
         return;
      }
      if($('select#province-profile')[0].value == 0){
         $('span#error-province').css('display','inline-block');
         return;
      }
      if($('select#state-profile')[0].value == 0){
         $('span#error-state').css('display','inline-block');
         return;
      }
      if($('select#district-profile')[0].value == 0){
         $('span#error-district').css('display','inline-block');
         return;
      }

      $('#btn-submit').click();
   }
   
   function checkDistrict() {
      var state_id = document.getElementById('state-profile').value;
      
      if (state_id != 0) {
         $.ajax({
            type: "POST",
            url: baseUrl + '/shipping/generate-district-profile',
            data: {"state_id": state_id},
            beforeSend: function () {
            
            },
            success: function (data) {
               $("div.district").html(data);
            }
         });
      }
   }
   
</script>