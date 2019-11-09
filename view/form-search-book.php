<?php
    if(@$_GET['search']=='failed') 
        echo "<script type='text/javascript'>alert('Buku Tidak Tersedia');</script>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Book</title>
</head>
<body>
    <form action="search-book.php" method="GET">
        <table align="center">
            <tr>
                <td>Search</td>
                <td><input type="text" name="judul"></td>
            </tr>
        </table>
    </form>
</body>
</html>