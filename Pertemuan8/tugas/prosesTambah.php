<HTML>
<HEAD>
<title>Data Mahasiswa</title>
</HEAD>
<BODY>
<h1>Data Mahasiswa</h1>
<?php
$nrp = $_POST["nrp"];
$nama = $_POST["nama"];
//$alamat = $_POST["alamat"];
$jurusan = $_POST["jurusan"];
$conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
mysqli_select_db($conn,"tugas8");

echo "NRP : $nrp <br>";
echo "Nama : $nama <br>";
echo "ID Jurusan : $jurusan <br>";
$sqlstr="insert into mahasiswa (nrp,nama) values ('$nrp','$nama')";
$hasil = mysqli_query($conn,$sqlstr);

?>
</BODY>
</HTML>