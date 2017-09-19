<?php
mysql_connect('localhost','201341357','whdals123');
mysql_select_db('201341357_DBA');

$list_result = mysql_query('SELECT * FROM FOOD');

$row = mysql_fetch_array($list_result);

echo $row[0];

exit;

?>

<html>

<body>


</body>

</html>