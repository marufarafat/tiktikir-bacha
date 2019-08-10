<?php include'template/head-side-top-nav-ber.php';?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User <small>contact</small></h3>
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
                    <h2>List off all contact us <small></small></h2>
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
                   <?php
					if (isset($_GET['id'])){
						$id = $_GET['id'];
						$query="delete from contactus where id='$id'";
						$run=mysqli_query($conn,$query);
						
						if($run===true){
							echo "<script type='text/javascript'>alert('Message deleted successfully!')</script>";
						}else{
							echo "<script type='text/javascript'>alert('Message are not daleted ')</script>";
						}
					}				 	
					
					?>  
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Clint Name</th>
                          <th>Messages</th>
						  <th>Phone number</th>
                          <th>Email</th>
                          
						<th style="width: 20%">#Edit</th>
                        </tr>
                      </thead>
						<?php
						$i = 0;						
						$query = "SELECT * FROM `contactus`";
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
                          <td><?php echo $row['name'];?></td>
                          <td><?php echo $row['message'];?></td>
						  <td><?php echo $row['phone'];?></td>
                          <td><?php echo $row['email'];?></td>
                          <td>
							<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
							<a href="messages.php?id=<?= $row ['id'];?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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