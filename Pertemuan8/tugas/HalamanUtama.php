<html>
<head>
    <title>Tugas Minggu 8 </title>
</head>
    <body>
        <h1>
            Tambah Data
        </h1>
    <form  action="prosesTambah.php" method="POST">
        <td>NRP <ensp> : </ensp> <input type="text" name="nrp"></td> <br>
        <td>Nama <ensp> : </ensp> <input type="text" name="nama"> </td> <br>
        <td>Foto : </td> 
        <input type="file" name="upload"/> <br>
        Jurusan : 
        <select name="jurusan">
            <option value="Telek"> Telekomunikasi </option>
            <option value="Elk"> Elka </option>
            <option value="it"> IT </option>
            <option value="Elin"> Elin </option> 
        </select> <br>
        <input type="submit" value="Simpan">
        
    </form>

      
</body>
