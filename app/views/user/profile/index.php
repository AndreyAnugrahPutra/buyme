<section id="mainContent">
        <?php Notification::Notif();?>
        <div class="userProfile-container">
            <div class="userProfile-picture">
                <div class="userImage">
                    <?php
                    if($data['user_pic']['Picture'] != '')
                    {
                    ?>
                    <img src="<?=BASEURL?>img/userPic/<?=$data['user_pic']['Picture']?>" alt="">
                    <?php
                    }
                    else
                    {
                    ?>
                    <i class="fa fa-image"></i>
                </div>

                <div class="userImage-Btn">
                    <a href="<?=BASEURL?>ProfilePic/index" class="userImage-link">
                        Tambahkan Foto Profil <i class="fa fa-edit"></i>
                    </a>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <ul class="userProfile-data">
                <li class="userProfile-list">
                    <label>Nama Lengkap :</label>
                    <span>
                        <?=$data['user_data']['NamaLengkap']?>
                    </span>
                </li>
                <li class="userProfile-list">
                    <label>Username :</label>
                    <span>
                        <?=$data['user_data']['Username']?>
                    </span>
                </li>
                <li class="userProfile-list">
                    <label>Email:</label>
                    <span>
                        <?=$data['user_data']['Email']?>
                    </span>
                </li>
                <li class="userProfile-list">
                    <label>Tanggal Lahir:</label>
                    <span>
                        <?=date('d-m-Y', strtotime($data['user_data']['TanggalLahir']))?>
                    </span>
                </li>
                <li class="userProfile-list">
                    <label>Nomor Telepon:</label>
                    <span>
                        <?=$data['user_data']['NomorTelp']?>
                    </span>
                </li>
                <li class="userProfile-list">
                    <label>Tanggal Lahir:</label>
                    <span>
                        <?=$data['user_data']['Alamat']?>
                    </span>
                </li>
                <li class="userProfile-list userEdit">
                    <a href="<?=BASEURL?>user/editProfile" class="userEdit-btn">
                        Ubah profile 
                        <i class="fa fa-user-edit"></i>
                    </a>
                </li>
            </ul>
        </div>
</section>