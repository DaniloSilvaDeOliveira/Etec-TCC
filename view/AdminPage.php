<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Administração</title>
</head>
<body class="bg-secondary">




<!-- Conexão Com o banco de dados -->
<?php
    include("../modals/Crud.php");

    $ADM->SetBancoDeDados();
    $ADM->ADMPageContruct();

?>



</body>
</html>