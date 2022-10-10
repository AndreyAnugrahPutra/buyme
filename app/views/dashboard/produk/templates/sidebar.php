<!-- Sidebar -->
<section id="adminIndex">
    <div class="adminSidebar">
        <ul class="sidebarMenu">
            <li class="sidebarList">
                <a href="<?=BASEURL?>index" class="sidebarLink">
                    <span>Home</span> 
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li class="sidebarList">
                <a href="<?=BASEURL?>dashboard/index" class="sidebarLink">
                    <span>Dashboard</span>
                    <i class="fa fa-gauge"></i>
                </a>
            </li>
            <li class="sidebarList">
                <!-- dropdown Btn -->
               <button class="productBtn"><span>Product</span><i class="fa fa-chevron-down"></i>
               </button>

               <!-- dropdown Menu -->
               <div class="productMenu">
                <a href="<?=BASEURL?>dashboard/produk/<?=$action = 'lihat';?>" class="sidebarLink">
                    <span>lihat produk</span>
                    <i class="fa fa-bag-shopping"></i>
                </a>
                <a href="<?=BASEURL?>dashboard/produk/<?=$action = 'tambah';?>" class="sidebarLink">
                    <span>tambah produk</span>
                    <i class="fa fa-plus"></i>
                </a>
                <a href="<?=BASEURL?>dashboard/produk/<?=$action = 'ubah';?>" class="sidebarLink">
                    <span>edit produk</span>
                    <i class="fa fa-edit"></i>
                </a>
               </div>

            </li>
            <li class="sidebarList">

                <!-- dropdown Btn -->
                <button class="userBtn"><span>user</span><i class="fa fa-chevron-down"></i>
                </button>

                <!-- dropdown Menu -->
                <div class="userMenu">
                <a href="<?=BASEURL?>dashboard/lihatUser" class="sidebarLink">
                    <span>lihat user</span>
                    <i class="fa fa-user"></i>
                </a>
                <a href="<?=BASEURL?>dashboard/tambahUser" class="sidebarLink">
                    <span>tambah user</span>
                    <i class="fa fa-user-plus"></i>
                </a>
                <a href="<?=BASEURL?>dashboard/ubahUser" class="sidebarLink">
                    <span>edit user</span>
                    <i class="fa fa-user-edit"></i>
                </a>
                </div>
            </li>
        </ul>
    </div>
<!-- Sidebar Selesai -->