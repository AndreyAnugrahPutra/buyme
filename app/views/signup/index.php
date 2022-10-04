<?php  Preloader::Preloader(); ?>
<?php  Notification::Notif(); ?>

<section id="signup">
    <div class="signup-container">
        <h1 class="signup-title">SIGNUP</h1>

        <div class="signup-card">
            <!-- FORM -->
            <form action="<?=BASEURL?>signup/tambah" method="post">
            <div class="input-group">
                <label for="NamaLengkap">Nama Lengkap </label>
                <input type="text" name="NamaLengkap" class="NamaLengkap" placeholder="Nama Lengkap Anda..." required>
            </div>
            <div class="input-group">
                <label for="Username">Username </label>
                <input type="text" name="Username" class="Username" placeholder="Username Anda..." required>
            </div>
            <div class="input-group">
                <label for="PasswordInp">Password 
                    <i class="fa fa-eye show" id="eyeShow"></i>
                    <i class="fa fa-eye-slash close" id="eyeClose"></i>
                </label>
                <input type="password" name="PasswordInp" class="Password" placeholder="Password Anda..." max="8" required>
            </div>
            <div class="input-group">
                <label for="Email">Email </label>
                <input type="email" name="Email" class="Email" placeholder="Email Anda..." required="@" required>
            </div>
            <div class="input-group">
                <label for="TanggalLahir">Tanggal Lahir </label>
                <input type="date" name="TanggalLahir" class="TanggalLahir" placeholder="Tanggal Lahir Anda..." required>
            </div> 
            <div class="input-group">
                <label for="NomorTelp">Nomor Telepon </label>
                <input type="tel" name="NomorTelp" class="NomorTelp" placeholder="Nomor Telepon Anda..." required>
            </div>
            <div class="input-group">
                <label for="Alamat">Alamat</label>
                <input type="text" name="Alamat" class="Alamat" placeholder="Alamat Anda..." required>
            </div>

            <div class="input-group">
                <button type="submit" class="signup-button">BUAT AKUN</button>
            </div>
            </form>
            <!-- FORM Selesai -->
        </div>
    </div>
</section>