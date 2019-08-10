<?php
$id="";
	$first_name="";
	$last_name="";
	$email="";
	$phone="";
	$address="";
	$password="";
	$confirmpassword="";
	$errors = array();
	$successfully = array();
	//error_reporting(0);			 
	
	 if(isset($_POST['submit'])) {    
	 $id= ($_POST['id']);
		     $first_name= ($_POST['first_name']);	
			 $last_name= ($_POST['last_name']);				 
		     $phone= ($_POST['phone']);
			 $email= ($_POST['email']);
			 $address= ($_POST['address']);
			 $password= ($_POST['password']);
			 $confirmpass= ($_POST['cpassword']);
	
	 		 if (empty($first_name)){
				array_push($errors,"First Name is required");
			 } 
			 
			 if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
				array_push($errors,"Name should be letter");
			 }
			 
			  if (empty($last_name)){
				array_push($errors,"Last Name is required");
			 } 
			 
			 if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
				array_push($errors,"Name should be letter");
			 }
			 
			 
			 if (empty($email)){
				 array_push($errors,"Email address is required");
			 }
			 
			 if (!preg_match('/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/', $email)) {
				 array_push($errors,"Invalid Email address");
			 }
			if (empty($address)){
				 array_push($errors,"Address address is required");
			 }			 
			 
		//	/ $query = mysqli_query($conn, "SELECT * FROM registration //WHERE email='$email'");
		//	 $check = mysqli_num_rows($query);
			 
			 
			 if (empty($phone)){
				 array_push($errors,"Phone number is required");
			 }
			 if (empty($id)){
				 array_push($errors,"id number is required");
			 }
			
			 if (preg_match("/^[a-zA-Z ]*$/",$phone)) {
				array_push($errors,"Invalid phone number");
			 }
			 
			 if (empty($password)){
				 array_push($errors,"Password is required");
			 }

			// if ($password.length < 4){
			//	 array_push($errors,"Your password is too short");
			// }
			  if ($password != $confirmpass){
				 array_push($errors,"Password are not matched");
			 }


			 if ($check > 0){
                 array_push($errors,"registration already exists");
			 }else{
                 if (count($errors)==0){
                     $confirmpass = md5($confirmpass);
                     $sql="INSERT INTO `registration`(`id`,`first_name`,`last_name`, `email`, `phone`, `address`, `password`) VALUES('$id','$first_name','$last_name','$email','$phone','$address','$confirmpass')";
                     $query=mysqli_query($conn,$sql);
                 //    $id=mysqli_insert_id($conn);

                     $_SESSION['id']= $id;

                     if($_SESSION['id']==true) {
                         echo "<script type='text/javascript'>alert('Registration successfully! Thank you for Join with us')</script>";
                         header('location:login.php');
                         $first_name="";
						 $last_name="";
                         $phone="";
                         $email="";
                         $password="";
                         $cpassword="";
                     }else{
                         header('location:index.php');

                     }

                 }
			 }
				
			}

									

?>




