<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>

<body>

    <?php if(!isset($_GET['editar'])){?>
    <h1>Inserir Aluno</h1>

    <form action="processa_aluno.php" method="post">

        <label for="">NOME:</label>
        <input type="text" name="nome" id="nome">

        <br><br>

        <label for="">IDADE:</label>
        <input type="number" name="idade" id="idade">

        <br><br>

        <label for="">ALTURA:</label>
        <input type="text" name="altura" id="altura">

        <br><br>

        <label for="">Escolaridade:</label>
        <input type="text" name="escolaridade" id="escolaridade">

        <br><br>

        <input type="submit" value="Cadastrar">

    </form>



    <?php }else{ ?>
    <form action="processa_aluno.php" method="post">
    <h1>Editar Aluno</h1>
    

        <label for="">NOME:</label>
        <input type="text" name="nome" id="nome">

        <br> <br>

        <label for="">IDADE:</label>
        <input type="number" name="idade" id="idade">

        <br> <br>

        <label for="">ALTURA:</label>
        <input type="text" name="altura" id="altura">

        <br> <br>

        <label for="">Escolaridade:</label>
        <input type="text" name="escolaridade" id="escolaridade">

        <br> <br>

        <input type="submit" value="Cadastrar">

    </form>
    <?php } ?>

</body>
</html>