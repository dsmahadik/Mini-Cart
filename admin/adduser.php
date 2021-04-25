 <?php
session_start();
include("db.php");
include "sidenav.php";
include "topheader.php";
if(isset($_POST['btn_save']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
if (! empty($_POST["password"])) {

    // PHP's password_hash is the best choice to use to store passwords
    // do not attempt to do your own encryption, it is not safe
    $hashedPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);
}

mysqli_query($con,"insert into users(username,password,email) values ('$username','$hashedPassword','$email')")
			or die ("Query 1 is inncorrect........");

mysqli_close($con);
}


?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Users</h4>
                  <p class="card-category">Complete User profile</p>
                </div>
                <div class="card-body">
                  <form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">

                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" id="first_name" name="username" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                      </div>
                    </div>

                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">Add User</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
      <?php
?>
