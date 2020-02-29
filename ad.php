<?php
$NAME = $_POST['name'];
$EMAIL = $_POST['email'];
$BRAND = $_POST['tel'];
$MODEL = $_POST['txt'];



if (!empty($NAME) || !empty($EMAIL) || !empty($BRAND) || !empty($MODEL))
	{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "contact";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname)
				or 
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
   

     $INSERT = "INSERT Into con(name, email, tel, txt)values('".$NAME."','".$EMAIL."','".$BRAND."' ,'".$MODEL."')";
	if(mysqli_query($conn,$INSERT))
	{
		echo ' <script type="text/javascript"> alert("DATA SAVED")
		window.history.go(-1);
		</script>';
		
	}
	else{
		echo 'failed to insert';
		echo mysqli_error($conn);
	}
	 
     $conn->close();
    
} 
?>