<?php

session_start();

$admins  = array("abi" , "sita" , "moha", "moh" , "abilo" );


if ($_SERVER['REQUEST_METHOD']=='POST') {

$user = $_POST['username'];

if (in_array($user , $admins)) {
//if he is admin//
$_SESSION['user'] = $user;

echo'Welcome Admin'.' '. $_SESSION['user'] .'<br>'. 'You will BE REdirected To Control Panel';
header('REFRESH:3;URL=controlpanel.php');
}

else{
	//if he not admin//
echo'SORRY!! You Are NOT Admin And You Are Not Permitted To See Control Panel';
header('REFRESH:3;URL=index.php');

}


}
else {
	echo'Error: You Cant Brwose This Page Directly';
}
?>