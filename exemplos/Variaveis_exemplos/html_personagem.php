<?php
  $nome = "Alucard"; 
  $level = 20;
  $player = TRUE;
  $ouro = 415.20;
  $items = ["Espada", "Escudo", "Elmo"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Status do Jogador</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #1e1e2e;
            color: #cdd6f4;
            padding: 20px;
        }
        .card {
            background-color: #252538;
            border: 2px solid #cba6f7;
            padding: 20px;
            border-radius: 8px;
            max-width: 300px;
        }
        h2 { color: #f5c2e7; margin-top: 0; }
        ul { padding-left: 20px; }
    </style>
</head>
<body>

    <div class="card">
        <h2>Ficha de Personagem</h2>
        <p><strong>Nome:</strong> <?php echo $nome; ?></p>
        <p><strong>Level:</strong> <?php echo $level; ?></p>
        <p><strong>Ouro:</strong> G$ <?php echo $ouro; ?></p>
        
        <h3>Inventário:</h3>
        <ul>
            <?php
              // Um loop simples para listar os items
              foreach ($items as $item) {
                  echo "<li>$item</li>";
              }
            ?>
        </ul>
    </div>

</body>
</html>