<?php
	if(ISSET($_POST['solve'])){
		$captcha = $_POST['captcha'];
		if($_SESSION['captcha'] == $captcha){
			echo "<center><label class='text-success'>Felicidades has confirmado que eres un humano</label></center>";
		}else{
			echo "<center><label class='text-danger'>Código Inválido</label></center>";
		}
	}
?>