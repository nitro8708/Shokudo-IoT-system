
<?php


if(empty($_GET)){

echo  "<script>window.location.href = 'content.php' </script>";

}

else{

$input=$_GET["input"];
$output=$_GET["output"];

file_put_contents('input.txt',$input);
file_put_contents('output.txt',$output);

}

?>

