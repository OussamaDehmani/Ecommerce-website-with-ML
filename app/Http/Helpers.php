<?php
class Helpers{






    public static function convimg ($image){
 
    $data = base64_decode($image);
    $im = imagecreatefromstring($data);
    header('Content-Type: image/jpeg');
    imagejpeg($im);
    imagedestroy($im);
    }
}
