<?php
    require "../connection.php";

    $judul = $_GET['judul'];

    $sql = "SELECT * FROM tblBuku WHERE judul LIKE '%".$judul."%'";

    $run = mysqli_query($connection,$sql);

    if(!mysqli_num_rows($run)){
        header('location:form-search-book.php?search=failed');
    }

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
    <table border=1 align="center">
        <thead>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Genre</th>
            <th>Tahun</th>
            <th>Penerbit</th>
            <th>Jumlah</th>
            <th>Kode Rak</th>
        </thead>
        <?php while($row = mysqli_fetch_array($run)) { ?>
            <tr>
                <td><?php echo $row['judul']; ?></td>
                <td><?php echo $row['pengarang']; ?></td>
                <td><?php echo $row['genre']; ?></td>
                <td><?php echo $row['tahun']; ?></td>
                <td><?php echo $row['penerbit']; ?></td>
                <td><?php echo $row['jumlah']; ?></td>
                <td><?php echo $row['koderak']; ?></td>
            </tr>
        <?php } ?>
        <tr rowspan=4 align="right">
            <td><a href="form-search-book.php">Back</a></td>
        </tr>
        
    </table>
</body>
</html>
