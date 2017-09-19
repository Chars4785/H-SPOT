<?php

$user_id = $_POST["user_id"];
$user_pw = $_POST["user_pw"];
$subject = $_POST["subject"];
$subject_sub = $_POST["subject_sub"];
$shop= $_POST["shop"];
$price=$_POST["price"];
$introduce = $_POST["introduce"];
$file =$_FILES["fileToUpload"]["name"];


// 아이디 빌번 있는지 확인 !!


 $connect = mysql_connect("localhost","201341357","whdals123");
 mysql_query("set names utf8");
 mysql_select_db("201341357_DBA");

	$getID = "select ID from LOGIN WHERE ID='$user_id';";
	$getID = mysql_query($getID);
	$getID = mysql_fetch_array($getID);
 

	//아이디가 있다면
	if($getID['ID']) {
	
		$getPASS = "SELECT Password FROM LOGIN WHERE ID='$user_id'";
		mysql_query("set names utf8");
		$getPASS = mysql_query($getPASS);
		$getPASS = mysql_result($getPASS, 0);
	
		//데이터베이스에서 가져온 비밀번호가 입력받은 비밀번호와 같다면,
		if($getPASS == $user_pw) {
			
		
		//쿼리로 넣기 !
		
		$query ="insert into LOGIN_NORMAL values('$user_id','$user_pw','$subject','$subject_sub','$shop','$price','$introduce','$file');";
		mysql_query($query,$connect);
		
		//파일 다운로드 하기
		//------------------------------------------------------------------------------------------------------------------------------------

			//사진 파일 저장!!!

			$target_dir = "uploads/$subject/$subject_sub/";	
			$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			}


			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}

					
					
		
		
		echo "<br> ";
		echo "로그인";
		echo "<br> ";
		echo "<a href=http://cslab2.kku.ac.kr/~201341357>확인하러 가기!!!</a>";
		
		}
		
		else {
			
			echo "PASSWORD ERROR";
			return 1;
		}
	
	}else {
		
		echo "ID DOESN'T EXIST";
		return 1;
	}


?>




<?php
/*
//사진 파일 저장!!!

$target_dir = "uploads/$subject/$subject_sub/";	
$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

*/
?>

