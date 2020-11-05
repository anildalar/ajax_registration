<?php
	//1. DB Connection Open
	$con = mysqli_connect('localhost','root','','ajax_registration') or die(mysqli_error($con));
	
	//echo 'ok';
	if($_GET['action'] == 'registration'){
		//echo 'registration';
		//Alway filter the incomming data
		$fname = filter_var($_GET['fname'], FILTER_SANITIZE_STRING);
		$lname = filter_var($_GET['lname'], FILTER_SANITIZE_STRING);
		$uname = filter_var($_GET['uname'], FILTER_SANITIZE_STRING);
		$password = filter_var($_GET['password'], FILTER_SANITIZE_STRING);
		$cpassword = filter_var($_GET['cpassword'], FILTER_SANITIZE_STRING);
		
		//Server Side validation
		if($password != $cpassword){
			$data = [
						'status'=>401,
						'msg'=>'Password and Cpassword Doest not match'
					];
		}else{
			//2. Build the query
			$sql = "SELECT * FROM users WHERE username='$uname'";
			
			//3. Execute the query
			$result = mysqli_query($con,$sql);
			
			//Find NOR
			$nor = mysqli_num_rows($result);
			if($nor == 0){
				//We Can Register
				$password = sha1($password);
				//2. Build the query
				$sql = "INSERT INTO users (fname,lname,username,password) VALUES ('$fname','$lname','$uname','$password')";
				
				//3. Execute the query
				$result = mysqli_query($con,$sql);
				$data = [
					'status'=>200,
					'msg'=>'User Registered Successfully'
				];
				
				
			}else{
				//We can not Register
				$data = [
					'status'=>402,
					'msg'=>'Username already Exists'
				];
			}
		}
		
		echo json_encode($data);
		
	}
	if($_GET['action'] == 'login'){
		echo 'login';
	}
	
	
	//5. DB Connection Close
	mysqli_close($con);
	
?>