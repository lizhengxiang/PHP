<?php
function TdBackColor() {
	static $ColorStr;
	if ($ColorStr=="808080"){ 
		$ColorStr="c0c0c0"; 
	}else{ 
		$ColorStr="808080"; 
	}
	return($ColorStr);
}
echo "<table border=1>\n";
for ($i=0; $i<10; $i++){
	$ColorStr=TdBackColor();
	echo "<tr><td bgcolor=".$ColorStr.">这是第".$i."行</td></tr>\n";
}
echo "</table>";
?>
