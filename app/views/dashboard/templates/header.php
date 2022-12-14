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
    <link rel="stylesheet" href="<?=BASEURL?>css/Dashboard/navbar.css">
    <link rel="stylesheet" href="<?=BASEURL?>css/Dashboard/<?=$data['judulHalaman']?>.css">
    <link rel="stylesheet" href="<?=BASEURL?>css/Dashboard/Sidebar.css
    ">
    <link rel="stylesheet" href="<?=FONTAWESOME?>">
</head>
<div>

    <!-- Navbar -->
    <div class="navbar">
        <div class="left">
            <a href="<?=BASEURL?>index" class="nav-brand">
                BuyMe
            </a>
            <p class="adminUsername">
                <?=$_SESSION['user']['Username']?>
            </p>
        </div>

        <div class="right"> 
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
                    <i class="fa fa-bars"></i>
                </button>

            </div>

            <ul class="nav-menu">
                <?php
                if ( !isset($_SESSION['login']))
                {
                ?>
                <li class="nav-list">
                    <a href="<?=BASEURL?>login/index" class="login-btn">LOGIN</a>
                </li>
                <?php 
                }
                else
                {
                ?>
                <li class="nav-list">
                    <a href="<?=BASEURL?>logout/Logout" class="login-btn">LOGOUT</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>

    </div>
    <!-- Navbar Selesai -->

    