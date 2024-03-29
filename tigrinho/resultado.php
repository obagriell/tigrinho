<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>
    <?php
        $selectedNumbers = $_POST['numbers'];
        $bet = $_POST['bet'];
        $winningNumbers = array_rand(range(1, 50), 25); // Gera aleatoriamente 25 números vencedores
        $correctNumbers = count(array_intersect($selectedNumbers, $winningNumbers));
        
        $prize = 0;
        
        if ($correctNumbers >= 20 || $correctNumbers <= 5) {
            $prize = $correctNumbers * $bet;
        }
        
        echo "<p>Números vencedores: " . implode(", ", $winningNumbers) . "</p>";
        echo "<p>Números corretos: $correctNumbers</p>";
        echo "<p>Prêmio: $prize</p>";
    ?>
</body>
</html>