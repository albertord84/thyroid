<meta http-equiv="content-type" content="text/html; charset=utf-8"> 

<?php
$link1="/";
$web1="Visual Lab";
$web2="Proeng"; $link2="/proeng";
$web3="Procurar"; $link3="/proeng/search.php";

$MTtitulo="Visual Lab - Projeto Proeng";
$MTdescripcion="Processamento e Análise de Imagens Aplicadas à Mastologia - Visual Lab UFF";
$MTkeywords="análise de imagens, imagens mastologicas, imagens medicas, visual,laboratorio,computação grafica,grafica,ciencias da computação";

require("../comun/top.php");
//include "conecta_bd_admin.php"; 
?>
<h3>Procurar</h3><br/>

    <form action="search.php" method="post">
      <table>  
	  <tr>
          <td>Número do arquivo - File number:</td>
          <td>  	
				<select name="id" >
					<option value="none">----------</option>
					<?php
					  
						$resultado = mysqli_query("SELECT ID FROM imagem");
													   
						if (!$resultado) 
						{
							echo 'Não foi possível encontrar as imagens: ' . mysqli_error();
							exit;
						}
						
						while ( $linha = mysqli_fetch_array($resultado) ) 
						  echo "<option value='".$linha["ID"]."'>".$linha["ID"]."</option>";
					?>
				</select>
		  </td>
        </tr>
        
		
		
        <tr>
          <td>Prontuário - Patient ID:</td>
          <td>  
				<select name="numpront" >
					<option value="none">----------</option>
					<?php
					  
						$resultado = mysqli_query("SELECT ID FROM prontuario");
													   
						if (!$resultado) 
						{
							echo 'Não foi possível encontrar os prontuários: ' . mysqli_error();
							exit;
						}
						
						while ( $linha = mysqli_fetch_array($resultado) ) 
						  echo "<option value='".$linha["ID"]."'>".$linha["ID"]."</option>";
					?>
				</select>
		  </td>
        </tr>
        </table>  
		<div style="border-style:solid; border-color:gray; border-width:1px; width:600px">
		<table>
        <tr>	 
          <td>Idade - Age:</td>
          <td> 
				<select name="nascimento"  >
					<option value="none">-----------------------------------------------------</option>
					<?php
					  
						$resultado = mysqli_query("SELECT DISTINCT NASCIMENTO FROM prontuario");
													   
						if (!$resultado) 
						{
							echo 'Não foi possível encontrar os prontuários: ' . mysqli_error();
							exit;
						}
						
						while ( $linha = mysqli_fetch_array($resultado) )
						{
						  list($ano,$mes,$dia) = split ("-", $linha["NASCIMENTO"]);
						  if ( ($ano > 0) && ($mes > 0) && ($dia > 0) )
						  {
							$idade = date("Y") - $ano;
						  
							if ( date("m") < $mes ) $idade--; else if ( date("m") == $mes ) if ( date("d") < $dia ) $idade--;
						  }
						  else $idade = "idade não informada - age not informed";
						  
						  
						  echo "<option value='".$linha["NASCIMENTO"]."'>".$idade."</option>";
						}
					?>
				</select>
		  </td>
        </tr>
       
        <tr>
          <td>Tipo de captura - Acquisition type:</td>
          <td>&nbsp
				<select name="ir"  >
					<option value="none">---------------------------------------------------------------------</option>
					<option value="md">direita - right</option>
					<option value="me">esquerda - left</option>
					<option value="t1">frontal - frontal</option>
					<option value="limd">lateral interna direita - right internal side</option>
					<option value="lime">lateral interna esquerda - left internal side</option>
					<option value="t2">frontal com braços levantados - up arms frontal</option>
					<option value="lemd">lateral externa direita - external side right</option>
					<option value="leme">lateral externa esquerda - external side left</option>
				</select>
		  </td>
        </tr>
        
        <tr>
          <td>Diagnóstico - Diagnosis:</td>
          <td>&nbsp
				<select name="hd"  >
					<option value="none">---------------------------------------------</option>
					<?php
					  
						$resultado = mysqli_query("SELECT DISTINCT HD FROM prontuario");
													   
						if (!$resultado) 
						{
							echo 'Não foi possível encontrar os prontuários: ' . mysqli_error();
							exit;
						}
						
						while ( $linha = mysqli_fetch_array($resultado) )
						{
						  echo "<option value='".$linha["HD"]."'>".$linha["HD"]."</option>";
						}
					?>
				</select>
		  </td>
        </tr>
		
		<tr>
          <td>Data do exame - Exam date:</td>
          <td>  
				<select name="de"  >
					<option value="none">----------</option>
					<?php
					  
						$resultado = mysqli_query("SELECT DISTINCT DE FROM prontuario ORDER BY DE");
													   
						if (!$resultado) 
						{
							echo 'Não foi possível encontrar os prontuários: ' . mysqli_error();
							exit;
						}
						
						while ( $linha = mysqli_fetch_array($resultado) )
						{
						  list($ano,$mes,$dia) = split ("-", $linha["DE"]);
						  
						  echo "<option value='".$linha["DE"]."'>$dia-$mes-$ano</option>";
						}
					?>
				</select>
		  </td>
        </tr>
		</table>
		</div>
      <br/>
      
      <input type="submit" value="pesquisar - search"/>
    </form>
    
    <?php
      include "conecta_bd_pesquisa.php";
      
	  if ( isset($_GET["selecao"]) )
	  {
			
		  if ($_GET["selecao"] == "id") // se a busca for feita pelo número da imagem
		  {
			$resultado = mysqli_query("SELECT ID FROM imagem WHERE ID = ".$_GET["id"]);
			
			if (!$resultado) 
			{
				echo 'Não foi possível fazer a consulta em imagem: ' . mysqli_error();
				exit;
			}
			
			while ($imagem = mysqli_fetch_array($resultado))
			{
			  if ( $imagem[0] == 0 || $imagem[0] == 1 ) $quantidade_digitos = 1; 
			  else $quantidade_digitos = floor( log( (int)$imagem[0], 10 ) ) + 1; //quantidade de dígitos do ID da imagem
			  
			  $zeros = ""; //essa variável mostra a quantidade de zeros à esquerda
			  for ($i = 1; $i <= (4 -$quantidade_digitos); $i++) $zeros = $zeros."0"; //calcula a quantidade de dígitos à
																						   //esquerda do id
			  
			  $id_imagem = $zeros.$imagem[0]; //inserção dos zeros à esquerda
			  
			  
			  echo "<a href='informacao_pesquisa.php?id=".$imagem[0]."' target='_blank'>
			  
					  <div>
						<img src='imagens/thumbs/IR_".$id_imagem.".jpg'/>
					  </div>
					  
					  <div>
						IR_".$id_imagem.".jpg
					  </div>
					  
					 </a>";
			} 
		  }
		  
		  
		  
		  if ( ($_GET["selecao"] == "pront") || ($_GET["selecao"] == "itdd") ) //se a busca for feita pelo número do prontuário, data, tipo de captura ou diagnóstico
		  {
			$query = "SELECT imagem.ID FROM imagem, prontuario WHERE prontuario.ID = ID_PRONTUARIO AND ";
			 
			if (isset ($_GET["numpront"]) ) if ($_GET["numpront"] != "none") 
												$query = $query."prontuario.ID = '".$_GET["numpront"]."' AND ";
			if (isset ($_GET["nascimento"]) ) if ($_GET["nascimento"] != "none") 
												$query = $query."prontuario.NASCIMENTO = '".$_GET["nascimento"]."' AND ";
			if (isset ($_GET["ir"]) ) if ($_GET["ir"] != "none") 
										$query = $query."imagem.IR = '".$_GET["ir"]."' AND ";
			if (isset ($_GET["hd"]) ) if ($_GET["hd"] != "none") 
										$query = $query."prontuario.HD = '".$_GET["hd"]."' AND ";
			if (isset ($_GET["de"]) ) if ($_GET["de"] != "none") 
										$query = $query."prontuario.DE = '".$_GET["de"]."' AND ";
			
			$query = substr ($query, 0, strlen($query)-5); //retira o último AND da query
			//echo $query;
			$resultado = mysqli_query($query);
			
			if (!$resultado) 
			{
				echo 'Não foi possível fazer a consulta em imagem: ' . mysqli_error();
				exit;
			} 
			  
			  
			if ( !mysqli_num_rows($resultado) ) 
				echo '<script type="text/javascript">alert("Nenhum resultado (No results).")</script>'; //"<p style='color:red'>Nenhum resultado (No results).</p>";
			
			
			$imagens = array();
			$j = 0;
			while ( $imagem = mysqli_fetch_array($resultado) )
			{
				if ( $imagem[0] == 0 || $imagem[0] == 1 ) $quantidade_digitos = 1; 
				else $quantidade_digitos = floor( log( (int)$imagem[0], 10 ) ) + 1; //quantidade de dígitos do ID da imagem
					  
			    $zeros = ""; //essa variável mostra a quantidade de zeros à esquerda
				for ($i = 1; $i <= (4 -$quantidade_digitos); $i++) $zeros = $zeros."0"; //calcula a quantidade de dígitos à
																						   //esquerda do id
																						   
				$id_imagem = $zeros.$imagem[0]; //inserção dos zeros à esquerda
			  
			  
				$imagens[$j] = "<a href='informacao_pesquisa.php?id=".$imagem[0]."' target='_blank'>
		
									<div>
										<img src='imagens/thumbs/IR_".$id_imagem.".jpg'/>
									</div>
							
									<div>
										IR_".$id_imagem.".jpg
									</div>
						  
								</a>";
							   
				$j++; 
			}
			  
			  
			$linhas = ceil( count($imagens) / 5 );
			echo "<table>";
			for ($i = 0; $i < $linhas; $i++)
			{
				echo "<tr>";
				
				for ($j = 0; $j < 5; $j++)
				{
					if ( isset($imagens[$i*5+$j]) ) echo "<td>".$imagens[$i*5+$j]."</td>";
				}
				  
				echo "</tr>";
			}
			echo "</table>";
				  
			  
		  }
	  }
      
    ?>
    
    
    
<table width="600" >
<thead>
  <tr>
    <th scope="col"><strong>Nome do Software</strong></th>
    <th scope="col"><strong>Desenvolvedores</strong></th>
    <th scope="col"><strong>Fonte</strong></th>
    <th scope="col"><strong>Tamanho</strong></th>
  </tr>
	</thead>
 <tbody>
 
  <tr>
    <td><a href="softwares/ThermaCAM QuickView 1.3.zip" target="_blank">ThermaCAM QuickView 1.3</a></td>
    <td> FLIR </td>
    <td> <a href="http://www.flir.com/thermography/americas/br" target="_blank">http://www.flir.com/thermography/americas/br
</a></td>
    <td> 100MB </td>
  </tr>
  <tr class="odd">
    <td><a href="softwares/QuickView2.zip" target="_blank"> QuickView 2.0 </a></td>
    <td>FLIR</td>
    <td><a href="http://www.flir.com/thermography/americas/br" target="_blank">http://www.flir.com/thermography/americas/br</a></td>
    <td> 121MB </td>
  </tr>

  </tbody>

</table>


<br/>
<?php require("../comun/end.php");?> 