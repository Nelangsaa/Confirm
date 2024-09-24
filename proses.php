<?php

if (empty($_POST['nama']))

{ echo "Nama tidak boleh kosong";

}

else { $nama = $_POST['nama']; echo "Halo,". $nama. "! Selamat datang!"; }

?>
