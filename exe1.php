<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Repetições</title>
</head>
<body>
    <h2>Formulário de Repetições</h2>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome" required><br><br>

        <label for="repeticoes">Número de Repetições:</label>
        <input type="number" id="repeticoes" name="repeticoes" required><br><br>

        <button type="submit">Enviar</button>
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $repeticoes = $_POST["repeticoes"];

       
        if (!is_numeric($repeticoes) || $repeticoes <= 0) {
            echo "<p>O número de repetições deve ser um inteiro positivo.</p>";
        } else {
           
            echo "<h3>Resultado:</h3>";
            for ($i = 0; $i < $repeticoes; $i++) {
                echo "<p>$nome $sobrenome</p>";
            }
        }
    }
    ?>
</body>
</html>

