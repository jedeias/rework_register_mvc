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

<script src="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.js"></script>

<table id="table" data-search="true" data-visible-search="true">
  <thead>
  <tr>
    <th data-field="cod">cod</th>
    <th data-field="name">NAME</th>
    <th data-field="surName">SURNAME</th>
    <th data-field="sex">SEX</th>
    <th data-field="cpf">CPF</th>
    <th data-field="email">EMAIL</th>
    <th data-field="password">PASSWORD</th>
  </tr>
  </thead>
</table>


</script>

  <?php

    include ("../autoload.php");

    $arrayUsers = new Select();

    $arrayUsers = $arrayUsers->selectAllUsers();

    //echo"<tr>";

    for ($i = 0; $i < count($arrayUsers); $i++){ 

        $user = $arrayUsers[$i];
                                                    
        $show = <<< SCRIPT

    
            <script>
            var table = $('#table')

            
            $(function() {
                var data = [
                    {
                        'cod': '$user[cli_id]',
                        'name': '$user[cli_nome]',
                        'surName': '$user[cli_sobrenome]',
                        'sex': '$user[cli_sexo]',
                        'cpf': '$user[cli_cpf]',
                        'email': '$user[cli_email]',
                        'password': '$user[cli_senha]',
                    }]

                    table.bootstrapTable({data: data})
                })
                </script>
            
            SCRIPT;

            echo"$show";

    }
        
    
?>

</body>
</html>