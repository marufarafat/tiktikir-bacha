					
					<?php
								if(isset($_POST['submit'])){
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
                                        $query = "INSERT INTO `service`(`service_name`, `servece_details`, `worker`, `hour`, `service_price`)
										VALUES('$package','$description','$worker','$hour','$price')";
                                        $run = mysqli_query($conn,$query);
                                        if($run== true){
                                            $msg = "Package Added Successfully";
                                        }else{
                                        	$msg = "Package not Added";
										}
									}
								}
						 ?>
					 