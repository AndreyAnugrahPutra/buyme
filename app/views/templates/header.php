<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['judulHalaman']?></title>
    <!-- Jquery & Preloader -->
    <script src="<?=BASEURL?>js/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".preloader-container").fadeOut(2500, function()
    {
        $(".preloader-container").remove();
    });
    })
    </script>
    <!-- Jquery & Preloader Selesai-->
    <link rel="stylesheet" href="<?=BASEURL?>css/Preloader.css">
    <link rel="stylesheet" href="<?=BASEURL?>css/styles.css">
    <link rel="stylesheet" href="<?=BASEURL?>css/navbar.css">
    <link rel="stylesheet" href="<?=BASEURL?>css/<?=$data['judulHalaman']?>.css">
    <link rel="stylesheet" href="<?=FONTAWESOME?>">
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="<?=BASEURL?>index" class="nav-brand">BuyMe</a>

        <div class="cta-group">
        <?php
        if ( !isset($_SESSION['login']))
        {
        ?>
        <a href="<?=BASEURL?>login/index" class="login-btn">LOGIN</a>
        <?php }
        else
        {
        ?>
        <a href="<?=BASEURL?>logout/Logout" class="login-btn">LOGOUT</a>
        <?php
        }
        ?>
        
        <button id="navBtn">
            <i class="fa fa-bars open"></i>
            <i class="fa fa-close close"></i>
        </button>
        </div>

        <ul class="nav-menu">
            <li class="nav-list">
                <a href="<?=BASEURL?>index" class="nav-link">Home</a>
            </li>
            <li class="nav-list">
                <a href="#" class="nav-link">Link 1</a>
            </li>
            <?php
            if ( !isset($_SESSION['login']))
            {
            ?>
            <li class="nav-list">
                <a href="<?=BASEURL?>login/index" class="login-btn">LOGIN</a>
            </li>
            <?php }
            else
            {
                if($data['judulHalaman'] != 'User')
                {
            ?>
             <li class="nav-list">
                <a href="<?=BASEURL?>user/index" class="nav-link profile-link">
                    <i class="fa fa-circle-user"></i>
                </a>
            </li>
            <?php
                }
            ?>
            <li class="nav-list">
                <a href="<?=BASEURL?>logout/Logout" class="login-btn">LOGOUT</a>
            </li>
            <?php
            }
            ?>
        </ul>

    </div>
    <!-- Navbar Selesai -->

    