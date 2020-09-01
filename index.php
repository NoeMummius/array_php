<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aplicaciones Web</title>
  </head>
  <body>
   <h1>Aplicaciones Web</h1>
   <div class="Resumen">
    <ol>
     <li>Cuamatzi Flores, Juan</li>
     <li>Muñoz Pérez, Noé</li>
     <li>Rojas Cano, Adriana Abigail</li>
     <li>Trujillo Carrera, Arturo</li>
    </ol>
    <table border="1">
     <tr>
      <td># De actividad</td>
      <td>Nombre</td>
      <td>Descripci&oacute;n</td>
      <td>Evidencia</td>
      <td>Fecha</td>
     </tr>
     <tr>
      <td>Actividad #</td>
      <td>Título de la actividad</td>
      <td>Descripción.</td>
      <td><img src="evidencias/slack_actividad_4_1.png">
      <br><img src="evidencias/slack_actividad_4_2.png">
      <br><img src="evidencias/github_actividad_4_1.png">
      <br><img src="evidencias/github_actividad_4_2.png"></td>
      <td>Mon. Aug. 24, 2020 22:37</td>
     </tr>
    </table>
   </div>
   <div class="Actividad">
    <form action="index.php" method="POST">
     <?PHP
      require("Arreglos.php");
     ?>
     <label for="orden">Elija cómo desea ver los datos:</label>
     <select name="orden" id="orden">
       <option value="0">Desordenados</option>
       <option value="1">Ordenados</option>
     </select>
     <br><br>
     <input type="submit" value="Submit">
    </form>
    <?PHP
     if (isset($_POST['orden']))
     {
      $orden=$_REQUEST['orden'];
      switch($orden)
      {
        case 0:
         $Enteros->mostrar()."<br>"; 
        break;
        case 1:
         $CopyEnteros = $Enteros;
         $CopyEnteros->ordenar();
         $CopyEnteros->mostrar();
        break;
      }
     }
    ?>
   </div>
  </body>
</html>
