<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light">Add User</a>
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM crud";

            $result = mysqli_query($con, $sql);

            if($result) {
                while($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $mobile = $row['mobile'];

                    echo "
        <tbody>
          <tr>
            <td>$id</td>
            <td>$name</td>
            <td>$email</td>
            <td>$mobile</td>
            <td>
              <button class='btn btn-warning'>
                <a href='edit.php?eid=$id' class='text-light'>Edit</a>
              </button>
              <button class='btn btn-danger'>
                <a href='delete.php?did=$id' class='text-light'>Delete</a>
              </button>
            </td>
          </tr>
        </tbody>
        ";
                }
            }
            ?>


        </table>
    </div>
</body>

</html>