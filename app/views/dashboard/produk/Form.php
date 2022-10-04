<?php  $kategori = $data['kategori_produk']?>
    <section id="mainContent">
        <div class="form-container">
            <h1 class="form-title">
                Masukkan Info Produk <?=$kategori['Kategori_produk']?>
            </h1>
            <form action="<?=BASEURL?>produk/tambahProduk/<?=$kategori['id'];?>" method="post" enctype="multipart/form-data" class="form">
            <div class="form-left">
                <div class="input-group">
                    <input type="text"  placeholder="Nama Produk" name="namaProduk">
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Stok Produk" name="stokProduk">
                </div>
                <div class="input-group">
                    <input type="text"  placeholder="Harga Produk (contoh: 100000)" name="hargaProduk">
                </div>

                <div class="input-group berat-produk">
                    <input type="text" name="beratProduk" placeholder="Berat Produk">

                    <select name="satuanBerat">
                        <option value="gram">gram</option>
                        <option value="kilogram">kilogram</option>
                    </select>
                </div>

                <div class="input-group deskripsi">
                    <textarea name="deskripsiProduk" placeholder="Deskripsi Produk"></textarea>
                </div>
            </div>

            <div class="form-right img-container">
                <div class="input-group img-thumb">
                    <div class="thumbPreview">
                        <img src="" alt="150px" class="img" width="350px">
                    </div>
                    <div class="inputImg">
                        <input type="file" id="thumbImg" name="thumbImg" onchange="previewImg()" >
                        <label for="thumbImg">Pilih Thumbnail Produk (350 x 350)</label>
                    </div>
                </div>
            </div>

            <div class="input-group">
                <button type="submit" name="submitProduk" class="submit-produk">
                    Upload Produk
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