<?php include'template/head-side-top-nav-ber.php';?>
<?php
if (isset($_GET['del'])){
    $delid = "DELETE FROM user_problem WHERE problem_id = '".$_GET['del']."'";
    $delrun = mysqli_query($conn, $delid);

    if ($delrun){
        $msg = "Problem Deleted";
    }else{
        $msg = "Problem Not Deleted";
    }
}
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> All Problem <small> list </small></h3>
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
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Problem details<small></small></h2>
                      <br>
                      <br>
                      <?php if (isset($msg)){?>
                          <div class="alert alert-success"><?=$msg;?></div>
                      <?php }?>
	
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
					  
                        <tr>
                          <th>#</th>
						  <th>Problem Title</th>
                          <th>User name</th>
                          <th>Email</th>
                          <th>Problem Description</th>
                          <th>Image</th>
						  <th style="width: 20%">#Edit</th>
                        </tr>
					
                      </thead>
					 
					  
					<?php
						$i = 0;						
						$query = "select * from user_problem inner join user on user_problem.user_id = user.user_id";
						 
						$run = mysqli_query($conn,$query);
						if (!$query) {
						printf("Error: %s\n", mysqli_error($conn));
						exit();
						}
						error_reporting(0);
						while($row = mysqli_fetch_array($run)){
					
						$i++;					  
					  ?>
                      <tbody>
						<tr>
                          <td><?php echo $i;?></td>
                          <td><?php echo $row['title'];?></td>
                          <td><?php echo $row['name'];?></td>
                          <td><?php echo $row['email'];?></td>
                          <td><?php echo $row['description'];?></td>
                          <td> <img src="../../img/problemsolution/<?php echo $row['image'];?>" style="width: 150px;height: 150px;"/></td>
                          <td>
							<a href="single_problem.php?id=<?php echo $row['problem_id'];?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
							<a href="user_problem.php?del=<?php echo $row['problem_id'];?>" class="btn btn-danger btn-xs"><i class="fa fa-folder"></i> Delete </a>
						  </td>
                        </tr>
						
                       </tbody>
						<?php }?>
					  </table>
                  </div>
                </div>
              </div>
			</div>
          </div>
        </div>
        <!-- /page content -->
<?php include'template/footer.php';?>