<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
<?php
$web1="Visual Lab";  $link1="/"; 
$web2="Tireoides";   $link2="/thyroid";
$web3="Métodos";    $link3="/thyroid/metodos.php";

$MTtitulo="Visual Lab - Projeto Tireoides - Métodos";
$MTdescripcion="Banco de imagens infravermelha para o Diagnóstico de Nódulos Tireoidianos - Visual Lab UFF";
$MTkeywords="análise de imagens, nódulos tireoidianos, imagens médicas, visual,laboratório,computação gráfica,gráfica,ciência da computação";

require("../comun/top.php");
?>

    <h3>Métodos</h3>
    <p align="justify">
        Os pacientes são abordados durante as consultas de rotina ou de primeira vez dos ambulatórios de Endocrinologia e Cirurgia, onde
        são apresentados ao projeto, feitas devidas explicações e assinado o TCLE. Este trabalho foi conduzido sob a responsabilidade do
        médico Charbel Pereira Damião, e realizado durante o horário de funcionamento dos respectivos atendimentos sem interferência na
        rotina ambulatorial.
    </p>
    <p align="justify">
	Após a inclusão no estudo, todos os pacientes serão avaliados clínica e laboratorialmente, e serão submetidos à realização de
        ultrassonografia de tireoide e termografia. De acordo com a diretriz brasileira, os nódulos que tiverem indicação, são avaliados 
        através de Punção Aspirativa por Agulha Fina. Caso indicado, os pacientes são encaminhados à cirurgia. 
    </p>    
    
    <h4>Avaliação clínica</h4>
    <p align="justify">        
        A avaliação clínica é realizada durante as consultas ambulatoriais. As informações serão coletadas a partir da anamnese
        e de dados do prontuário do paciente em ficha de coleta de dados: sexo, idade, cor, comorbidades, histórico familiar
        de doença tireoidiana, histórico de radiação externa ou ionizante de cabeça e pescoço na infância/adolescência.
    </p>
    
    <h4>Avaliação laboratorial</h4>
    <p align="justify">        
        O sangue do paciente é coletado pelo laboratório de rotina do HUAP, onde são dosados TSH, T4 livre, exames estes que já 
        fazem parte da rotina de investigação de nódulos tireoidianos. Portanto, não haverá custos adicionais para realização dos mesmos.
    </p>    
    
    <h4>Avaliação ultrasonográfica da tireóide</h4>
    <p align="justify">
        Os pacientes são submetidos à ultrassonografia com Doppler da tireoide. O exame é realizado pelo serviço de radiologia do HUAP
        e já faz parte da rotina de investigação de nódulos tireoidianos. Neste exame são avaliadas as características ultrassonográficas 
        do nódulo tireoidiano tais como: ecogenicidade, contornos, presença de halo, microcalficações, presença de linfonodos suspeitos 
        e, ao Doppler, a presença de vascularização intra e/ou extranodal.
    </p>
    
    <h4>Avaliação citopatilógica</h4>
    <p align="justify">
        Os pacientes são submetidos a Punção Aspirativa por Agulha Fina (PAAF) guiada por Ultrassonografia dos nódulos tireoidianos de acordo 
        com o consenso brasileiro. O exame é previamente agendado como de rotina, o que não difere da conduta habitual de investigação de 
        nódulos tireoidianos suspeitos. A coleta do material para o exame é realizada pelo serviço de radiologia do HUAP e posteriormente
        encaminhado ao serviço de patologia do HUAP para devida análise.
    </p>
    
    <h4>Avaliação termográfica</h4>
    <p align="justify">        
        Os pacientes recrutados, após as consultas ambulatoriais, são encaminhados pelo médico Charbel Pereira Damião para a realização da
        termografia da tireoide. O exame é realizado no HUAP, pelos alunos de Pós Graduação em Ciência da Computação do Instituto de Computação da UFF, na
        presença do médico especialista. O exame possui tempo médio de realização de 15 minutos. Após posicionamento adequado do
        paciente, sua temperatura axilar será verificada por meio de um termômetro clínico e imagens térmicas serão capturadas com uma câmera
        termográfica FLIR modelo SC620. A captura dessas imagens não traz qualquer risco ao paciente. O paciente permanecerá em posição sentada, com o pescoço 
        hiperextendido apoiado sobre um suporte fixado na cadeira, em uma sala com ar condicionado, numa distância de 0.6 metro da câmera infravermelha. 
        Após ter o pescoço resfriado por um ventilador até atingir a temperatura necessária para aquisição das imagens, o paciente fica o mais imóvel possível durante 5 minutos,.
        Trata-se de um procedimento indolor, não invasivo, pois o paciente não é tocado nem é exposto a radiações de quaisquer
        naturezas. Não há contraindicação a sua realização, assim como riscos a saúde do paciente.
    </p>
    <p align="justify">
        A obtenção das imagens termográficas tem como objetivo capturar a distribuição de temperaturas sobre a região cervical anterior onde 
        se encontra a tireóide e sua variação com o resfriamento sob ventilação desta região. Essa distribuição de temperaturas é capturada 
        mediante câmera térmica (que as registra como imagens infravermelhas) da marca FLIR modelo SC620 com resolução 640x480 (=307200 pixels)
        na imagem e 0,4 graus Celsius em temperatura. As variações de temperaturas em pessoas saudáveis representam um padrão térmico que
        é simétrico em relação com o eixo de simetria situado no plano médio do corpo humano. Uma modificação desta simetria no mapa em
        diferentes tempos de um mesmo sujeito pode ser um sinal de uma anormalidade. Neste contexto, deve ser adquiridas em um mesmo protocolo
        de aquisição, 20 imagens da região do pescoço onde as mudanças de temperaturas podem ser registradas em um intervalo de tempo.
    </p>
    
<br><br>
<?php require("../comun/end.php");?> 