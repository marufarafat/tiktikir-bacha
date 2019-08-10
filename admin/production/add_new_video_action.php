
					<?php
						session_start();
								if(isset($_POST['submit'])){
									$title 			= mysqli_real_escape_string($conn, $_POST['title']);
									$description 	= mysqli_real_escape_string($conn, $_POST['description']);
									$category 		= mysqli_real_escape_string($conn, $_POST['category']);
									$id				= mysqli_real_escape_string($conn, $_SESSION['staff_id']);
									$video 			= mysqli_real_escape_string($conn, $_POST['video']);
									
									if (empty($title)) {
										$msg = "Title field can't blank";
									}elseif (empty($description)) {
										$msg = "Description can't blank";
									}elseif (empty($video)) {
										$msg = "Video field can't blank";
									}elseif($_POST['category'] == "default"){
										$msg = "Please select One option from Category";
									}else{
                                        $query = "INSERT INTO `video`(`video_title`, `video_category`, `video`, `staff_id`) VALUES ('$title','$category','$video','	$id')";
                                        $run = mysqli_query($conn,$query);
                                        if($run== true){
                                            $msg = "Video Uploaded Successfully";
                                        }else{
                                        	$msg = "Video not Uploaded";
										}
									}
								}
						 ?>
					