<?php 
	include 'header.php'; 
?>

<style>
	h1, h3 {
		display: inline-block;
		padding: 10px;
	}
	.alert {
		display: none;
	}
	.buttons {
		padding: 20px 10px;
	}
</style>

<div class="container" style="padding: 60px 0;">
	<div class="row">
		<div class="col-md-12 col-md-push-1">
			<div class="panel panel-default" style="padding: 20px;">
				<div class="panel-body">
					<div class="alert alert-danger alert-dismissable" id="warning" style="font-size: 18px;">
						<strong>Warning!</strong> Are you sure you want to save a life? If you press "Yes," you will not be able to donate again before 3 months.
						<div class="buttons">
							<input type="hidden" id="today" value="<?php echo date('Y-m-d'); ?>">
							<button class="btn btn-primary" id="yes" type="button">Yes</button>
							<button class="btn btn-info" id="no" type="button">No</button>
						</div>
					</div>
					<div class="heading text-center">
						<h3>Welcome</h3> 
						<h1>User Name</h1>
					</div>
					<p class="text-center">Here you can manage your account and update your profile.</p>
					<button style="margin-top: 20px;" id="save_the_life" class="btn btn-lg btn-danger center-aligned">Save The Life</button>
					<div class="test-success text-center" id="data" style="margin-top: 20px;"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {
		// Show the alert when "Save The Life" button is clicked
		$("#save_the_life").on("click", function() {
			$("#warning").fadeIn();
		});

		// Handle the "Yes" button click
		$("#yes").on("click", function() {
			let today = $("#today").val();
			
			// Make AJAX request to save the life
			$.ajax({
				url: "save_life.php", // Hypothetical PHP script to handle the save logic
				type: "POST",
				data: { date: today },
				success: function(response) {
					// Hide the alert
					$("#warning").fadeOut();
					// Show success message
					$("#data").html("<div class='alert alert-success'>Thank you for saving a life! You can donate again after 3 months.</div>");
				},
				error: function() {
					// Show error message
					$("#data").html("<div class='alert alert-danger'>An error occurred while saving. Please try again later.</div>");
				}
			});
		});

		// Handle the "No" button click
		$("#no").on("click", function() {
			$("#warning").fadeOut();
		});
	});
</script>

<?php
	include 'footer.php'; 
?>
