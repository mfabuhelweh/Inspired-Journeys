<?php 

if (($_SERVER["REQUEST_METHOD"] == "POST")) {  
$username=$_POST['name'];
$password=$_POST['pass'];
$data=$_POST['pass'];}
define("age",32,FALSE);

echo("oljfansfd"." 22fsdsdfsdf");
echo"<br> asd"."44";
print("<br>عمرك هو: ".age); 
echo $_SERVER['PHP_SELF'];
echo $_SERVER['REQUEST_METHOD'];
echo"<br>"."<br>"; 
print $_POST['slct'][0];
$getslct=$_POST['slct'];
$arr=array(2,3,5,6,7,8,10);
echo('<br>slected is  '.$getslct[0]."<br>".$getslct[1]);
echo("<pre>




</pre>");

for($X=0;$X<count($arr);$X++){
    $arr[$X]+=2;
}
echo("".$arr[5]);
$arr=array(2,3,5,6,7,8,10);
foreach($arr as  $i ){$i+=2;}
echo("".$arr[5]);
$arrass=array("a"=> 1,"b"=>2,"c"=>5,"d"=>7);
echo"<br>";
echo$arrass['a'];



?>