<html>
<head>
</head>

<body>

<style>
.item{
height:40px;
line-height:40px;
margin:1px;
padding:5px;
width:500px; background-color:#33BCF3;
border-radius:20px;
color:#FFF;
font-weight:bold;
}
</style>


<?php
function replaceSpace($string) // PHP ile birden fazla boþluðu silmek
{
   $string = preg_replace("/\s+/", " ", $string);
   $string = trim($string);
   return $string;
}
?>


<?php 
$command = "python /usr/lib/cgi-bin/test.py";
$temp = exec($command, $output);
var_dump($output);

/*
import time
print (time.strftime("%d/%m/%y %H:%M:%S"))
print "hello world !"
*/

$command1 = "python /usr/lib/cgi-bin/multi-param.py 1 2 3";
$temp1 = exec($command1, $output1);
var_dump($output1);

/*

import sys
print (sys.argv[1])
print (sys.argv[2])
print (sys.argv[3])

*/




/*
$command = "netstat -tlnp";
$temp = exec($command, $output);
var_dump($output);
*/





$command9 = "cat /sys/class/thermal/thermal_zone0/temp";
$temp9 = system($command9, $output9);
var_dump($output9);


$commanda = "route";
$tempa = exec($commanda, $outputa);
var_dump($outputa);

$commandaa = "lsusb";
$tempaa = exec($commandaa, $outputaa);
var_dump($outputaa);

echo "<br>";

$commandaaa = "lsmod";
$tempaaa = exec($commandaaa, $outputaaa);
var_dump($outputaa);


$command91 = "cat /proc/asound/cards";
$temp91 = system($command91, $output91);
var_dump($output91);

$command92 = "cat /proc/asound/modules";
$temp92 = system($command92, $output92);
var_dump($output92);

$command93 = "cat /proc/asound/pcm";
$temp93 = system($command93, $output93);
var_dump($output93);

?>




<?php
$command5 = "df -h";
$temp5 = exec($command5, $output5);
$sa = $output5;

for($i=0; $i<count($sa); $i++){
	if(strstr($sa[$i],"/dev/sda")){
	  	//echo $sa[$i]."<br>";
		//echo strlen($sa[$i]);
		echo '<div class="item">'.replaceSpace($sa[$i]).' (Hard Drive) '.'</div>';
	}
	if(strstr($sa[$i],"none")){
		echo '<div class="item">'.replaceSpace($sa[$i]).' (Sd Card) '.'</div>';
	}
}
?>







<?php
$devicename = exec("hostname"); //cihazýn adýný verir.
$hostdir = exec("pwd"); // bulunulan dizini verir.
$devicedate = exec("date"); // cihazýn tarihi
//$systemname = system("cat /etc/issue");



echo $devicename;
echo "<br>";
echo $devicedate;
echo "<br>";
echo $hostdir;
echo "<br>";



echo "<br>";
echo "<br>";
echo system("free -m");
echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";

echo system("lsb_release -a");
echo "<br>";

echo system("w");
echo "<br>";

echo system("df");
echo "<br>";

echo system("uptime");
echo "<br>";

//echo system("cal"); //takvim üzerindeki gün


//echo exec("uname"); // Linux yazar

echo exec("lspci"); // hardware detail

//df -lh  - fdisk -l



$sa = system("ls -a"); // yetkili olabildiði klasörler

$sa = explode("\n \l",$sa);
foreach($sa as $item){
 echo $item;
}


echo system("cat /proc/cpuinfo");
echo "<br>";



echo "<br>";
echo system("ls -l"); //
echo "<br>";

echo "<br>";


echo system("less /etc/group");

echo "<br>";
echo "<br>";
echo "<br>";
echo system("ifconfig"); // windowsdaki ipconfig ile aynýdýr.
echo "<br>";
echo system("lshw"); // Raspberry Pi hakkýnda bilgiler verir.
echo "<br>";
echo system("ls /dev/usb/*"); // Raspberry Pi hakkýnda bilgiler verir.
echo "<br>";
echo system("df -h"); // Raspberry Pi üzerindeki depolama birimleri hakkýnda bilgi verir.













?>
</body>

</html>