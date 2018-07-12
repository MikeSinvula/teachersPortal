<?php
?>

<?php
?>
<?php
?>
<!doctype html>
<html lang="en">
<?php include ('functions/head.php');?>
<body>

<header class="main-header">
    <?php include ('functions/navigation.php'); ?>
</header>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 well">
                <h2 class="text-center">Register</h2>
                <form method="post" action="adduser.php">
                    <div class="form-group">
                        <label for="name">First Name </label>
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="name">Last Name </label>
                        <input type="text" class="form-control"  name="lname" id="lname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control"  name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>

                        <input type="password" class="form-control"  name="password8" id="password" placeholder="Password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>




<?php include ('functions/footer.php'); ?>
</body>
</html>


