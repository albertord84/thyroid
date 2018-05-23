<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
<?php
$link1="/";
$web1="Visual Lab";
$web2="Proeng"; $link2="/proeng";
$web3="Admin"; $link3="/proeng/admin.php";

$MTtitulo="Visual Lab - Projeto Proeng";
$MTdescripcion="Processamento e An?lise de Imagens Aplicadas ? Mastologia - Visual Lab UFF";
$MTkeywords="an?lise de imagens, imagens mastologicas, imagens medicas, visual,laboratorio,computa??o grafica,grafica,ciencias da computa??o";

require("../comun/top.php");
?>
<h3>?rea para inser??o e edi??o de novas imagens</h3><br/>
		
				
				<form action="" method="post" id="formulario">
				  <div class="campos">
					  login:<input id="Login" name="login"/>
				  </div>
				
				  <div class="campos">
					  senha:<input type="password" id="Senha" name="senha"/>
				  </div>
				
				  <div class="campos">
					  <input type="submit" value="ok" name="submit_acesso_admin"/>
				  </div>
				</form>
				
				<?php
				  if ( isset($_GET["erro"]) )
				  {
				    echo '<div id="aviso"><h3>Login e senha incorretos</h3></div>';
				  }
			  ?>
			  

<br/>
<?php require("../comun/end.php");?> 