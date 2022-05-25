<?php session_start();
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
    <div class="container p-5">
        <h2 class="centertxt">Welcome to Bangladesh Tourist Information System</h2>
    </div>
    <br />
    <div class="container p-4">
        <form method="post" action="search-result.php">
            <div class="input-group col text-center offset-md-2">
                <input class="form-control rounded" placeholder="Search here.." name="tspot" required />
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </div>
        </form>
    </div>

    <div class="container">
        <h4 class="pb-3 mb-3 border-bottom">Top Rated Places</h4>
        <div class="row">
            <?php require_once "config.php";
            require_once "functions.php";
            $avgQuery = "SELECT p.*, SUM(r.rating)/COUNT(r.rating) AS rating FROM tourist_spot p INNER JOIN tbl_rating r ON p.id = r.touristspot_id GROUP BY p.id ORDER BY rating DESC LIMIT 6";
            $result1 = mysqli_query($conn, $avgQuery);
            while ($row = mysqli_fetch_array($result1)) {?>
                <div class="card-group col-md-2">
                    <div class="card mb-2 text-center">
                        <a style="text-decoration:none" href="touristpage.php?title=<?php echo $row['tour_name']; ?>&ide=<?php echo $row['id']; ?>">
                            <img class="card-img-top" src="admin/img/<?php echo $row['images']; ?>" alt="Card image cap">
                            <div class="card-body pb-0">
                            <div class="card-title mb-0"><?php echo $row['tour_name']; ?>
                        </a>
                        <?php
                        $totalRating1 = totalRating($row['id'], $conn);
                        $userRatingavg1 = userRatingavg($row['id'], $conn);

                        $de1 = $userRatingavg1;
                        $de11 = $totalRating1;

                        $average1 = round(($de1 / $de11), 1);
                        $st = star($row['id'], $average1);
                        echo $st;
                        echo '<div class="rating">';?>
                        <p>Total Reviews: <?php echo $totalRating1; ?></p>
                    </div>
                </div>
        </div>
    </div>
    </div>
<?php }
?>
</div>
</div>
<hr>
<div class="container">
    <h4 class="pb-3 mb-3 border-bottom">Most Visited Places</h4>
    <div class="row">
        <?php require_once "config.php";
        require_once "functions.php";
        $avgQuery = "SELECT touristspot_id, count(rating) as ra FROM tbl_rating GROUP BY touristspot_id ORDER BY ra DESC LIMIT 6";
        $result1 = mysqli_query($conn, $avgQuery);
        while ($row = mysqli_fetch_array($result1)) {
            $avgQuery22 = "SELECT * FROM tourist_spot WHERE id = '" . $row['touristspot_id'] . "'";
            $resultw1 = mysqli_query($conn, $avgQuery22);
            while ($roww = mysqli_fetch_array($resultw1)) { ?>
                <div class="card-group col-md-2">
                    <div class="card mb-2 text-center">
                        <a style="text-decoration:none" href="touristpage.php?title=<?php echo $roww['tour_name']; ?>&ide=<?php echo $roww['id']; ?>">
                            <img class="card-img-top" src="admin/img/<?php echo $roww['images']; ?>" alt="Card image cap">
                            <div class="card-body pb-0">
                            <div class="card-title mb-0"><?php echo $roww['tour_name']; ?>
                        </a>
                        <?php
                        $totalRating = totalRating($roww['id'], $conn);
                        $userRatingavg = userRatingavg($roww['id'], $conn);

                        $de = $userRatingavg;
                        $de2 = $totalRating;

                        $average = round(($de / $de2), 1);
                        $st = star($roww['id'], $average);
                        echo $st;?>
                        <p>Total Reviews: <?php echo $totalRating; ?></p>
                    </div>
                </div>
    </div>
</div>
<?php }} ?>
</body>

</html>
