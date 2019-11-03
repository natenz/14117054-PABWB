<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> Latihan 2 </title>

</head>



<body>

    <h1>Menghitung Harga Bet</h1> <br>

    <form action="" method="POST" class="form-inline">

        <div class="form-group mb-2">

            <label for="nama"> <ensp>  Nama : </label>

            <input type="text" name="nama" class="form-control" required="requered">

        </div>

        <div class="form-group mx-sm-3 mb-2">

            <label for="pilih"> Warna : </label>

            <select class="form-control" id="pilih" name="pilih">

                <option>Purple</option>

                <option>Blue</option>

                <option>Grey</option>

                <option></option>

            </select>

        </div>

        <button type="submit" class="btn btn-primary mb-2" name="submit" > Hitung </button>

    </form>

    <?php

        if (isset($_POST["submit"])) {

                $nama = $_POST['nama'];

                $warna = $_POST['pilih'];

                $jmlNama = strlen($nama);

            if ($jmlNama >= 1 && $jmlNama <= 10) {

                $harga = $jmlNama * 300;

            } elseif ($jmlNama >= 11 && $jmlNama <= 20) {

                $harga = $jmlNama * 500;

            } else {

                $harga = $jmlNama * 700;

            }



            function Warna($a = "red", $harga) {

                echo '<font color= ' . $a . '>Harga Total ' . $harga . '</font>';

            }

    

            echo "<br> Nama : " . $nama . "<br>";

            Warna($warna, $harga);

        }

    ?>

</body>



</html>