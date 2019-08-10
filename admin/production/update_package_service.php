<?php include 'template/head-side-top-nav-ber.php';?>
<?php

if (isset($_POST['submit'])){
    $id = $_GET['pakid'];
    $package 			= mysqli_real_escape_string($conn, $_POST['package']);
    $area 				= mysqli_real_escape_string($conn, $_POST['area']);
    $description 		= mysqli_real_escape_string($conn, $_POST['description']);
    $worker 			= mysqli_real_escape_string($conn, $_POST['worker']);
    $price	 			= mysqli_real_escape_string($conn, $_POST['price']);

    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    if (empty($package)) {
        $msg = "Package field can't blank";
    }elseif (empty($description)) {
        $msg = "Description can't blank";
    }elseif (empty($price)) {
        $msg = "Price field can't blank";
    }elseif (preg_match("/^[a-zA-Z ]*$/",$price)) {
        $msg = "Price can't be letter";
    }elseif (preg_match("/^[a-zA-Z ]*$/",$area)) {
        $msg = "Area can't be letter";
    }elseif($_POST['worker'] == "default"){
        $msg = "Please select One option from Worker";
    }else{
        if (!empty($image)){
            move_uploaded_file($image_tmp,"../../img/package/$image");

            $query = "UPDATE package SET package_name = '$package', package_area = '$area', package_details = '$description', worker = '$worker', package_price = '$price', package_image = '$image' WHERE package_id = '$id'";
        }else{
            $query = "UPDATE package SET package_name = '$package', package_area = '$area', package_details = '$description', worker = '$worker', package_price = '$price' WHERE package_id = '$id'";
        }

        $run = mysqli_query($conn,$query);
        if($run== true){
            $msg = "Package Updated Successfully";
        }else{
            $msg = "Package not updated";
        }
    }
}

?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form advanced</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <!-- form input mask -->
              <div class="col-md- col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update Package</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                      <?php if (isset($_GET['pakid'])){
                          $id = $_GET['pakid'];

                          $sfet = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM package WHERE package_id = '$id'"));

                      }else{
                          header('Location: all_custom_services.php');
                      }?>
                    <form class="form-horizontal form-label-left" action="update_package_service.php?pakid=<?=$id;?>" method="POST" enctype="multipart/form-data">
					<div class="col-md-12">
                        <?php if (isset($msg)){?>
                            <div class="alert alert-primary"><?=$msg;?></div>
                        <?php }?>
					</div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Package name</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" class="form-control" name="package" value="<?=$sfet['package_name'];?>">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Package description</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <textarea name="description" id="" cols="30" rows="5" class="form-control"><?=$sfet['package_details'];?></textarea>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Area sq:ft:</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" class="form-control" name="area" value="<?=$sfet['package_area'];?>">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					   <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-3">Worker</label>
							<div class="col-md-6 col-sm-12">
								<select class="select2_single form-control" tabindex="-1" name="worker">
                                    <option value="<?=$sfet['worker'];?>"><?=$sfet['worker'];?></option>
									<option value="default">default</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
								</select>
							</div>
						</div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Package price</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" class="form-control" name="price" value="<?=$sfet['package_price'];?>">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>					  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">image</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="file" class="form-control" name="image">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true">
                          </span><br>
                            <img src="../../img/package/<?=$sfet['package_image'];?>" style="width: 100px;">
                        </div>
                      </div>								
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        </div>
                      </div>
                    </form>
					</div>
                </div>
              </div>
              <!-- /form input mask -->
           </div>
        </div>
        </div>
		<!-- /page content -->

<?php include'template/footer.php';?>
