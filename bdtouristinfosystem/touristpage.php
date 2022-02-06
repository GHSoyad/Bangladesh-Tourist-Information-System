<?php
session_start();
?>
<?php
require_once "config.php";
include "links.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bangladesh Tourist Information System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        <?php include 'css/style.css';
        ?>
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            require_once "config.php";
            require_once "functions.php";
            // Here the user id is harcoded.
            // You can integrate your authentication code here to get the logged in user id
            @$userId = $_SESSION["user_id"];
            $ide = $_GET['ide'];
            $query = "SELECT * FROM tourist_spot WHERE id='$ide'";
            $result = mysqli_query($conn, $query);
            $outputString = '';
            foreach ($result as $row) { ?>
                <div class="col-md-6">
                    <img src="admin/img/<?php echo $row['images']; ?>" class="p-3 rounded d-block img-fluid">
                </div>
                <div class="col-md-6 mt-3">
                    <h1 class="placespot"><?php echo $_GET['title']; ?></h1>
                <?php
                $userRating = userRating($userId, $row['id'], $conn);
                $totalRating = totalRating($row['id'], $conn);
                $userRatingavg = userRatingavg($row['id'], $conn);
                $userRatingavg1 = userRatingavg1($row['id'], $conn);
                $userRatingavg2 = userRatingavg2($row['id'], $conn);
                $userRatingavg3 = userRatingavg3($row['id'], $conn);
                $userRatingavg4 = userRatingavg4($row['id'], $conn);
                @$outputString .= ' <div>
        <div class="row-item" style="margin-top: -122px;">
 <div class="row-title"> </div> <div class="response" id="response-' . $row['id'] . '"></div>';
                $query = "SELECT * FROM tbl_rating WHERE user_id='$userId' and touristspot_id='$ide'";
                $result = mysqli_query($conn, $query);
                $row22 = mysqli_fetch_array($result, MYSQLI_ASSOC);
                @$a1 = $row22['amenity1'];
                @$a2 = $row22['amenity2'];
                @$a3 = $row22['amenity3'];
                @$a4 = $row22['amenity4'];

                @$de = $userRatingavg;
                @$de1 = $totalRating;

                if ($de1 == !null) {
                    $average = round(($de / $de1), 1);
                }
                $de = $userRatingavg1;
                $de1 = $totalRating;
                if ($de1 == !null) {
                    $average1 = round(($de / $de1), 1);
                }
                $de = $userRatingavg2;
                $de1 = $totalRating;
                if ($de1 == !null) {
                    $average2 = round(($de / $de1), 1);
                }
                $de = $userRatingavg3;
                $de1 = $totalRating;
                if ($de1 == !null) {
                    $average3 = round(($de / $de1), 1);
                }

                $de = $userRatingavg4;
                $de1 = $totalRating;
                if ($de1 == !null) {
                    $average4 = round(($de / $de1), 1);
                }

                for ($count = 1; $count <= 5; $count++) {
                    $starRatingId = $row['id'] . '_' . $count;
                    if ($count <= @$average) {

                        $outputString .= '<li value="' . $count . '" id="' . $starRatingId . '" class="star selected"><b>&#9733;</b></li>';
                    } else {
                        $outputString .= '<li value="' . $count . '"  id="' . $starRatingId . '"  class="star"  ><b>&#9733;</b></li>';
                    }
                } // endFor
                @$outputString .= '
 <p style="font-style: italic;">Total Reviews: ' . $totalRating . '</p>
 <p class="text-address">Accessibility : <b>' . $average1 . '/5</b>&nbsp&nbsp&nbspClealiness :<b> ' . $average2 . '/5</b>&nbsp&nbsp&nbspFacilities :<b> ' . $average3 . '/5</b>&nbsp&nbsp&nbspSecurity :<b> ' . $average4 . '/5</b></p></div>';
            }
            echo $outputString;
                ?>
                <?php $ide = $_GET['ide'];
                $query = "SELECT * FROM tourist_spot WHERE id='$ide'";
                $result = mysqli_query($conn, $query);
                $outputString = '';
                foreach ($result as $row) { ?>
                    <p class="text-justify"><?php echo $row['tour_des']; ?></p>
                <?php } ?>
                <div class="col-md-12">
                    <h2 class="placetxt">Visited this place ?</h2>
                    <a href="rating.php?ide=<?php echo $ide; ?>&u_id=<?php echo $userId; ?>" class="btn btn-outline-primary" style="margin-top: -37px;margin-left: 181px;margin-bottom: 16px;">Write a Review</a>
                </div>
                </div>
        </div>
    </div>
    <hr>
    <div class="container mx-auto">
        <a href="#" style="text-decoration:none;">
            <h5 class="seemore">See Reviews Given By Others</h5>
        </a>
    </div>
    <div class="container  mb-5 userreview">
        <div class="row">
            <div class="">
                <div class="spotpage">
                    <?php
                    require_once "config.php";
                    require_once "functions.php";
                    $query = "SELECT * FROM tourist_spot WHERE id='$ide'";
                    $result = mysqli_query($conn, $query);
                    $outputString = '';
                    foreach ($result as $row) {
                        $sql = "SELECT * FROM tbl_rating Where touristspot_id='$ide' ORDER BY timestamp DESC";
                        $result = mysqli_query($conn, $sql);
                        while ($row3 = mysqli_fetch_assoc($result)) {
                            $userId = $row3['user_id'];
                            $r = $row3['touristspot_id'];
                            $query33 = "SELECT * FROM users WHERE id='$userId'";
                            $result33 = mysqli_query($conn, $query33);
                            $rr = mysqli_fetch_assoc($result33);
                            $userRating = userRating($userId, $r, $conn);
                            $totalRating = totalRating($row['id'], $conn);
                            $outputString .= '
                     <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input">
                     <label class="custom-control-label" for="customRadioInline1">' . $rr['username'] . '</label>
                     </div>
                     <div class="row-item">';
                            for ($count = 1; $count <= 5; $count++) {
                                $starRatingId = $row['id'] . '_' . $count;
                                if ($count <= $userRating) {
                                    $outputString .= '<li value="' . $count . '" id="' . $starRatingId . '" class="star selected">&#9733;</li>';
                                } else {
                                    $outputString .= '<li value="' . $count . '"  id="' . $starRatingId . '" class="star" >&#9733;</li>';
                                }
                            } // endFor
                            $outputString .= ' <p class="text-address mb-2">Accessibility :<b> ' . $row3["amenity1"] . '/5</b>&nbsp&nbsp&nbspClealiness :<b> ' . $row3["amenity2"] . '/5</b>
                             &nbsp&nbsp&nbspFacilities :<b> ' . $row3["amenity3"] . '/5</b>&nbsp&nbsp&nbspSecurity :<b> ' . $row3["amenity4"] . '/5</b></p>
                     <div><h5> ' . $row3['title'] . '</h5></div>
                     <div class="card" style="background: #F8F8F8;padding: 10px;"> ' . $row3['description'] . '</div>
                     <p class="text-address mt-1"> ' . $row3['timestamp'] . '</p></div>';
                        }
                    }
                    echo $outputString;
                    ?>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>