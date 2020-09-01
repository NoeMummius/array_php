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
      <td>Tue. Sep. 1, 2020 10:54</td>
     </tr>
    </table>
   </div>
   <div class="Actividad">
    <form action="index.php" method="POST">
     <label for="crear">Escriba los enteros que llevará el arreglo separados por comas: </label>
     <input type="text" name="data">
     <br>
     <input type="submit" value="Enviar datos">
     <br>
     <label for="llenar">Presione llenar para crear un arreglo con enteros aleatorios</label>
     <input type="submit" value="Enviar random">
     <br>
     <label for="orden">Elija cómo desea ver los datos:</label>
     <select name="orden" id="orden">
       <option value="D">Desordenados</option>
       <option value="O">Ordenados</option>
     </select>
     <br><br>
     <input type="submit" value="Enviar orden">
    </form>
    <?PHP
     require("arreglo.php");
     $Enteros;
     if (isset($_POST['data']))
     {
      $Numeros = explode(",", $_REQUEST['data']);
      $Enteros = new Arreglo($Numeros);
     }
     else if (isset($_POST['Enviar random']))
     {
      $n = rand();
      $Enteros = new Arreglo($n);
     }
     if (isset($_POST['orden']))
     {
      $orden=$_REQUEST['orden'];
      switch($orden)
      {
        case 'D':
         $Enteros->mostrar()."<br>"; 
        break;
        case 'O':
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
