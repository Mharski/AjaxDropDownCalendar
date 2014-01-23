<?php
include_once('dbconfig.php');

if(! $db)
{
    die('Connection Failed'.mysql_error());
}

$message = array(); 
$attempts = 0; 
if(isset($_POST['email']) && !empty($_POST['email'])){
	$email = mysql_real_escape_string($_POST['email']); 
}else{
	$message[] = "<script>alert('Please Enter Your Email!');window.location.href='LogIn.php'</script>"; 
}

if(isset($_POST['password']) && !empty($_POST['password'])){
	$password = mysql_real_escape_string($_POST['password']); 
}else{
	$message[] = "<script>alert('Please Enter Your Password!');window.location.href='LogIn.php'</script>";
}

$countError = count($message);

if($countError > 0){
	$attempts++;   
	echo $attempts;  

	for($i = 0; $i < $countError; $i++){
		echo ucwords($message[$i]).'</br>';

	}

}else{

	$result = new ExamDAO();
	$results = $result->getUser();
	
    $checkUser = mysql_num_rows($results);  
    $row = mysql_fetch_assoc($results);
    if($checkUser > 0){
        $_SESSION['LOGIN_STATUS'] = true;
        $_SESSION['email'] = $email;
        echo "<script>alert('Successfully Log In');window.location.href='Online_test.php';</script>";
    }else{
        echo "<script>alert('Incorrect Email or Password!');window.location.href='LogIn.php';</script>";
	} 
}
?>