<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>mysql</title>
</head>

<body>
<?php
$con = mysql_connect('192.168.1.241', 'root', 'root');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("ec-drp-mingyi", $con);

$sql="SELECT * FROM Log_DataBaseOperate ";

$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>OperateDate</th>
</tr>";

while($row = mysql_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['OperateDate'] . "</td>";
 echo "</tr>";
 }
echo "</table>";

mysql_close($con);
?>
</body>
</html>
