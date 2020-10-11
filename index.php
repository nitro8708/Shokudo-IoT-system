
<?php

if(empty($_GET)){

echo  "<script>window.location.href = 'content.php' </script>";

}

else{

// //dedine millisecond
function get_millisecond()  
{  
    list($usec, $sec) = explode(" ", microtime());  
    $msec=round($usec*1000); 
    $msec_zero=str_pad($msec,3,"0",STR_PAD_LEFT); 
    return $msec_zero;  
           
}

$msecond=get_millisecond();

// // get current time stamp

date_default_timezone_set("Asia/Tokyo");
$currenttime=(int)date('YmdHis',time())*1000+$msecond;
$currenthour=(int)date('H',time());

$input=$_GET["input"];
$output=$_GET["output"];

// now, upload 1 all the time as a valid count
if ($input!=0) {
	$file_input = fopen("input.txt","r");
	$input_count = fgets($file_input);
	$input_count+=1;
	echo "current input is: ".$input_count."</br>";
	file_put_contents('input.txt',$input_count);
	fclose($file_input);

}
elseif ($output>1000) {

	if($currenthour==25) // set time interval that no detecting
		$output_count=0;
	else{
		$file_output = fopen("output.txt","r");
		$output_count = fgets($file_output);
		$output_count+=1;
		echo "current output is: ".$output_count."</br>";
		file_put_contents('output.txt',$output_count);
		fclose($file_output);

	}


	//file_put_contents('output.txt',$output);
}

include 'sql_init.php';

echo "current time is:"."</br>".$currenttime."</br>";
//echo $currenthour;
file_put_contents('current_time.txt',$currenttime);

// //insert


$qr="insert into iotdata_02 values($currenttime,$input,$output)";
if (mysqli_query($con,$qr)) {
	echo "data inserted<br>";
}else{
	echo "inserting failed<br>";
}

}



?>
