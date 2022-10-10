<?php $Detail = $data['Produk']?>
    <section id="mainContent">
    <div class="form-container">
            <h1 class="form-title">
                Ubah Info Produk
            </h1>
            <form action="<?=BASEURL?>produk/updateProduk/<?=$Detail['id_produk']?>" method="post" enctype="multipart/form-data" class="form">
            <div class="form-left">
                <div class="input-group">
                    <input type="text"  value="<?=$Detail['Nama_produk']?>" name="namaProduk">
                </div>
                <div class="input-group">
                    <input type="text" value="<?=$Detail['Jumlah_stok']?>" name="stokProduk">
                </div>
                <div class="input-group">
                    <input type="text"  value="<?=$Detail['Harga_produk']?>" name="hargaProduk">
                </div>

                <div class="input-group berat-produk">
                    <input type="text" name="beratProduk" value="<?=$Detail['Berat_produk']?>">

                    <select name="satuanBerat">
                        <option value="gram">gram</option>
                        <option value="kilogram">kilogram</option>
                    </select>
                </div>

                <div class="input-group deskripsi">
                    <textarea name="deskripsiProduk"><?=$Detail['Deskripsi_produk']?></textarea>
                </div>
            </div>

            <!-- <div class="form-right img-container">
                <div class="input-group img-thumb">
                    <div class="thumbPreview show">
                        <img src="" alt="150px" class="img" width="350px">
                    </div>
                    <div class="inputImg">
                        <input type="file" id="thumbImg" name="thumbImg" onchange="previewImg()" >
                        <label for="thumbImg">Ganti Thumbnail Produk (350 x 350)</label>
                    </div>
                </div>
            </div> -->

            <div class="input-group">
                <button type="submit" name="submitProduk" class="submit-produk">
                    Update Produk
                </button>
            </div>
                
            </form>
        </div>
    </section>
</section>

<script>
// Image preview
function previewImg()
{
    let image = URL.createObjectURL(event.target.files[0]);
    let imgPreview = document.querySelector('.thumbPreview');
    imgPreview.classList.add('show');
    let img = imgPreview.querySelector('.img');
    img.src = image;
}
</script>