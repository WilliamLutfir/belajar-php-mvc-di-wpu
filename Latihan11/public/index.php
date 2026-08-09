<?php             // Teknik bootstrapping = file init akan memanggil semua file yg dibutuhkn.
if(!session_id())session_start();
require_once '../app/init.php';

$app=new App;