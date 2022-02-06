<?php
function userRating($userId, $touristspotId, $conn)
{
    $average = 0;
    $avgQuery = "SELECT * FROM tbl_rating WHERE user_id = '" . $userId . "' and touristspot_id = '" . $touristspotId . "'";
    $total_row = 0;
    if ($result = mysqli_query($conn, $avgQuery)) {
        // Return the number of rows in result set
        $total_row = mysqli_num_rows($result);
    } // endIf
    if ($total_row > 0) {
        foreach ($result as $row) {
            $average = round(($row["rating"]), 1);
        } // endForeach
    } // endIf
    return $average;
}
function userRatingavg( $touristspotId, $conn)
{
   $avgQuery = "SELECT SUM(rating) FROM tbl_rating WHERE touristspot_id = '" . $touristspotId . "'";
   $result1 = mysqli_query($conn, $avgQuery);
while($row = mysqli_fetch_array($result1)){
    $average = $row['SUM(rating)'];
    echo "<br>";
}
    return $average;
}

function star($touristspotId,$average1){
    for ($count = 1; $count <= 5; $count ++) {
        $starRatingId = $touristspotId . '_' . $count;
        if ($count <= $average1) {
       @   $outputString11 .= '<li value="' . $count . '" id="' . $starRatingId . '" class="star selected">&#9733;</li>';
        } else {
            $outputString11 .= '<li value="' . $count . '"  id="' . $starRatingId . '"  class="star"  >&#9733;</li>';
        }
    } // endFor
    return $outputString11;
}

function userRatingavg1( $touristspotId, $conn)
{
   $avgQuery = "SELECT SUM(amenity1) FROM tbl_rating WHERE touristspot_id = '" . $touristspotId . "'";
   $result1 = mysqli_query($conn, $avgQuery);
while($row = mysqli_fetch_array($result1)){
    $average1 = $row['SUM(amenity1)'];
    echo "<br>";
}
    return $average1;
}

function userRatingavg2( $touristspotId, $conn)
{
   $avgQuery = "SELECT SUM(amenity2) FROM tbl_rating WHERE touristspot_id = '" . $touristspotId . "'";
   $result1 = mysqli_query($conn, $avgQuery);
while($row = mysqli_fetch_array($result1)){
    $average2 = $row['SUM(amenity2)'];
    echo "<br>";
}
    return $average2;
}

function userRatingavg3( $touristspotId, $conn)
{
   $avgQuery = "SELECT SUM(amenity3) FROM tbl_rating WHERE touristspot_id = '" . $touristspotId . "'";
   $result1 = mysqli_query($conn, $avgQuery);
while($row = mysqli_fetch_array($result1)){
    $average3 = $row['SUM(amenity3)'];
    echo "<br>";
}
    return $average3;
}

function userRatingavg4( $touristspotId, $conn)
{
   $avgQuery = "SELECT SUM(amenity4) FROM tbl_rating WHERE touristspot_id = '" . $touristspotId . "'";
   $result1 = mysqli_query($conn, $avgQuery);
while($row = mysqli_fetch_array($result1)){
    $average4 = $row['SUM(amenity4)'];
    echo "<br>";
}
    return $average4;
}

function userRatingamy4avg( $touristspotId, $conn)
{
   $avgQuery = "SELECT SUM(amenity4) FROM tbl_rating WHERE touristspot_id = '" . $touristspotId . "'";
   $result1 = mysqli_query($conn, $avgQuery);
while($row = mysqli_fetch_array($result1)){
    $average4 = $row['SUM(rating)'];
    echo "<br>";
}
    return $average4;
}// endFunction

function totalRating($touristspotId, $conn)
{
    $totalVotesQuery = "SELECT * FROM tbl_rating WHERE touristspot_id = '" . $touristspotId . "'";
    if ($result = mysqli_query($conn, $totalVotesQuery)) {
        // Return the number of rows in result set
        $rowCount = mysqli_num_rows($result);
        // Free result set
        mysqli_free_result($result);
    } // endIf
    return $rowCount;
}//endFunction
