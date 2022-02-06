<?php
include 'config.php';
if (isset($_POST['register'])) {
  $username1 = trim($_POST['username']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $options = array("cost" => 4);
  //$hashedPassword =  password_hash($password,PASSWORD_BCRYPT,$options);
  $sql = "INSERT INTO users (username, email, password)
VALUES ('$username1', '$email','$password')";

  if (mysqli_query($conn, $sql)) {
    $msg = "Registered successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
?>
<?php
include "links.php";
include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bangladesh Tourist Information System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <style>
      #divCheckPasswordMatch {
        margin-top: -31px;
        color: green;
      }
    </style>

    <script type="text/javascript">
      function validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmpassword").value;
        if (password != confirmPassword) {
          alert("Passwords do not match.");
          return false;
        }
        return true;
      }
    </script>
    <script>
      function userAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
          url: "check_availability.php",
          data: 'email=' + $("#email").val(),
          type: "POST",
          success: function(data) {
            $("#user-availability-status1").html(data);
            $("#loaderIcon").hide();
          },
          error: function() {}
        });
      }
    </script>
</head>

<body>

  <div class="container p-4">
    <h3 class="text-center">Bangladesh Tourist Information System</h3>
    <h5 style="color:green" class="text-center"><?php if (@$msg != "") {
                                                  echo $msg;
                                                } ?></h5>
  </div>
  <section class="vh-100">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong">
            <form name="register" method="post" action="" class="" enctype="multipart/form-data">
              <div class="card-body p-5 text-center">

                <div class="form-outline mb-2">
                  <input type="text" name="username" id="typeEmailX" class="form-control form-control-lg" placeholder="Username" required="required" />
                </div>
                <div class="form-outline mb-0">
                  <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email" onBlur="userAvailability()" required="required" />
                  <span id="user-availability-status1" style="font-size:12px;"></span>
                </div>
                <p><img src="loder.gif" id="loaderIcon" style="display:none" /></p>
                <div class="form-outline mb-2">
                  <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" required="required" />
                </div>
                <div class="form-outline mb-2">
                  <input type="password" id="confirmpassword" name="confirmpassword" onChange="checkPasswordMatch();" class="form-control form-control-lg" placeholder="Confirm Password" />

                </div>
                <br>
                <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>

                <!-- Checkbox -->
                <br>
                <div class="form-check d-flex justify-content-start mb-4">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" required="required" />
                  <label class="form-check-label" for="form1Example3"> I agree with terms of use and privacy </label>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <button name="register" id="submit" class="btn btn-primary btn-lg btn-block" type="submit" onclick="return validate()">Register</button>
                  </div>
                  <div class="col-md-7">
                    <a>Already have an account?</a><br>
                    <a href="login.php">Login</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    function checkPasswordMatch() {
      var password = $("#password").val();
      var confirmPassword = $("#confirmpassword").val();

      if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
      else
        $("#divCheckPasswordMatch").html("Passwords match.");
    }

    $(document).ready(function() {
      $("#confirmpassword").keyup(checkPasswordMatch);
    });
  </script>

  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
  <script src="assets/js/scripts.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</body>

</html>