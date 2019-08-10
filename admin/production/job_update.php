<?php include 'template/head-side-top-nav-ber.php';?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
			<div class="clearfix"></div>
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Plain Page</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				 <div class="row">
                     <div class="col-md-12">
                         <?php
                            if (isset($_POST['jobupdate'])){
                                $id = mysqli_real_escape_string($conn, $_GET['id']);
                                $title = mysqli_real_escape_string($conn, $_POST['job_title']);
                                $jprice = mysqli_real_escape_string($conn, $_POST['job_price']);
                                $jdes = mysqli_real_escape_string($conn, $_POST['job_des']);
                                $type = mysqli_real_escape_string($conn, $_POST['job_type']);

                                if (empty($title) || empty($jprice) || empty($jdes) || empty($type)){
                                    $msg = "All the fields are required";
                                }else{
                                    $ujob = "UPDATE job SET job_title = '$title', job_price = '$jprice', job_details = '$jdes', job_type = '$type' WHERE job_id = '$id'";
                                    if (mysqli_query($conn, $ujob)){
                                        $msg = "Successfully Updated Job";
                                    }else{
                                        $msg = "Job not updated";
                                    }
                                }
                            }

                            if (isset($_GET['id']) || !empty($_GET['id'])){
                                $id = $_GET['id'];
                                $jdsql = "SELECT * FROM `job` WHERE `job_id` = '$id'";
                                $fet = mysqli_fetch_assoc(mysqli_query($conn, $jdsql));
                            }
                         ?>
                         <h2>Job Details</h2>
                            <?php if (isset($msg)){?>
                                <div class="alert alert-primary"><?=$msg;?></div>
                            <?php }?>
                         <form class="form-horizontal" action="job_update.php?id=<?=$id?>" method="post">
                             <div class="form-group">
                                 <label>Job Title</label><br>
                                 <input type="text" name="job_title" class="form-control" value="<?=$fet['job_title'];?>">
                             </div>
                             <div class="form-group">
                                 <label>Job Salary</label><br>
                                 <input type="text" name="job_price" class="form-control" value="<?=$fet['job_price'];?>">
                             </div>
                             <div class="form-group">
                                 <label>Job Description</label><br>
                                 <textarea name="job_des" rows="10" class="form-control"><?=$fet['job_details'];?></textarea>
                             </div>
                             <div class="form-group">
                                 <label>Job Type</label><br>
                                 <select class="form-control" name="job_type">
                                     <option value="default">Choose Job Type</option>
                                     <option value="Part time"<?php if($fet['job_type'] == "Part time"){ echo "selected";}?>>Part time</option>
                                     <option value="Full time"<?php if($fet['job_type'] == "Full time"){ echo "selected";}?>>Full time</option>
                                 </select>
                             </div>

                             <hr>
                             <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="jobupdate">Update Job</button>
                             </div>
                         </form>
                     </div>
			</div>
				 
				 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
<?php include'template/footer.php';?>