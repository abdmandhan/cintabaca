<?php
    require "../connection.php";
    $idAnggota = $_GET['idAnggota'];

    $sql = "SELECT * FROM tblAnggota WHERE idAnggota = '".$idAnggota."'";
    $run = mysqli_query($connection,$sql);

    $data = mysqli_fetch_assoc($run);
    echo $data['idAnggota'];
    session_start();
    $_SESSION['idAnggota'] = $idAnggota;

    $sql = "INSERT INTO tblKehadiran (`idKehadiran`, `idAnggota`, `hari`, `tanggal`) VALUES (NULL, '".$idAnggota."', 'Rabu', '2019-10-02');"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../src/css/custom.css">
</head>
<body onload="myFunction()">
    <div style="display:none;" id="myDiv" class="animate-bottom">
        <h2><?php echo $data['name']; ?> Anda Berhasil Login!</h2>
        <p>Silahkan membaca buku yang anda suka!</p>
    </div>
    <br>

    <?php
        // Prints the day
        echo date("l") . "<br>";

        // Prints the day, date, month, year, time, AM or PM
        echo date("l jS \of F Y h:i:s A") . "<br>";

        // Prints October 3, 1975 was on a Friday
        echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br>";

        // Use a constant in the format parameter
        echo date(DATE_RFC822) . "<br>";

        // prints something like: 1975-10-03T00:00:00+00:00
        echo date(DATE_ATOM,mktime(0,0,0,10,3,1975));
    ?>
    <script>
        var myVar;

        function myFunction() {
        myVar = setTimeout(showPage,500);
        }

        function showPage() {
        document.getElementById("myDiv").style.display = "block";

        myVar = setTimeout(backLogin,2000);
        }

        function backLogin(){
            location.replace("view-login.php")
        }
    </script>
</body>
</html>
