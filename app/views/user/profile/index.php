<section id="mainContent">
        <?php Notification::Notif();?>
        <div class="userProfile-container">
            <div class="userProfile-picture">
                <?php
                if($data['user_pic'] > 0)
                {
                ?>
                    <div class="userImage">
                    <img src="<?=BASEURL?>img/userPic/<?=$data['user_pic']['Picture']?>" alt="">
                    </div>
                <?php
                }
                else
                {
                ?>
                    <div class="userImage">
                    <i class="fa fa-image"></i>
                    </div>
                <?php
                }
                ?>
                <div class="userImage-Btn">
                    <?php
                    if($data['user_pic'] > 0)
                    {
                    ?>
                    <a href="<?=BASEURL?>ProfilePic/edit" class="userImage-link">
                        Ubah Foto Profil <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?=BASEURL?>ProfilePic/hapus" class="userImage-delete">
                        Hapus Foto Profil <i class="fa fa-trash-can"></i>
                    </a>
                    <?php }
                    else 
                    {
                    ?>
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
                    <label>Nama Lengkap : </label>
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