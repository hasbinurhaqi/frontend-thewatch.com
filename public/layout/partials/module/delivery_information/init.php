<section id="shopping-bag" class="payment-info">
   <div class="container">
      <div class="row">
         <div class="col-xs-12 clearleft clearright">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 step-purchase title">SHIPPING INFORMATION</div>
            <div class="col-lg-12 hidden-md hidden-sm col-xs-12 clearleft clearright"></div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearleft clearright remove-padding">
               <form id="newshipping-form" action="/cart/checkout/step/deliveryinformation" method="post">
                  <input type="hidden" name="_csrf" value="0QbUu5NQNKdYn5eWf3tZF8zHh358g0OLkIA9D4PdE6_iSbLwoAVczjvxpfVHCTh4nIvCKBTFJ7LWzH99z55llg==">
                  <div class="form-input-wrap col-md-12 col-sm-12 remove-padding">
                     <div class="rounded-input-wrap">
                        <label for="firstname">First Name</label>
                        <input class="rounded-input remove-margin-top" type="text" name="fname" placeholder="First Name" value="" pattern="[a-zA-Z0-9\s]+" required="">
                        <span class="dnone gotham-light error-input-message">* First Name Required</span>
                     </div>
                     <div class="rounded-input-wrap">
                        <label for="lastname">Last Name</label>
                        <input class="rounded-input" type="text" name="lname" placeholder="Last Name" value="" pattern="[a-zA-Z0-9\s]+" required="">
                        <span class="dnone gotham-light error-input-message">* Last Name Required</span>
                     </div>
                     <div class="rounded-input-wrap">
                        <label for="address1">Address</label>
                        <textarea rows="4" class="rounded-input" name="address" placeholder="Address" required=""></textarea>
                        <span class="dnone gotham-light error-input-message">* Address Required</span>
                     </div>
                     <div class="rounded-input-wrap">
                        <label for="phone">Mobile Phone</label>
                        <input class="rounded-input" type="number" name="phone" placeholder="Mobile Phone" value="" required="">
                        <span class="dnone gotham-light error-input-message">* Mobile Phone Required </span>
                     </div>
                     <div class="rounded-input-wrap">
                        <label for="postcode">Zip Code</label>
                        <input class="rounded-input" type="number" name="zip" placeholder="Zip Code" value="" pattern="[0-9]{5}" maxlength="5" required="">
                        <span class="dnone gotham-light error-input-message">* Zip Code Required </span>
                     </div>
                     <div class="rounded-input-wrap">
                        <label for="province_id">Province</label>
                        <select class="year" id="province-profile" name="province_id" required="">
                           <option value="0" selected="selected">PROVINCE</option>
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
                        <label for="state">State</label>
                        <select class="year" id="state-profile" name="state_id" onchange="checkDistrict()" required="">
                           <option value="0" selected="selected">STATE</option>
                        </select>
                        <span class="dnone gotham-light error-input-message">* State Required </span>
                     </div>
                     <div class="rounded-input-wrap district">
                        <label for="district">District</label>
                        <select class="year" id="district-profile" name="district_id" required="">
                           <option value="0" selected="selected">DISTRICT</option>
                        </select>
                        <span class="dnone gotham-light error-input-message">* District Required </span>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 myprofile customer-info clearleft clearright" style="padding-top: 30px;"></div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearright clearleft">
                     <input type="submit" value="UPDATE" id="submit-installment" class="round-btn-blue" style="width:100%;">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div></div>
   </div>
</section>