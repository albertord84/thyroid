<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
$link1="/";
$web1="Visual Lab";
$web2="Proeng"; $link2="/proeng";
$web3="Tabelas"; $link3="/proeng/tabelas.php";

$MTtitulo="Visual Lab - Projeto Proeng - Tabelas";
$MTdescripcion="Processamento e Análise de Imagens Aplicadas à Mastologia - Visual Lab UFF";
$MTkeywords="análise de imagens, imagens mastologicas, imagens medicas, visual,laboratorio,computação grafica,grafica,ciencias da computação";


require("../comun/top.php");
?>
<h3> <strong>Tabelas de Contingências</strong></h3>
<br/>

<table width="600" >
<thead>
  <tr>
    <th scope="col" colspan="2"><strong>Automática / Segmentação Manual (GT#1)</strong></th>
    <th scope="col" colspan="2"><strong>Automática / Segmentação Manual (GT#2)</strong></th>
  </tr>
  <tr>
    <th scope="col"><strong>Obter PDF</strong></th>
    <th scope="col"><strong>Obter Planilha Ecxel</strong></th>
    <th scope="col"><strong>Obter PDF</strong></th>
    <th scope="col"><strong>Obter Planilha Ecxel</strong></th>
  </tr>
  
  </thead>
 <tbody>
 
  <tr>
    <td><a href="Results/GT1.pdf" target="_blank"><img src="media/GT1_pdf.BMP"></a></td>
    <td><a href="Results/GT1.xls" target="_blank"><img src="media/GT1_xls.BMP"></a></td>
    <td><a href="Results/GT2.pdf" target="_blank"><img src="media/GT2_pdf.BMP"></a></td>
    <td><a href="Results/GT2.xls" target="_blank"><img src="media/GT2_xls.BMP"></a></td>
  </tr>

  </tbody>

</table>


<p><strong>*GT#1</strong> = Segmentação manual realizada por um especialista.</p>
<p><strong>*GT#2</strong> = Segmentação manual realizada por uma pessoa leiga.</p>
<br/>
<?php require("../comun/end.php");?> 