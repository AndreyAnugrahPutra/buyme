<section id="mainContent">
    <?php Notification::Notif();?>
    <div class="pictureForm-container">
        <div class="imgPreview">
            <img src="<?=BASEURL?>img/userPic/<?=$data['user_pic']['Picture']?>" alt="" class="img">
        </div>

        <form action="<?=BASEURL?>ProfilePic/updateFoto" method="post" enctype="multipart/form-data">

        <div class="imgInput">
            <input name="userImg" type="file" id="inputImage" class="inputImg" onchange="previewImg()">
            <label for="inputImage">
                Tambahkan Foto
                <i class="fa fa-file-image"></i>
            </label>
        </div>

        <div class="upload-image">
            <button type="submit" class="uploadImg" name="updateBtn">Update Foto</button>
        </div>

        </form>




    </div>

</section>

<script>
    function previewImg()
    {
        let image = URL.createObjectURL(event.target.files[0]);
        let imgPreview = document.querySelector('.imgPreview');
        let img = imgPreview.querySelector('.img');
        img.src = image;
    }
</script>