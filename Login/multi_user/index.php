<!DOCTYPE html>
<html>
<head>
	<title>Tugas</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1></h1>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>User Id dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>User Id</label>
			<input type="text" name="username" class="form_login" placeholder="User Id .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
		</form>
		
	</div>
 
 
</body>
</html>