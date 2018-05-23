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
    
      
    
    <p style="text-align: center">
        <a href="/thyroid/banco_dados.php?group_display=1">Voltar  |  </a> 
        <a href="<?php echo '/thyroid/patient.php?name_dir='.$_GET['name_dir'].'&id='.$_GET['id'].'&colors=1';?>">Em cores  |  </a>
		<?php if(file_exists('banco/Originals/'.$_GET['name_dir']))	{  
			echo '<a href="/thyroid/patient.php?name_dir='.$_GET['name_dir'].'&id='.$_GET['id'].'&colors=2">Ground Truth  |  </a>';
			echo '<a href="/thyroid/patient.php?name_dir='.$_GET['name_dir'].'&id='.$_GET['id'].'&colors=3">Segmentação</a> | ';
			echo '<a href="/thyroid/patient.php?name_dir='.$_GET['name_dir'].'&id='.$_GET['id'].'&colors=4">Em tons de cinza | </a>';
			echo '<a href="/thyroid/patient.php?name_dir='.$_GET['name_dir'].'&id='.$_GET['id'].'&colors=5">ROI</a>';
			}
		?>	
			
        
		<!--<a href="<?php //echo '/thyroid/download.php?path=banco/Originals/&file_name='.$_GET['name_dir'];?>">Descargar em Cores  |  </a>
        <a href="<?php// echo '/thyroid/download.php?path=banco/Converted/&file_name='.$_GET['name_dir'];?>">Descargar em Níveis de Cinza|  </a>
        <a href="<?php// echo '/thyroid/download.php?path=banco/Temperatures/&file_name='.$_GET['name_dir'];?>">Matriz de temperatura </a>        -->
    </p>
	
	<br>
	
	
	
	
	<p style="text-align:justiffy">
		<?php if($_GET['colors']==='3')
			echo '				
				 As bordas em cor azul correspondem com a segmentação manual dos nódulos. 
				 As bordas em  cor vermelho correspondem com a segmentação por Crescimento de Regiões
				 usando diferentes limiares de semelhança entre a janela do pixel semente e a janela do pixel que pode ser ou não 
				 adicionado à região.
				';
		?>
	</p>
	
	<p style="text-align:center">
		<?php 
		if($_GET['colors']==='2')
			echo '				
				 <a href="download_all.php?file_name='.$_GET['name_dir'].'">Baixar coordenadas do Ground truth</a> 
				';
		?>
	</p>
	
	
    <br>
    <table>
        <?php            
            $path_color="banco/Originals/".$_GET['name_dir'];
            $path_GT="banco/GroundTruth-images/".$_GET['name_dir'];
			$path_NoduleSegmentatio="banco/GrowingRegionBW/".$_GET['name_dir'];
			$path_Cinza="banco/RealConverted/".$_GET['name_dir'];
			$path_OnlyROI="banco/OnlyROI/".$_GET['name_dir'];
			
            //$path_temperature_matrix="banco/Temperature/".$_GET['name_dir'];
            
            if($_GET['colors']==='1')
                $path_to_display_images=$path_color;
            else if($_GET['colors']==='2')
                $path_to_display_images=$path_GT;
			else if($_GET['colors']==='3')
                $path_to_display_images=$path_NoduleSegmentatio;
			else if($_GET['colors']==='4')
                $path_to_display_images=$path_Cinza;
			else if($_GET['colors']==='5')
                $path_to_display_images=$path_OnlyROI;
				
				
            if(file_exists($path_to_display_images)){
                $names=scandir($path_to_display_images);
                $num_images=count($names);
                for($i=2;$i<$num_images;$i=$i+4){
                    echo '<tr>';
                        if($i<$num_images)
                            echo '<td><img style="width:90%;margin:5%" src="'.$path_to_display_images.'/'.$names[$i].'"/></td>';
                        if($i+1<$num_images)
                            echo '<td><img style="width:90%;margin:5%" src="'.$path_to_display_images.'/'.$names[$i+1].'"/></td>';
                        if($i+2<$num_images)
                            echo '<td><img style="width:90%;margin:5%" src="'.$path_to_display_images.'/'.$names[$i+2].'"/></td>';
                        if($i+3<$num_images)
                            echo '<td><img style="width:90%;margin:5%" src="'.$path_to_display_images.'/'.$names[$i+3].'"/></td>';

                    echo '</tr>';
                }
            }else
                echo '<h3>A pasta com imagens não está disponível.<h3>';
            
            
            
        ?>
    </table>
    <br><br>
    <p style="text-align: center">
         
    </p>
    

    <br><br>
    <?php require("../comun/end.php");?> 