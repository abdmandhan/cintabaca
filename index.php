<?php
    require "connection.php";
    $sql = "SELECT * FROM tblAnggota";

    $run = mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <h4>Dashboard</h4>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Anggota <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pustakawan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Peminjaman</a>
            </li>
            </ul>
        </div>
    </nav> 
    <div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-md-12 text-right">
            <a href="view/view-tambah-anggota.php" class="btn btn-primary">Tambah Anggota</a>
        </div>
    </div>
    <br>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Birth</th>
                <th>Birth Place</th>
                <th>Phone</th>
                <th>Photo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_array($run)) { ?>
            <tr>
                <td><?= $row['name']; ?></td>
                <td><?= $row['gender']; ?></td>
                <td><?= $row['address']; ?></td>
                <td><?= $row['birth']; ?></td>
                <td><?= $row['placeBirth']; ?></td>
                <td>0<?= $row['phone']; ?></td>
                <td align="center"><img src="src/img/<?= $row['photo']; ?>" alt="" srcset="" style="width: 20%"></td>
                <td>
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="method/delete.php?id=<?= $row['idAnggota']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>
    <!-- Image and text -->
    
</body>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
</html>