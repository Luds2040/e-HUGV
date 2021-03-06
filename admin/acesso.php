<?php
    include '../assets/php/conexao.php';

    $query = 'select * from admins';
    $stmt = $conexao->query($query);
    $lista = $stmt->fetchAll();
    $flag=0;
    $newURL="login";

    foreach($lista as $adm) {
        if(strcmp($adm['nome'],$_POST['usuario']) == 0 && strcmp($adm['senha'],$_POST['senha']) == 0) {
            $flag=1;
        }
    }

    if(!$flag) {
        header("Location: $newURL.php?flag=".$flag);
        die();
    }
    
?>

<html lang="pt-br" class="fullHeight"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <!-- MY padrão paginas -->
    <link rel="stylesheet" href="../assets/css/estilo.css">
    
    <!-- css para a tela inicial do adm -->
    <link rel="stylesheet" href="../assets/css/estilo-adms.css">

    <title>e-HUGV | Acesso Adm</title>
  </head>
  <body>

    <!-- Cabeçalho -->
    <?php  include '../assets/php/menu.php';?>
     
    <!-- Parte principal -->
    <div class="screen">
        <div class="container-sm ml-5" id="content-main">
            
            <div class="container group-card">
                <div class="container card display">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Acesso Médicos</h4>
                        </div>
                        <div class="card-text text-center">
                            Acesso para informações associadas aos medicos<br><br>
                            <a href="../medico/acesso_medicos.php?count=1" class="btn btn-outline-success">Acessar</a>
                        </div>
                    </div>
                </div>
                <div class="container card display">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Acesso Paciente</h4>
                        </div>
                        <div class="card-text text-center">
                            Acesso para informações associadas aos pacientes<br><br>
                            <a href="../paciente/acesso_pacientes.php?count=1" class="btn btn-outline-success">Acessar</a>
                        </div>
                    </div>
                </div>
                <div class="container card display">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h4>Acesso Adms</h4>
                        </div>
                        <div class="card-text text-center">
                            Acesso para informações associadas aos Adms<br><br>
                            <a href="#" class="btn btn-outline-success">Acessar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
  
</body></html>