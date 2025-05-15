<html>
<head>
</head>
<body>
         <center> Welcome to Quiz Program</center>
<?php
        $name = $_GET["username"];
        $rollno = $_GET["rollno"];
                  

      if ($name=="shahid" and $rollno== "252")
          {

                    ?>


                   <form method="GET" action="result.php">
             Q1: What is HTML ?
                     <input type="radio"  name="Q1" value="1" >Hypertext Markup Langauge <br>
                     <input type="radio"  name ="Q1" value="2">extensible Markup Language <br>
                     <input type="radio"  name="Q1" value="3">java Script<br>
                     <input type="radio"  name = "Q1" value="4">cascading Style Sheets<br>
            Q2: What is PHP ?
                     <input type="radio"  name="Q2" value="1" >Hypertext Markup Langauge <br>
                     <input type="radio"  name ="Q2" value="2">Hypertext Preprocessor   <br>
                     <input type="radio"  name="Q2" value="3">java Script <br>
                     <input type="radio"  name = "Q2" value="4">cascading Style Sheets <br>
                    <input type="Submit">



   <?php
             
                         
            }
      else
            {
                    echo  ("Sorry U r not authentic User") ;
             }

      

?> 
   



</body>
</html>                                                                                                                 