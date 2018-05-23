    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <?php
        $web1="Visual Lab";  $link1="/"; 
        $web2="Tireoides";   $link2="/thyroid";
        $web3="Banco de dados";    $link3="/thyroid/banco_dados.php?group_display=1";

        $MTtitulo="Visual Lab - Projeto Tireóides - Banco de Imagens";
		$MTdescripcion="Banco de imagens infravermelha para o Diagnóstico de Nódulos Tireoidianos - Visual Lab UFF";
		$MTkeywords="análise de imagens, nódulos tireoidianos, imagens médicas, visual,laboratório,computação gráfica,gráfica,ciência da computação";

        require("../comun/top.php");
    ?>
    <h3>Banco de dados e imagens infravermelhas</h3>
    <p align="justify">
		Cada linha da tabela abaixo contém, para cada exame seguindo o protocolo de captura, dados dos pacientes e nódulos, e um link para:
		<ul>
			<li> - As imagens infravermelhas</li>
			<li> - Segmentação manual dos nódulos (ground truth)  com <a href="download_all.php?file_name=Ground Truth Maker for Thyroids images">ferramenta desenvolvida</a></li>
			<li> - Segmentação dos nódulos por crescimento de regiões</li>
			<li> - Região de interesse</li>			
		</ul>
		<br>
		Uma melhor descrição do significado desses dados pode ser vista "<a href="/thyroid/data_description.php">aqui</a>".
    </p>
    <p align="justify">
		Os links abaixo contêm arquivos compactados de 120 voluntários, clique sobre os links afim de obtê-los:
		<ul>
			<li> - <a href="download_all.php?file_name=infravermelhas">Imagens infravermelhas - 120 pacientes</a></li>
			<li> - <a href="download_all.php?file_name=tonsCinzaMatrizes">Imagens em tons de cinza e matrizes de temperatura - 120 pacientes</a></li>
			<li> - <a href="download_all.php?file_name=ROI">Região de interesse - 120 pacientes</a></li>
		</ul>
		<br>
    </p>
	
	<p align="justify">
		* Para acessar as imagens e resultados preliminares de um paciente basta com clicar sobre imagem do respectivo paciente.
    </p>	
	<br>
    
     <?php
        $group_display=$_GET['group_display'];
        $file_datas='banco/dados - 14-01-18.txt';
        $directoy_path='banco/Originals';
        $separator=';';
        $amount_per_group=8;

        require_once 'crate_list_patients.php';
        if(!isset($GLOBALS['patients']))
            create_patients_list($file_datas,$directoy_path,$separator);
     ?>
	 
	 

    <p id="navigation_link1" align="center">
        <?php  
            if(isset($GLOBALS['patients'])){
                for($i=1;$i<=ceil(count($GLOBALS['patients'])/$amount_per_group);$i++){
                    if($i==1)
                        echo '<a href="/thyroid/banco_dados.php?group_display='.$i.'">'.$i.'</a>';
                    else
                        echo ' | <a href="/thyroid/banco_dados.php?group_display='.$i.'">'.$i.'</a>';            
                }
            }            
        ?>
    </p>
	
	
	
    <div id="container" style="">    
        <table>
        <?php               
            display_patients($group_display,$amount_per_group);            
            //var_dump($GLOBALS['patients'][0]->nodules);
        ?>
        </table>
    </div>

	
	
	
    <p id="navigation_link1" align="center">
        <?php
            if(isset($GLOBALS['patients'])){
                for($i=1;$i<=ceil(count($GLOBALS['patients'])/$amount_per_group);$i++){
                    if($i==1)
                        echo '<a href="/thyroid/banco_dados.php?group_display='.$i.'">'.$i.'</a>';
                    else
                        echo ' | <a href="/thyroid/banco_dados.php?group_display='.$i.'">'.$i.'</a>';            
                }
            }
        ?>
    </p>



    <br><br>
    <?php require("../comun/end.php");?> 