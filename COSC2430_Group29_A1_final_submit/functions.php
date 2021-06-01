<?php
	session_start();
	require_once 'db.php';

	// Set Session Message
    function set_message($msg)
    {
        if(!empty($msg))
        {
            $_SESSION['MESSAGE']=$msg;
        }
        else
            {
                $msg = '';
            }
    }
	
	// Display Session Message
	function display_message()
	{
		if(isset($_SESSION['MESSAGE']))
		{
			echo $_SESSION['MESSAGE'];
			unset($_SESSION['MESSAGE']);
		}
	}
	
	function register_user()
	{
		global $con;
		if(isset($_POST['btn_register']) || $_SERVER['REQUEST_METHOD']=='POST')
		{
			$username = mysqli_real_escape_string($con,$_POST['username']);
			$email = mysqli_real_escape_string($con,$_POST['email']);
			$password = mysqli_real_escape_string($con,$_POST['password']);
			$cpassword = mysqli_real_escape_string($con,$_POST['password_confirmation']);
			
			if(empty($username) || empty($email) ||  empty($password) || empty($cpassword))
			{
				$error = "<div>Please Fill In The Blanks.</div>";
				set_message($error);
			}
			else
				{
					if($password!=$cpassword)
					{
						$error = "<div>Password Not Matched.</div>";
						set_message($error);
					}
					else
						{
							$query = "select * from user where username='$username'";
							$result = mysqli_query($con,$query);

							if(mysqli_num_rows($result))
							{
								$error = "<div>Phone Number Already Exists.</div>";
								set_message($error);
							}
							else
								{
									$query = "select * from user where email='$email'";
									$result = mysqli_query($con,$query);

									if(mysqli_num_rows($result))
									{
										$error = "<div>Email Already Exists.</div>";
										set_message($error);
									}
									else
										{
											$hash = md5($password);
											$sql = "insert into user(username,email,password) values('$username','$email','$hash')";
											$data = mysqli_query($con,$sql);

											if($data)
											{
												header("location: login.php");
											}
											else
												{
													$error = "<div>Something is Wrong</div>";
													set_message($error);
												}
										}
								}
						}
				}
		}
	}
	
	function login_user()
   {
		global $con;
		if(isset($_POST['btn_login']) || $_SERVER['REQUEST_METHOD']=='POST')
		{
			$username = mysqli_real_escape_string($con,$_POST['username']);
			$password = mysqli_real_escape_string($con,$_POST['password']);

			if(empty($username)  || empty($password) )
			{
				$error = "<div> Please Fill in the Blanks</div>";
				set_message($error);
			}
			else
			{
				$query = "select * from user where username='$username' or email='$username'";
				$result = mysqli_query($con,$query);

				if($row=mysqli_fetch_assoc($result))
				{
					$db_pass = $row['password'];
					if(md5($password)==$db_pass)
					{
						header("location: logged.php");
						$_SESSION['ID']=$row['id'];
						$_SESSION['EMAIL']=$row['email'];
					}
					else
						{
							$error = "<div> Please Enter Valid Password</div>";
							set_message($error);
						}
				}
				else
					{
						$error = "<div> Please Enter Valid UserName or Email</div>";
						set_message($error);
					}
			}
		}
	}


?>