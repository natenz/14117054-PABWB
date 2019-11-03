<html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale = 1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Factorial</title>

</head>

<body>

<label>Mencari Nilai Faktorial</label>

    <form action="" method="POST" class="form-inline">

            <label for="faktorial">Nilai : </label>

            <input type="text" name="faktorial" class="form-control" required="requered">

            <button type="submit" name="submit" >Hitung</button>

    </form>

    <?php

        if (isset($_POST["submit"])) {

            $faktorial = 1;

            $faktor = $_POST['faktorial'];

        

            for ($i = $faktor; $i > 1; $i--) {

                $faktorial = $i * $faktorial;

            }

            echo "<br>Nilai Faktorial dari " . $faktor . "! adalah : " . $faktorial;

        }

    ?>

</body>

</html>