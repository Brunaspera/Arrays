<?php include('assets/cidades.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios</title>
    <link rel="stylesheet" href="css/estilo.css">  

</head>
<body>

<h2> As melhores cidades Brasileiras para morar </h2>
<center><table border="1">
   
<tr>
        <th>  Cidades e estados
        <a href="?tipo=nome&&ordem=asc">&#9650;</a> 
        <a href="?tipo=nome&&ordem=desc">&#9660;</a>

        </th>     
        <th>IDHM
 
         <a href="?tipo=nome&&ordem=asc">&#9650;</a>  
         <a href="?tipo=nome&&ordem=desc">&#9660;</a> 
</th>
    </tr>

<?php

foreach($cidades as $nome =>$sigla ){
    echo "<tr><td>" .$nome."<td>";
    echo "<td>".$sigla."</td></tr>";

}

?>
    </table>
</body>
</html>
