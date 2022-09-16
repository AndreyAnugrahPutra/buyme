<?php 

class Logout extends Controller
{
    public function Logout()
    {
        session_start();
        session_destroy();
        header('Location: '.BASEURL.'home/index');
        exit;
    }
}