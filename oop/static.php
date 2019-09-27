<?php

class utilis
{
    static public function redirect($url)
    {
        header('Location: $url');
        exit;
    }

}

utilis::redirect("http://php.local/opp1/chacha.php");

