<?php
error_reporting(1);
session_start();
include "links.php";
include "navbar.php";
include 'config.php';

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
    <div class="container pl-3 pr-3 pt-5">
        <h2 class="centertxt">Type a Tourist Spot Name to Search</h2>
    </div>
    <div class="container p-4">
        <form method="post" action="search-result.php">
            <table width="70%" align="center">
                <tr>
                    <td colspan="2"><input class="form-control rounded" placeholder="Search here.." name="tspot" value="<?php echo $_REQUEST['tspot']; ?>" /></td>
                </tr>

                <tr>
                    <td width="90%"><select class="custom-select col-md-2" name="rating" id="rating" class="mb-2">
                            <option value="">Star Rating</option>
                            <option value="1" <?php if ($_REQUEST['rating'] == 1) {
                                                    echo "selected";
                                                } ?>>1 OR More
                            </option>
                            <option value="2" <?php if ($_REQUEST['rating'] == 2) {
                                                    echo "selected";
                                                } ?>>2 OR More
                            </option>
                            <option value="3" <?php if ($_REQUEST['rating'] == 3) {
                                                    echo "selected";
                                                } ?>>3 OR More
                            </option>
                            <option value="4" <?php if ($_REQUEST['rating'] == 4) {
                                                    echo "selected";
                                                } ?>>4 OR More
                            </option>
                            <option value="5" <?php if ($_REQUEST['rating'] == 5) {
                                                    echo "selected";
                                                } ?>>5 Stars</option>
                        </select>
                        OR By
                        <select class="custom-select col-md-2" name="amenity1" id="amenity1" class="mb-2">
                            <option value="">Accessibility</option>
                            <option value="1" <?php if ($_REQUEST['amenity1'] == 1) {
                                                    echo "selected";
                                                } ?>>1 OR More
                            </option>
                            <option value="2" <?php if ($_REQUEST['amenity1'] == 2) {
                                                    echo "selected";
                                                } ?>>2 OR More
                            </option>
                            <option value="3" <?php if ($_REQUEST['amenity1'] == 3) {
                                                    echo "selected";
                                                } ?>>3 OR More
                            </option>
                            <option value="4" <?php if ($_REQUEST['amenity1'] == 4) {
                                                    echo "selected";
                                                } ?>>4 OR More
                            </option>
                            <option value="5" <?php if ($_REQUEST['amenity1'] == 5) {
                                                    echo "selected";
                                                } ?>>5/5</option>
                        </select>
                        <select class="custom-select col-md-2" name="amenity2" id="amenity2" class="mb-2">
                            <option value="">Clealiness</option>
                            <option value="1" <?php if ($_REQUEST['amenity2'] == 1) {
                                                    echo "selected";
                                                } ?>>1 OR More
                            </option>
                            <option value="2" <?php if ($_REQUEST['amenity2'] == 2) {
                                                    echo "selected";
                                                } ?>>2 OR More
                            </option>
                            <option value="3" <?php if ($_REQUEST['amenity2'] == 3) {
                                                    echo "selected";
                                                } ?>>3 OR More
                            </option>
                            <option value="4" <?php if ($_REQUEST['amenity2'] == 4) {
                                                    echo "selected";
                                                } ?>>4 OR More
                            </option>
                            <option value="5" <?php if ($_REQUEST['amenity2'] == 5) {
                                                    echo "selected";
                                                } ?>>5/5</option>
                        </select>
                        <select class="custom-select col-md-2" name="amenity3" id="amenity3" class="mb-2">
                            <option value="">Facilities</option>
                            <option value="1" <?php if ($_REQUEST['amenity3'] == 1) {
                                                    echo "selected";
                                                } ?>>1 OR More
                            </option>
                            <option value="2" <?php if ($_REQUEST['amenity3'] == 2) {
                                                    echo "selected";
                                                } ?>>2 OR More
                            </option>
                            <option value="3" <?php if ($_REQUEST['amenity3'] == 3) {
                                                    echo "selected";
                                                } ?>>3 OR More
                            </option>
                            <option value="4" <?php if ($_REQUEST['amenity3'] == 4) {
                                                    echo "selected";
                                                } ?>>4 OR More
                            </option>
                            <option value="5" <?php if ($_REQUEST['amenity3'] == 5) {
                                                    echo "selected";
                                                } ?>>5/5</option>
                        </select>
                        <select class="custom-select col-md-2" name="amenity4" id="amenity4" class="mb-2">
                            <option value="">Security</option>
                            <option value="1" <?php if ($_REQUEST['amenity4'] == 1) {
                                                    echo "selected";
                                                } ?>>1 OR More
                            </option>
                            <option value="2" <?php if ($_REQUEST['amenity4'] == 2) {
                                                    echo "selected";
                                                } ?>>2 OR More
                            </option>
                            <option value="3" <?php if ($_REQUEST['amenity4'] == 3) {
                                                    echo "selected";
                                                } ?>>3 OR More
                            </option>
                            <option value="4" <?php if ($_REQUEST['amenity4'] == 4) {
                                                    echo "selected";
                                                } ?>>4 OR More
                            </option>
                            <option value="5" <?php if ($_REQUEST['amenity4'] == 5) {
                                                    echo "selected";
                                                } ?>>5/5</option>

                        </select>
                    </td>
                    <td><button type="submit" class="btn btn-outline-primary">Search</button></td>
                </tr>

            </table>


        </form>
    </div>

    <div class="container">
        <div class="row">
            <?php require_once "config.php";
            require_once "functions.php";

            $where = "";

            if ($_POST['tspot'] != "") {
                $where .= " Where tour_des like '%" . $_POST['tspot'] . "%' OR tour_name like '%" . $_POST['tspot'] . "%'";
            }
            @$find = "%{$_POST['tspot']}%";
            $where1 = "";
            if ($_REQUEST['amenity1'] != "") {
                $where1 .= " AND tbl_rating.amenity1 >= '" . $_REQUEST['amenity1'] . "'";
            }

            if ($_REQUEST['amenity2'] != "") {
                $where1 .= " AND tbl_rating.amenity2 >= '" . $_REQUEST['amenity2'] . "'";
            }

            if ($_REQUEST['amenity3'] != "") {
                $where1 .= " AND tbl_rating.amenity3 >= '" . $_REQUEST['amenity3'] . "'";
            }

            if ($_REQUEST['amenity4'] != "") {
                $where1 .= " AND tbl_rating.amenity4 >= '" . $_REQUEST['amenity4'] . "'";
            }

            if ($_REQUEST['rating'] != "") {
                $where1 .= " AND tbl_rating.rating >= '" . $_REQUEST['rating'] . "'";
            }

            $ret = mysqli_query($conn, "SELECT * FROM tourist_spot " . $where);
            $num = mysqli_num_rows($ret);
            if ($num > 0) {
                while ($row = mysqli_fetch_array($ret)) {
                    $query = mysqli_query($conn, "SELECT * FROM `tbl_rating` WHERE touristspot_id ='" . $row['id'] . "' " . $where1);
                    $num1 = mysqli_num_rows($query);
                    if ($num1 > 0) {
                        $totalRating = totalRating($row['id'], $conn);
                        $userRatingavg = userRatingavg($row['id'], $conn);
                        $userRatingavg1 = userRatingavg1($row['id'], $conn);
                        $userRatingavg2 = userRatingavg2($row['id'], $conn);
                        $userRatingavg3 = userRatingavg3($row['id'], $conn);
                        $userRatingavg4 = userRatingavg4($row['id'], $conn);
                        $de = $userRatingavg;
                        $de1 = $totalRating;
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

                        if ($_REQUEST['rating'] != "") {
                            if ($average >= $_REQUEST['rating']) {
                                $rat = mysqli_fetch_array($query);
                                #echo "<pre>";
                                #print_r($row);
                                $totalRating = totalRating($row['id'], $conn);
            ?>
                                <div class="card col-md-8 offset-md-2 mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <a style="text-decoration:none" href="touristpage.php?title=<?php echo $row['tour_name']; ?>&ide=<?php echo $row['id']; ?>">
                                                <img class="card-img-top" src="admin/img/<?php echo $row['images']; ?>" alt="Card image cap">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="card-title mb-0"><b><?php echo $row['tour_name']; ?></b></a>
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
                                                    ?>
                                                    Total Reviews: <?php echo $totalRating; ?>
                                                </div>
                                                <p class="card-text text-justify"><?php echo $row['tour_des']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } elseif ($_REQUEST['amenity1'] != "") {
                            if ($average1 >= $_REQUEST['amenity1']) {
                                $rat = mysqli_fetch_array($query);
                                #echo "<pre>";
                                #print_r($row);
                                $totalRating = totalRating($row['id'], $conn);
                            ?>
                                <div class="card col-md-8 offset-md-2 mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <a style="text-decoration:none" href="touristpage.php?title=<?php echo $row['tour_name']; ?>&ide=<?php echo $row['id']; ?>">
                                                <img class="card-img-top" src="admin/img/<?php echo $row['images']; ?>" alt="Card image cap">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="card-title mb-0"><b><?php echo $row['tour_name']; ?></b></a>
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
                                                    ?>
                                                    Total Reviews: <?php echo $totalRating; ?>
                                                </div>
                                                <p class="card-text text-justify"><?php echo $row['tour_des']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } elseif ($_REQUEST['amenity2'] != "") {
                            if ($average2 >= $_REQUEST['amenity2']) {
                                $rat = mysqli_fetch_array($query);
                                #echo "<pre>";
                                #print_r($row);
                                $totalRating = totalRating($row['id'], $conn);
                            ?>
                                <div class="card col-md-8 offset-md-2 mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <a style="text-decoration:none" href="touristpage.php?title=<?php echo $row['tour_name']; ?>&ide=<?php echo $row['id']; ?>">
                                                <img class="card-img-top" src="admin/img/<?php echo $row['images']; ?>" alt="Card image cap">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="card-title mb-0"><b><?php echo $row['tour_name']; ?></b></a>
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
                                                    ?>
                                                    Total Reviews: <?php echo $totalRating; ?>
                                                </div>
                                                <p class="card-text text-justify"><?php echo $row['tour_des']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } elseif ($_REQUEST['amenity3'] != "") {
                            if ($average3 >= $_REQUEST['amenity3']) {
                                $rat = mysqli_fetch_array($query);
                                #echo "<pre>";
                                #print_r($row);
                                $totalRating = totalRating($row['id'], $conn);
                            ?>
                                <div class="card col-md-8 offset-md-2 mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <a style="text-decoration:none" href="touristpage.php?title=<?php echo $row['tour_name']; ?>&ide=<?php echo $row['id']; ?>">
                                                <img class="card-img-top" src="admin/img/<?php echo $row['images']; ?>" alt="Card image cap">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="card-title mb-0"><b><?php echo $row['tour_name']; ?></b></a>
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
                                                    ?>
                                                    Total Reviews: <?php echo $totalRating; ?>
                                                </div>
                                                <p class="card-text text-justify"><?php echo $row['tour_des']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } elseif ($_REQUEST['amenity4'] != "") {
                            if ($average4 >= $_REQUEST['amenity4']) {
                                $rat = mysqli_fetch_array($query);
                                #echo "<pre>";
                                #print_r($row);
                                $totalRating = totalRating($row['id'], $conn);
                            ?>
                                <div class="card col-md-8 offset-md-2 mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <a style="text-decoration:none" href="touristpage.php?title=<?php echo $row['tour_name']; ?>&ide=<?php echo $row['id']; ?>">
                                                <img class="card-img-top" src="admin/img/<?php echo $row['images']; ?>" alt="Card image cap">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="card-title mb-0"><b><?php echo $row['tour_name']; ?></b></a>
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
                                                    ?>
                                                    Total Reviews: <?php echo $totalRating; ?>
                                                </div>
                                                <p class="card-text text-justify"><?php echo $row['tour_des']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } else {

                            $rat = mysqli_fetch_array($query);
                            #echo "<pre>";
                            #print_r($row);
                            $totalRating = totalRating($row['id'], $conn);
                            ?>
                            <div class="card col-md-8 offset-md-2 mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <a style="text-decoration:none" href="touristpage.php?title=<?php echo $row['tour_name']; ?>&ide=<?php echo $row['id']; ?>">
                                            <img class="card-img-top" src="admin/img/<?php echo $row['images']; ?>" alt="Card image cap">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <div class="card-title mb-0"><b><?php echo $row['tour_name']; ?></b></a>
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
                                                ?>
                                                Total Reviews: <?php echo $totalRating; ?>
                                            </div>
                                            <p class="card-text text-justify"><?php echo $row['tour_des']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
            } else { ?>
                <div class="col-md-12">
                    <h4 class="text-center text-danger">No Tourist Spot Found...</h4>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>