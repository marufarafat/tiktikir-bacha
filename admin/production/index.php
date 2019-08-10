<?php include 'template/head-side-top-nav-ber.php'; error_reporting(0);?>
		<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dashboard </h3>
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
		<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Campaign List<small></small></h2>
	
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
						  <th>Campaign Title</th>
                     	  <th>Campaign Description</th>
						  <th>Status</th>
						  <th>Date</th>
                        </tr>
					
                      </thead>
					 
					  
					<?php
						$i = 0;						
						$query = "select * from product";
						 
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
                          <td><?php echo $row['campaigntitle'];?></td>
                          <td><?php echo $row['campaigndesc'];?></td>
                          <td><?php echo $row['status'];?></td>
                          <td><?php echo $row['date'];?></td>
                      <!--    <td><?php echo $row['description'];?></td>
                          <td><?php echo $row['status'];?></td>
                          <td> <img src="../../img/product/<?php echo $row['image'];?>" style="width: 150px;height: 150px;"/></td>        -->
                        </tr>
						
                       </tbody>
						<?php }?>
					  </table>
                  </div>
                </div>
              </div>
			</div>
            <div class="clearfix"></div>
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                </div>
              </div>
			</div>
          
     
          </div>
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ALL USERS LIST<small>Users</small></h2>
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
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                        </tr>
					
                      </thead>
					<?php
						$i = 0;						
						$query = "SELECT * FROM `user`";
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
                          <td><?php echo $row['email'];?></td>
                          <td><?php echo $row['phone'];?></td>
                          <td><?php echo $row['address'];?></td>
                        </tr>
						
                       </tbody>
						<?php }?>
					  </table>
					   
					
					<script>
						function myFunction() {
					  var input, filter, table, tr, td, i;
					  input = document.getElementById("myInput");
					  filter = input.value.toUpperCase();
					  table = document.getElementById("myTable");
					  tr = table.getElementsByTagName("tr");
					  for (i = 0; i < tr.length; i++) {
						td = tr[i].getElementsByTagName("td")[5];
						if (td) {
						  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
							tr[i].style.display = "";
						  } else {
							tr[i].style.display = "none";
						  }
						}       
					  }
					}
					</script>
				  </div>
                </div>
              </div>
              </div>
			<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ALL STAFF <small></small></h2>
	
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
                          <th>Name</th>
						  <th>Contact</th>
                          <th>Email</th>
                          <th>Gender</th>
                          <th>Designation</th>
                        </tr>
					
                      </thead>
					  <?php
						$i = 0;						
						$query = "SELECT * FROM `staff`";
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
                          <td><?php echo $row['name'];?> <?php echo $row['lastName'];?></td>
                          <td><?php echo $row['phone'];?></td>
                          <td><?php echo $row['email'];?></td>
                          <td><?php echo $row['gender'];?></td>
                          <td><?php echo $row['post'];?></td>
                        </tr>
						
                       </tbody>
						<?php }?>
					  </table>
                  </div>
                </div>
              </div>
			</div>
          
		  
        </div>
        <!-- /page content -->
        <!-- footer content -->
 <?php include'template/footer.php';?>