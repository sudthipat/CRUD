<?php
include'connect.php';

$eid = $_GET['eid'];

$sql = "SELECT * FROM crud WHERE id = $eid";

$result = mysqli_query($con, $sql);

if($result){
  while($row = mysqli_fetch_assoc($result)){
    $name=  $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
    
  }
}

// echo $name, $email, $mobile, $password;

if(isset($_POST['submit'])){
  $name=  $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  // echo $name, $email, $mobile, $password;

  $sql = "UPDATE crud SET 
  name = '$name', 
  email = '$email', 
  mobile = '$mobile', 
  password = '$password' 
  WHERE id = '$eid'";

  $result = mysqli_query($con, $sql);
  if($result){
    // echo"Insert succesfull";
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="container mb-3">
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="input Name" name="name"
                        value=<?php echo $name ?>>
                </div>
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="input Email" name="email"
                        value=<?php echo $email ?>>
                </div>
                <div class="form-group mb-3">
                    <label>Mobile</label>
                    <input type="tel" class="form-control" placeholder="input Mobile" name="mobile"
                        value=<?php echo $mobile ?>>
                </div>
                <div class="form-group mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="input Password" name="password"
                        value=<?php echo $password ?>>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

?>