<?php

	if(isset($_POST['submit'])) {
			
		$a		= $_SESSION['admin_id'];	
		$b	= mysqli_real_escape_string($conn, $_POST['campaigntitle']);
		$c	= mysqli_real_escape_string($conn, $_POST['description']);
		$d = mysqli_real_escape_string($conn, $_POST['startdate']);
		$e		= mysqli_real_escape_string($conn, $_POST['enddate']);
		$f	= mysqli_real_escape_string($conn, $_POST['place']);
	
	
	
		
		if (empty($campaigntitle)) {
            $msg = "Campaign Title can't blank";
		 }
		 elseif (empty($description)) {
			$msg = "Campaign Description can't blank";
		 }
		 elseif (empty($startdate)) {
			$msg = "Campaign Start Date can't blank";
		 }
		
		elseif (empty($enddate)) {
				$msg = "Campaign End Date can't be blank";
			 }
			 elseif (empty($place)) {
				$msg = "Campaign Place can't be blank";
			 }
			 
			 
			 
		     $sql="INSERT INTO `add_camping`(`admin_id`, `campaign_title`, `campaign_description`,`campaign_start_date`,`campaign_end_date`, `campaign_place`) VALUES ('$a','$b','$c','$d','$e','$f')";
			 
            $run=mysqli_query($conn,$sql);
            if($run==true){
                $msg = "Product Added Successfully";
            }else{
                $msg = "Product Not Added";
            }
		}

	}

?>
