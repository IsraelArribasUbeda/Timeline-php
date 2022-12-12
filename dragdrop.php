<!DOCTYPE HTML>
<html>
<head>
<style>
<?php
include'estilos.css';
?>
</style>
<script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("Data", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("Data");
  ev.target.appendChild(document.getElementById(data));
  var data2 = ev.target.id;
  var carta = document.getElementById(data);

  let dato = document.getElementById(data2).dataset.value;
  //hacer el quitar imagen y poner una nueva
  let carta1 = document.getElementById(data).dataset.value;
  if (carta1==dato) {
    alert("¡¡¡¡CORRECTO!!!!");
    carta.ondragstart = () => {
  return false;
};
  }

  else{alert("¡¡¡¡INCORRECTO!!!!");}

}
</script>
</head>
<body>

  <?php 
  $arrayCartas = array("carta1.jpg","carta2.jpg","carta3.jpg","carta4.jpg",
                       "carta6.jpg","carta7.jpg","carta8.jpg","carta9.jpg");
  $años = array(476,1492,1875,1945,1963,1969,1989,2001);
   ?>


  <center>

<h2>Time Line</h2>
<p>Juego hecho por Israel Arribas y Victor Alonso.</p>
<br>
<table>
<tr>
  <th><h3 align="center">476</td>
  <th><h3 align="center">1492</td>
  <th><h3 align="center">1875</td>
  <th><h3 align="center">1945</td>
  <th><h3 align="center">1945</td>
  <th><h3 align="center">1963</td>
  <th><h3 align="center">1969</td>
  <th><h3 align="center">1989</td>
  <th><h3 align="center">2001</td>
</tr>

<tr>

<td><div data-value="476" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
</div></td>

<td><div data-value="1492" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
</div></td>

<td><div data-value="1875" id="div3" ondrop="drop(event)" ondragover="allowDrop(event)">
</div></td>

<td><div data-value="1945" id="div4" ondrop="drop(event)" ondragover="allowDrop(event)">
</div></td>

<td><div id="div5"><img src="carta5.jpg" width="80" height="115"></div></td>

<td><div data-value="1963" id="div6" ondrop="drop(event)" ondragover="allowDrop(event)">
</div></td>

<td><div data-value="1969" id="div7" ondrop="drop(event)" ondragover="allowDrop(event)">
</div></td>

<td><div data-value="1989" id="div8" ondrop="drop(event)" ondragover="allowDrop(event)">
</div></td>

<td><div data-value="2001" id="div9" ondrop="drop(event)" ondragover="allowDrop(event)">
</div></td>

</tr>
</table>

<div id="contenedor">

<div id="carta1" ondragover="allowDrop(event)">
  <img src="
  <?php 
  echo $arrayCartas[$posicionAleatoria = rand(0,(sizeof($arrayCartas) - 1))]; 
  unset($arrayCartas[$posicionAleatoria]); 
  $arrayCartas=array_values($arrayCartas);
?>" 
data-value="<?php echo $años[$posicionAleatoria]; ?>"
<?php
  unset($años[$posicionAleatoria]); 
  $años=array_values($años);  
  ?>
draggable="true" ondragstart="drag(event)" id="drag1" width="80" height="115">
</div>

<div id="carta2" ondragover="allowDrop(event)">
  <img src="
  <?php 
  echo $arrayCartas[$posicionAleatoria2=rand(0,(sizeof($arrayCartas) - 1))]; 
  unset($arrayCartas[$posicionAleatoria2]); 
  $arrayCartas=array_values($arrayCartas);
?>" 
data-value="<?php echo $años[$posicionAleatoria2]; ?>"
<?php
  unset($años[$posicionAleatoria2]); 
  $años=array_values($años);  
  ?>
draggable="true" ondragstart="drag(event)" id="drag2" width="80" height="115">
</div>

<div id="carta3" ondragover="allowDrop(event)">
  <img src="
  <?php 
  echo $arrayCartas[$posicionAleatoria3=rand(0,(sizeof($arrayCartas) - 1))]; 
  unset($arrayCartas[$posicionAleatoria3]); 
  $arrayCartas=array_values($arrayCartas);
?>" 
data-value="<?php echo $años[$posicionAleatoria3]; ?>"
<?php
  unset($años[$posicionAleatoria3]); 
  $años=array_values($años);  
  ?>
draggable="true" ondragstart="drag(event)" id="drag3" width="80" height="115">
</div>

</div>

</center>
</body>
</html>