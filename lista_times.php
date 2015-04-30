<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Gauchão 2015 - Lista de Times</title>
  <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
</head>
<body>
  <?php include_once('funcoes_arquivo.php'); ?>
  <div class="row">
    <div class="container">
      <h2>Lista de Times</h2>
      <table class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>Logo</th>
            <th></th>
        </thead>
        <tbody>
            <?php carregarListaTimes(); ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>