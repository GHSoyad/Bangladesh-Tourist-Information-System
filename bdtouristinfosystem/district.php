<?php
session_start();
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
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            include 'config.php';
            $divi = $_GET['divi_id'];
            $dist_id = $_GET['dist_id'];
            $sql = "SELECT * FROM category WHERE division_name='$divi' ANd district_name='$dist_id' LIMIT 1";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-md-5 offset-md-1">
                    <img src="admin/upload/<?php echo $row['district_img']; ?>" class="p-3 rounded d-block img-fluid">
                </div>
                <div class="col-md-5 mt-5">
                    <h1><?php echo $dist_id; ?></h1>

                    <p class="text-justify"><?php echo $row['district_description']; ?></p>
                <?php } ?>
                </div>
        </div>

        <div class="container divitxt">
           <div class="pb-0 mb-4 border-bottom" style="clear: both">
            <h3 style="float: left"><span class="bg-light text-dark"> <?php echo $divi; ?> / <?php echo $dist_id; ?> </span> </h3>
            <h5 class="pt-2 text-right">&nbsp&nbsp Click on a Tourist Spot to See Ratings </h5>
           </div>
            <div class="row">
                <?php require_once "config.php";
                require_once "functions.php";
                $divi = $_GET['divi_id'];
                $dist_id = $_GET['dist_id'];
                $sql = "SELECT * FROM tourist_spot WHERE divi_id='$divi' AND dist_id='$dist_id' AND status='0' ORDER BY tour_name ASC";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    $totalRating = totalRating($row['id'], $conn);?>
                    <div class="card-group col-md-2">
                        <div class="card mb-4 text-center">
                            <a style="text-decoration:none" href="touristpage.php?title=<?php echo $row['tour_name']; ?>&ide=<?php echo $row['id']; ?>">
                                <img class="card-img-top" src="admin/img/<?php echo $row['images']; ?>" alt="Card image cap">
                                <div class="card-body pb-0">
                                    <div class="card-title mb-0"><b><?php echo $row['tour_name']; ?>
                            </a>
                            <?php
                            $totalRating = totalRating($row['id'], $conn);
                            $userRatingavg = userRatingavg($row['id'], $conn);
                            $de = $userRatingavg;
                            $de1 = $totalRating;
                            if ($de1 == !null) {
                                $average = round(($de / $de1), 1);
                                $st = star($row['id'], $average);
                                echo $st;
                            }
                            ?></b>
                            <p>Total Reviews: <?php echo $totalRating; ?></p>
                        </div>
                    </div>
            </div>
        </div>
    <?php } ?>
    </div>
</body>

</html>