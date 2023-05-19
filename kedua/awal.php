<HTMl>
<HEAD>
    <TITLE>KULINER JAWARA</TITLE>
    <link rel="stylesheet" href="awal.css">
</HEAD>
<BODY>
<?php
	if(isset($_POST['LOGIN'])){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		
		if($user=='uas' AND $pass=='123'){
			header("Location:coba.php");
		}
		else{
			echo "
				<script>
				alert('Maaf Username & Password yang Anda Masukkan Salah !!!');window.location.href='awal.php';
				</script>
				";
		}
	}
?>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <p class="pertama">KULINER</p>
    <p class="kedua">JAWARA</p>
    <center>
    <p class="tiga">WELCOME TO OUR APPS</p>
    <div class="input-field">
        <i class="fas fa-keyboard"></i>
        <input autocomplete=off type="text" name="user" placeholder="Username" />
    </div>
    <div class="input-field">
        <i class="fas fa-keyboard"></i>
        <input autocomplete=off type="text" name="pass"placeholder="Password" />
    </div>
    <p class="empat">
    <a href="lupapass.php" style="text-decoration:none; color:#333">LUPA PASSWORD ?</p>
    <button type="submit" name="LOGIN" class="kotaklogin" style='width: 90mm'>Login</button><BR>
    <button type="button" name="register" class="kotakregis" style='width: 90mm'> 
    <a href="regis.php" style="text-decoration:none; color:#333">Register</a>
    </center>
<?php
?>
</BODY>
</HTMl>