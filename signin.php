<?php 
  // Include header file
  include ('include/header.php');
?>

<style>
  .red-background {
    background-color: #e74c3c;
    padding: 60px 0;
    color: white;
  }

  .form-container {
    background-color: white;
    border: 1px solid #eee;
    border-radius: 8px;
    padding: 30px 20px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  }

  h1, h3 {
    text-align: center;
  }

  h1 {
    color: white;
    font-weight: bold;
  }

  h3 {
    color: #e74c3c;
  }

  .red-bar {
    width: 50px;
    height: 4px;
    background-color: #e74c3c;
    margin: 10px auto;
  }

  .form-control {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    font-size: 16px;
  }

  .btn-danger {
    background-color: #e74c3c;
    border-color: #e74c3c;
    width: 100%;
    font-size: 18px;
    font-weight: bold;
    padding: 10px;
  }

  .btn-danger:hover {
    background-color: #c0392b;
    border-color: #c0392b;
  }
</style>

<div class="container-fluid red-background">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h1>Sign In</h1>
      <div class="red-bar"></div>
    </div>
  </div>
</div>

<div class="container my-5">
  <div class="row">
    <div class="col-md-6 offset-md-3 form-container">
      <h3>Sign In</h3>
      <div class="red-bar"></div>

      <!-- Error Messages -->

      <form action="" method="post">
        <div class="form-group mt-4">
          <label for="email">Email/Phone No.</label>
          <input type="text" name="email_phone" class="form-control" placeholder="Enter Email or Phone" required>
        </div>
        <div class="form-group mt-3">
          <label for="password">Password</label>
          <input type="password" name="password" placeholder="Enter Password" required class="form-control">
        </div>
        <div class="form-group mt-4">
          <button class="btn btn-danger" type="submit" name="SignIn">Sign In</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php 
include 'include/footer.php'; 
?>
