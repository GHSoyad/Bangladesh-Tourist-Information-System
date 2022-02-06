<?php include 'header.php';
ob_start(); ?>
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
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'config.php';
                                $sql = "SELECT * FROM users";
                                $result = mysqli_query($conn, $sql);
                                $i;
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo @$i; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><a href="update.php?id=<?php echo $row['id']; ?>"> <i class="fas fa-edit"></i></a></td>
                                        <td><a href="manage_users.php?delete=<?php echo $row['id']; ?>"><i class="fas fa-trash"></i></a></td>
                                    </tr>
                                <?php @$i++;
                                }
                                if (isset($_GET['delete'])) {
                                    $id = $_GET['delete'];
                                    $result = mysqli_query($conn, "DELETE FROM users WHERE id='$id'");
                                    $script = "<script>
                                    window.location = 'manage_users.php';</script>";
                                    echo $script;
                                    ob_end_flush();
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