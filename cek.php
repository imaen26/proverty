<?php
if($_POST[proses]){
    $nama_domain = "$_POST[domain]"."$_POST[suffix]";
    $arrHost = @gethostbynamel("$nama_domain");
       
     if(empty($arrHost)){
        echo "Domain $nama_domain Belum Ada Yang Punya";
       
    }else{
        echo "Domain $nama_domain Sudah Ada Yang Punya";
    }
}

?>
