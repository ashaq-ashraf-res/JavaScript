<html>
<head>
</head>
<body>

    <?php


//  Array  -> String Display 
// String -> Array Operation

$data = "Apple,Banana,Orange,Grapes";
$t = explode(",",$data);
echo $t[0];
$a =["Saika","Irfan","Shahid","Majahir","Owaise","Suhab","Yawar","Madiha","Zainab"];

for($i =0;$i<9;$i++)
 {
    echo "<br>  ". $i +1  .$a[$i];
 }


echo "<br> Use of Foreach";
foreach($a as $x)
{

echo "<br>".$x;

}

echo "<br> Use of Foreach";
foreach($a  as $x =>$i)
{
   echo "<br> ". $x." --  ".$i;
}

$s = implode("*",$a);

echo "<b>  ". $s

?>
</body>
</html>