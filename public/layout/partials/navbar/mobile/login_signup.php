<div id="login-signup-menu" class='sign-up-menu'>
   <div class="row">
      <div class="logo-mobile col-md-12">
         <a href="">
         <i class="logo-sprite mleft0" id="logotwc"></i>
         </a>
         <div id="c-menu-close-right-custom" onclick="main_menu()">
            <i class="close-black-sprites"></i>
         </div>
      </div>
      <div class="flex-mobile-sign col-md-12">
         <div class="circle-button fill-button bordered-circle-button" id="signin">Masuk</div>
         <div class="circle-button bordered-circle-button" id="signup">Daftar</div>
      </div>
   </div>
   <div class="row" id="signin-form">
      <div class="col-md-12">
         <div class="rounded-input-wrap">
            <input id="email-login" class="rounded-input" type="text" name="email_login_mobile" placeholder="Email" />
            <span id="email-signin-error-mobile" class=" dnone gotham-light">* Email Required</span>
         </div>
      </div>
      <div class="col-md-12">
         <div class="rounded-input-wrap">
            <input id="password-login" class="rounded-input password-login" type="password" name="password_login_mobile" placeholder="Kata Sandi" />
            <div class="password-eye" id="password-eye" onClick="toggleEyePassword(this)">
               <img src="/img/icons/eye-closed.png" width="15px">
            </div>
            <span id="signin-pwderror-mobile" class=" dnone gotham-light">* Password Required</span>
         </div>
      </div>
      <div class="col-md-12">
         <div class="mn-header form-login flex-login">
            <div class="inner-flex-login">
               <label for="rc001" class="cont-checkbox">Ingat Saya
               <input type="checkbox" id="rc001" name="rc001"  checked="checked">
               <span class="checkmark"></span>
               </label>
               <!-- <input type="checkbox" id="rc001" name="rc001" class="remember">
                  <label for="rc001" class="black-style" onclick>Ingat Saya</label>-->
            </div>
            <div class="inner-flex-login text-right">
               <a href="#" id="forgot-password" class="gotham-light green-text">Lupa kata sandi?</a>
            </div>
            <!--<input class="mn-header form-login remember" type="checkbox" name="remember" checked />-->
         </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12  signin-top-error">
         <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 login proceed custom-error-message">
            <span id="signintop-error" class="dnone">Wrong Email or Password</span>
         </div>
      </div>
   </div>
   <div class="row forgot-btn-box-open dnone" id="forgot-form-content">
      <div class="col-lg-12 col-md-12 col-sm-12 clearright">
         <div class="mn-header form-forgot center ptop5">
            INVALID EMAIL OR PASSWORD <br>
            Lupa Password Anda?<br>
         </div>
         <div class="col-lg-1 col-md-1 col-sm-1 col-lg-offset-5 col-md-offset-5 col-sm-offset-5 forgot-separator"></div>
         <br>
         <div class="mn-header form-forgot center ptop5">
            Please enter your mail address below and we'll<br>
            send you to confirmation email
         </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 clearright clearleft">
         <div class="mn-header form-forgot">
            <input class="mn-header form-forgot email-forgot" type="text" name="email_forgot" placeholder="Email Address" />
            <span id="email-forgot-top-error" class="talign-center ptop2 dnone gotham-light">* Email Required</span>
         </div>
      </div>
   </div>
   <div class="row dnone" id="signup-form">
      <div class="col-lg-12 col-md-12 col-sm-12 ">
         <div class="rounded-input-wrap">
            <input id="name-sign" class="rounded-input" type="text" name="fname_mobile" placeholder="Nama Lengkap" />
            <span id="firstname-error" class="dnone gotham-light">* Name Required</span>
         </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 ">
         <div class="rounded-input-wrap">
            <input id="email-sign" class="rounded-input" type="text" name="signup_email_mobile" placeholder="Email" />
            <span id="email-error" class=" dnone gotham-light">* Email Required</span>
         </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 ">
         <div class="rounded-input-wrap">
            <input id="telp-sign" class="rounded-input" type="text" name="phone_mobile" placeholder="Nomor Telepon" />
            <span id="phone-error" class="dnone gotham-light">* Phone Number Required</span>
         </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 ">
         <div class="rounded-input-wrap">
            <input id="password-sign" class="rounded-input" type="password" name="signup_password_mobile" placeholder="Kata sandi" />
            <span id="signup-pwderror" class="dnone gotham-light">* Password Required</span>
         </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 ">
         <div class="rounded-input-wrap">
            <input id="password-repeat" class="rounded-input" type="password" name="signup_password_repeat_mobile" placeholder="Konfirmasi kata sandi" />
            <span id="repassword-error" class="dnone gotham-light">* Password not match</span>
         </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 "></div>
      <div class="col-lg-12 col-md-12 col-sm-12 clearleft signup-error">
         <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 login proceed clearleft">
            <span id="signuptop-error" style="margin-left:0;" class="dnone gotham-light">Email Already Registered</span>
         </div>
      </div>
   </div>
   <div class="row forgot-submit-box dnone" id="forgot-btn-box">
      <div class="col-lg-12 col-md-12 col-sm-12 mn-header form-login clearright">
         <div class="mn-header btn-login" id="signin-btn-mobile">MASUK</div>
         <div class="mn-header btn-login retrieve" id="retrieve-btn">RETRIEVE</div>
      </div>
   </div>
   <div class="rounded-button-wrap" id="signin-box">
      <div class="col-lg-12 col-md-12 col-sm-12">
         <div class="rounded-button green-btn" id="signin-btn-mobile">MASUK</div>
         <div class="foot-signin-box">
            Belum memiliki akun? 
            <div class="signup-text" id="signup">daftar</div>
         </div>
      </div>
   </div>
   <div class="dnone rounded-button-wrap" id="signup-box">
      <div class="col-lg-12 col-md-12 col-sm-12 ">
         <div class="rounded-button green-btn" id="signup-btn-mobile">DAFTAR</div>
         <div class="foot-signin-box">
            Sudah memiliki akun?  
            <div class="signup-text" id="signin">masuk</div>
         </div>
      </div>
   </div>
</div>