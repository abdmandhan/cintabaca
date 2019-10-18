<?php
    require "../connection.php";

    $sql = "SELECT idAnggota FROM tblAnggota";
    $run = mysqli_query($connection,$sql);

    while($row = mysqli_fetch_assoc($run)){
        $idAnggota[] = $row['idAnggota'];
    }
    $randIndex = array_rand($idAnggota);
    echo $idAnggota[$randIndex];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinta Baca</title>
    <link rel="stylesheet" href="../src/css/custom.css">
</head>
<body>
    <form action="login.php" method="GET" id="formLogin">
        <input type="text" name="idAnggota" value="<?php echo $idAnggota[$randIndex]; ?>" hidden>
        <button type="button" onclick="myFunction()">Login</button>
    </form>

    <div id="loader"></div>

</body>

<script>
var myVar;

function myFunction() {
  document.getElementById("loader").style.display = "block";
  myVar = setTimeout(Login, 2000);
}

function Login() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("formLogin").submit();
}
</script>

</html>