<?php 
    include ('include/header.php');
?>
<link rel="stylesheet" href="css/style.css">

<!-- Header Section -->
<div class="container-fluid header-img" style="background: url('img/bg.jpg') center center / cover no-repeat; padding: 100px 0;">
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <h1 style="color: white; font-size: 48px; font-weight: bold;">Donate the blood, save the life</h1>
            <p style="color: white; font-size: 18px; margin-top: 10px;">Donate the blood to help the others.</p>

            <!-- Search Section -->
            <h2 style="color: white; font-size: 32px; margin-top: 30px;">Search The Donors</h2>
            <hr style="width: 50px; border: 2px solid white; margin: 10px auto;">

            <form action="search_donors.php" method="get" class="text-center mt-4">
                <div class="form-group d-inline-block" style="margin-right: 10px;">
                    <select name="district" id="district" class="form-control" style="width: 220px; height: 50px;" required>
                        <option value="">-- Select District --</option>
                        <?php
                        $districts = [
                            "Achham", "Arghakhanchi", "Baglung", "Baitadi", "Bajhang", "Bajura", "Banke", "Bara", "Bardiya", "Bhaktapur", "Bhojpur", 
                            "Chitwan", "Dadeldhura", "Dailekh", "Dang", "Darchula", "Dhading", "Dhankuta", "Dhanusha", "Dolakha", "Dolpa", "Doti", 
                            "Eastern Rukum", "Gorkha", "Gulmi", "Humla", "Ilam", "Jajarkot", "Jhapa", "Jumla", "Kailali", "Kalikot", "Kanchanpur", 
                            "Kapilvastu", "Kaski", "Kathmandu", "Kavrepalanchok", "Khotang", "Lalitpur", "Lamjung", "Mahottari", "Makwanpur", 
                            "Manang", "Morang", "Mugu", "Mustang", "Myagdi", "Nawalpur", "Nuwakot", "Okhaldhunga", "Palpa", "Panchthar", "Parasi", 
                            "Parbat", "Parsa", "Pyuthan", "Ramechhap", "Rasuwa", "Rautahat", "Rolpa", "Rupandehi", "Salyan", "Sankhuwasabha", 
                            "Saptari", "Sarlahi", "Sindhuli", "Sindhupalchok", "Siraha", "Solukhumbu", "Sunsari", "Surkhet", "Syangja", "Tanahun", 
                            "Taplejung", "Tehrathum", "Udayapur", "Western Rukum"
                        ];
                        foreach ($districts as $district) {
                            echo "<option value='$district'>$district</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group d-inline-block" style="margin-right: 10px;">
                    <select name="blood_group" id="blood_group" class="form-control" style="width: 220px; height: 50px;" required>
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

                <div class="form-group d-inline-block">
                    <button type="submit" class="btn btn-danger" style="width: 120px; height: 50px;">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Donate Section -->
<div class="container-fluid" style="background-color:rgb(133, 97, 94); padding: 50px 0;">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 style="color: white; font-size: 36px; font-weight: bold;">Donate The Blood</h1>
            <hr style="width: 50px; border: 2px solid white; margin: 20px auto;">
            <p style="color: white; font-size: 16px; margin-bottom: 30px;">
                Join our mission to promote education and health.
            </p>
            <a href="#" class="btn btn-light btn-lg">Become a Life Saver!</a>
        </div>
    </div>
</div>

<?php
include ('include/footer.php');
 ?>