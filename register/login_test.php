<script>
 session_start();
</script>
<?

 if($_COOKIE['hwi']){?>
 <?=$user_id?>
 <?echo $_COOKIE['hwi']?>님 로그인하셨습니다
 
 <?}else{?>
 
  로그인하지 않았습니다<br>
  <a href='member.php'>회원가입하기</a>
  <a href='login.php'>로그인하기</a>
 <?}
  
?>