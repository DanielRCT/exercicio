<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
</head>
<body>
    <h2>Conversor de Moeda</h2>
    <form method="post">
        <label for="quantidade">Quantidade em Reais:</label>
        <input type="number" id="quantidade" name="quantidade" min="0" step="0.01" required><br><br>

        <label for="moeda">Escolha a Moeda:</label>
        <select id="moeda" name="moeda" required>
            <option value="1">Dólar (USD)</option>
            <option value="2">Euro (EUR)</option>
            <option value="3">Libra (GBP)</option>
        </select><br><br>

        <button type="submit">Converter</button>
    </form>

    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $quantidade = $_POST["quantidade"];
        $moeda = $_POST["moeda"];

        
        $taxa_dolar = 5.30; 
        $taxa_euro = 6.20;  
        $taxa_libra = 7.00; 

        switch ($moeda) {
            case 1:
                $resultado = $quantidade / $taxa_dolar;
                $moeda_destino = "Dólar (USD)";
                break;
            case 2:
                $resultado = $quantidade / $taxa_euro;
                $moeda_destino = "Euro (EUR)";
                break;
            case 3:
                $resultado = $quantidade / $taxa_libra;
                $moeda_destino = "Libra (GBP)";
                break;
            default:
                echo "<p>Opção inválida.</p>";
                return;
        }


        echo "<p>$quantidade Reais equivalem a $resultado $moeda_destino.</p>";
    }
    ?>
</body>
</html>
