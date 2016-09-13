<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TIMELINE</title>
        <link rel="shortcut icon" href="resources/img/clock.png"/>

        <!--CSS para as Font Awesome icons-->
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <!--CSS para o framework Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="resources/css/index.css">
    </head>
    <body>
        <?php
        /* Obter o JSON de uma URL */
        $DadosJson = file_get_contents('http://vagalumewifi.com.br/timeline.json');
        /* Decodificar a JSON */
        $Dados = json_decode($DadosJson);
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><span class="glyphicon glyphicon-time" title="friends" aria-hidden="true"></span> TIMELINE</h1>
                </div>                
            </div>

            <?php
            foreach ($Dados as $dado) {
                ?>
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $dado->{'user'}->{'picture'}; ?>" class="img-responsive img-thumbnail" alt="Sem imagem">
                                <h2><strong title="UserName"><?php echo $dado->{'user'}->{'username'}; ?></strong></h2>
                                <h3 title="Location"><?php echo $dado->{'user'}->{'location'}; ?></h3>
                                <span class="glyphicon glyphicon-comment" title="bio">
                                    Bio
                                </span>
                                <span class="glyphicon glyphicon-user" title="friends" aria-hidden="true">
                                    <?php echo $dado->{'user'}->{'friends'}; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <h3><?php echo $dado->{'date'};?></h3>
                                <br/>
                                <span class="glyphicon glyphicon-thumbs-up" title="likes" aria-hidden="true">
                                    <?php echo $dado->{'likes'};?>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p><?php echo $dado->{'content'}; ?></p>
                            </div>
                        </div>
                    </div>                 
                </div>
                <?php
            }
            ?>
        </div>

        <!--Biblioteca para JQUERY-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!--Biblioteca para BOOTSTRAP-->
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="resources/js/index.js"></script>
    </body>
</html>
