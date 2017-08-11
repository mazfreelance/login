<?php
session_start();
session_unset();  // reset all user session
include('../includes/defineGlobal.php');
include(THIS_PAGE_DOC_ROOT.'/functions/worksHire_fns.php');

$user = $_POST['uname'];
//$user = 'azizan';
//echo $user;
$userClass = getUserClass($user);

$_SESSION['user_class'] = $userClass;
$_SESSION['login_user_id'] = $user;
$_SESSION['dahlogin'] = true;
session_commit();
switch($userClass){
	
	case '1':
		echo '../view_3/';
		break;
	case '2':
		echo '../employers/';
		break;
	case '3':
		echo '../admin/index.php';
		break;
	case '4':
		echo '../admin_jobPostings/index.php';
		break;
		
	
	
	
	}

?>