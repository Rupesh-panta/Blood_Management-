<nav id="mainNav" class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="./index.php">DONATETHEBLOOD</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto">
        <!-- Left-aligned navigation items (optional) -->
      </ul>
      
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="donor.php">Donors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search.php">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>

        <!-- Conditionally Rendered Links -->
        <?php if (isset($_SESSION['user'])): ?>
          <!-- Dropdown for logged-in users -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo htmlspecialchars($_SESSION['user']['name']); ?> <!-- Display user name -->
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="user/index.php">
                <i class="fa fa-user" aria-hidden="true"></i> Profile
              </a>
              <a class="dropdown-item" href="user/update.php">
                <i class="fa fa-edit" aria-hidden="true"></i> Update Profile
              </a>
              <a class="dropdown-item" href="logout.php">
                <i class="fa fa-sign-out-alt" aria-hidden="true"></i> Logout
              </a>
            </div>
          </li>
        <?php else: ?>
          <!-- Sign-in link for guests -->
          <li class="nav-item">
            <a class="nav-link" href="signin.php">Sign In</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
