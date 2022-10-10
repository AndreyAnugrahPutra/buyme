    <section id="mainContent">
        <?php Notification::Notif();?>
        <div class="productList-container">
            <div class="productList-head">    
                <h1 class="title"><?=$data['lihatProdukTitle']?></h1>
                <div class="productList-search">
                    <form action="<?=BASEURL?>dashboard/cariProduk" class="leftForm" method="POST">
                        <div class="searchLeft">
                            <input  class="searchInp" type="text" name="searchInput" placeholder="Cari Produk...">
                            <button type="submit" name="seacrhBtn">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="productList-body">
                <?php 
                foreach($data['Produk'] as $Produk) : ?>
                <div class="product-card">
                    <div class="card-head">
                        <div class="card-img">
                            <img src="<?=BASEURL?>img/produk/thumb/<?=$Produk['Thumbnail_produk']?>" alt="">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="detail-group">
                            <span class="namaProduk"><?=$Produk['Nama_produk']?></span>
                            <span>Jumlah Stok : <?=$Produk['Jumlah_stok']?></span>
                            <span>Berat : <?=$Produk['Berat_produk']?></span>
                            <span>Harga : Rp<?=$Produk['Harga_produk']?></span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?=BASEURL?>dashboard/ubah/<?=$Produk['id_produk']?>" class="edit-btn">Edit Produk</a>
                        <a href="#" class="delete-btn">Hapus Produk</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</section>