<?php
// Assume $user is an associative array with user data fetched from the database
$name = htmlspecialchars($user['name']);
$email = htmlspecialchars($user['email']);
$contact_no = htmlspecialchars($user['contact_no']);
$city = htmlspecialchars($user['city']);
$blood_group = htmlspecialchars($user['blood_group']);
$gender = htmlspecialchars($user['gender']);
?>
<input type="text" required name="name" class="form-control" value="<?php echo $name; ?>">
<select class="form-control demo-default" id="blood_group" name="blood_group">
    <option value="A+" <?php if ($blood_group == "A+") echo 'selected'; ?>>A+</option>
    <!-- Repeat for other blood groups -->
</select>
