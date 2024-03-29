<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo do tigrinho</title>
    <style>
        body {
            background-image: url('fundo.jpg'); 
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 850px;
        }
        
    </style>
</head>
</head>
<body>
    <h2>Pronto pra perder dinheiro?</h2>
    <form action="resultado.php" method="post">
        <label for="numbers">Selecione 25 números:</label><br>
        <?php
            for ($i = 1; $i <= 50; $i++) {
                echo "<input type='checkbox' name='numbers[]' value='$i' onclick='updateCounter()' id='number$i'>$i ";
                if ($i % 10 == 0) echo "<br>";
            }
        ?>
        <br>
        <label for="bet">Valor da aposta:</label>
        <input type="number" name="bet" required><br><br>
        <input type="submit" value="Jogar">
    </form>

    <script>
        function updateCounter() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            var count = checkboxes.length;
            document.getElementById('selectedCount').innerText = count;
        }
    </script>
    <p>Números selecionados: <span id="selectedCount">0</span></p>
</body>
</html>