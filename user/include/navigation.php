<nav id="mainNav" class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <!-- Brand Name -->
    <a class="navbar-brand" href="../index.php">DONATETHEBLOOD</a>

    <!-- Toggler for Mobile View -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" 
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible Navbar Content -->
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <!-- Left-aligned empty list (optional for future links) -->
        <ul class="navbar-nav mr-auto"></ul>

        <!-- Right-aligned Navigation Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../donor.php">Donors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../search.php">Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../signin.php">Sign In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../about.php">About Us</a>
            </li>
            <!-- Dropdown for Logged-in Donor -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Donor Name <!-- Replace with actual donor name dynamically -->
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="./index.php">
                        <i class="fa fa-user" aria-hidden="true"></i> Profile
                    </a>
                    <a class="dropdown-item" href="./update.php">
                        <i class="fa fa-edit" aria-hidden="true"></i> Update Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
