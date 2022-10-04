<?php
if(!isset($_SESSION['login']))
{
   header('Location: '.BASEURL.'login/index');
}
if($_SESSION['user']['Role'] == 2)
{
    echo 'Error 404';
    exit;
}
?>