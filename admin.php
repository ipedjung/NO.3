<? php session_start (); 
รวม ('condb.php');

  $ ID = $ _SESSION ['ID'];
  $ name = $ _SESSION ['ชื่อ'];
  $ ระดับ = $ _SESSION ['ระดับ'];
 	ถ้า ($ level! = 'admin') {
    ส่วนหัว ("ตำแหน่ง: ../logout.php");  
  }  
?>
<! DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>
	<form action = "logout.php">
	<h1> หน้าผู้ดูแลระบบ </h1>
	<h3> สวัสดีคุณ <? php echo $ name; ?> เล่น <? php echo $ level; ?> </h3>
	<input type = "submit" value = "ออกจากระบบ">
	</form>
</body>
</html>