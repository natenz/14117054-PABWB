<html>
<head>
    <title> Tugas Mingguan </title>

</head>
    <body>

    <form  action="TM_7hasil.php" method="POST" ><br><br>
    Nama : <input type="text" name="nama" value=""> <br><br>
    Alamat : <input type="text" name="alamat" value=""><br><br>
    Jenis Kelamin : 
    Laki- Laki <input type="radio" name="jenis_kelamin" value="laki-laki"  />
    Perempuan <input type="radio" name="jenis_kelamin" value="perempuan" /> 
    <br><br>
    Golongan Darah :      <select name="golongan_darah"> <br><br>
                       <option value="B"> B </option>
                       <option value="A"> A </option>
                       <option value="O"> O </option>
                       <option value="AB"> AB </option>
                       <br><br>
        </select>
        <br><br> 
    Hoby :
    <input type="checkbox" name="hobi" value="Gaming" checked>Gaming 
    <input type="checkbox" name="hobi" value="Scrolling">Scrolling <br><br>

    Keterangan :    <textarea name="komentar" rows="2" cols="15"></textarea> <br><br>

    <input type="submit" value="Submit" name="tambah">
  
    </body>
    </form>
</html>