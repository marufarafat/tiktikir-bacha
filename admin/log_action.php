
<?php
	include '../dbconnect.php';
	session_start();		
	
	if(isset($_POST['submit'])) {
		
			 $Email= $_POST['Email'];
			 $Password= $_POST['Password'];
			 $errors = array();

			 if (count($errors)==0) {
			 $Password = md5($Password); 
			 $query =mysqli_query($conn,"SELECT * FROM admin WHERE admin_email='$Email' AND password='$Password'");
			 $check = mysqli_num_rows($query);
			 
				if ($check > 0) {
					while($row = mysqli_fetch_array($query)){
					$_SESSION['admin_id']= $row['admin_id'];
					$_SESSION['post']= $row['post'];
					$_SESSION['email']= $row['email'];
					header('location:production/index.php');
					array_push($logsuccessfully,"Login Successfull");
					$Email='';
					$Password='';
				}		
				}else{
				    $_SESSION['msg']="Invalid email or password";
					header('location:index.php');
				}
		}
	}
?>
