<?php
 
 $user_id = $_POST["user_id"];
 $pw = $_POST["pw"];
 

 
 $connect = mysql_connect("localhost","201341357","whdals123");
 mysql_query("set names euckr");
 mysql_select_db("201341357_DBA");
 
 	$getID = "select ID from LOGIN WHERE ID='$user_id';";
	$getID = mysql_query($getID);
	$getID = mysql_fetch_array($getID);
 
 if($getID['ID']){
					echo "
					<script>
				   window.alert('이미 가입 하셨습니다.');
				   history.back(1);
				  </script>
				  ";
					exit;
		}else{
			
		 $query = "insert into LOGIN values('$user_id','$pw');";
		 mysql_query($query, $connect);
		 mysql_close($connect);
		 
		 echo"
		 <html>
		<h1>가입을 환영합니다</h1>
		</html>
		 ";
		 
		 }
?>


