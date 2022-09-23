<section id="mainContent">
<?php Notification::Notif();?>
    <h5 class="form-title">UBAH PROFILE</h5>
    <div class="editProfile-container">
        <!-- FORM -->
        <form action="<?=BASEURL?>user/updateProfile" method="post" class="editProfile-form">

            <div class="input-group">
                <label for="NamaLengkap">Nama Lengkap </label>
                <input type="text" name="NamaLengkap" class="NamaLengkap" value="<?=$data['user_data']['NamaLengkap']?>" required>
            </div>

            <div class="input-group">
                <label for="Username">Username </label>
                <input type="text" name="Username" class="Username" value="<?=$data['user_data']['Username']?>" required>
            </div>

            <!-- <div class="input-group">
                <label for="PasswordInp">Password 
                    <i class="fa fa-eye show" id="eyeShow"></i>
                    <i class="fa fa-eye-slash close" id="eyeClose"></i>
                </label>
                <input type="password" name="PasswordInp" class="Password" required>
            </div> -->

            <div class="input-group">
                <label for="Email">Email </label>
                <input type="email" name="Email" class="Email" value="<?=$data['user_data']['Email']?>" required="@" required>
            </div>
            
            <div class="input-group">
                <label for="TanggalLahir">Tanggal Lahir </label>
                <input type="date" name="TanggalLahir" class="TanggalLahir" value="<?=$data['user_data']['TanggalLahir']?>" required>
            </div>

            <div class="input-group">
                <label for="NomorTelp">Nomor Telepon</label>
                <input type="text" name="NomorTelp" value="<?=$data['user_data']['NomorTelp']?>" class="NomorTelp">
            </div>

            <div class="input-group">
                <label for="Alamat">Alamat</label>
                <input type="text" name="Alamat" value="<?=$data['user_data']['Alamat']?>" class="Alamat">
            </div>

            <div class="input-group">
                <button type="submit" class="updateBtn" name="updateBtn">UPDATE PROFILE </button>
            </div>

        </form>
        <!-- FORM Selesai -->
    </div>
</section>