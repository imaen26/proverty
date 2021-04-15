<?php
        if (isset($_POST['cek'])) {
            $nama_domain = "$_POST[domain]"."$_POST[ext]";
            $arrHost = @gethostbynamel("$nama_domain");
            if (empty($arrHost)) {
                echo "<div class='hasildomain font-green'>Domain <u><b>$nama_domain</b></u> tersedia, Anda dapat menggunakan domain ini.</div>";
            }
            else {
                echo "<div class='hasildomain font-red'>Domain <u><b>$nama_domain</b></u> sudah digunakan, coba dengan domain lain.</div>";
            }
        }
        ?>
