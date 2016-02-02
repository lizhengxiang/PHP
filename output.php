<?php
$sales = array(
	array('Norr1','2015-01-01'),
	array('Norr2','2015-01-01'),
	array('Norr3','2015-01-01'),
	array('Norr4','2015-01-01')
);
$fh = fopen('php://output','w');
foreach($sales as $sales_line){
	if(fputcsv($fh,$sales_line) == false){
		//die输出当前前脚本并推出程序
		die("can write csv line");
	}
}
fclose($fh) or die('con\'t close salse.csv');

