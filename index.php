<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
  <a href="./login.php"><button>Login</button></a>
  <a href="./conversor.php"><button>Conversor</button></a>
  <a href="./repeticoes.php"><button>Repeticões</button></a>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com Imagens</title>
</head>
<body>
    <h2>Informações Pessoais</h2>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Flamengo_braz_logo.svg/800px-Flamengo_braz_logo.svg.png" alt="Logo do Flamengo" width="200"><br><br>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSj5I3NYpsYt-tPbBkNdRvUOqaCnDIt4dVtFIh1wYs4UA&s" alt="Imagem de Exemplo" width="200"><br><br>
    
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula" required><br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $matricula = $_POST["matricula"];

        echo "<h3>Dados Recebidos:</h3>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Matrícula: $matricula</p>";
    }
    ?>
</body>
</html>

