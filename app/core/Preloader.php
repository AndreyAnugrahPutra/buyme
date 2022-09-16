<?php 

class Preloader 
{
    public static function Preloader()
    {
        echo '
        <div class="preloader-container">
            <div class="lds-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="loading-text">Harap Menunggu</div>
        </div>';
    }
}