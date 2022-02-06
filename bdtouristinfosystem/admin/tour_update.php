<?php include 'header.php'; ?>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <?php include 'sidebar.php'; ?>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Manage Users</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Admin</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        <form name="frmChange" method="post" action="" enctype="multipart/form-data">
                            <table class="table" style="border: 3px solid yellow;width: 67%;">
                                <tbody>
                                    <?php
                                    include 'config.php';
                                    $id = $_GET['id'];
                                    if (isset($_POST['update'])) {
                                        $tour_name = $_POST["tour_name"];
                                        $tour_des = $_POST["tour_des"];
                                        $dist_id = $_POST["dist_id"];
                                        $divi_id = $_POST["divi_id"];

                                        $sql = mysqli_query($conn, "UPDATE tourist_spot SET tour_name='$tour_name',tour_des='$tour_des',dist_id='$dist_id',divi_id='$divi_id' WHERE id='" . $id . "'");
                                        $result = mysqli_query($conn, $sql);
                                        echo ("<script LANGUAGE='JavaScript'>
                                                    window.alert('Succesfully Updated');
                                                    </script>");
                                    }
                                    $sql = "select * from tourist_spot WHERE id=$id";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <tr>
                                            <td width="40%">Tourist Spot Name:</td>
                                            <td width="60%">
                                                <input type="text" name="tour_name" value="<?php echo  $row['tour_name']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="40%">Description:</td>
                                            <td width="60%">
                                                <input type="text" name="tour_des" value="<?php echo  $row['tour_des']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="40%">District Name:</td>
                                            <td width="60%">
                                                <input type="text" name="dist_id" value="<?php echo  $row['dist_id']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="40%">Division Name:</td>
                                            <td width="60%">
                                                <input type="text" name="divi_id" value="<?php echo  $row['divi_id']; ?>">
                                            </td>
                                        </tr>
                                    <?php }  ?>
                                </tbody>
                            </table>
                            <div class="mt-4 mb-0">
                                <div class=""><input type="submit" name="update" class="btn btn-primary btn-block" value="Update"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Bangladesh Tourist Information System 2021</div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>

</html>