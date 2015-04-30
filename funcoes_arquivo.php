<?php 
	
	include_once('time.php');



	function carregarListaTimes(){
        $times = [];
		$arquivo = fopen("times.txt", "r+");

		while(!feof($arquivo)){
            $linha = explode("|",fgets($arquivo));
            array_push($times, new Time($linha[0],$linha[1],$linha[2]));
		}

		fclose($arquivo);

        foreach($times as $t){
            echo "<tr>";
            echo "<td>".$t->getId()."</td>";
            echo "<td>".$t->getNome()."</td>";
            echo "<td><img src='".$t->getImagem()."'></td>";
            echo "<td><a href='#'>Editar</a></td>";
            echo "</tr>";
        }
	}

 ?>