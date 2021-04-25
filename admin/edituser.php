
    <?php
session_start();
include("db.php");
$id=$_REQUEST['id'];

$result=mysqli_query($con,"select id,username, email, password from users where id='$id'")or die ("query 1 incorrect.......");

list($id,$username,$email,$password)=mysqli_fetch_array($result);

if(isset($_POST['btn_save']))
{

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

mysqli_query($con,"update users set username='$username', email='$email', password='$password' where id='$id'")or die("Query 2 is inncorrect..........");

header("location: manageuser.php");
mysqli_close($con);
}
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        <div class="col-md-5 mx-auto">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Edit User</h5>
              </div>
              <form action="edituser.php" name="form" method="post" enctype="multipart/form-data">
              <div class="card-body">

                  <input type="hidden" name="id" id="id" value="<?php echo $id;?>" />
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>User Name</label>
                        <input type="text" id="first_name" name="username"  class="form-control" value="<?php echo $username; ?>" >
                      </div>
                    </div>

                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email"  id="email" name="email" class="form-control" value="<?php echo $email; ?>">
                      </div>
                    </div>

                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label >Password</label>
                        <input type="text" name="password" id="password" class="form-control" value="<?php echo $password; ?>">
                      </div>
                    </div>




              </div>
              <div class="card-footer">
                <button type="submit" id="btn_save" name="btn_save" class="btn btn-fill btn-primary">Update</button>
              </div>
              </form>
            </div>
          </div>


        </div>
      </div>
      <?php
include "footer.php";
?>
