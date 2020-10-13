<?php
/**
 * Ejemplo de ejercicio sin formulario - ejemplo-sf-1.php
 *
 * @author Kelya
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ejemplo de ejercicio sin formulario.
    Ejemplos.
    Kelya
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>

<body>
  <h1>Ejemplo de ejercicio sin formulario 1</h1>

  <p>Actualice la página para mostrar dos nuevos colores.</p>

  <table>
    <tbody>
<?php
$numero_dados = rand (1,10);
$maximo=0;

for($contador=1; $contador<=$numero_dados; $contador++){
    $dado = rand(1,6);
    if($dado > $maximo){
        $maximo = $dado;
    }
    print"<img src='img/dados/$dado.svg'>";
}
print "<p>El máximo es $maximo</p>\n";

?>
    </tbody>
  </table>

  <footer>
    <p>Kelya</p>
  </footer>
</body>
</html>