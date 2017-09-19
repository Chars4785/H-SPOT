<?php

mysql_connect('localhost','201341357','whdals123');
mysql_select_db('201341357_DBA');

$list = mysql_query('SELECT * from LOGIN_NORMAL');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://cslab2.kku.ac.kr/~201341357/second_normal.css">

</head>
<body>

<div id=dd>
	<img id=im src="http://cslab2.kku.ac.kr/~201341357/image/main/home.png" 
		onclick="location.href='http://cslab2.kku.ac.kr/~201341357'">

	<div id=main>
		<li class="dropdown">
			<a href="#home" class="drop">FOOD</a>
			<div class="dropdown-content">
				<a href="http://cslab2.kku.ac.kr/~201341357/food/food_normal.html">한식</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/food/food_normal2_c.html">중식</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/food/food_normal3_j.html">일식</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/food/food_normal4_y.html">양식</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/food/food_normal5_s.html">갠취</a>
			</div>
		</li>
		<li class="dropdown" class="drop">
			<a href="#news">DESSERT</a>
			<div class="dropdown-content">
				<a href="http://cslab2.kku.ac.kr/~201341357/dessert/dessert_normal.html">빨강</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/dessert/dessert_normal2_g.html">초록</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/dessert/dessert_normal3_b.html">파랑</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/dessert/dessert_normal4_w.html">흰색</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/dessert/dessert_normal5_p.html">핑크</a>
			</div>
		</li>
		<li class="dropdown" class="drop">
			<a href="#news">PLAY</a>
			<div class="dropdown-content">
				<a href="http://cslab2.kku.ac.kr/~201341357/play/play_normal.html">PC방</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/play/play_normal2.html">노래방</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/play/play_normal3.html">오락실</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/play/play_normal4.html">갠취</a>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">SHOW</a>
			<div class="dropdown-content">
				<a href="http://cslab2.kku.ac.kr/~201341357/show/show_normal.html">버스킹</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/show/show_normal2.html">영화관</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/show/show_normal3.html">극장</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/show/show_normal4.html">공연</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/show/show_normal5.html">갠취</a>
			</div>
		</li>
		<li class="dropdown">
			<a href="#" class="dropbtn">REGISTER</a>
			<div class="dropdown-content">
				<a href="http://cslab2.kku.ac.kr/~201341357/register/register.html">일반모드</a>
				<a href="http://cslab2.kku.ac.kr/~201341357/register/register_hard.html">모험모드</a>				
			</div>
		</li>
	</div>
</div>

<div id=switch>

	<a href="http://cslab2.kku.ac.kr/~201341357/food/food_hard.html"><img src="hard.png" id=mode></a>
	<a href="http://cslab2.kku.ac.kr/~201341357/food/food_normal.html"><img src="at.png" id=mode></a>
</div>

<div id=contain>
	<h1>일반모드</h1>
	<p> 블로그에 있는 모든것을 모았습니다
</div>

<div id=contain1>
	 <div id=wrapper>
		
<!--복사할것들
		<div id=clone>
			<div id=clone_left> <img src="test_food.jpg" id=clone_img></div>
			<div id=clone_right>
				<div id=clone_right_name><p>홍대맛집</div>
				<div id=clone_right_price><p>40000원</div>
			</div>
		</div>
-->	
		<?php
		while($row = mysql_fetch_array($list)){
			echo
			"<div id=clone>
				<div id=clone_left><img src=http://cslab2.kku.ac.kr/~201341357/register/uploabs/"?$row['subject']"/0/"?$row['picture']" id=clone_img></div>
				<div id=clone_right>
					<div id=clone_right_name><p>"?$row['shop']"</div>
					<div id=clone_right_price><p>"?$row['price']"원</div>
				</div>	
			</div>"	
		}
		?>
	

	</div>
	
</div>

	
	
	

	
	
</body>
</html>
