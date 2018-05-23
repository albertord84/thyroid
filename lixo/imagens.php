<meta http-equiv="content-type" content="text/html; charset=utf-8"> 

<?php
$link1="/";
$web1="Visual Lab";
$web2="Proeng"; $link2="/proeng";
$web3="Imagens"; $link3="/proeng/imagens.php";

$MTtitulo="Visual Lab - Projeto Proeng - Imagens";
$MTdescripcion="Processamento e An?lise de Imagens Aplicadas ? Mastologia - Visual Lab UFF";
$MTkeywords="an?lise de imagens, imagens mastologicas, imagens medicas, visual,laboratorio,computa??o grafica,grafica,ciencias da computa??o";


require("../comun/top.php");
?>
<h3>Obter Imagens Segmentadas</h3>
<br/>

<table width="600" >
<thead>
  <tr>
    <th scope="col"><strong>Imagens Originais</strong></th>
    <th scope="col"><strong>Segmentação Automática</strong></th>
    <th scope="col"><strong>Segmentação Manual (GT#1)</strong></th>
    <th scope="col"><strong>Segmentação Manual (GT#2)</strong></th>
  </tr>
  
  </thead>
 <tbody>
 
  <tr>
    <td><a href="Results/Original.rar" target="_blank"><img src="media/Ori.bmp"></a></td>
    <td><a href="Results/Auto.rar" target="_blank"><img src="media/Aut.BMP"></a></td>
    <td><a href="Results/GT#1.rar" target="_blank"><img src="media/GT1.bmp"></a></td>
    <td><a href="Results/GT#2.rar" target="_blank"><img src="media/GT2.bmp"></a></td>
  </tr>

  </tbody>

</table>


<p><strong>*GT#1</strong>?= Segmentação manual realizada por um especialista.</p>
<p><strong>*GT#2</strong>?= Segmentação manual realizada por uma pessoa leiga.</p>
<br/>
<?php require("../comun/end.php");?> 