<?php  Preloader::Preloader(); ?>
<?php  Notification::Notif(); ?>

<section id="login">
   <div class="login-container">
        <h1 class="login-title">
            SILAHKAN LOGIN
        </h1>
        <form action="<?=BASEURL?>login/Login" method="post">
        <div class="login-card">
            <!-- FORM -->
            <div class="input-group">
                <i class="fa fa-circle-user"></i>
                <input type="text" name="username" class="username-input" placeholder="Masukkan Username">
            </div>
            <div class="input-group">
                <i class="fa fa-eye show" id="eyeShow"></i>
                <i class="fa fa-eye-slash close" id="eyeClose"></i>
                <input type="password" name="PasswordInp" class="password-input" placeholder="Masukkan Password">
            </div>
            <button type="submit" class="login-button">LOGIN</button>
            <!-- FORM Selesai -->
            <span class="signup">
                Belum Punya Akun? Daftar <a href="<?=BASEURL?>signup/index" class="signup-link">Disini</a>
            </span>
        </form>

        </div>
   </div>
</section>
