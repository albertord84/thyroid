<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
<?php
$link1="/";
$web1="Visual Lab";
$web2="Proeng"; $link2="/proeng";
$web3="Mamogramas"; $link3="/proeng/mamografia.php";

$MTtitulo="Visual Lab - Projeto Proeng - Mamogramas";
$MTdescripcion="Processamento e Análise de Imagens Aplicadas à Mastologia - Visual Lab UFF";
$MTkeywords="análise de imagens, imagens mastologicas, imagens medicas, visual,laboratorio,computação grafica,grafica,ciencias da computação";


require("../comun/top.php");
?>
<h3>Registro Rígido de Mamografias</h3>

<p>O objetivo deste trabalho é detectar nódulos cancerígenos em imagens oriundas de mamogramas. Para tal, utilizou-se imagens do banco DDSM, <a href="http://marathon.csee.usf.edu/Mammography/Database.html" target="_blank">link aqui.</a></p>
<p>Primeiramente fez-se um registro rígido de imagens, mama direita e mama esquerda, em seguida um registro flexível de imagens. Com isso as imagens passam a possuir geometrias bem semelhantes.</p>
<p>Dando prosseguimento ao trabalho, utilizou-se do cálculo do variograma cruzado que é uma medida estatística para reunir características das imagens. Por conseguinte, as características foram treinadas utilizando-se uma ferramenta de tomada de decisão que implementa o SVM, Suport Vector Machine, para classificar as características em dois grupos distintos: regiões com patologia e regiões sem patologia. Isto está melhor detalhado no trabalho: <a href="http://www.tedebc.ufma.br//tde_busca/arquivo.php?codArquivo=589" target="_blank"> Detecção de Regiões Suspeitas em Mamografias Digitais Utilizando Descrição Espacial com Variograma Cruzado</a></p>

<p>Algumas das imagens registradas, mama esquerda e mama direita, e sua correspondente subtraída pixel a pixel podem ser vistas nos links: <a href="http://visual.ic.uff.br/proeng/compatologia.php">aqui</a> e <a href="http://visual.ic.uff.br/proeng/sempatologia.php">aqui</a></p>
<br/>

<br/>
<?php require("../comun/end.php");?> 