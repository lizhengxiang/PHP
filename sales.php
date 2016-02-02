<?php
$sales = array(
	array('Norr1','2015-01-01'),
	array('Norr2','2015-01-01'),
	array('Norr3','2015-01-01'),
	array('Norr4','2015-01-01')
);
$fh = fopen('salse.csv','w')or die("can not open salse.csv");
foreach($sales as $sales_line){
	if(fputcsv($fh,$sales_line) == false){
		die("can write csv line");
	}
}
fclose($fh) or die('con\'t close salse.csv');

