<?php
include "conection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Game Heroes</title>
</head>
<body class="bg-dark">
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Game Heroes</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#addhero">Add New Hero</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#addtype">Add New Type</a>
            </li>
        </ul>
    </nav>

    <!-- content -->
    <div class="container-fluid mt-5 row">
        <div class="container col-md-10 row">
            <?php
                $query = "SELECT heroes_tb.id as id, heroes_tb.name as name, heroes_tb.photo as photo, type_tb.name as type FROM heroes_tb join type_tb on heroes_tb.type_id = type_tb.id";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="col-md-3 p-2">
                                <div class="card">
                                    <img src="'.$row["photo"].'" class="card-img-top img-fluid" alt="'.$row["name"].'">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row["name"].'</h5>
                                        <p class="card-text">'.$row["type"].'</p>
                                        <a href="#" class="btn btn-primary">Detail</a>
                                    </div>
                                </div>
                            </div>';
                    }
                } else {
                    echo "0 results";
                }
            ?>
        </div>
        <div class="container col-md-2">
            <ul class="list-group mt-2">
                <?php
                    $query = "SELECT * FROM type_tb";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                        echo '<li class="list-group-item">'.$row["name"].'</li>';
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </ul>
            <form id="addhero" class="mt-3" action="addhero.php" method="post">
                <div class="card bg-light p-2"> 
                    <h5 class="card-title">Add New Hero</h5>
                    <div class="form-group">
                        <label for="name">Nama Hero</label>
                        <input type="text" class="form-control" name="name" placeholder="Rambo">
                    </div>
                    <div class="form-group">
                        <label for="typeofhero">Type</label>
                        <select class="form-control" name="typeofhero">
                            <?php
                                $query = "SELECT * FROM type_tb";
                                $result = mysqli_query($conn, $query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                    echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
                                    }
                                } else {
                                    echo '<option>No Result</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo Url</label>
                        <input type="text" class="form-control" name="photo" placeholder="http://myphoto/photomy.jpg">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-2">Tambahkan Hero</button>
                    </div>
                </div>
            </form>
            <form id="addtype" class="mt-3" action="addtype.php" method="post">
                <div class="card bg-light p-2"> 
                    <h5 class="card-title" >Add New Type</h5>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Rambo">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-2">Tambahkan Type</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>