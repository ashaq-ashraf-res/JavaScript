<html>
<head>
</head>
<body>
         <center> Welcome to Quiz Program</center>
<?php
        $mcq1 = $_GET["Q1"];
        $mcq2 = $_GET["Q2"];
        $result= 0;
        if ($mcq1=="1")
               { 
                   $result= 1;
                }
        if($mcq2=="2")
             {
                $result=$result +1;
              }

       echo "Your Score <b>".$result;
     
   
                  

    ?>  

</body>
</html>                                                                                                                 