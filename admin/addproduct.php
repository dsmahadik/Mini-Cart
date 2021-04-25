  <?php
session_start();
include("db.php");


if(isset($_POST['btn_save']))
{
$item_name=$_POST['item_name'];
$details=$_POST['details'];
$price=$_POST['price'];
$product_type=$_POST['product_type'];
$brand=$_POST['brand'];
$tags=$_POST['tags'];

//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)

		$pic_name=time()."_".$picture_name;
    $pic_loc="./assets/products/".$picture_name;
		move_uploaded_file($picture_tmp_name,$pic_loc);

mysqli_query($con,"insert into product (item_category, item_brand, item_name, item_price, item_image) values ('$product_type','$brand','$item_name','$price','$pic_loc')") or die ("query incorrect");

 header("location: sumit_form.php?success=1");
}

mysqli_close($con);
}
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
          <div class="row">


         <div class="col-md-7">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Add Product</h5>
              </div>
              <div class="card-body">

                  <div class="row">

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Product Title</label>
                        <input type="text" id="item_name" required name="item_name" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <label for="">Add Image</label>
                        <input type="file" name="picture" required class="btn btn-fill btn-success" id="picture" >
                      </div>
                    </div>
                    <br>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Pricing</label>
                        <input type="text" id="price" name="price" required class="form-control" >
                      </div>
                    </div>
                  </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label>Product Category</label>
                    <input type="text" id="product_type" name="product_type" required class="form-control" >
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label>Product Brand</label>
                  <input type="text" id="brand" name="brand" required class="form-control" >
                </div>
              </div>
            </div>

              </div>

            </div>
          </div>

          <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Add Product</button>

            </div>
          </div>

        </div>
         </form>

        </div>
      </div>
