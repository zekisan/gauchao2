<?php
  if (!empty($_POST)) {
    $times = array(
    	array('nome' => 'CAXIAS',               'gols' => (int)$_POST['caxias']),
      array('nome' => 'LAJEADENSE',           'gols' => (int)$_POST['lajeadense']),
      array('nome' => 'INTERNACIONAL',        'gols' => (int)$_POST['inter']),
      array('nome' => 'AIMORÉ',               'gols' => (int)$_POST['aimore']),
      array('nome' => 'SÃO PAULO-RS',         'gols' => (int)$_POST['saopaulo']),
      array('nome' => 'SÃO JOSÉ-RS',          'gols' => (int)$_POST['saojose']),
      array('nome' => 'NOVO HAMBURGO',        'gols' => (int)$_POST['novohamburgo']),
      array('nome' => 'CRUZEIRO-RS',          'gols' => (int)$_POST['cruzeiro']),
      array('nome' => 'VERANÓPOLIS',          'gols' => (int)$_POST['veranopolis']),
      array('nome' => 'AVENIDA',              'gols' => (int)$_POST['avenida']),
      array('nome' => 'YPIRANGA',             'gols' => (int)$_POST['ypiranga']),
      array('nome' => 'GRÊMIO',               'gols' => (int)$_POST['gremio']),
      array('nome' => 'UNIÃO FREDERIQUENSE',  'gols' => (int)$_POST['uniao']),
      array('nome' => 'JUVENTUDE',            'gols' => (int)$_POST['juventude']),
      array('nome' => 'PASSO FUNDO',          'gols' => (int)$_POST['passofundo']),
      array('nome' => 'BRASIL DE PELOTAS',    'gols' => (int)$_POST['brasil'])
    );
    
    $empates = array();

    for ($i = 0; $i < sizeof($times); $i += 2) {
      if ($times[$i]['gols'] > $times[$i + 1]['gols']) {
        $times[$i]['pontos'] = 3;
        $times[$i + 1]['pontos'] = 0;
      }elseif ($times[$i]['gols'] == $times[$i + 1]['gols']){
        $times[$i]['pontos'] = 1;
        $times[$i + 1]['pontos'] = 1;
        array_push($empates, array($times[$i],$times[$i+1]));
      }else{
        $times[$i]['pontos'] = 0;
        $times[$i + 1]['pontos'] = 3;
      }
    }

    foreach ($times as $chave => $valor) {
      $nome[$chave]  = $valor['nome'];
      $pontos[$chave] = $valor['pontos'];
      $gols[$chave] = $valor['gols'];
    }

    array_multisort($pontos, SORT_DESC, $gols, SORT_DESC, $nome, SORT_ASC, $times);

    //Renderiza tabela de classificação  
    echo "<div class='col-md-6'>";
    echo "<h4>Classificação</h4>";
    echo "<table class='table table-striped'>";
    echo "<thead>";
    echo "<th>Time</th>";
    echo "<th>Pontuação</th>";
    echo "<th>Saldo de Gols</th>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($times as $t) {
      echo "<tr>";
      echo "<td>".$t['nome']."</td>";
      echo "<td>".$t['pontos']."</td>";
      echo "<td>".$t['gols']."</td>";
      echo "</tr>";
    }  
    echo "</tbody>";
    echo "</table>";
    echo "</div>";

    //Renderiza tabela de empates
    echo "<div class='col-md-6'>";
    echo "<h4>Empates</h4>";
    echo "<table class='table table-striped'>";
    echo "<thead>";
    echo "<th>Time</th>";
    echo "<th>Placar</th>";
    echo "</thead>";
    echo "<tbody>";
    for ($i = 0; $i < sizeof($empates); $i++) {
      echo "<tr>";
      echo "<td>".$empates[$i][0]['nome']." X ".$empates[$i][1]['nome']."</td>";
      echo "<td>".$empates[$i][0]['gols']." X ".$empates[$i][1]['gols']."</td>";
      echo "</tr>";
    }  
    echo "</tbody>";
    echo "</table>";
  }
?>