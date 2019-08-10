<?php include 'template/head-side-top-nav-ber.php';?>
<?php include 'add_campaign_action.php';?>
        <!-- page content -->
		
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Campaign Details</h3>
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
				<div class="col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2>Add a Campaign</h2>

							<div class="clearfix"></div>
						</div>
						<div class="x_content">
						<br />
							<form class="form-horizontal form-label-left" action="add_campaign.php" method="POST" enctype="multipart/form-data">
								<div class="row">
								<div class="col-md-12">
                                    <?php if (isset($msg)){?>
                                        <div class="alert alert-primary"><?=$msg;?></div>
                                    <?php }?>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-4">Campaign Title</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="campaigntitle">
											<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4">Description</label>
										<div class="col-md-6">
											<textarea type="text" class="form-control" name="description"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4">Start Date</label>
										<div class="col-md-6">
											<input type="date" class="form-control" name="startdate">
											<span class="fa fa-calender" aria-hidden="true"></span>
										</div>
									</div>
										<div class="form-group">
										<label class="col-md-4">End Date</label>
										<div class="col-md-6">
											<input type="date" class="form-control" name="enddate">
											<span class="fa fa-calender" aria-hidden="true"></span>
										</div>
									</div>									
								</div>
																
								<div class="col-md-6">
										<div class="form-group">
										<label class="col-md-2">Place</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="place">
											<span class="map-marke" aria-hidden="true"></span>
										</div>
									</div>									
								</div>
          						
							
								<div class="ln_solid"></div> 
								<div class="form-group">
									<div class="col-md-9 col-md-offset-3">
									  <button type="button" class="btn btn-primary" name="cancel">Cancel</button>
									  <button type="submit" class="btn btn-success" name="submit">Submit</button>
									</div>
								</div>									
							</form>
						</div>	
					</div>
				</div>
            </div>
              <!-- /form input mask -->
       </div>
    </div>
        
		<!-- /page content -->

        <!-- footer content -->
<?php include'template/footer.php';?>