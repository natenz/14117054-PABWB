<HTML>
    <HEAD>
        <title>Koneksi Database mysqli</title>
    </HEAD>
<BODY>
        <h1>Koneksi database dengan mysqli_fetch_assoc</h1>
        <?php
     $conn=mysqli_connect ("localhost","root","")
        or die ("koneksi gagal");
        mysqli_select_db($conn,"liga");
        $hasil = mysqli_query($conn,"SELECT * FROM liga");
        while ($row = mysqli_fetch_row($hasil)) {
        echo "Liga " .$row[1];
        echo " mempunyai " .$row[2];
        echo " wakil di liga champion <br>";
    }
    ?>  
    </BODY>
</HTML>