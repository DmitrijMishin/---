<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		function readInt(){
			return +document.getElementById("userAnswer").value;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function guess(){
	
		var n = readInt();

		var password = [];  abd ='0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM', aL = abd.length;
		for (var i = 0; i < n; i++){
	    password += abd[Math.random() * aL|0];
		}
	  	write (password);
    
}
		
	</script>
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>


<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Случайный пароль</h1>

			<div class="box">

				<p id="info">Ведите количество символов в пароле</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="guess();" id="button">Начать</a>				
			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?>  Dmitry Mishin
<div>


</body>
</html>
