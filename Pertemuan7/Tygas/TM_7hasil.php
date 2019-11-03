

<?php
    $nama = @$_POST['nama'];
    $tambah_data = @$_POST['tambah'];
    if($tambah_data){
        if($nama == ""){
           echo "Nama Tidak Boleh kosong!";         
        }
    }
    echo $_POST['nama']; echo "<br />";
    echo $_POST['alamat']; echo "<br />";
    echo $_POST['jenis_kelamin']; echo "<br />";
    echo $_POST['golongan_darah']; echo "<br />";
    echo $_POST['hobi']; echo "<br />";
    echo $_POST['komentar']; echo "<br />";
?>
