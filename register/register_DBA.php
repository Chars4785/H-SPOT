<head>
<script>
 function chk_frm(){
   if(!document.join.user_id.value){
    window.alert('아이디를 입력해 주세요');
    document.join.user_id.focus();
    return false;
   }
   
   if(!document.join.pw.value){
    window.alert('비밀번호를 입력해 주세요');
    document.join.pw.focus();
    return false;
   }
    
 
 return true;  
 }

</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">


</head>

<form action="./member.php?mode=insert" method="post" name="join">

  <div class="form-group">
    <label for="exampleInputEmail1">아이디</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="영문 기입" name="user_id">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">암호</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="영문 기입" name="pw">
  </div>

  <button type="submit" class="btn btn-primary btn-lg btn-block">제출</button>


</form>