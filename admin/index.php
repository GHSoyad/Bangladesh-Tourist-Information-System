<?php include 'header.php'; ?>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <?php include 'sidebar.php'; ?>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Manage Tourist Spot</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Admin</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>User Name</th>
                                    <th>Tourist Spot Name</th>
                                    <th>Division</th>
                                    <th>District</th>
                                    <th>Discription</th>
                                    <th colspan="2">Action</th>
                                    <th colspan="2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'config.php';
                                $sql = "SELECT * FROM tourist_spot";
                                $result = mysqli_query($conn, $sql);
                                @$i;
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo @$i; ?></td>
                                        <td><?php echo $row['user_name']; ?></td>
                                        <td><?php echo $row['tour_name']; ?></td>
                                        <td><?php echo $row['divi_id']; ?></td>
                                        <td><?php echo $row['dist_id']; ?></td>
                                        <td><?php echo $row['tour_des']; ?></td>

                                        <td><a href="tour_update.php?id=<?php echo $row['id']; ?>"> <i class="fas fa-edit"></i></a></td>
                                        <td><a href="index.php?delete=<?php echo $row['id']; ?>"><i class="fas fa-trash"></i></a></td>
                                        <?php $admin = 'Admin';
                                        if ($row['status'] == 0 & $row['user_name'] === $admin) {
                                        ?>
                                            <td>Approved</td>
                                        <?php $admin = 'Admin';
                                        }
                                        if ($row['status'] == 1 & $row['user_name'] != $admin) { ?>
                                            <td><a href="index.php?ap_id=<?php echo $row['id']; ?>">Approve</a></td>
                                        <?php }
                                        if ($row['status'] == 0 & $row['user_name'] != $admin) { ?>
                                            <td>Approved</td>
                                        <?php } ?>
                                    </tr>
                                <?php @$i++;
                                }
                                if (isset($_GET['delete'])) {
                                    $id = $_GET['delete'];
                                    $result = mysqli_query($conn, "DELETE FROM tourist_spot WHERE id='$id'");
                                    $script = "<script>window.location = 'index.php';</script>";
                                    echo $script;
                                    ob_end_flush();
                                }
                                if (isset($_GET['ap_id'])) {
                                    $id = $_GET['ap_id'];
                                    $result = mysqli_query($conn, "UPDATE tourist_spot SET status='0' WHERE id='$id'");
                                    $script = "<script>
                                    window.location = 'index.php';</script>";
                                    echo $script;
                                    ob_end_flush();
                                }
                                if (isset($_GET['ds_id'])) {
                                    $id = $_GET['ds_id'];
                                    $result = mysqli_query($conn, "UPDATE tourist_spot SET status='1' WHERE id='$id'");
                                }
                                ?>
                            </tbody>
                        </table>
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