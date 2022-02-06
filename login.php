<?php
ob_start();
include "links.php";
include "navbar.php";
session_start();
include('config.php');
if (isset($_POST['login_btn'])) {
  $message = '';
  $username = $_POST['user_name'];
  $password = $_POST['password'];
  //to prevent from mysqli injection
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysqli_real_escape_string($conn, $username);
  $password = mysqli_real_escape_string($conn, $password);
  $sql = "select * from users where email = '$username' and password = '$password'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  @$_SESSION["user"] = $row['username'];
  @$_SESSION["user_id"] = $row['id'];
  @$_SESSION["email"] = $row['email'];
  if ($count == 1) {
    echo "<h1><center> Login successful </center></h1>";
    header('Location: index.php');
  } else {
    $msg = "Incorrect E-mail or Password!";
  }
}
ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bangladesh Tourist Information System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link="stylesheet" href="css/style.css">
</head>

<body>

  <div class="container p-5">
    <h1 class="text-center">Bangladesh Tourist Information System</h1>
  </div>
  <p style="color:red;margin: 0px auto; color: red;text-align: center;font-size: 22px; font-weight: bolder;"><?php if (@$msg != "") {
                                                                                                                echo $msg;
                                                                                                              } ?></p>

  <section class="vh-100">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <form method="POST" action="">
            <div class="card shadow-2-strong">
              <div class="card-body text-center">
                <div class="form-outline mb-4">
                  <input type="text" id="typeEmailX" class="form-control form-control-lg" name="user_name" placeholder="E-mail" required />
                  <label class="form-label" for="typeEmailX"></label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" placeholder="Password" required />
                  <label class="form-label" for="typePasswordX"></label>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <button class="btn btn-primary btn-lg btn-block" name="login_btn">Login</button>
                  </div>
                  <div class="col-md-6 mt-2">
                    <a href="signup.php">Create a new account</a>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

</body>

</html>