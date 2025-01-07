<h3>Welcome </h3> <h1><?php echo $_SESSION['username']; ?></h1>
h1, h3 {
    display: inline-block;
    padding: 10px;
}

.alert-danger {
    font-size: 18px;
    display: none;
    padding: 20px;
}

.buttons {
    padding: 20px 10px;
}

#data {
    margin-top: 20px;
}

<script>
    document.getElementById("save_the_life").addEventListener("click", function () {
        const alertBox = document.querySelector(".alert-danger");
        alertBox.style.display = "block"; // Show the alert
    });

    document.getElementById("yes").addEventListener("click", function () {
        const today = new Date().toISOString().slice(0, 10); // Get today's date
        document.querySelector("input[name='today']").value = today;

        // Display success message and hide the button
        document.getElementById("data").innerHTML = "<strong>Success!</strong> You have successfully saved a life today!";
        document.getElementById("save_the_life").style.display = "none";

        // Here you would also send the date to your server for database updates using AJAX or a form submission.
    });

    document.getElementById("no").addEventListener("click", function () {
        // Simply hide the alert box if "No" is clicked
        document.querySelector(".alert-danger").style.display = "none";
    });
</script>
<?php
// Example database query to fetch last donation date
$user_id = $_SESSION['user_id']; // Get user ID from session
$query = "SELECT last_donation_date FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if ($row) {
    $last_donation_date = $row['last_donation_date'];
    $current_date = date('Y-m-d');
    $date_diff = (strtotime($current_date) - strtotime($last_donation_date)) / (60 * 60 * 24);

    if ($date_diff < 90) {
        echo "<script>document.getElementById('save_the_life').style.display = 'none';</script>";
        echo "<div class='text-center'><strong>You can donate again after " . (90 - $date_diff) . " days.</strong></div>";
    }
}
?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
