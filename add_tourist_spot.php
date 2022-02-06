<?php session_start();
if (isset($_SESSION["user"])) {
} else {
  header("Location:login.php");
}
?>
<?php
require_once "config.php";
include "links.php";
include "navbar.php";

if (isset($_POST['add_tourist'])) {
  $tour_name = trim($_POST['tour_name']);
  $user_name = $_SESSION['user'];
  $tour_des = trim($_POST['tour_des']);
  $divi_id = trim($_POST['divi_id']);
  $dist_id = trim($_POST['dist_id']);
  $status = 1;
  $images = $_FILES['file']['name'];
  $target_dir = "admin/img/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  // Valid file extensions
  $extensions_arr = array("jpg", "jpeg", "png", "gif");
  //$hashedPassword =  password_hash($password,PASSWORD_BCRYPT,$options);

  $sql = "INSERT INTO tourist_spot (tour_name,user_name, tour_des,divi_id,dist_id,images,status)
VALUES ('$tour_name','$user_name', '$tour_des','$divi_id','$dist_id','$images','$status')";

  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $images);

  if (mysqli_query($conn, $sql)) {
    $msg = "Added successfully (Admin will review it Soon)";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

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
      <main>
        <div class="container">
          <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header">
              <h3 class="text-center">Add a Tourist Spot</h3>
              <p style="color:green;text-align:center;font-weight:900;"><?php if (@$msg != "") {
                                                                          echo @$msg;
                                                                        } ?></p>
            </div>

            <div class="card-body">
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="row mb-2">
                  <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                      <input class="form-control" id="inputFirstName" type="text" name="tour_name" placeholder="Tourist Spot Name" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-0 mb-md-0">
                      <select class="form-control txt divi_id" id="divi_id" name="divi_id" required>
                        <option value="">Pick a Division</option>

                        <option value="Barisal">Barisal</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Sylhet">Sylhet</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-floating mb-3">

                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                      <textarea class="form-control" id="w3review" name="tour_des" rows="4" placeholder="Give a short description of the tourist spot" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating mb-0 mb-md-0">
                      <select class="form-control txt dist_id" name="dist_id" id="dist_id" required>
                        <option value="">Pick a District</option>

                      </select>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">

                  <div class="col-md-6 offset-md-3">
                    <div class="form-floating mb-3 mb-md-0">
                      <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                      <div class="image-upload-wrap">
                        <input class="file-upload-input" type='file' name="file" onchange="readURL(this);" accept="image/*" required/>
                        <div class="drag-text">
                          <h3>Drag and drop a file or select add Image</h3>
                        </div>
                      </div>
                      <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="your image" />
                        <div class="image-title-wrap">
                          <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-4 mb-0">
                  <div class="d-grid"><input type="submit" name="add_tourist" class="btn btn-primary btn-block" value="Add"></div>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
  <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>
    function readURL(input) {
      if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
          $('.image-upload-wrap').hide();

          $('.file-upload-image').attr('src', e.target.result);
          $('.file-upload-content').show();

          $('.image-title').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

      } else {
        removeUpload();
      }
    }

    function removeUpload() {
      $('.file-upload-input').replaceWith($('.file-upload-input').clone());
      $('.file-upload-content').hide();
      $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function() {
      $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
      $('.image-upload-wrap').removeClass('image-dropping');
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {

      $('#divi_id').on('change', function() {
        var divi_id = $(this).val();
        //alert(divi_id);
        if (true) {
          $.ajax({
            type: 'POST',
            url: 'admin/add_divi.php',
            data: 'divi_id=' + divi_id,
            success: function(html) {
              $('#dist_id').html(html);
            }
          });
        } else {
          $('#dist_id').html('<option value="">Select District</option>');
        }
      });
    });
  </script>
</body>

</html>