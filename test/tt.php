<form name=testform method=post> 
<select name='game[]' size='1'> 
    <option value=1> 1<br> 
    <option value=2> 2<br> 
</select>세트</td> 
<select name='game[]' size='1'> 
    <option value=1> 1<br> 
    <option value=2> 2<br> 
</select>세트</td> 
<select name='game[]' size='1'> 
    <option value=1> 1<br> 
    <option value=2> 2<br> 
</select>세트</td> 
</form> 
<a href="javascript:check_value()">클릭</a> 

<script language="javascript"> 

function check_value() 
{ 
document.testform.action = "result.php"; 
document.testform.submit(); 
} 

</script>