<?php 
	//include header file
	include ('include/header.php');
?>

<style>
	.size {
		min-height: 0px;
		padding: 60px 0 40px 0;
	}
	.loader {
		display: none;
		width: 69px;
		height: 89px;
		position: absolute;
		top: 25%;
		left: 50%;
		padding: 2px;
		z-index: 1;
	}
	.loader .fa {
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group {
		text-align: left;
	}
	h1 {
		color: white;
	}
	h3 {
		color: #e74c3c;
		text-align: center;
	}
	.red-bar {
		width: 25%;
	}
	span {
		display: block;
	}
	.name {
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data {
		background-color: white;
		border-radius: 5px;
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		padding: 20px 10px 20px 30px;
	}
</style>

<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
				<div class="form-group text-center center-aligned">
				<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" aria-label="Select City" required>
    <option value="">-- Select City --</option>
					<!-- Add city options dynamically or keep as static options -->
					<option value="Achham">Achham</option>
					<option value="Arghakhanchi">Arghakhanchi</option>
					<option value="Baglung">Baglung</option>
					<option value="Baitadi">Baitadi</option>
					<option value="Bajhang">Bajhang</option>
					<option value="Bajura">Bajura</option>
					<option value="Banke">Banke</option>
					<option value="Bara">Bara</option>
					<option value="Bardiya">Bardiya</option>
					<option value="Bhaktapur">Bhaktapur</option>
					<option value="Bhojpur">Bhojpur</option>
					<option value="Chitwan">Chitwan</option>
					<option value="Dadeldhura">Dadeldhura</option>
					<option value="Dailekh">Dailekh</option>
					<option value="Dang">Dang</option>
					<option value="Darchula">Darchula</option>
					<option value="Dhading">Dhading</option>
					<option value="Dhankuta">Dhankuta</option>
					<option value="Dhanusha">Dhanusha</option>
					<option value="Dolakha">Dolakha</option>
					<option value="Dolpa">Dolpa</option>
					<option value="Doti">Doti</option>
					<option value="Eastern Rukum">Eastern Rukum</option>
					<option value="Gorkha">Gorkha</option>
					<option value="Gulmi">Gulmi</option>
					<option value="Humla">Humla</option>
					<option value="Ilam">Ilam</option>
					<option value="Jajarkot">Jajarkot</option>
					<option value="Jhapa">Jhapa</option>
					<option value="Jumla">Jumla</option>
					<option value="Kailali">Kailali</option>
					<option value="Kalikot">Kalikot</option>
					<option value="Kanchanpur">Kanchanpur</option>
					<option value="Kapilvastu">Kapilvastu</option>
					<option value="Kaski">Kaski</option>
					<option value="Kathmandu">Kathmandu</option>
					<option value="Kavrepalanchok">Kavrepalanchok</option>
					<option value="Khotang">Khotang</option>
					<option value="Lalitpur">Lalitpur</option>
					<option value="Lamjung">Lamjung</option>
					<option value="Mahottari">Mahottari</option>
					<option value="Makwanpur">Makwanpur</option>
					<option value="Manang">Manang</option>
					<option value="Morang">Morang</option>
					<option value="Mugu">Mugu</option>
					<option value="Mustang">Mustang</option>
					<option value="Myagdi">Myagdi</option>
					<option value="Nawalpur">Nawalpur</option>
					<option value="Nuwakot">Nuwakot</option>
					<option value="Okhaldhunga">Okhaldhunga</option>
					<option value="Palpa">Palpa</option>
					<option value="Panchthar">Panchthar</option>
					<option value="Parasi">Parasi</option>
					<option value="Parbat">Parbat</option>
					<option value="Parsa">Parsa</option>
					<option value="Pyuthan">Pyuthan</option>
					<option value="Ramechhap">Ramechhap</option>
					<option value="Rasuwa">Rasuwa</option>
					<option value="Rautahat">Rautahat</option>
					<option value="Rolpa">Rolpa</option>
					<option value="Rupandehi">Rupandehi</option>
					<option value="Salyan">Salyan</option>
					<option value="Sankhuwasabha">Sankhuwasabha</option>
					<option value="Saptari">Saptari</option>
					<option value="Sarlahi">Sarlahi</option>
					<option value="Sindhuli">Sindhuli</option>
					<option value="Sindhupalchok">Sindhupalchok</option>
					<option value="Siraha">Siraha</option>
					<option value="Solukhumbu">Solukhumbu</option>
					<option value="Sunsari">Sunsari</option>
					<option value="Surkhet">Surkhet</option>
					<option value="Syangja">Syangja</option>
					<option value="Tanahun">Tanahun</option>
					<option value="Taplejung">Taplejung</option>
					<option value="Tehrathum">Tehrathum</option>
					<option value="Udayapur">Udayapur</option>
					<option value="Western Rukum">Western Rukum</option>
				</select>

				</div>
				<div class="form-group center-aligned">
					<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px" aria-label="Select Blood Group">
						<option value="">-- Select Blood Group --</option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
					</select>
				</div>
				<div class="form-group center-aligned">
					<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row" id="data">
		<!-- Display The Search Result -->
	</div>
</div>

<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {
		$("#search").on("click", function() {
			let city = $("#city").val();
			let blood_group = $("#blood_group").val();
			
			// Validate inputs
			if (city === "" || blood_group === "") {
				alert("Please select both city and blood group.");
				return;
			}

			// Show loader
			$("#wait").show();

			// AJAX request
			$.ajax({
				url: "search_donors.php", // Server-side script to fetch donors
				method: "POST",
				data: {
					city: city,
					blood_group: blood_group
				},
				success: function(response) {
					$("#wait").hide();
					$("#data").html(response);

					// Handle no results
					if (!$.trim(response)) {
						$("#data").html("<h3 class='text-center'>No donors found.</h3>");
					}
				},
				error: function() {
					$("#wait").hide();
					alert("An error occurred while fetching the data.");
				}
			});
		});
	});
</script>

<?php 
	//include footer file
	include ('include/footer.php');
?>
