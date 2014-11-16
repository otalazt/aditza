<?php
if($Aditza=="Aditz laguntzailea"){$denAditza="Izan";} else{$denAditza=$Aditza;}
$id = garbi($Euskalkia)
	.garbi($denAditza)
	.garbi($Modua)
	.garbi($Aldia)
	.garbi($Forma)
	.garbi($nnn[0])
	.garbi($nnn[1])
	.garbi($nnn[2]);
if (isset($mode) && $mode == 'debug'){echo "ID : ".$id;}
?>
<div class="gehi" id="<?php echo $id?>">
	<div id="gehigehi_<?php echo $id?>" class="gehigehi">&nbsp;</div>
	<div id="gehiinput_<?php echo $id?>" class="gehiinput">
	Gehitu<br />
	<span class="ttipi">Euskalkia</span><input 	type="text" value="<?php echo $Euskalkia; ?>" class="editbox gehiinput" id="euskalkia_input_<?php echo $id; ?>" />
	<span class="ttipi">Aditza</span><input 	type="text" value="<?php echo $denAditza; ?>" class="editbox gehiinput" id="aditza_input_<?php echo $id; ?>" />
	<span class="ttipi">Modua</span>	<input 	type="text" value="<?php echo $Modua; ?>" class="editbox gehiinput" id="modua_input_<?php echo $id; ?>" />
	<span class="ttipi">Aldia</span>	<input 	type="text" value="<?php echo $Aldia; ?>" class="editbox gehiinput" id="aldia_input_<?php echo $id; ?>" />
	<span class="ttipi">Forma</span>	<input 	type="text" value="<?php echo $Forma; ?>" class="editbox gehiinput" id="forma_input_<?php echo $id; ?>" />
	<span class="ttipi">Nor</span>	<input 	type="text" value="<?php if(isset($nnn[0]) && $nnn[0]!=''){echo $nnn[0];}else{echo'-';} ?>" class="editbox gehiinput" id="nor_input_<?php echo $id; ?>" />
	<span class="ttipi">Nori</span>	<input 	type="text" value="<?php if(isset($nnn[1]) && $nnn[1]!=''){echo $nnn[1];}else{echo'-';} ?>" class="editbox gehiinput" id="nori_input_<?php echo $id; ?>" />
	<span class="ttipi">Nork</span>	<input 	type="text" value="<?php if(isset($nnn[2]) && $nnn[2]!=''){echo $nnn[2];}else{echo'-';} ?>" class="editbox gehiinput" id="nork_input_<?php echo $id; ?>" />
	<span class="ttipi eztabada">Eztabada</span>	<input 	type="text" value="" class="editbox gehiinput" id="eztabada_input_<?php echo $id; ?>" />
	<span class="ttipi toka">Toka</span>	<input 	type="text" value="" class="editbox gehiinput" id="toka_input_<?php echo $id; ?>" />
	<span class="ttipi noka">Noka</span>	<input 	type="text" value="" class="editbox gehiinput" id="noka_input_<?php echo $id; ?>" />
	<span class="ttipi noka">Xuka</span>	<input 	type="text" value="" class="editbox gehiinput" id="xuka_input_<?php echo $id; ?>" />
	<span class="ttipi noka">Zuka</span>	<input 	type="text" value="" class="editbox gehiinput" id="zuka_input_<?php echo $id; ?>" />
	</div>
	<span id="eztabada_<?php echo $id; ?>" class="text eztabada"></span>
	<span id="toka_<?php echo $id; ?>" class="text toka"></span>
	<span id="noka_<?php echo $id; ?>" class="text noka"></span>
	<span id="xuka_<?php echo $id; ?>" class="text xuka"></span>
	<span id="zuka_<?php echo $id; ?>" class="text zuka"></span>
</div>
