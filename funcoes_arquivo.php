<?php 
	
	include_once('time.php');

  $times = [];

	function carregarListaTimes(){
		$arquivo = fopen("times.txt", "r+");

		while(!feof($arquivo)){
			echo "<tr><td>".fgets($arquivo)."</td></tr>";
		}

		fclose($arquivo);
	}

 ?>