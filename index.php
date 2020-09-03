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
     <!--li>Cuamatzi Flores, Juan</li-->
     <li>Muñoz Pérez, Noé</li>
     <li>Rojas Cano, Ariadna Abigail</li>
     <!--li>Trujillo Carrera, Arturo</li-->
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
      <td>Actividad 5</td>
      <td>Arreglos en PHP Orientado a Objetos</td>
      <td>En ésta actividad se desarrolló un script en PHP utilizando el paradigma orientado a objetos para realizar algunas operaciones básicas sobre arreglos. Las operaciones incluídas en el script son:<br>
      <ul>
          <li>Mostrar</li>
          <li>Ordenar ascendentemente</li>
          <li>Calcular media y varianza de los datos</li>
          <li>Llenar con números introducidos por el usuario</li>
          <li>Llenar con números aleatorios</li>
      </ul></td>
      <td><img src="evidencias/actividad_5_slack_1.png">
      <br><img src="evidencias/actividad_5_slack_2.png">
      <br><a href="https://github.com/NoeMummius/array_php">Github del proyecto por <i>Noé Muñoz</i></a>
      <br>
      <?php
       $fp = fopen("evidencias/contar.txt","r");
       while(!feof($fp))
       {
        $linea=fgets($fp);
        echo $linea.'<br>';
       }
      ?>
      <label>Código para ordenar el arreglo escrito por <i>Ariadna Rojas</i></label></td>
      <td>Tue. Sep. 1, 2020 10:54</td>
     </tr>
    </table>
   </div>
   <br>
   <div class="Actividad">
    <form action="index.php" method="POST">
     <label for="crear">Escriba los números que llevará el arreglo separados por comas: </label>
     <input type="text" name="data">
     <input type="submit" value="Enviar datos">
     <br>
     <label for="llenar">Presione llenar para crear un arreglo con números aleatorios</label>
     <input type="submit" value="Llenar aleatoriamente">
     <br>
     <label for="orden">Elija cómo desea ver los datos:</label>
     <select name="orden" id="orden">
       <option value="D">Desordenados</option>
       <option value="O">Ordenados</option>
     </select>
    </form>
    <?PHP
     require("arreglo.php");
     $Enteros;
     if (isset($_POST['data']))
     {
      $Numeros = explode(",", $_REQUEST['data']);
      $Enteros = new Arreglo();
      foreach($Numeros as $numero)
      {
       $Enteros->add($numero);
      }
     }
     else if(isset($_REQUEST['Llenar aleatoriamente']))
     {
      $Enteros = new Arreglo();
      $Enteros->auto_fill();
      $Enteros->contara();
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
         $Enteros->ordenar();
         $Enteros->mostrar().'<br>';
        break;
      }
      $med = 0;
      $var = 0;
      [$med, $var] = $Enteros->med_var();
      echo 'Media: '.$med.'<br>Varianza: '.$var.'<br>';
     }
    ?>
   </div>
  </body>
</html>
