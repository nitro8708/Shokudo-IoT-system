
<?php

if(empty($_GET)){

echo  "<script>window.location.href = 'content.php' </script>";

}

else{

$input=$_GET["input"];
$output=$_GET["output"];

if ($input!=0) {
	file_put_contents('input.txt',$input);

}
elseif ($output!=0) {
	file_put_contents('output.txt',$output);
}

include 'sql_init.php';

function get_millisecond()  
{  
    list($usec, $sec) = explode(" ", microtime());  
    $msec=round($usec*1000); 
    $msec_zero=str_pad($msec,3,"0",STR_PAD_LEFT); 
    return $msec_zero;  
           
}

$msecond=get_millisecond();
date_default_timezone_set("Asia/Tokyo");
$currenttime=(int)date('YmdHis',time())*1000+$msecond;
echo "current time is:"."</br>".$currenttime."</br>";
file_put_contents('current_time.txt',$currenttime);

$qr="insert into iotdata_02 values($currenttime,$input,$output)";
if (mysqli_query($con,$qr)) {
	echo "data inserted<br>";
}else{
	echo "inserting failed<br>";
}

}


?>
