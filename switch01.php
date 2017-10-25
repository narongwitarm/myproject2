<?php

//--switch01.php
$username="webmaster";
switch($username)
{	
	case"manager":
		echo"ยินดีต้อนรับคุณ $username คุณคือผู้จัดการ";
	break;
	case"admin":
		echo"ยินดีต้อนรับคุณ $username คุณคือผู้ดูเเลระบบ";
	break;
	case"webmaster":
		echo"ยินดีต้อนรับคุณ $username คุณคือผู้ดูเเลเว็บไซต์";
	break;
	default:
		echo"ยินดีต้อนรับคุณ $username คุณคือผู้ใช้งาน";
}
?>
	
	
	
	
	
	
	
	
	
	
	
	