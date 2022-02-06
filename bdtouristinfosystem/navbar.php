<nav class="navbar navbar-expand-lg navbar-light bg-light " style="background-color: #e3f2fd;">
  <a class="navbar-brand nav-link mt-2" href="index.php">
    <h5>Home</h5>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="search-result.php">Search<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_tourist_spot.php">Add Place</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php"><span class="glyphicon glyphicon-log-in"></span>Log In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Division</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="division.php?divi=Barisal">Barisal</a>
          <a class="dropdown-item" href="division.php?divi=Chittagong">Chittagong</a>
          <a class="dropdown-item" href="division.php?divi=Dhaka">Dhaka</a>
          <a class="dropdown-item" href="division.php?divi=Khulna">Khulna</a>
          <a class="dropdown-item" href="division.php?divi=Mymensingh">Mymensingh</a>
          <a class="dropdown-item" href="division.php?divi=Rajshahi">Rajshahi</a>
          <a class="dropdown-item" href="division.php?divi=Rangpur">Rangpur</a>
          <a class="dropdown-item" href="division.php?divi=Sylhet">Sylhet</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="profile.php">Profile</a>
          <?php if (isset($_SESSION['user'])) {  ?>
            <a class="dropdown-item" href="logout.php">Logout</a>
          <?php } ?>

        </div>
      </li>
    </ul>
  </div>
</nav>