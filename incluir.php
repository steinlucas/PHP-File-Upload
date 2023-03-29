<?php
	include_once("bd.php");
?>
<html>
<meta charset="UTF-8">
    <head>
        <title>Upload de Arquivos</title>
    </head>
    <body>
    	<div style="text-align: center">
    		<h1>Cadastro de Funcionário</h1>
		<form action="upload.php" enctype="multipart/form-data" method="post">
		    Nome:
		    <br>
		    <input type="text" id="nome" size="40" name="nome">
		    <br>
		    
			Foto:
		    <br>
		    <input type="file" id="nome" size="40" name="foto">
		    <br>

		    <input type="submit" value="Enviar arquivo">
		</form>
	</div>
	<?php
	$funcionarios = pesquisarTodosFuncionarios();
	foreach ($funcionarios as $funcionario){
		echo $funcionario['nome'];
	}
	
	?>
	
    </body>
</html>