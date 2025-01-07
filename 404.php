<?php 
	// Include header file
	include ('include/header.php');
?>

<style>
	.error {
		color: #e74c3c;
		font-size: 10em;
		font-weight: 700;
		line-height: 1;
	}
	.head-para h3 {
		font-weight: 600;
		color: #2c3e50;
	}
	.head-para p {
		color: #7f8c8d;
	}
	a {
		margin-top: 20px;
		display: inline-block;
	}
	.container {
		margin-top: 50px;
		text-align: center;
	}
	.btn-danger {
		background-color: #e74c3c;
		border: none;
		transition: background-color 0.3s ease;
	}
	.btn-danger:hover {
		background-color: #c0392b;
	}
	body {
		background: #f7f7f7;
		font-family: 'Arial', sans-serif;
	}
</style>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h1 class="error">404</h1>
			<div class="head-para">
				<h3>Oops, we can't find that page!</h3>
				<p>It looks like the page you're trying to access doesn't exist or has been moved.</p>
			</div>	
			<a href="index.php" class="btn btn-lg btn-danger">Return to Home</a>
		</div>
	</div>
</div>


<?php 

	include ('include/footer.php');
?>

