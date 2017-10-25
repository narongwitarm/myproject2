<?php

//--if03.php
$name="admin";
if($name=="admin")
	{
	 echo"ยินดีต้อนรับคุณ <font color='#CC3366'>$name</font> คุณผู้จัดการ";
	 echo"<a href='http://www.narongwit.com'> GO To Narongwit.com'</a>";
	}elseif($name=="admin")
	{ 
	 echo"ยินดีต้อนรับคุณ <font color='#33FF33'>$name </font>คุณคือผู้ดูเเลระบบ";
	  echo"<a href='https://www.rmutsb.ac.th'> GO To https://www.rmutsb.ac.th'</a>";
	
	}elseif($name=="webmaster")
	{
	 echo"ยินดีต้อนรับคุณ <font color='#336699'>$name</font> คุณคือผู้ดูเเลเว็บไซต์";
	}else
	{
	echo"ยินดีต้อนรับคุณ <font color='#FF9966'>$name</font> คุณคือผู้ใช้งาน";
	}
	
?>