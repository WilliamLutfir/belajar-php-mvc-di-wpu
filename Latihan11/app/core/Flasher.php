<?php class Flasher{
    public static function aturFlash($pesan,$aksi,$tipe,$nama){
        $_SESSION["flash"]=[
            "pesan"=>$pesan,
            "aksi"=>$aksi,
            "tipe"=>$tipe,
            "nama"=>$nama
        ];
    }
    public static function flash(){
        if(isset($_SESSION["flash"])){
            echo '<div class="alert alert-'.$_SESSION["flash"]["tipe"].' alert-dismissible fade show" role="alert">
                    Data mahasiswa bernama <span class="text-decoration-underline">'.$_SESSION["flash"]["nama"].'</span> <strong>'.$_SESSION["flash"]["pesan"].'</strong> '.$_SESSION["flash"]["aksi"].'.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            unset($_SESSION["flash"]);
        }
    }
}