<?php
    include_once("bd.php");
?>

<html>
    <meta charset='utf-8'>
<body>
    <?php
	$nome = $_POST['nome'];
    $foto = $_FILES['foto'];
    $tipoFoto = $_FILES['foto']['type'];
    $message = "Os dados do funcionário $nome foram recebidos.";
    $cadastroValidado = true;

    if (!$tipoFoto == "image/jpeg" || !$tipoFoto == "image/jpg" || !$tipoFoto == "image/png" || !$tipoFoto == "image/gif" || !$tipoFoto == "image/bmp") {
        $message = "Arquivo em formato errado. Apenas tipos jpeg, jpg, png, gif e bmp são aceitos.";
        $cadastroValidado = false;
    }

    $foto_dir = 'imagens/'.$_FILES['foto']['name'];
    
    $salvaNaPasta = move_uploaded_file($_FILES['foto']['tmp_name'], $foto_dir);

    if ($cadastroValidado == true) {
        salvarFuncionario($nome, $foto_dir);
    };

    echo $message;
    echo "<br/>";
    echo '<br> <button onclick="history.back()">Voltar</button>';
    ?>
</body>
</html>