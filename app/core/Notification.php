<?php

class Notification
{
    public static function setNotif($type, $aksi, $pesan)
    {
        $_SESSION['notif'] = 
        [
            'type' => $type,
            'aksi' => $aksi,
            'pesan' => $pesan
        ];
    }

    public static function Notif()
    {
        if ( isset($_SESSION['notif']) )
        {
            echo '
            <div class="notification-card bg-'.$_SESSION['notif']['type'].'">
                <div class="notification-head">
                    <span class="notif-title">
                        Notifikasi
                    </span>
                    <button class="close-notif">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <div class="notification-body">
                    <p class="notif-msg">
                        <strong>'.$_SESSION['notif']['aksi'].'</strong> '.$_SESSION['notif']['pesan'].'
                    </p>
                </div>
            </div>';

            unset($_SESSION['notif']);
        }
    }
}