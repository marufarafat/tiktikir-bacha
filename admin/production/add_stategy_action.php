<?php
	session_start();
	$titel			= mysqli_real_escape_string($conn, $_POST['titel']);
	$category		= mysqli_real_escape_string($conn, $_POST['category']);
	$description	= mysqli_real_escape_string($conn, $_POST['description']);
	$product_image= $_FILES['bgimage']['name'];  
	$product_tmp = $_FILES['bgimage']['tmp_name'];
	$errors = array();
	$successfull = array();
	$staff = $_SESSION ['staff_id'];

	error_reporting (0);
	
	if(isset($_POST['submit'])) {
		
		if (empty($titel)) {
			$msg = "Blog titel can't blank";
		}elseif (empty($description)) {
			$msg = "Blog Description can't blank";
		}elseif (empty($product_image)) {
			$msg = "Blog image can't blank";
		}elseif($_POST['category'] == "default"){
				$msg = "Please select One option from Category";
		}else{
            move_uploaded_file($product_tmp,"../../img/blog/$product_image");

            $sql="INSERT INTO `blog`(`blog_title`, `description`, `blog_category`, `staff_id`, `blog_image`) VALUES ('$titel','$description','$category','$staff','$product_image')";
            $run=mysqli_query($conn,$sql);

            if ($run){
                $msg = "Post Published Successfully";
            }else{
                $msg = "Post Not Published";
            }
		}
	}

?>
