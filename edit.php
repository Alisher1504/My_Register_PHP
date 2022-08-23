<?php

    include "../config.php";


    $id = $_GET['id'];

    if(isset($_POST['submit'])){

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        // $gender = $_POST['gender'];

        $sql = "UPDATE `crud` SET `first_name`='$first_name', `last_name`='$last_name', `email`='$email' WHERE id=$id"; 

        $result = mysqli_query($conn, $sql);

        if($result) {
            header("Location: index.php?msg=New record created successfully");
        }
        else{
            echo("Failed" . mysqli_error($conn));
        }
    }


?>





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

        <div class="text-center mb-4">
            <h3>Edit user information</h3>
            <p class="text-muted">clic update after changing any information</p>
        </div>

        <?php 
            $id = $_GET['id'];
            $sql = "SELECT * FROM `crud` WHERE id = $id LIMIT 1";
            $result = mysqli_query($conn, $sql);
            $row = myqsli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">

                <div class="row">
                    <div class="col">
                        <label class="form-label">First name:</label>
                        <input type="text" class="form-control" name="first_name" value="<?php echo($row['first_name']) ?>">
                    </div>

                    <div class="col">
                        <label class="form-label">Last name:</label>
                        <input type="text" class="form-control" name="last_name" <?php echo($row['last_name']) ?>>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email name:</label>
                    <input type="email" class="form-control" name="email" <?php echo($row['email']) ?>>
                </div>

              
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="index.php" class="btn btn-danger">Cansel</a>
                </div>


            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>