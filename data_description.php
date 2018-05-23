<meta http-equiv="content-type" content="text/html; charset=utf-8">

<?php
$web1="Visual Lab";  $link1="/"; 
$web2="Tireoides";   $link2="/thyroid";
$web3="Banco de dados";    $link3="/thyroid/banco_dados.php?group_display=1";
$web4="Descrição dos dados";    $link4="/thyroid/data_description.php";

$MTtitulo="Visual Lab - Projeto Tireóides - Banco de Imagens";
$MTdescripcion="Banco de imagens infravermelha para o Diagnóstico de Nódulos Tireoidianos - Visual Lab UFF";
$MTkeywords="análise de imagens, nódulos tireoidianos, imagens médicas, visual,laboratório,computação gráfica,gráfica,ciência da computação";

require("../comun/top.php");
?>

<h3>Descrição dos dados</h3>
<br>
<h4>Dados pessoais do paciente</h4>
<br>
<table style="width: 90%">
    <tr><td style="width: 25%">SEXO</td> <td>Sexo do paciente</td></tr> 
    <tr><td>IDADE</td><td>Idade do paciente</td></tr> 
    <tr><td>COR</td><td>Cor da pele: branco, preta, parda, amarelo ou indígena</td></tr>
    <tr><td>ANTECEDENTE FAMILIAR</td><td>Existência de familiares com desordens de tireoide, classificados em hipotireoidismo, hipertireoidismo, câncer de tireoide, ou não tem histórico familiar </td></tr>
    <tr><td>ANTECEDENTE RADIAÇÃO</td><td>Exposição do paciente a radiações anteriormente, principalmente na região do pescoço</td></tr>
    <tr><td>COMORBIDADES</td><td>Presença ou associação de duas ou mais doenças no paciente, como hipertensão arterial sistêmica (HAS), diabetes mellitus Tipo 2 (DM2), fibrilação atrial (FA) crônica, vírus da hepatite C (HCV), câncer de mama, doença inflamatória da pele (psoríase), pan-hipopituitarismo, hipotireoidismo, dislipidemia, pré diabetes, osteoporose, obesidade, acromegalia, mieloma múltiplo, glaucoma, anemia, depressão, entre outras</td></tr>
    <tr><td>MEDICAÇÕES EM USO</td><td>Medicamentos consumidos atualmente pelo paciente</td></tr>
    <tr><td>TABAGISMO</td><td>Disposisão ao consumo de tabaco (sim ou não)</td></tr>  
</table>

<br>
<h4>Dados clínicos do paciente</h4>
<br>
<table style="width: 90%">
    <tr><td style="width: 25%">TSH</td><td>Resultado do exame clínico para medir os níveis do TSH (hormônio estimulante da tireoide) em sangue</td></tr>
    <tr><td>T4 LIVRE</td><td>T4 livre (tiroxina livre circulante no sangue). Resultado do exame que determina a quantidade do T4 livre no sangue</td></tr>
    <tr><td>ANTI-TPO</td><td>Resultado do exame de sangue para detetar a presença do anticorpo antitireoidiano Anti-TPO. Relacionado com a enzima tireoperoxidase (TPO)</td></tr>
    <tr><td>ANTI-TG</td><td>Rsultado do exame de quantificação do anticorpo antitireoglobulina quando o paciente apresenta sintomas de distúrbios da tireóides</td></tr>
    <tr><td>CALCITONINA</td><td>Rsultado do exame de calcitonina, que é usado principalmente para auxiliar no diagnóstico da hiperplasia de células-C e carcinoma medular de tireoide</td></tr>    
</table>

<br>
<h4>Dados sobre os nódulos</h4>
<br>
<table style="width: 90%">
    <tr><td style="width: 25%">NÚMERO DE NÓDULOS</td><td>Quantidade de nódulos na região da tireoide identificados no paciente</td></tr>
    <tr><td>LOCALIZAÇÃO</td><td>Localização de cada nódulo</td></tr>
    <tr><td>TAMANHO</td><td>Tamanho de cada nódulo, em centímetros</td></tr>
    <tr><td>ECOGENICIDADE</td><td>Medida para descrever o quanto que um tecido, órgão ou líquido deixa passar ou reflete as ondas sonoras do ultrassom (US), comparado com tecidos e órgãos próximos</td></tr>
    <tr><td>MICROCALCIFICAÇÃO</td><td>Presença de microcalcificações ou não</td></tr>
    <tr><td>HALO COMPLETO</td><td>Observação ultassonográfica do halo do nódulo. A ausência de halo ou halo incompleto é uma das características ultrassonográficas que aumentam a probabilidade de câncer em nódulo de tiróide</td></tr>
    <tr><td>CONTORNO REGULAR</td><td>Tipo de contorno observado na ultrossonografia do nódulo. O contorno irregular pode ser indicador de malignidade</td></tr>
    <tr><td>COMPONENTE CÍSTICO</td><td>Indica a presença de líquido dentro do nódulo ou não </td></tr>
    <tr><td>HETEROGÊNEO</td><td>Descreve o contorno e a superfície do nódulo se é heterogênea ou não</td></tr>
    <tr><td>PRESENÇA DE LINFONODO</td><td>Presença ou ausência de linfonodos</td></tr>
    <tr><td>CHAMMAS</td><td>Método diagnóstico realizado no estudo ultrassonográfico Doppler, para nódulos na tireoide, de acordo com o padrão de vascularização do nódulo em relação ao seu entorno </td></tr>
    <tr><td>BETHESDA</td><td> Classificação do resultado da biopsia de I (1-4% malignidade) até VI (97-99% malignidade), baseado no risco de malignidade achado na amostra de células extraídas </td></tr>
    
    <tr><td> </td><td> </td></tr>
</table>
<br>
<h4>Dados sobre os nódulos</h4>
<br>
<table style="width: 90%">
    <tr><td style="width: 25%">CIRURGIA</td><td>Se o paciente foi indicado para cirugia </td></tr>
    <tr><td>RESULTADO DA CIRURGIA</td><td>Resultado</td></tr>
    <tr><td>TEMPERATURA</td><td>Temperatura corporal do paciente na hora do exame termográfico</td></tr>
</table>

<br><br>
<?php require("../comun/end.php");?> 