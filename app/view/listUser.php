<?php

  include("../autoload.php");
  
  $session = new SessionController();

    $email = $session->getSession("email");
    if(empty($_SESSION)){
      header("Location:  /php_mvc/index.html");
      session_destroy();
      die();
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.css" rel="stylesheet">
    <script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table-locale-all.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.4/dist/extensions/export/bootstrap-table-export.min.js"></script>

    <link href="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.css" rel="stylesheet">
</head>

<body>



<div>
  <a href="register.html">
    <input class="btn btn-warning btn-lg" type="submit" value="Submit" />
  </a>
</div>



<table id="table" data-search="true" data-visible-search="true">
  <thead>
  <tr>
    <th data-field="id">cod</th>
    <th data-field="name">NAME</th>
    <th data-field="surName">SURNAME</th>
    <th data-field="sex">SEX</th>
    <th data-field="cpf">CPF</th>
    <th data-field="email">EMAIL</th>
    <th data-field="password">PASSWORD</th>
    <th data-field="update">UPDATE</th>

  </tr>
  </thead>
</table>

<?php

  $arrayUsers = new Select();
  $arrayUsers = $arrayUsers->selectAllUsers();

  echo "<script>";
  echo "$(document).ready(function() {";
  echo "var tableData = [";
  foreach($arrayUsers as $user) {
    $userId = $session->setSession("id".$user["cli_id"], $user["cli_id"]);

    echo "{";
    echo "'id': '" . $user['cli_id'] . "',";
    echo "'name': '" . $user['cli_nome'] . "',";
    echo "'surName': '" . $user['cli_sobrenome'] . "',";
    echo "'sex': '" . $user['cli_sexo'] . "',";
    echo "'cpf': '" . $user['cli_cpf'] . "',";
    echo "'email': '" . $user['cli_email'] . "',";
    echo "'password': '" . $user['cli_senha'] . "',";
    echo "'update': '<form method=\"post\" action=\"update.php\"><input type=\"hidden\" name=\"id\" value=\"{$user['cli_id']}\"><input type=\"hidden\" name=\"name\" value=\"{$user['cli_nome']}\"><input type=\"hidden\" name=\"surname\" value=\"{$user['cli_sobrenome']}\"><input type=\"hidden\" name=\"sex\" value=\"{$user['cli_sexo']}\"><input type=\"hidden\" name=\"cpf\" value=\"{$user['cli_cpf']}\"><input type=\"hidden\" name=\"email\" value=\"{$user['cli_email']}\"><input type=\"hidden\" name=\"password\" value=\"{$user['cli_senha']}\"><button type=\"submit\">UPDATE</button></form>'";
    echo "},";
    
  }
  echo "];";
  echo "$('#table').bootstrapTable({data: tableData});";
  echo "});";
  echo "</script>";


?>




