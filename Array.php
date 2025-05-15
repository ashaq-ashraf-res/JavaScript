<html>
<head>
</head>
<body>
    Creating An Array

<?php
                   
  $course[0] = "English";
  $course[1] = " CSS" ;
  $course[2] = " PHP";


echo("<br>My Course one is ". $course[0]);
echo("<br>My Course Two is ". $course[1]);
echo("<br>My Course Three is ". $course[2]);

echo("<br> Updated Array");
$course[0]= "HTML";

echo("<br>My Course one is ". $course[0]);
echo("<br>My Course Two is ". $course[1]);
echo("<br>My Course Three is ". $course[2]);



echo("<br> Display Array with loop");
$i = 0;
for($i=0;$i<3;$i++)
{
    echo("<br> My Course ".$i."   ".$course[$i]);
}

echo " <br>Use of Foreach loop";
$marks["nadeem"] = 25;
$marks["Owais"] =24;
$marks["Kaisar"] =50;

echo "<br>".$marks["nadeem"];


foreach($marks as $x)
{
       echo("<br> ".$x);
}

echo " <br> Print Key as well as value using forech";

foreach($marks as $u=>$v)
{
     echo  "<br>".$u."-----".$v;
} 
 
echo "<br> use print_r to print array elements" ;
print_r($course);
print_r($marks);

$students =array("Shahid","Junaid","Kaisar");

foreach($students as $x)

{
   echo "<br>". $x;
}           


print_r($students);

$fruits  = array(1=>"Apple",5=>"Banana",9=>"Pear",10=>"Orange");
echo "<br>";
$fruits[1] = " ";
print_r($fruits);
unset($fruits[3]);
print_r($fruits);
$fruits[]="Grapes";

print_r($fruits);

$data = range(1,10);
echo "<br>";
print_r($data);


?>
</body>
</html>