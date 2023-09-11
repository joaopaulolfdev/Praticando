<?php

define('HOST','localhost');
define('DB','Aluno');
define('USER','root');
define('PASS','');

try{
  $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  //echo "Conectado com sucesso";
}catch(Exception $erro){
  echo 'Erro ao conectar';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <title>Estudando</title>
</head>

<body>

<?php

if(isset($_POST['click'])){
  $nome_aluno = $_POST['nome_aluno'];
  $disciplina = $_POST['disciplina'];
  $nota_1 = $_POST['nota_1'];
  $nota_2 = $_POST['nota_2'];

  $sqlcli = $pdo->prepare("INSERT INTO  cadastro VALUE(null,?,?,?,?)");
  $sqlcli->execute(array($nome_aluno,$disciplina,$nota_1,$nota_2));
}
?>


  <div class="menu">
    <a href="">Home</a>
    <a href="">Sobre</a>
    <a href="">Menu</a>
    <a href="">Contato</a>
  </div>

  <div class="campo">

    <h2>Preencha esse campo</h2>
  </div>
       <form method="post">
  <div class="formulario">
    <div class="input">
      <div class="input-group">
        <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
        <input type="text" class="form-control" aria-label="Sizing example input"
          aria-describedby="inputGroup-sizing-sm" placeholder="Digite seu nome" required>
      </div>
    </div>
    <select class="form-select" aria-label="Default select example">
      <option selected>Disciplinas</option>
      <option value="#">Banco de Dados</option>
      <option value="#">Sistema de Informações Gerencias</option>
      <option value="LPW">Linguagem Programação Web</option>
    </select>
    <div class="two">
      <div class="esq">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text" id="inputGroup-sizing-sm">Nota 1</span>
          <input type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-sm" placeholder="Nota 1" required>
        </div>
      </div>
      <!--esq-->
      <div class="dir">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text" id="inputGroup-sizing-sm">Nota 2</span>
          <input type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-sm" placeholder="Nota 2" required>
        </div>
        <!--two-->
      </div>
      <!--dir-->
    </div>
    <div class="btn">
      <input type="submit" value="click" input>
    </div>
    <!--btn-->
    </form>
    <div class="clear"></div>
</form>
  </div>

  <footer>
    <div class="footer">
      <p>Feito Por João Paulo Lima </p>
    </div>
  </footer>

  <div class="dir">
  <?php
     include("cadastro.php")
  ?>
  </div>

</body>

</html>