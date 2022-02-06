<?php
session_start();
if (isset($_SESSION["user"])) {
  $_SESSION["user"];
} else {
  header("Location:login.php");
}
?>
<?php
include "links.php";
include "navbar.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bangladesh Tourist Information System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    <?php include 'css/style.css'; ?>
  </style>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <style>
    #leftPanel {
      background-color: #0079ac;
      color: #fff;
      text-align: center;
    }

    #rightPanel {
      min-height: 415px;
    }

    /* Credit to bootsnipp.com for the css for the color graph */
    .colorgraph {
      height: 5px;
      border-top: 0;
      background: #c4e17f;
      border-radius: 5px;
      background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
      background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
      background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
      background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    }
  </style>
</head>

<body>
  <div class="container">
    <br>
    <br>
    <div class="row" id="main">
      <div class="col-md-4 "> </diV>
      <div class="col-md-4 well" id="leftPanel">
        <div class="row">
          <div class="col-md-12">
            <div>
              <img style="border-radius: 120px;
    margin-top: 16px;" src=admin/upload/user-login.jpg alt="Texto Alternativo" class="img-circle img-thumbnail">
              <h2><?php echo $_SESSION['user']; ?></h2>
              <p><?php echo $_SESSION['email']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>