<section id="mainContent">
    <?php Notification::Notif();?>
    <div class="pictureForm-container">

            
        <div class="imgPreview">
            <img src="" alt="" class="img">
        </div>

        <form action="<?=BASEURL?>ProfilePic/uploadFoto" method="post" enctype="multipart/form-data">

        <div class="imgInput">
            <input name="userImg" type="file" id="inputImage" class="inputImg" onchange="previewImg()">
            <label for="inputImage">
                Tambahkan Foto
                <i class="fa fa-file-image"></i>
            </label>
        </div>

        <div class="upload-image">
            <button type="submit" class="uploadImg" name="uploadBtn">Upload Foto</button>
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