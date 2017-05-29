<?php
if($_GET['islem']=="ac"){

$command1 = "python /usr/lib/cgi-bin/multi-param.py 1 2 3";
$temp1 = exec($command1, $output1);
var_dump($output1);

}
if($_GET['islem']=="kapat"){

$command1 = "python /usr/lib/cgi-bin/multi-param.py 1 2 9";
$temp1 = exec($command1, $output1);
var_dump($output1);
echo $output1[0];

}
?>