<?php include 'template/head-side-top-nav-ber.php';?>
<?php

if (isset($_POST['submit'])){
    if(isset($_POST['submit'])){
        $id = $_GET['servid'];
        $package 			= mysqli_real_escape_string($conn, $_POST['package']);
        $description 		= mysqli_real_escape_string($conn, $_POST['description']);
        $worker 			= mysqli_real_escape_string($conn, $_POST['wprice']);
        $hour 				= mysqli_real_escape_string($conn, $_POST['hprice']);
        $price	 			= mysqli_real_escape_string($conn, $_POST['price']);

        if (empty($package)) {
            $msg = "Package field can't blank";
        }elseif (empty($hour)) {
            $msg = "Hour field can't blank";
        }elseif (empty($description)) {
            $msg = "Description can't blank";
        }elseif (empty($price)) {
            $msg = "Price field can't blank";
        }elseif (preg_match("/^[a-zA-Z ]*$/",$price)) {
            $msg = "Price can't be letter";
        }elseif (preg_match("/^[a-zA-Z ]*$/",$worker)) {
            $msg = "Worker Price can't be letter";
        }elseif (preg_match("/^[a-zA-Z ]*$/",$hour)) {
            $msg = "Hour Price can't be letter";
        }else{
            $query = "UPDATE service SET service_name = '$package', servece_details = '$description', worker = '$worker', `hour` = '$hour', service_price = '$price' WHERE service_id = '$id'";
            $run = mysqli_query($conn,$query);
            if($run== true){
                $msg = "Package Updated Successfully";
            }else{
                $msg = "Package not Updated";
            }
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
                    <h2>Add Service</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>

                      <?php if (isset($_GET['servid'])){
                          $id = $_GET['servid'];

                          $sfet = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM service WHERE service_id = '$id'"));

                      }else{
                          header('Location: all_custom_services.php');
                      }?>
                    <form class="form-horizontal form-label-left" action="update_custom_service.php?servid=<?=$id;?>" method="POST" enctype="multipart/form-data">
					<div class="col-md-12">
                        <?php if (isset($msg)){?>
                            <div class="alert alert-primary"><?=$msg;?></div>
                        <?php }?>
					</div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Service name</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" class="form-control" name="package" value="<?=$sfet['service_name'];?>">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Service description</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"><?=$sfet['servece_details'];?></textarea>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					 
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Per worker price</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" class="form-control" name="wprice" value="<?=$sfet['worker'];?>">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Per Hour price</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" class="form-control" name="hprice" value="<?=$sfet['hour'];?>">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>					  
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Service price</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" class="form-control" name="price" value="<?=$sfet['service_price'];?>">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
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
