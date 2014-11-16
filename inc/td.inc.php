<?php $galdera = 'select Giltza, Eztabada, Toka, Noka, Xuka, Zuka from '.$basea.' 
					WHERE Euskalkia LIKE "'.$Euskalkia.'"
					AND Modua LIKE "'.$Modua.'"
					AND Aldia LIKE "'.$Aldia.'"
					AND Forma LIKE "'.$Forma.'"';
		if($Aditza=="Aditz laguntzailea")
				{$galdera = $galdera.' AND (Aditza LIKE "*Edin" or Aditza="*Edun" or Aditza="*Ezan" or Aditza="Izan")';}
				else {$galdera = $galdera.' AND Aditza LIKE  "'.$Aditza.'"';}
		if(($nnn[0]!="" )&&($nnn[0]!="-")){$galdera = $galdera.' AND Nor LIKE "'.$nnn[0].'"';}
		if(($nnn[1]!="" )&&($nnn[1]!="-")){$galdera = $galdera.' AND Nori LIKE "'.$nnn[1].'"';}
		if(($nnn[2]!="" )&&($nnn[2]!="-")){$galdera = $galdera.' AND Nork LIKE "'.$nnn[2].'"';}
		if (isset($mode) && $mode == 'debug'){
			echo $nnn[0]."<br /.>";	
			echo $nnn[1]."<br /.>";
			echo $nnn[2]."<br /.>";
			echo $galdera."<br /.>";
		}

			$sql= mysql_query($galdera);
			while($row=mysql_fetch_array($sql)){
					$id=$row['Giltza'];
					$Eztabada=$row['Eztabada'];
					$Toka=$row['Toka'];
					$Noka=$row['Noka'];
					$Xuka=$row['Xuka'];
					$Zuka=$row['Zuka'];
				echo '<span class="edit_span" id="'.$id.'">';
				if(!empty($Eztabada)) {
					echo '<span class="text spannagusia eztabada" id="eztabada_'.$id.'">'.$Eztabada.'</span>';
				}
				echo '<input type="text" value="'.$Eztabada.'" class="editbox" id="eztabada_input_'.$id.'" />';
				if(!empty($Toka)) {
					echo '<span class="text spannagusia toka">
						<span id="toka_'.$id.'" class="text textToka '.$Toka.'">'.$Toka.'</span>
						</span>';
					}
					echo '<span class="textLeg" id="LegToka_'.$id.'">toka: </span>';
					echo '<input type="text" value="'.$Toka.'" class="editbox toka" id="toka_input_'.$id.'" />';
				if(!empty($Noka)) {
					echo '<span class="text spannagusia noka">
						<span id="noka_'.$id.'" class="text textNoka '.$Noka.'">'.$Noka.'</span>
						</span>';
					}
					echo '<span class="textLeg" id="LegNoka_'.$id.'">noka: </span>';
					echo '<input type="text" value="'.$Noka.'" class="editbox noka" id="noka_input_'.$id.'" />';
				if(!empty($Xuka)) {
					echo '<span class="text spannagusia xuka">
						<span id="xuka_'.$id.'" class="text textXuka '.$Xuka.'">'.$Xuka.'</span>
						</span>';
					}
					echo '<span class="textLeg" id="LegXuka_'.$id.'">xuka: </span>';
					echo '<input type="text" value="'.$Xuka.'" class="editbox xuka" id="xuka_input_'.$id.'" />';
				if(!empty($Zuka)){
					echo '<span class="text spannagusia zuka">
						<span id="zuka_'.$id.'" class="text textZuka '.$Zuka.'">'.$Zuka.'</span>
						</span>';
					}
					echo '<span class="textLeg" id="LegZuka_'.$id.'">zuka: </span>';
					echo '<input type="text" value="'.$Zuka.'" class="editbox zuka" id="zuka_input_'.$id.'" />';
				if (isset($edit) && $edit == 'bai'){
					echo '<div class="delete" id="delete_'.$id.'">
						<span class="infoID" id="info_'.$id.'">'.$id.'</span>&nbsp;</div>';
					}
				echo '</span>';
			}
				if (isset($edit) && $edit == 'bai'){include('tdadd.inc.php');}
?>
