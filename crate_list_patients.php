<?php
	function is_sub_str($greath,$litle){
		for($i=0;$i<strlen($litle);$i++){
			if(isset($greath[$i])&& isset($litle[$i]) && $greath[$i]!=$litle[$i])
				return false;
		}
		return true;
	}

	function get_date_form_folder_name($name){
		$date=explode('-',$name);
		return array('yy'=>$date[0],'mm'=>$date[1],'dd'=>$date[2],'pp'=>$date[3]);
	}

	function get_personal_datas_from_one_record($actual_nodule){
		$personal_datas=(object) array(
			'nome'=>$actual_nodule[1],
			'prontuario'=>$actual_nodule[2],
			'sexo'=>$actual_nodule[3],
			'idade'=>$actual_nodule[4],
			'nascimento'=>$actual_nodule[5],
			'cor'=>$actual_nodule[6],
			'telefone'=>$actual_nodule[7],
			'profissao'=>$actual_nodule[8],
			'anos_de_estudo'=>$actual_nodule[9],
			'escolaridade'=>$actual_nodule[10],
			'naturalidade'=>$actual_nodule[11],
			'antecedente_doenca_tireodiana'=>$actual_nodule[12],
			'antedente_radiacao'=>$actual_nodule[13],
			'comorbidades'=>$actual_nodule[14],
			'medicacoes_em_uso'=>$actual_nodule[15],
			'tabagismo'=>$actual_nodule[16],
			'tsh'=>$actual_nodule[17],
			't4_livre'=>$actual_nodule[18],
			'anti_tpo'=>$actual_nodule[19],
			'anti_tg'=>$actual_nodule[20],
			'calcitonina'=>$actual_nodule[21],
			'numero_de_nodulos'=>$actual_nodule[22],
			'cirurgia'=>$actual_nodule[34],
			'resultado_da_cirugia'=>$actual_nodule[35],
			'temperatura'=>$actual_nodule[36],
		);
		return $personal_datas;
	}

	function get_nodule_datas($actual_nodule){
		$nodule_datas=(object) array(
			'identificacao'=>$actual_nodule[0],
			'localizacao'=>$actual_nodule[23],
			'tamanho'=>$actual_nodule[24],
			'ecogenicidade'=>$actual_nodule[25],
			'microcalcificacao'=>$actual_nodule[26],
			'halo_completo'=>$actual_nodule[27],
			'contorno_regular'=>$actual_nodule[28],
			'componente_cistico'=>$actual_nodule[29],
			'heterogeneo'=>$actual_nodule[30],
			'presenca_de_linfondo'=>$actual_nodule[31],
			'chammas'=>$actual_nodule[32],
			'bethesda'=>$actual_nodule[33]
		);
		return $nodule_datas;
	}


	function create_patients_list($file_datas,$directoy_path,$separator){                
		$all_nodules = file($file_datas);  $num_nodules=count($all_nodules);
		$all_folders=scandir($directoy_path); $num_folders=count($all_folders);
		$patients=array();
		for($i=2;$i<$num_folders;$i++){ //para cada carpeta voy a formar un paciente que puede tener varios nodulos
			$patient=(object)array('folder_name'=>'','test_date'=>'','nodule_base_name'=>'','nodules'=>'','num_nodules'=>'','personal_datas'=>'');
			$patient->folder_name=$all_folders[$i];
			$patient->test_date=get_date_form_folder_name($all_folders[$i]);
			$patient->nodule_base_name=$patient->test_date['dd'].$patient->test_date['mm'].$patient->test_date['yy'].'-'.$patient->test_date['pp'];

			$patient->nodules=array();
			$patient->num_nodules=0;
                        
			for($j=0;$j<$num_nodules;$j++){ //buscar cuantos nodulos tienen ese nombre de carpeta
				$actual_nodule=explode($separator,$all_nodules[$j]);
				if(is_sub_str($actual_nodule[0],$patient->nodule_base_name)||strpos($actual_nodule[0],$patient->nodule_base_name)){
					if($patient->num_nodules==0){
						$patient->personal_datas=get_personal_datas_from_one_record($actual_nodule);
					}
					$patient->nodules[$patient->num_nodules]=get_nodule_datas($actual_nodule);
					$patient->num_nodules++;
				}
			}                
			$patients[$i-2]=$patient;
		}
		$GLOBALS['patients']=$patients;
	}
           
        function display_patients($group_display,$amount_per_group){
            $SEXO=array(0=>'FEMININO',1=>'MASCULINO');
            $PELE=array(0=>'BRANCO',1=>'NEGRO',2=>'MORENO');
			$significado_numerico=array(0=>'NÃO',1=>'SIM');
			$ANTECEDENTE_FAMILIAR=array(0=>'HIPOTIREOIDISMO',1=>'HIPERTIREOIDISMO',2=>'CÂNCER DE TIREOIDE',3=>'NÃO','0/2'=>'HIPOTIREOIDISMO E CÂNCER DE TIREOIDE');
            $HALO=array(0=>'AUSÊNCIA',1=>'INCOMPLETO',2=>'COMPLETO');
			$CHAMMAS=array(1=>'I',2=>'II',3=>'III',4=>'IV',5=>'V');
			$BETHESDA=array(1=>'I',2=>'II',3=>'III',4=>'IV',5=>'V',6=>'VI','AGUARDA'=>'AGUARDA RESULTADO','2(CHECAR NOVA PAAF)'=>'2(CHECAR NOVA PAAF)');
			
            $inf=($group_display-1)*$amount_per_group;
            $sup=($group_display)*$amount_per_group;
            $N=count($GLOBALS['patients']);
			
			
			
			
            
            for($index=$inf;$index<$sup; $index++){
                if($index<$N){
                    $image_path='banco/Originals/'.$GLOBALS['patients'][$index]->folder_name;
                    $image_path=$image_path.'/'.scandir($image_path)[2];                    
                    echo '<tr id="" style="">';
						echo '
							<td style="max-width:200px; text-align:justify; padding:10px"><br>
								<p >';
									
									echo
									'
										<b>ID:</b> '.$GLOBALS['patients'][$index]->test_date['yy'].'-'.$GLOBALS['patients'][$index]->test_date['mm'].'-'.$GLOBALS['patients'][$index]->test_date['dd'].'-'.$GLOBALS['patients'][$index]->test_date['pp'].'<br>
										<br>
										<a href="/thyroid/patient.php?name_dir='.$GLOBALS['patients'][$index]->folder_name.'&id='.$GLOBALS['patients'][$index]->personal_datas->prontuario.'&colors=1"><img id="'.$GLOBALS['patients'][$index]->folder_name.'" title="Click para acessar" width="96%" src="'.$image_path.'"/></a><br><br><br>
										
										<!--<b>PRONTUÁRIO:</b> '.$GLOBALS['patients'][$index]->personal_datas->prontuario.'<br>-->
										<b>SEXO:</b> '.$SEXO[$GLOBALS['patients'][$index]->personal_datas->sexo].'<br>
										<b>IDADE:</b> '.$GLOBALS['patients'][$index]->personal_datas->idade.' anos<br>
										<b>RAÇA:</b> '.$PELE[$GLOBALS['patients'][$index]->personal_datas->cor].'<br><br>
										';
										
									if(file_exists('banco/GrowingRegionBW/'.$GLOBALS['patients'][$index]->folder_name))
										echo '<b style="color:red"> *  Disponível <br>Groud-truth e Segmentação<br><br></b>';											
										
									echo '
								</p>
							</td>';

						echo '
							<td style="max-width:300px; text-align:justify; padding:10px"><br>
								<p >
									<b>TABAGISMO:</b> '.$significado_numerico[$GLOBALS['patients'][$index]->personal_datas->tabagismo].'<br><br>
									<b>ANTECEDENTE FAMILIAR:</b> '.$ANTECEDENTE_FAMILIAR[$GLOBALS['patients'][$index]->personal_datas->antecedente_doenca_tireodiana].'<br>
									<b>ANTECEDENTE RADIAÇÃO:</b> '.$significado_numerico[$GLOBALS['patients'][$index]->personal_datas->antedente_radiacao].'<br><br>
									<b>COMORBIDADES:</b> '.$GLOBALS['patients'][$index]->personal_datas->comorbidades.'<br>
									<b>MEDICAÇÕES EM USO:</b> '.$GLOBALS['patients'][$index]->personal_datas->medicacoes_em_uso.'<br><br>
										
									<b>TSH:</b> '.$GLOBALS['patients'][$index]->personal_datas->tsh.'<br>
									<b>T4 LIVRE:</b> '.$GLOBALS['patients'][$index]->personal_datas->t4_livre.'<br>
									<b>ANTI-TPO:</b> '.$GLOBALS['patients'][$index]->personal_datas->anti_tpo.'<br>
									<b>ANTI-TG:</b> '.$GLOBALS['patients'][$index]->personal_datas->anti_tg.'<br>
									<b>CALCITONINA:</b> '.$GLOBALS['patients'][$index]->personal_datas->calcitonina.'<br><br>
									
									<b>TEMPERATURA CORPORAL:</b> '.$GLOBALS['patients'][$index]->personal_datas->temperatura.' <sup>o</sup>C<br>
								</p>    
							</td>';
						
						echo ' <td style="max-width:300px; text-align:justify; padding:10px"><br><p>';
									for($i=0;$i<$GLOBALS['patients'][$index]->num_nodules;$i++){
										echo
											'<b>Nódulo '.($i+1).'</b><hr>
											<b>IDENTIFICAÇÃO:</b> '.$GLOBALS['patients'][$index]->nodules[$i]->identificacao.'<br>
											<b>LOCALIZAÇÃO:</b> '.$GLOBALS['patients'][$index]->nodules[$i]->localizacao.'<br>
											<b>TAMANHO:</b> '.$GLOBALS['patients'][$index]->nodules[$i]->tamanho.'<br>
											<b>ECOGENICIDADE:</b> '.$GLOBALS['patients'][$index]->nodules[$i]->ecogenicidade.'<br>
											<b>MICROCALCIFICAÇÃO:</b> '.$significado_numerico[$GLOBALS['patients'][$index]->nodules[$i]->microcalcificacao].'<br>
											<b>HALO:</b> '.$HALO[$GLOBALS['patients'][$index]->nodules[$i]->halo_completo].'<br>                                        
											<b>CONTORNO REGULAR:</b> '.$significado_numerico[$GLOBALS['patients'][$index]->nodules[$i]->contorno_regular].'<br>
											<b>COMPONENTE CISTICO:</b> '.$significado_numerico[$GLOBALS['patients'][$index]->nodules[$i]->componente_cistico].'<br>
											<b>PRESENÇA DE LINFONODO:</b> '.$significado_numerico[$GLOBALS['patients'][$index]->nodules[$i]->presenca_de_linfondo].'<br>
											<b>CHAMMAS:</b> '.$CHAMMAS[$GLOBALS['patients'][$index]->nodules[$i]->chammas].'<br>                                        
											<b>BETHESDA:</b> '.$BETHESDA[$GLOBALS['patients'][$index]->nodules[$i]->bethesda].'<br>                                                                                
											<br><br>
											';
									}
						echo    '</p></td>';
                              
                    echo '</tr>';            
                }
            }           
            
        }
?>