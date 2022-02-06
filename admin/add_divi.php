            <?php
            include 'config.php';
            if (isset($_POST["divi_id"]) && !empty($_POST["divi_id"])) {
              $brand = $_POST['divi_id'];
              $result = mysqli_query($conn, "SELECT * FROM category Where division_name='$brand'");
              while ($row = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $row['district_name']; ?>"><?php echo $row['district_name']; ?></option>
            <?PHP
              }
            }
            ?>