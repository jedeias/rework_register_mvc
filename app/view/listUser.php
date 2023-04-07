<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Users</title>
</head>
<body>
    
    <table border="1">

        <tr>
            <td>COD</td>
            <td>NAME</td>
            <td>SURNAME</td>
            <td>SEX</td>
            <td>CPF</td>
            <td>E-MAIL</td>
            <td>PASSWORD</td>
        </tr>

        <?php

            include ("../autoload.php");

            $arrayUsers = new Select();

            $arrayUsers = $arrayUsers->selectAllUsers();

            echo"<tr>";

            for ($i = 0; $i < count($arrayUsers); $i++){

                $user = $arrayUsers[$i];

                echo("<td>". $user["cli_id"] ."</td>");

                echo("<td>". $user["cli_nome"] ."</td>");

                echo("<td>". $user["cli_sobrenome"] ."</td>");

                echo("<td>". $user["cli_sexo"] ."</td>");

                echo("<td>". $user["cli_cpf"] ."</td>");

                echo("<td>". $user["cli_email"] ."</td>");

                echo("<td>". $user["cli_senha"] ."</td>");
            
                echo"</tr>";
            }
            
        ?>


    </table>

    <a href=""> <button> Register <button> </a>

</body>
</html>