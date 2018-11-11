<?php
	
	$titulo_pagina		= 'Home';
    $cssBoot			= '<link rel="stylesheet" href="css/bootstrap.css">';
	
?>

<html lang="pt-br">

	<head>
		
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>		<?= $titulo_pagina?>	</title>
		
		<?= $cssBoot?>

        <!--    Meu estilo  -->
        <link rel="stylesheet" href="css/style.css">
		
	</head>
	
	<div class="container">
		
        <form class="form rounded">

            <!--Classe de envio de email    -->
            <?php
                include('php/phpmailer_envio.php');
            ?>

            <!--    Campo de Email  --
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
                <small id="emailHelp" class="form-text text-muted">Coloque seu email.</small>
            </div>

            <!--    Campo do Assunto  --
            <div class="form-group">
                <label for="assunto">Assunto</label>
                <input type="text" class="form-control" id="assunto" placeholder="Assunto">
            </div>

            <!--    Campo da Mensagem  --
            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea class="form-control" id="mensagem" placeholder="Mensagem" rows="3"></textarea>
            </div>

            <!--    Botão de enviar  --
            <button type="submit" class="btn btn-info">Enviar</button>
            -->

        </form>
		
	</div>
	
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	
</html>