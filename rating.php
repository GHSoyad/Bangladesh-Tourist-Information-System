<?php
session_start();
if (isset($_SESSION["user"])) {
  $_SESSION["user"];
} else {
  header("Location:login.php");
}
?>
<?php
require_once "config.php";
require_once "functions.php";
include "links.php";
include "navbar.php";

if (isset($_POST["update"])) {
  $userId = $_SESSION["user_id"];
  $ide = $_GET['ide'];
  $amenity1 = $_POST["amenity1"];
  $amenity2 = $_POST["amenity2"];
  $amenity3 = $_POST["amenity3"];
  $rsting = $_POST['rating'];
  $amenity4 = $_POST["amenity4"];
  $tit = $_POST["title"];
  $des = $_POST["description"];

  $de = $amenity1 + $amenity2 + $amenity3 + $amenity4;
  $de1 = 4;
  $average = round(($de / $de1), 1);
  $rsting12 = $average;
  $query = "SELECT * FROM tbl_rating WHERE user_id='$userId' and touristspot_id='$ide'";
  $result = mysqli_query($conn, $query);
  $row22 = mysqli_fetch_array($result, MYSQLI_ASSOC);
  if ($row22 != null) {
    $sql = "UPDATE tbl_rating SET amenity1='$amenity1',amenity2='$amenity2',amenity3='$amenity3',amenity4='$amenity4',rating='$rsting12',title='$tit',description='$des' WHERE user_id='$userId' AND 	touristspot_id='$ide'";

    $result = mysqli_query($conn, $sql);
    echo ("<script LANGUAGE='JavaScript'>
                                                    window.alert('Rating Succesfully Submit');
                                                   </script>");
  } else {
    $de = $amenity1 + $amenity2 + $amenity3 + $amenity4;
    $de1 = 4;
    $average = round(($de / $de1), 1);
    $rsting1 = $average;
    $sql = "INSERT INTO tbl_rating (user_id,touristspot_id,amenity1,amenity2,amenity3,amenity4,rating,title,description)
VALUES ('$userId','$ide','$amenity1', '$amenity2','$amenity3','$amenity4','$rsting1','$tit','$des')";
    $result = mysqli_query($conn, $sql);
    echo ("<script LANGUAGE='JavaScript'>
                                                    window.alert('Rating Succesfully Submit');
                                                   </script>");
  }
}
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>

  <div class="container mb-3">
    <div class="row">
      <?php $ide = $_GET['ide'];
      $query = "SELECT * FROM tourist_spot WHERE id='$ide'";
      $result = mysqli_query($conn, $query);
      while ($data = mysqli_fetch_array($result)) {
      ?>
        <div class="col-md-6">
          <img src="admin/img/<?php echo $data['images']; ?>" class="p-3 rounded d-block img-fluid">

          <h4 class="placename mb-0"><?php echo $data['tour_name']; ?></h4>
        </div>
      <?php } ?>
      <div class="col-md-6 mt-5">
        <div class="row">
          <div class="col-md-4">
            <h4 class="rateplace">Rate this place</h4>
          </div>
        </div>
        <?php
        require_once "config.php";
        require_once "functions.php";
        $userId = $_SESSION["user_id"];
        $ide = $_GET['ide'];
        $query = "SELECT * FROM tourist_spot WHERE id='$ide'";
        $result = mysqli_query($conn, $query);

        $outputString = '';
        foreach ($result as $row) {
          @$outputString .= ' <div>
        <div class="row-item">
 <div class="row-title"> </div> <div class="response" id="response-' . $row['id'] . '"></div>';
          $query = "SELECT * FROM tbl_rating WHERE user_id='$userId' and touristspot_id='$ide'";
          $result = mysqli_query($conn, $query);
          $row22 = mysqli_fetch_array($result, MYSQLI_ASSOC);
          @$a1 = $row22['amenity1'];
          @$a2 = $row22['amenity2'];
          @$a3 = $row22['amenity3'];
          @$a4 = $row22['amenity4'];

          $de = $a1 + $a2 + $a3 + $a4;
          $de1 = 4;

          $average = round(($de / $de1), 1);
          if ($average >= 5){
            echo 'Your Rating is <span style="color:#008000;">' .$average. '&nbsp&nbsp&nbsp<label class="btn btn-outline-success btn-sm active"> Excellent  <i class="bi bi-emoji-heart-eyes"></i></span></label>';
          }elseif (4 <= $average && $average <5){
            echo 'Your Rating is <span style="color:;">' .$average. '&nbsp&nbsp&nbsp<label class="btn btn-outline-dark btn-sm active"> Good  <i class="bi bi-emoji-laughing"></i></span></label>';
          }elseif (3 <= $average && $average <4){
            echo 'Your Rating is <span style="color:;">' .$average. '&nbsp&nbsp&nbsp<label class="btn btn-outline-dark btn-sm active"> Fair  <i class="bi bi-emoji-smile"></i></span></label>';
          }elseif (2 <= $average && $average <3){
            echo 'Your Rating is <span style="color:;">' .$average. '&nbsp&nbsp&nbsp<label class="btn btn-outline-dark btn-sm active"> Bad  <i class="bi bi-emoji-frown"></i></span></label>';
          }elseif (1 <= $average && $average <2){
            echo 'Your Rating is <span style="color:#DC143C;">' .$average. '&nbsp&nbsp&nbsp<label class="btn btn-outline-danger btn-sm active"> Terrible  <i class="bi bi-emoji-angry"></i></span></label>';
          }else {
            echo "You haven't rated this place yet";
          }

          for ($count = 1; $count <= 5; $count++) {
            $starRatingId = $row['id'] . '_' . $count;
            if ($count <= $average) {
              $outputString .= '<li value="' . $count . '" id="' . $starRatingId . '" class="star selected"><b>&#9733;</li>';
            } else {
              $outputString .= '<li value="' . $count . '"  id="' . $starRatingId . '" class="star"><b>&#9733;</li>';
            }
          } // endFor

          @$outputString .= '
</p>
</div>
<div>
<label class="btn btn-outline-danger btn-sm disabled"><b><i class="bi bi-emoji-angry"></i><br>1 - Terrible</label>
<label class="btn btn-outline-dark btn-sm disabled"><b><i class="bi bi-emoji-frown"></i><br> 2 - Bad</label>
<label class="btn btn-outline-dark btn-sm disabled"><b><i class="bi bi-emoji-smile"></i><br> 3 - Fair</label>
<label class="btn btn-outline-dark btn-sm disabled"><b><i class="bi bi-emoji-laughing"></i><br> 4 - Good</label>
<label class="btn btn-outline-success btn-sm disabled"><b><i class="bi bi-emoji-heart-eyes"></i><br> 5 - Excellent</label>
</div>
 <div> <form action="" method="post">
                <div class="row">
                <h6 class="col-md-10 mb-4"> Rate this tourist spot amenities based on your experience.</h6>
                <div class="col-md-5 mb-2" style="float:left;">
                <h6>Accessibility #1:</h6>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="1" name="amenity1" required> 1</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="2" name="amenity1"> 2</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="3" name="amenity1"> 3</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="4" name="amenity1"> 4</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="5" name="amenity1"> 5</label>
                </div> </div>
                  <div class="col-md-5">
                  <h6>Clealiness #2:</h6>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="1" name="amenity2" required> 1</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="2" name="amenity2"> 2</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="3" name="amenity2"> 3</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="4" name="amenity2"> 4</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="5" name="amenity2"> 5</label>
                </div> </div>
                  <div class="col-md-5">
                  <h6>Facilities #3:</h6>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="1" name="amenity3" required> 1</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="2" name="amenity3"> 2</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="3" name="amenity3"> 3</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="4" name="amenity3"> 4</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="5" name="amenity3"> 5</label>
                </div> </div>
                   <div class="col-md-5">
                   <h6>Security #4:</h6>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="1" name="amenity4" required> 1</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="2" name="amenity4"> 2</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="3" name="amenity4"> 3</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="4" name="amenity4"> 4</label>
                  <label class="btn btn-outline-info btn-sm"><input type="radio" value="5" name="amenity4"> 5</label>
                </div> </div>
                </div>
            </div>
             <input type="hidden" name="rating" value=" ' . $average . '">
                 <div>
                <input type="text" name="title" class="form-control" placeholder="Review Title" required>
            </div>

            <div>
                <textarea class="ownreview" name="description" placeholder="Write Your Review" required></textarea>
            </div>
            <div class="col-md-12">
                <h2 class="placetxt"></h2>
                <button class="btn btn-outline-success reviewbtn" style="    margin-top: 0px;"name="update" onclick="addRating(' . $row['id'] . ',' . $average . ');" >Submit Review</button>
            </div></form>
 ';
        }
        echo $outputString;
        ?>
      </div>
    </div>
  </div>
</body>

</html>