    <?php
        $link1="/";
        $web1="Visual Lab";
        $web2="Tireoides"; $link2="/visual/thyroid"; 
        $web3=""; $link3="";

        $MTtitulo="Visual Lab - Projeto Tireoides";
		$MTdescripcion="Banco de imagens infravermelha para o Diagnóstico de Nódulos Tireoidianos - Visual Lab UFF";
		$MTkeywords="análise de imagens, nódulos tireoidianos, imagens médicas, visual,laboratório,computação gráfica,gráfica,ciência da computação";

        require("../comun/top.php");
    ?>
	
	<br clear="all"/><br/>
    <h3>Banco de imagens infravermelhas para o Diagnóstico de Nódulos Tireoidianos</h3>
		<br clear="all"/><br/>
	
		<center>
			<img src="my_images/adquisition.jpg" width="20%" />
			<img src="my_images/TID.jpg" width="30%" />        
		</center>

		<br clear="all"/><br/>
		
		<div style="margin-left: 20%">
			<h3>Banco de dados e imagens</h3>
		</div>
		
		<a href="/thyroid/banco_dados.php?group_display=1">
		<div class="membros" style="margin-left:21%; width: 40%;"> 
			<div class="imagen">
				<img src="../images/database.png" width="80" height="90" />
			</div>
			<div class="descripcion" >
				<p class="titulo2">
					
						DTNR - View Database 
					
				</p>
				<p  class="detalle"> 
					Câmera usada no projeto FLIR SC-620, <br/>
					Resolução: 640 x 480:  Pixel = 25 &#181m  <br/>
				</p>
			</div>
		</div>    
		</a>
	
	<br clear="all"/><br/><br clear="all"/><br/>

    <p align="justify">
        Nódulos tireoidianos são muito frequentes na população em geral. Aproximadamente 4 a 7% de mulheres e 1%
		dos homens apresentam nódulos palpáveis na tireóide. A prevalência de nódulos por exames ultrassonográficos
		é substancialmente maior, chegando a 68% da população em zonas com Iodo insuficiente. O câncer da tireoide, que ocorre em 7-15% dos casos de nódulo
		dependendo da idade, sexo, histórico de exposição à radiação, histórico familiar, dentre outros fatores.
    </p>

    <p align="justify">
        Câmeras infravermelhas permitem captar temperatura superficial. Quando há hipermetabolismo devido ao aumento
		da angiogênese e do fluxo sanguíneo, há emissão de calor facilmente detectável através da pele.
    </p>
    
    <p align="justify">
        Este banco de dados contém imagens, dados clínicos e histopatológicos coletados de pacientes com nódulos
		tireoidianos do Ambulatório de Endocrinologia e Cirurgia do Hospital Universitário Antônio Pedro - HUAP da 
		Universidade Federal Fluminense - UFF, comparados com os exames ultrassonográfico (US), citopatológico (por
		Punção Aspirativa por Agulha Fina - PAAF) e outros.
    </p>
    
    <p align="justify">
        O objetivo é avaliar o uso da termografia na investigação de nódulos tireoidianos, por ser um exame de fácil 
		realização e sem riscos. Todos os pacientes envolvidos no estudo assinaram o <a target="_blank" href="/thyroid/TCLE.pdf">Termo de Consentimento Livre e 
		Esclarecido (TCLE)</a>.
    </p>


    
    <!--<a href="/thyroid/banco_dados.php?group_display=1">
    <div class="membros" style="width: 40%"> 
        <div class="imagen">
            <img src="/thyroid/my_images/download.jpg" width="80" height="90" />			
        </div>
        <div class="descripcion" >
            <p class="titulo2">                
                    DTNR - Download Database                
            </p>
            <p  class="detalle"> 
                Câmera usada no projeto FLIR SC-620, <br/>
                Resolução: 640 x 480:  Pixel = 45 Î¼m  <br/>
            </p>
        </div>
    </div>    
    </a>
	
	<!--<img src="/thyroid/my_images/download.jpg" width="80" height="90" />
	<img src="/my_images/download.jpg" width="80" height="90" />
	<img src="my_images/download.jpg" width="80" height="90" />
	<img src="../download.jpg" width="80" height="90" />-->
    
    <br><br>
    <br><br>

    <?php require("../comun/end.php");?> 
	