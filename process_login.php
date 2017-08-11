<?php  

include('../includes/defineGlobal.php');
include(THIS_PAGE_DOC_ROOT.'/functions/worksHire_fns.php');

$userId = '';
$pw = '';
$array = array();
		
$filter = unsetArray($array);

foreach($filter as $k=>$v){
	switch ($k) {
		// uname=&psw=
		case 'uname' :
		 $userId = $v;
		 case 'psw' :
		 $pw = $v;
		
		}
	}

$result = userAuthenticate($userId, $pw) ;
if(!$result) {
	echo 'NO';
	} else echo 'OK';


?>