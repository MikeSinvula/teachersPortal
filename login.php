<?php
session_start();
?>

<!doctype html>
<html lang="en">
<?php include('functions/head.php');?>
<body>

<header class="main-header">
    <?php include('functions/navigation.php'); ?>
</header>

<section>
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-4 well">
              <h2 class="text-center">Login</h2>
              <form>
                  <div class="form-group">
                      <label for="email">Email </label>
                          <input type="email" class="form-control" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                      <label for="password">Password</label>

                          <input type="password" class="form-control" id="password" placeholder="Password">
                      </div>
                  <div class="text-center">
                      <button type="submit" class="btn btn-success">Sign in</button>
                  </div>
                  <?php
                 if(isset($_SESSION['registeredCompleted'])){

                  ?>
                  <div>
                      <p class="text-center">You have successfully Registered!!!</p>
                  </div>
                  <?php
                  unset($_SESSION['registeredCompleted']);}
                  ?>
              </form>
          </div>
          </div>
      </div>
</section>




<?php include('functions/footer.php'); ?>
</body>
</html>

