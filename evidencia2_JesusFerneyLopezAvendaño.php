<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Arreglo de datos</title>
    </head>
    <body>
       <h3>Arreglo de datos</h3>
       
 <?php
 
 $HeaderArray = array(
 array("Nombre", "Dirección", "Teléfono", "Fecha de Cumpleanos", "Color Favorito", "Significado")
 );
 
 $DataArray = array(
 array("Juan Perez", "Cra. 45 # 45 - 56", 3456789, "23/12/1997", "Amarillo"),
 array("Pablo Manrique", "Clle. 23 # 12 - 19 Sur", 3214567, "12/10/1980", "Verde"),
 array("Nancy Peña", "Av. 34 # 16 - 12", 2135423, "07/06/2000", "Rojo")
 );
 
 $key = array("Amarillo"  => "Riqueza y Alegria");
?>
        <table style="width:324px;" border="3" cellspacing="1" cellpadding="1">
<?php
 echo "<tr>";
 foreach($HeaderArray as $header) {
 echo "<td bgcolor=yellow>$header[0]</td>";
 echo "<td bgcolor=yellow>$header[1]</td>";
 echo "<td bgcolor=yellow>$header[2]</td>";
 echo "<td bgcolor=yellow>$header[3]</td>";
 echo "<td bgcolor=yellow>$header[4]</td>";
 echo "<td bgcolor=yellow>$header[5]</td>";
 }
 echo "</tr>";
 
 foreach ($DataArray as $data){
     echo "<tr>";
  $data[0];
  $data[1];
  $data[2];
  $data[3];
  $data[4];
 
 foreach ($data as $element => $cell) {
 echo "<td> $cell </td>";
 if ($element === 4) {
 echo "<td>";
 echo isset($key[$cell]) ? $key[$cell] : "No se encuentra el significado";
 echo "</td>";
 }
 }
 echo "</tr>";
 }
 /* Nombre: Jesús Ferney López Avendaño
  * Nombre del programa: Desarrollo web con PHP
  * Evidencia: Taller “Uso de arreglos”
  */
  //La verdad estaba acostumbrado a usar Javascript con html, pero usar PHP es 
  //bastante interesante, sobretodo porque te acostumbras a buenas practicas 
  //como lo es el uso del punto y coma estricto, con el cual me habia 
  //desacostumbrado en React. Ya hablando de lógica y sintaxis, lo que hice fue
  //crear dos arreglos (uno para los headers y otro para la data), y luego hice 
  //una key, para separar la clave del valor a aplicar, que luego utilicé
  //en la condicional, con los datos a comparar. Luego de hacer ése framento de
  //código php, creé el elemento "tabla" en donde le pasé las clases y estilos 
  //correspondientes (width, border y, espaciados y separado de celda). Después,
  //abrí otro fragmento de código PHP, donde iteré cada uno de los dos arreglos
  //con un foreach por su índice. Encerré con "tr" la iteración de headers y a
  //cada elemento con un "td" en donde le puse la clase con el color amarillo a
  //cada celda y luego con echo para pintarlos. Luego de ello, iteré la data con
  //otro foreach por su índice, y finalmente, hice otro foreach para iterar cada 
  //elemento de ésa data, para así, poder hacer la comparación. En éste último 
  //foreach, se itera para hacer la confirmación de que hay datos en la matriz, 
  //y sí contiene elementos se asigna el primer valor de la matriz a la variable 
  //auxiliar, al igual que el primer índice, y al contener más elementos sigue 
  //hacien do el ciclo con cada índice, hasta que el bucle deje de ejecutarse 
  //por falta de elementos. Encerré el bloque de sentencias en un "td" y "echo".
  //Dentro del mismo foreach, hice la comparación respecto a la iteración con 
  //los índices, en éste caso, hice una igualdad estricta respecto el índice 4,
  //que son los datos del color favorito, y en éste punto, sí tuve que hacer
  //una investigación que me llevo a dos propiedades (isset y empty), las
  //cuales desconocía del lenguaje. Ya con ello pude utilizar un ternario
  //para hacer las condicionales, que, sí el elemento es igual al índice 4 me
  //muestre el significado del color, o de lo contrario, me muestre un mensaje
  //que dice: "no se encuentra el significado". En ésta parte del isset, se 
  //trae la key para darle el valor a aplicar. Y cerré el "tr".
  //Por cierto, a cada "tr", le puse "echo", para poder pintarlo en la pantalla. 
 ?>
    </table>
   </body>
</html>
