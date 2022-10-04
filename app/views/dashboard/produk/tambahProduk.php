    <section id="mainContent">
       <div class="category-container">
             <h1 class="title">Pilih Kategori Produk</h1>
             <div class="category-card-container">
                 <?php 
                 foreach( $data['kategoriProduk'] as $kategori) :?>
                <a href="<?=BASEURL?>dashboard/tambah/<?=$kategori['Kategori_produk']?>" class="category-card">
                    <div class="category-card-left">
                        <span class="category-icon">
                            <i class="fa fa-<?=$kategori['Ikon_kategori']?>"></i>
                        </span>
                        <span class="category-name">
                            <?=$kategori['Kategori_produk']?>
                        </span>
                    </div>
                    <div class="category-card-right">
                        <i class="fa fa-chevron-right category"></i>
                    </div>
                </a>
                <?php endforeach;?>
             </div>

       </div>
    </section>
</section>