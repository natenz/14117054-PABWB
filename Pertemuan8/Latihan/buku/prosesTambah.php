<HTML>
<HEAD>
<title>Simpan Buku Tamu</title>
</HEAD>
<BODY>
<h1>Simpan Buku Tamu MySQL</h1>
<?php
$nama = $_POST["nama"];
$email = $_POST["email"];
$komentar = $_POST["komentar"];
$conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");

mysqli_select_db($conn,"bukutamu");
echo "Nama : $nama <br>";
echo "Email : $email <br>";
echo "Komentar : $komentar <br>";
$sqlstr="insert into bukutamu (nama,email,komentar) values ('$nama','$email','$komentar')";
$hasil = mysqli_query($conn,$sqlstr);
echo "Simpan bukutamu berhasil dilakukan";
?>
</BODY>
</HTML>