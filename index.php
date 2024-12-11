<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora de notas</title>
    <link rel="stylesheet" href="../calcular-notas/css/style.css">
</head>
<body>
   
    <div class="calcular">
    <h1>calculadora de notas</h1>
    <form method="post" action="/relatorio.php" >
        
    <label for="numero1">Primeira Nota:</label><br>
    <input type="number" id="numero1" name="numero1"  placeholder="10"  required><br>

    <label for="numero2">Segunda Nota:</label><br>
    <input type="number" id="numero2" name="numero2"  placeholder="8,0"required><br>

    <label for="numero3">Terceira Nota:</label><br>
    <input type="number" id="numero3" name="numero3"  placeholder="7,65" required><br>

    <label for="numero4">Quarta Nota:</label><br>
    <input type="number" id="numero4" name="numero4"   placeholder="9,5" required><br>
    <br>
    <button type="button">calcular</button>
    </form>
    </div>
   
   
</body>
</html>