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
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            include 'config.php';
            $div = $_GET['divi'];
            $sql = "SELECT * FROM category WHERE division_name='$div' LIMIT 1";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-md-5 offset-md-1">
                    <img src="admin/upload/<?php echo $row['division_img']; ?>" class="p-3 rounded d-block img-fluid">
                </div>
                <div class="col-md-5 mt-5">
                    <h1><?php echo $div; ?></h1>
                    <p class="text-justify"><?php echo $row['division_description']; ?> </p>
                <?php } ?>
                </div>
        </div>
        <div class="container divitxt">
            <div class="pb-0 mb-4 border-bottom" style="clear: both">
                <h3 style="float: left"><span class="bg-light text-dark"><?php echo $div; ?> </span></h3>
                <h5 class="pt-2 text-right">&nbsp&nbsp Click on a District to See Tourist Spots </h5>
            </div>
            <div class="row"><?php
                                include 'config.php';
                                $sql = "SELECT * FROM category Where division_name='$div' ORDER BY district_name ASC";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                    <div class="card-group col-md-3">
                        <div class="card mb-2">
                            <a style="text-decoration:none" href="district.php?divi_id=<?php echo $row['division_name']; ?>&dist_id=<?php echo $row['district_name']; ?>">
                                <img class="card-img-top" src="admin/upload/<?php echo $row['district_img']; ?>" alt="Card image cap">

                                <div class="card-body pb-1">
                                    <h5><?php echo $row['district_name']; ?></h5>
                            </a>
                        </div>
                    </div>
            </div>
        <?php } ?>
        </div>
    </div>
</body>

</html>