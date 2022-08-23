<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-lighet justify-content-center fs-3 mb-5" style="background-color: green; color: white;">
        PHP completecrud aplication
    </nav>

    <div class="container">

    <?php 
    
    if(isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        '. $msg .'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    };
    ?>

        <a href="add_new.php" class="btn btn-dark">Add New</a> <br>
        

        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                <td scope="col">ID</td>
                <td scope="col">First name</td>
                <td scope="col">Last name</td>
                <td scope="col">Email</td>
                <td scope="col">Action</td>
                </tr>
            </thead>
            <tbody>

                <?php
                
                    include "config.php";

                    $sql = "SELECT * FROM `crud`";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){ 
                        ?>
                    <tr>
                        <th><?php echo($row['id']) ?></th>
                        <td><?php echo($row['first_name']) ?></td>
                        <td><?php echo($row['last_name']) ?></td>
                        <td><?php echo($row['email']) ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo($row['id']) ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3">e</i></a>
                            <a href="delete.php?id=<?php echo($row['id']) ?>" class="link-dark"><i class="fa-solid fa-frash fs-5">d</i></a>
                        </td>
                    </tr>

                <?php  }

                ?>

                
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>