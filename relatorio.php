<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>relatorio</title>
    <link rel="stylesheet" href="../calcular-notas/css/style.css">
</head>
<body>
  <div class="calcular">
    <h1>Relatório de notas</h1>
<?php
if($_SERVER['REQUEST_METHOD'] ==='POST'){
  //validação das notas
  $numero1 = $_POST ['numero1'];
  $numero2 = $_POST ['numero2'];
  $numero3 = $_POST ['numero3'];
  $numero4 = $_POST ['numero4'];

  if($numero1 !== false && $numero2 !== false && $numero3 !== false && $numero4 !== false){
  //cálculo da média
$media = ($numero1 + $numero2 + $numero3 + $numero4) / 4 ;

 //exibição dos resultados
echo "<div class ='result'>";
echo "<table>";

echo "<tr><td>nota1</td></td>$numero1 </td></tr>";
echo "<tr><td>nota2</td></td>$numero2 </td></tr>";
echo "<tr><td>nota3</td></td>$numero3 </td></tr>";
echo "<tr><td>nota4</td></td>$numero4 </td></tr>";
echo "<tr><td>Media</th><th>".number_format($media,2)."</th></tr>";
echo "</table>";
echo "</div>";
} else{
  echo "<div class ='result>";
  echo "<p>por favor,insira valores válidos para todas as notas.</p>";
  echo "</div>";
}
}
?>
<a href="index.php"><button>Novo cálculo</button>
</div>
</body>
</html>
