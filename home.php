<?php include ("connect.php");



$sql="select * from users where UserID='".$_POST['uid']."'";

?>

<html>
<head>
<title> Townfit</title>    
</head>
    <body>

<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>
	<td><div align="right"><a href="logout.php">logout</a></div></td>
  </tr>
  <tr>
   
    <td width="82" valign="top"><div align="left">Name:</div></td>
    <td width="165" valign="top"><?php echo $name ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Email:</div></td>
    <td valign="top"><?php echo $email ?></td>
  </tr>
  
</table>
<p align="center"><a href="index.php"></a></p>
    </body>
    </html>