<?
$IDCode = $_REQUEST['city'];

header("content-type: text/html; charset=utf-8");

if($IDCode === "1"){
    echo "<img src='image/prize.jpg' height='300' align = 'left' hspace = '10'>";
    }
else{
echo "<h1>не тот("; }
?>